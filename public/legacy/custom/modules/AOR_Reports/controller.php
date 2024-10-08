<?php
/**
 * Advanced OpenReports, SugarCRM Reporting.
 * @package Advanced OpenReports for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

use SuiteCRM\PDF\Exceptions\PDFException;
use SuiteCRM\PDF\PDFWrapper;

require_once __DIR__ . '/../../../modules/AOR_Reports/controller.php';
require_once('custom/include/MVC/Controller/SugarController.php');

/**
 * Class AOR_ReportsController
 */
class CustomAOR_ReportsController extends AOR_ReportsController
{

    protected function action_downloadChart(): void
    {
        if (!$this->bean->ACLAccess('Export')) {
            SugarApplication::appendErrorMessage(translate('LBL_NO_ACCESS', 'ACL'));
            SugarApplication::redirect('index.php?module=AOR_Reports&action=DetailView&record=' . $this->bean->id);
            sugar_die('');
        }

        // Fetch company logo and report name
        $companyLogo = explode('?', SugarThemeRegistry::current()->getImageURL('company_logo.png'), 2);
        $reportName = strtoupper($this->bean->name);
        $graphs = $_POST["graphsForPDF"];
        $chartsPerRow = $this->bean->graphs_per_row;

        // Ensure charts are unique
        $graphs = array_unique($graphs);

        if (is_countable($graphs)) {
            $countOfCharts = count($graphs);
        }

        // Directory to save images in cache/pic_chart (or another directory like "pics/")
        $uploadDir = 'cache/reportChartImages/'; // Update this to match your directory structure
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Ensure the directory exists
        }

        // Save charts as images in the upload folder
        $imageHtml = '';  // To store image HTML content
        if (!empty($countOfCharts) && $countOfCharts > 0) {
            foreach ($graphs as $x => $chartImage) {
                // Remove base64 data URI header
                $chartImage = preg_replace('#^data:image/\w+;base64,#i', '', $chartImage);

                // Decode base64 data into binary
                $imgData = base64_decode($chartImage);

                if ($imgData !== false) {
                    // Generate a unique name for the image file
                    $imageName = uniqid('chart_', true) . '.png';
                    $imagePath = $uploadDir . $imageName;

                    // Save the image to the upload directory
                    file_put_contents($imagePath, $imgData);

                    // Create an HTML <img> tag to embed the image in the PDF
                    $imageHtml .= '<p><img src="' . $imagePath . '" style="float: left;"/>&nbsp;</p>';
                }
            }
        }

        // Generate the PDF using TCPDF
        ob_clean();
        try {
            $pdf = PDFWrapper::getPDFEngine();
            $pdf->configurePDF([
                'mode' => 'en',
                'font' => 'DejaVuSansCondensed',
            ]);

            // Add the company logo and report name as a header
            $head = '<table style="width: 100%; text-align: center;" border="0" cellpadding="2" cellspacing="2">
            <tbody style="text-align: left;">
            <tr style="text-align: left;">
            <td style="text-align: left;">
            <p><img src="' . $companyLogo[0] . '" style="float: left;"/>&nbsp;</p>
            </td>
            </tr>
            <tr style="text-align: left;">
            <td style="text-align: left;">
            <h2>' . $reportName . '</h2>
            </td>
            </tr>
            </tbody>
            </table>';

            // Write the header content
            $pdf->writeHTML($head, true, false, true, false, '');

            // Write the image HTML content to the PDF (similar to how the header is written)
            if (!empty($imageHtml)) {
                $pdf->writeHTML($imageHtml, true, false, true, false, '');
            }

            // Add footer content
            $footer = '{PAGENO}';
            $pdf->writeFooter($footer);

            // Output the PDF with charts only
            $pdf->outputPDF($this->bean->name . '_charts.pdf', 'D');  // Output the PDF with charts only

        } catch (PDFException $e) {
            LoggerManager::getLogger()->warn('PDFException: ' . $e->getMessage());
        }
    }
}