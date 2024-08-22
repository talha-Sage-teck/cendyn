<?php

use Api\V8\Param;
use Api\V8\Factory\ParamsMiddlewareFactory;
use Psr\Container\ContainerInterface as Container;
use Api\V8\BeanDecorator\BeanManager;
use Api\V8\JsonApi\Repository\Filter as FilterRepository;
use Api\V8\JsonApi\Repository\Sort as SortRepository;

$paramsMiddlewareFactory = $app->getContainer()->get(ParamsMiddlewareFactory::class);

 
// Define routes for processing data into different tables
$app->post('/recordlist/cb2b_production_summary_data', function ($request, $response) {
    $parseddata = $request->getParsedBody();  // Parse the JSON input data
    return processdata('cb2b_production_summary_data', $parseddata, $response);  // Process the data for 'cb2b_production_summary_data' table
});

$app->post('/recordlist/cb2b_pmsprofiles', function ($request, $response) {
    $parseddata = $request->getParsedBody();  // Parse the JSON input data
    return processdata('cb2b_pmsprofiles', $parseddata, $response);  // Process the data for 'cb2b_pmsprofiles' table
});

$app->post('/recordlist/cb2b_hotels', function ($request, $response) {
    $parseddata = $request->getParsedBody();  // Parse the JSON input data
    return processdata('cb2b_hotels', $parseddata, $response);  // Process the data for 'cb2b_hotels' table
});


// Function to process the input data and handle batch insertion into the database
function processdata($table, $parseddata, $response)
{
    // Check if the parsed body is null or doesn't contain a 'data' array
    if (is_null($parseddata) || !isset($parseddata['data']) || !is_array($parseddata['data'])) {
        return $response->withJson(['error' => 'Invalid input data format. Ensure the data is in JSON format and includes a data array.'], 400);
    }

    // Arrays to hold success and error information
    $errors = [];
    $successRecords = [];
    $failedRecords = [];

    // Define the batch size for processing
    $batchSize = 1000;
    $batchdata = [];

    // Loop through each data entry
    foreach ($parseddata['data'] as $index => $data) {
        // Validate the required 'id' field in each entry
        if (empty($data['id'])) {
            $errors[] = "data at index $index is missing the required ID field.";  // Log the error
            $failedRecords[] = $data;  // Add the failed record to the array
            continue;  // Skip this data and move to the next one
        }

        // Add valid data to the batch
        $batchdata[] = $data;

        // Process the batch when the batch size is reached
        if (count($batchdata) === $batchSize) {
            if (!processBatch($table, $batchdata, $errors, $successRecords, $failedRecords)) {
                break;  // Stop processing if a batch fails
            }
            $batchdata = [];  // Clear the batch data after processing
        }
    }

    // Process any remaining data in the last batch
    if (!empty($batchdata)) {
        processBatch($table, $batchdata, $errors, $successRecords, $failedRecords);
    }

    // Return the response with success and error details
    return $response->withJson([
        'successfullData' => [
            'success_count' => count($successRecords),
            'records' => $successRecords
        ],
        'failedData' => [
            'fail_count' => count($failedRecords),
            'errors' => $errors,
            'records' => $failedRecords
        ]
    ], !empty($errors) ? 400 : 201);
}


// Function to process a batch of data and insert it into the database
function processBatch($table, $batchdata, &$errors, &$successRecords, $failedRecords)
{
    try {
        // Retrieve the list of columns from the specified table
        $columnsQuery = "SHOW COLUMNS FROM $table";
        $columnsResult = $GLOBALS['db']->query($columnsQuery);

        // Throw an exception if the columns cannot be retrieved
        if ($columnsResult === false) {
            throw new \Exception('Failed to retrieve columns');
        }

        // Store the column names in an array
        $columns = [];
        while ($row = $columnsResult->fetch_assoc()) {
            $columns[] = $row['Field'];
        }

        // Prepare the column list and initialize other SQL components
        $columns_list = implode(', ', $columns);
        $values_list = [];
        $update_list = implode(', ', array_map(fn($col) => "$col = VALUES($col)", $columns));

        // Build the values list for the SQL query
        foreach ($batchdata as $data) {
            $data_values = [];
            foreach ($columns as $col) {

                // Handle different data types and quote them accordingly
                if (isset($data[$col])) {
                    $value = $data[$col];
                    if (is_null($value)) {
                        $data_values[] = 'NULL';
                    } elseif (is_string($value)) {
                        $data_values[] = "'" . $value . "'";
                    } elseif (is_numeric($value)) {
                        $data_values[] = $value;
                    } else {
                        $data_values[] = 'NULL';  // Default to NULL for unexpected types
                    }
                } else {
                    $data_values[] = 'NULL';  // Handle missing columns
                }
            }
            $values_list[] = '(' . implode(', ', $data_values) . ')';  // Add the formatted values to the list
        }

        // Construct the final SQL query for batch insertion with ON DUPLICATE KEY UPDATE
        $sql = "
            INSERT INTO $table ($columns_list) 
            VALUES " . implode(', ', $values_list) . " 
            ON DUPLICATE KEY UPDATE $update_list
        ";

        // Execute the batch query
        $result = $GLOBALS['db']->query($sql);

        // Throw an exception if the query fails
        if ($result === false) {
            throw new \Exception('Batch query execution failed');
        }

        // Record the successful batch
        $successRecords = array_merge($successRecords, $batchdata);

        return true;
    } catch (\Exception $e) {
        // Handle any errors during batch processing
        $errorMessage = $e->getMessage();
        foreach ($batchdata as $record) {
            $errors[] = [
                'record' => $record,
                'error' => $errorMessage
            ];
        }
        return false;  // Return false to indicate failure
    }
}
