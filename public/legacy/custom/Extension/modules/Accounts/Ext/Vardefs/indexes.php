<?php

$dictionary['Account']['indices'][] = array(
    'name' => 'idx_billing_address_city_deleted',
    'type' => 'index',
    'fields' => array(
        'billing_address_city',
        'deleted'
    )
);

$dictionary['Account']['indices'][] = array(
    'name' => 'idx_billing_address_street_deleted',
    'type' => 'index',
    'fields' => array(
        'billing_address_street',
        'deleted'
    )
);

$dictionary['Account']['indices'][] = array(
    'name' => 'idx_billing_address_state_deleted',
    'type' => 'index',
    'fields' => array(
        'billing_address_state',
        'deleted'
    )
);

$dictionary['Account']['indices'][] = array(
    'name' => 'idx_billing_address_postalcode_deleted',
    'type' => 'index',
    'fields' => array(
        'billing_address_postalcode',
        'deleted'
    )
);

$dictionary['Account']['indices'][] = array(
    'name' => 'idx_billing_address_country_deleted',
    'type' => 'index',
    'fields' => array(
        'billing_address_country',
        'deleted'
    )
);

