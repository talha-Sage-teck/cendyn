<?php

// http://localhost/cendyn/public/legacy/index.php?entryPoint=ISOCodesEntryPoint
function ISOCodes() {
    global $db, $sugar_config;
    // Create Temporary Table and Insert Data
//    $createTempTableQuery = "CREATE TABLE `country_mappings` (
//        `country_name` varchar(100) NOT NULL,
//        `country_code` varchar(100) NOT NULL,
//        PRIMARY KEY (`country_name`)
//    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $createTempTableQuery = "CREATE TABLE `country_mappings` (
        `country_name` varchar(100) NOT NULL,
        `country_code` varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

    print '<pre>';

    $result = $db->query($createTempTableQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
        echo '<br>' . 'SQL Execution failed: ' . $db->lastError();
        return false;
    }

    echo '<br>' . '`country_mappings` Table Created';

    $insertDataQuery = "INSERT INTO country_mappings (country_name, country_code) VALUES
        ('Afghanistan', 'AF'), 
        ('Albania', 'AL'), 
        ('Algeria', 'DZ'), 
        ('American Samoa', 'AS'), 
        ('Andorra', 'AD'), 
        ('Angola', 'AO'), 
        ('Anguilla', 'AI'), 
        ('Antarctica', 'AQ'), 
        ('Antigua and Barbuda', 'AG'), 
        ('Argentina', 'AR'), 
        ('Armenia', 'AM'), 
        ('Aruba', 'AW'), 
        ('Australia', 'AU'), ('asutralia', 'AU'),
        ('Austria', 'AT'),('Österreich', 'AT'),('Oesterreich', 'AT'),('AUT', 'AT'),('A', 'AT'), 
        ('Azerbaijan', 'AZ'), 
        ('Bahamas (the)', 'BS'), ('Bahamas', 'BS'), 
        ('Bahrain', 'BH'),('Kingdom of Bahrain', 'BH'), 
        ('Bangladesh', 'BD'), 
        ('Barbados', 'BB'), 
        ('Belarus', 'BY'), 
        ('Belgium', 'BE'), 
        ('Belize', 'BZ'), 
        ('Benin', 'BJ'), 
        ('Bermuda', 'BM'), 
        ('Bhutan', 'BT'), 
        ('Bolivia (Plurinational State of)', 'BO'), ('Bolivia', 'BO'), 
        ('Bonaire, Sint Eustatius and Saba', 'BQ'), ('Bonaire', 'BQ'), ('Sint Eustatius', 'BQ'), ('Saba', 'BQ'), 
        ('Bosnia and Herzegovina', 'BA'), ('Bosnia', 'BA'), ('Herzegovina', 'BA'), 
        ('Botswana', 'BW'), 
        ('Bouvet Island', 'BV'), 
        ('Brazil', 'BR'),('Brasil', 'BR'),('Brasile', 'BR'), 
        ('British Indian Ocean Territory (the)', 'IO'), ('British Indian Ocean Territory', 'IO'), 
        ('Brunei Darussalam', 'BN'), ('Brunei', 'BN'), 
        ('Bulgaria', 'BG'), 
        ('Burkina Faso', 'BF'), 
        ('Burundi', 'BI'), 
        ('Cabo Verde', 'CV'), 
        ('Cambodia', 'KH'), 
        ('Cameroon', 'CM'), 
        ('Canada', 'CA'), 
        ('Cayman Islands (the)', 'KY'), ('Cayman Islands', 'KY'), 
        ('Central African Republic (the)', 'CF'), ('Central African Republic', 'CF'), 
        ('Chad', 'TD'), 
        ('Chile', 'CL'), 
        ('China', 'CN'), ('P.R.China', 'CN'), ('PR China', 'CN'), ('People\'s Republic of China', 'CN'),('CHN', 'CN'), 
        ('Christmas Island', 'CX'), 
        ('Cocos (Keeling) Islands (the)', 'CC'), ('Cocos Islands', 'CC'), ('Keeling Islands', 'CC'), 
        ('Colombia', 'CO'), 
        ('Comoros (the)', 'KM'), ('Comoros', 'KM'), 
        ('Congo (the Democratic Republic of the)', 'CD'), ('Democratic Republic of the Congo', 'CD'), 
        ('Congo (the)', 'CG'), 
        ('Cook Islands (the)', 'CK'), ('Cook Islands', 'CK'), 
        ('Costa Rica', 'CR'), 
        ('Croatia', 'HR'), 
        ('Cuba', 'CU'), 
        ('Curaçao', 'CW'),('AN', 'CW'), 
        ('Cyprus', 'CY'), 
        ('Czechia', 'CZ'), ('Czechy', 'CZ'),('\\\Czech Republic', 'CZ'), ('Czech Repbublic', 'CZ'),('Prague', 'CZ'),('Czech Republik', 'CZ'),('Czech Republic', 'CZ'),('Ceska republika', 'CZ'),('czechRepublic', 'CZ'), ('Cehia', 'CZ'),('Tschechien', 'CZ'),('Česko', 'CZ'), ('e', 'CZ'),('CZK', 'CZ'), 
        ('Côte d\'Ivoire', 'CI'), ('Ivory Coast', 'CI'), 
        ('Denmark', 'DK'),('Dernmark', 'DK'),('Demark', 'DK'),('Denmrak', 'DK'), 
        ('Djibouti', 'DJ'), 
        ('Dominica', 'DM'), 
        ('Dominican Republic (the)', 'DO'), ('Dominican Republic', 'DO'),('DR', 'DO'), 
        ('Ecuador', 'EC'), 
        ('Egypt', 'EG'), 
        ('El Salvador', 'SV'), 
        ('Equatorial Guinea', 'GQ'), 
        ('Eritrea', 'ER'), 
        ('Estonia', 'EE'),('Estland', 'EE'), ('EST', 'EE'), 
        ('Eswatini', 'SZ'), ('Swaziland', 'SZ'), 
        ('Ethiopia', 'ET'), 
        ('Falkland Islands (the) [Malvinas]', 'FK'), ('Falkland Islands', 'FK'), ('Malvinas', 'FK'), 
        ('Faroe Islands (the)', 'FO'), ('Faroe Islands', 'FO'), 
        ('Fiji', 'FJ'), 
        ('Finland', 'FI'), 
        ('France', 'FR'), 
        ('French Guiana', 'GF'), 
        ('French Polynesia', 'PF'), 
        ('French Southern Territories (the)', 'TF'), ('French Southern Territories', 'TF'), 
        ('Gabon', 'GA'), 
        ('Gambia (the)', 'GM'), ('Gambia', 'GM'), 
        ('Georgia', 'GE'), 
        ('Germany', 'DE'),('Germany ', 'DE'),('German', 'DE'),('Germania', 'DE'), ('DEU', 'DE'),('Osnabrück', 'DE'),('Deutchland', 'DE'),('Deutsch', 'DE'),('Germay', 'DE'),('Gemany', 'DE'),('Germa', 'DE'),('Deutschland', 'DE'),('Deut', 'DE'),('Saxony', 'DE'),('Hamburg', 'DE'),('Detschland', 'DE'),('Bavaria', 'DE'),('Mecklenburg-Vorpommern', 'DE'),('Bremen', 'DE'),('Sachsen', 'DE'),('Germny', 'DE'),('d', 'DE'),('Germnay', 'DE'), ('Munich', 'DE'),('Geramny', 'DE'),('Thuringia', 'DE'),('Musterland', 'DE'),('Brandenburg', 'DE'),('GER', 'DE'),('NRW', 'DE'), 
        ('Ghana', 'GH'), 
        ('Gibraltar', 'GI'), 
        ('Greece', 'GR'), 
        ('Greenland', 'GL'), 
        ('Grenada', 'GD'), 
        ('Guadeloupe', 'GP'), 
        ('Guam', 'GU'), 
        ('Guatemala', 'GT'), 
        ('Guernsey', 'GG'), 
        ('Guinea', 'GN'), 
        ('Guinea-Bissau', 'GW'), 
        ('Guyana', 'GY'), 
        ('Haiti', 'HT'), 
        ('Heard Island and McDonald Islands', 'HM'), 
        ('Holy See (the)', 'VA'), ('Holy See', 'VA'), 
        ('Honduras', 'HN'), 
        ('Hong Kong', 'HK'), 
        ('Hungary', 'HU'),('Hungari', 'HU'), ('Ungarn', 'HU'),
        ('Iceland', 'IS'), 
        ('India', 'IN'), 
        ('Indonesia', 'ID'), ('Idonesia', 'ID'),('Indoensia', 'ID'),('Surabaya', 'ID'),('Indoneaia', 'ID'),
        ('Iran (Islamic Republic of)', 'IR'), ('Iran', 'IR'), 
        ('Iraq', 'IQ'), 
        ('Ireland', 'IE'),('Irland', 'IE'), 
        ('Isle of Man', 'IM'), 
        ('Israel', 'IL'), 
        ('Italy', 'IT'),('Italia', 'IT'), 
        ('Jamaica', 'JM'), 
        ('Japan', 'JP'), 
        ('Jersey', 'JE'), 
        ('Jordan', 'JO'), 
        ('Kazakhstan', 'KZ'), 
        ('Kenya', 'KE'), 
        ('Kiribati', 'KI'), 
        ('Korea (the Democratic People\'s Republic of)', 'KP'), ('North Korea', 'KP'), 
        ('Korea (the Republic of)', 'KR'), ('South Korea', 'KR'),('South-Korea', 'KR'), 
        ('Kuwait', 'KW'),('KWT', 'KW'), 
        ('Kyrgyzstan', 'KG'), 
        ('Lao People\'s Democratic Republic (the)', 'LA'), ('Laos', 'LA'), 
        ('Latvia', 'LV'), 
        ('Lebanon', 'LB'), 
        ('Lesotho', 'LS'), 
        ('Liberia', 'LR'), 
        ('Libya', 'LY'), 
        ('Liechtenstein', 'LI'),('Fürstentum Liechtenstein', 'LI'),('Lichtenstein', 'LI'), 
        ('Lithuania', 'LT'), 
        ('Luxembourg', 'LU'),('Luxemburg', 'LU'),('Luxembours', 'LU'), 
        ('Macao', 'MO'), 
        ('Madagascar', 'MG'), 
        ('Malawi', 'MW'), 
        ('Malaysia', 'MY'), 
        ('Maldives', 'MV'), ('Tulip, Majeedhi, magu, Male, maledives', 'MV'), 
        ('Mali', 'ML'), 
        ('Malta', 'MT'), 
        ('Marshall Islands (the)', 'MH'), ('Marshall Islands', 'MH'), 
        ('Martinique', 'MQ'), 
        ('Mauritania', 'MR'), 
        ('Mauritius', 'MU'), 
        ('Mayotte', 'YT'), 
        ('Mexico', 'MX'), 
        ('Micronesia (Federated States of)', 'FM'), ('Micronesia', 'FM'), 
        ('Moldova (the Republic of)', 'MD'),('Republic of Moldova', 'MD'), ('Moldova', 'MD'), 
        ('Monaco', 'MC'), 
        ('Mongolia', 'MN'), 
        ('Montenegro', 'ME'), 
        ('Montserrat', 'MS'), 
        ('Morocco', 'MA'), 
        ('Mozambique', 'MZ'), 
        ('Myanmar', 'MM'), ('Burma', 'MM'), 
        ('Namibia', 'NA'), 
        ('Nauru', 'NR'), 
        ('Nepal', 'NP'), 
        ('Netherlands (Kingdom of the)', 'NL'),('The Netherlands', 'NL'),('The Netherlands - Keizersgracht', 'NL'),('Niederlande', 'NL'), ('Netherlands', 'NL'),('Nederland', 'NL'),('Netherlands ', 'NL'), 
        ('New Caledonia', 'NC'), 
        ('New Zealand', 'NZ'), 
        ('Nicaragua', 'NI'), 
        ('Niger (the)', 'NE'), ('Niger', 'NE'), 
        ('Nigeria', 'NG'), 
        ('Niue', 'NU'), 
        ('Norfolk Island', 'NF'), 
        ('North Macedonia', 'MK'), ('Macedonia', 'MK'), 
        ('Northern Mariana Islands (the)', 'MP'), ('Northern Mariana Islands', 'MP'), 
        ('Norway', 'NO'), 
        ('Oman', 'OM'),('Sultanate of Oman', 'OM'), 
        ('Pakistan', 'PK'), 
        ('Palau', 'PW'), 
        ('Palestine, State of', 'PS'), ('Palestine', 'PS'), ('State of Palestine', 'PS'), 
        ('Panama', 'PA'), 
        ('Papua New Guinea', 'PG'), 
        ('Paraguay', 'PY'), 
        ('Peru', 'PE'), 
        ('Philippines (the)', 'PH'), ('Philippines', 'PH'),('Philipines', 'PH'), ('PHIL', 'PH'), 
        ('Pitcairn', 'PN'), 
        ('Poland', 'PL'),('Polamd', 'PL'),('olandP', 'PL'), ('Ooland', 'PL'),('Polska', 'PL'),('Poalnd', 'PL'),('Polen', 'PL'),('oland', 'PL'), 
        ('Portugal', 'PT'), 
        ('Puerto Rico', 'PR'), 
        ('Qatar', 'QA'),('QTR', 'QA'), 
        ('Romania', 'RO'),('Romani', 'RO'), ('Romaniaia', 'RO'),('Romanai', 'RO'), ('Cluj', 'RO'), 
        ('Russian Federation (the)', 'RU'), ('Russia', 'RU'), 
        ('Rwanda', 'RW'), 
        ('Réunion', 'RE'), 
        ('Saint Barthélemy', 'BL'), 
        ('Saint Helena, Ascension and Tristan da Cunha', 'SH'), ('Saint Helena', 'SH'), ('Ascension', 'SH'), ('Tristan da Cunha', 'SH'), 
        ('Saint Kitts and Nevis', 'KN'), ('Saint Kitts', 'KN'), ('Nevis', 'KN'), 
        ('Saint Lucia', 'LC'), 
        ('Saint Martin (French part)', 'MF'), ('Saint Martin', 'MF'), 
        ('Saint Pierre and Miquelon', 'PM'), ('Saint Pierre', 'PM'), ('Miquelon', 'PM'), 
        ('Saint Vincent and the Grenadines', 'VC'), ('Saint Vincent', 'VC'), 
        ('Samoa', 'WS'), 
        ('San Marino', 'SM'),('RSM', 'SM'), 
        ('Sao Tome and Principe', 'ST'), ('Sao Tome', 'ST'), ('Principe', 'ST'), 
        ('Saudi Arabia', 'SA'),('Kingdom of  Saudi Arabia', 'SA'),('Kingdom of Saudi Arabia', 'SA'), 
        ('Senegal', 'SN'), 
        ('Serbia', 'RS'), ('YU', 'RS'), ('Yugoslavia', 'RS'), 
        ('Seychelles', 'SC'), 
        ('Sierra Leone', 'SL'), 
        ('Singapore', 'SG'), 
        ('Sint Maarten (Dutch part)', 'SX'), ('Sint Maarten', 'SX'), 
        ('Slovakia', 'SK'),('Slovak Republic', 'SK'),('Slovensko', 'SK'),('SIovakia', 'SK'), 
        ('Slovenia', 'SI'),('Slovenija', 'SI'), 
        ('Solomon Islands', 'SB'), 
        ('Somalia', 'SO'), 
        ('South Africa', 'ZA'),('Africa', 'ZA'), 
        ('South Georgia and the South Sandwich Islands', 'GS'), ('South Georgia', 'GS'), ('South Sandwich Islands', 'GS'), 
        ('South Sudan', 'SS'), 
        ('Spain', 'ES'), ('ESP', 'ES'),('España,', 'ES'),('España', 'ES'),('SP', 'ES'), 
        ('Sri Lanka', 'LK'), ('Srilanka', 'LK'),
        ('Sudan (the)', 'SD'), ('Sudan', 'SD'), 
        ('Suriname', 'SR'), 
        ('Svalbard and Jan Mayen', 'SJ'), ('Svalbard', 'SJ'), ('Jan Mayen', 'SJ'), 
        ('Sweden', 'SE'),('Schweden', 'SE'), ('SW', 'SE'), 
        ('Switzerland', 'CH'), ('Suisse', 'CH'),('8620', 'CH'),('Schwitzerland', 'CH'), ('Swiss', 'CH'),('Crissier', 'CH'), ('Schweiz', 'CH'), ('Swizerland', 'CH'),('Schaffhausen', 'CH'), ('Svizzera', 'CH'), 
        ('Syrian Arab Republic (the)', 'SY'), ('Syria', 'SY'), 
        ('Taiwan (Province of China)', 'TW'), ('Taiwan', 'TW'), 
        ('Tajikistan', 'TJ'),('Tajikistan.', 'TJ'), 
        ('Tanzania, the United Republic of', 'TZ'), ('Tanzania', 'TZ'), 
        ('Thailand', 'TH'), 
        ('Timor-Leste', 'TL'), 
        ('Togo', 'TG'), 
        ('Tokelau', 'TK'), 
        ('Tonga', 'TO'), 
        ('Trinidad and Tobago', 'TT'), 
        ('Tunisia', 'TN'), ('Tunis', 'TN'), 
        ('Turkmenistan', 'TM'), 
        ('Turks and Caicos Islands (the)', 'TC'), 
        ('Tuvalu', 'TV'), 
        ('Türkiye', 'TR'), ('Turkey', 'TR'),('Türkei', 'TR'),('Istanbul', 'TR'), 
        ('Uganda', 'UG'), 
        ('Ukraine', 'UA'), 
        ('United Arab Emirates (the)', 'AE'), ('United Arab Emirates', 'AE'),('State of Qatar', 'AE'),('Uni Emirates Arab', 'AE'),('UAE', 'AE'),('Dubai', 'AE'), ('Qatar, UAE', 'AE'),('Quatar', 'AE'),('GOL', 'AE'),('EAU', 'AE'),
        ('United Kingdom of Great Britain and Northern Ireland (the)', 'GB'),('England, UK', 'GB'), ('XB', 'GB'), ('United Kingdom', 'GB'),('Great Britain', 'GB'),('Geart Britain', 'GB'),('Scotland', 'GB'), ('Reino Unido', 'GB'),('UK', 'GB'),('Grate Britain', 'GB'),('Britain', 'GB'),('Vereinigtes Königreich', 'GB'), ('England', 'GB'), 
        ('United States Minor Outlying Islands (the)', 'UM'), 
        ('United States of America (the)', 'US'),('United States of America', 'US'),('The United States of America', 'US'),  ('United States', 'US'),('NY', 'US'), ('USA', 'US'),('U.S.A.' , 'US'),('US.', 'US'), 
        ('Uruguay', 'UY'), 
        ('Uzbekistan', 'UZ'), 
        ('Vanuatu', 'VU'), 
        ('Venezuela (Bolivarian Republic of)', 'VE'), ('Venezuela', 'VE'), 
        ('Viet Nam', 'VN'), ('Vietnam', 'VN'), 
        ('Virgin Islands (British)', 'VG'), ('British Virgin Islands', 'VG'), 
        ('Virgin Islands (U.S.)', 'VI'), ('US Virgin Islands', 'VI'), 
        ('Wallis and Futuna', 'WF'), 
        ('Western Sahara', 'EH'), 
        ('Yemen', 'YE'), 
        ('Zambia', 'ZM'), 
        ('Zimbabwe', 'ZW'), 
        ('Åland Islands', 'AX');";

    $result = $db->query($insertDataQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
        echo '<br>' . 'SQL Execution failed: ' . $db->lastError();
        return false;
    }

    echo '<br>' . 'Table Data Inserted';

    // Update the accounts table, setting B1, S1, P1 to the corresponding country code
    $updateQueries = [
        // Update accounts table billing address country
        "UPDATE accounts 
         JOIN country_mappings ON country_mappings.country_name = accounts.billing_address_country
         SET accounts.billing_address_country = country_mappings.country_code
         WHERE accounts.billing_address_country IS NOT NULL and accounts.billing_address_country != '' and accounts.deleted = 0;",
        // Update accounts table shipping address country
        "UPDATE accounts 
         JOIN country_mappings ON country_mappings.country_name = accounts.shipping_address_country
         SET accounts.shipping_address_country = country_mappings.country_code
         WHERE accounts.shipping_address_country IS NOT NULL and accounts.shipping_address_country != '' and accounts.deleted = 0;",
        // Update accounts table pobox country
        "UPDATE accounts 
         JOIN country_mappings ON country_mappings.country_name = accounts.pobox_country
         SET accounts.pobox_country = country_mappings.country_code
         WHERE accounts.pobox_country IS NOT NULL and accounts.pobox_country != '' and accounts.deleted = 0;",
        // Update aos_quotes table billing address country
        "UPDATE aos_quotes 
         JOIN country_mappings ON country_mappings.country_name = aos_quotes.billing_address_country
         SET aos_quotes.billing_address_country = country_mappings.country_code
         WHERE aos_quotes.billing_address_country IS NOT NULL and aos_quotes.billing_address_country != '' and aos_quotes.deleted = 0;",
        // Update aos_quotes table shipping address country
        "UPDATE aos_quotes 
         JOIN country_mappings ON country_mappings.country_name = aos_quotes.shipping_address_country
         SET aos_quotes.shipping_address_country = country_mappings.country_code
         WHERE aos_quotes.shipping_address_country IS NOT NULL and aos_quotes.shipping_address_country != '' and aos_quotes.deleted = 0;",
        // Update contacts table primary address country
        "UPDATE contacts 
         JOIN country_mappings ON country_mappings.country_name = contacts.primary_address_country
         SET contacts.primary_address_country = country_mappings.country_code
         WHERE contacts.primary_address_country IS NOT NULL and contacts.primary_address_country != '' and contacts.deleted = 0;",
        // Update contacts table alternate address country
        "UPDATE contacts 
         JOIN country_mappings ON country_mappings.country_name = contacts.alt_address_country
         SET contacts.alt_address_country = country_mappings.country_code
         WHERE contacts.alt_address_country IS NOT NULL and contacts.alt_address_country != '' and contacts.deleted = 0;",
        // Update fp_event_locations table address country
        "UPDATE fp_event_locations 
         JOIN country_mappings ON country_mappings.country_name = fp_event_locations.address_country
         SET fp_event_locations.address_country = country_mappings.country_code
         WHERE fp_event_locations.address_country IS NOT NULL and fp_event_locations.address_country != '' and fp_event_locations.deleted = 0;",
        // Update leads table primary address country
        "UPDATE leads 
         JOIN country_mappings ON country_mappings.country_name = leads.primary_address_country
         SET leads.primary_address_country = country_mappings.country_code
         WHERE leads.primary_address_country IS NOT NULL and leads.primary_address_country != '' and leads.deleted = 0;",
        // Update leads table alternate address country
        "UPDATE leads 
         JOIN country_mappings ON country_mappings.country_name = leads.alt_address_country
         SET leads.alt_address_country = country_mappings.country_code
         WHERE leads.alt_address_country IS NOT NULL and leads.alt_address_country != '' and leads.deleted = 0;"
    ];

    // Disable safe updates for session
    $db->query("SET SQL_SAFE_UPDATES = 0;");

    // Execute Update Queries with error checking
    foreach ($updateQueries as $query) {
        $result = $db->query($query);
        if (!$result) {
            $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
            echo '<br>' . 'SQL Execution failed: ' . $db->lastError();
            return false;
        } else {
            $GLOBALS['log']->fatal('SQL Execution succeeded: ' . $query);
            echo '<br>' . 'SQL Execution succeeded: ' . $query;
        }

        $GLOBALS['log']->fatal('Update SQL Executed: ' . $query);
        echo '<br>' . 'Update SQL Executed: ' . $query;
    }

    // Re-enable safe updates for session
    $db->query("SET SQL_SAFE_UPDATES = 1;");
    // Drop the 'country_mappings' table if it exists
    $dropTableQuery = "DROP TABLE IF EXISTS country_mappings;";

    // Execute the DROP TABLE query
    $result = $db->query($dropTableQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
        echo '<br>' . 'SQL Execution failed: ' . $db->lastError();
        return false;
    } else {
        $GLOBALS['log']->fatal('SQL Execution succeeded: ' . $dropTableQuery);
        echo '<br>' . 'SQL Execution succeeded: ' . $dropTableQuery;
    }

    print '</pre>';

    $GLOBALS['log']->fatal('ISOCodes --> : SQL commands executed successfully.');
    echo '<br>' . 'ISOCodes --> : SQL commands executed successfully.';

    return true;
}

ISOCodes();
?>
