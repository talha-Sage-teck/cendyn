<?php

// http://localhost/cendyn/public/legacy/index.php?entryPoint=ISOCodesEntryPoint
function ISOCodes()
{
    global $db, $sugar_config;
    // Create Temporary Table and Insert Data
    $createTempTableQuery = "CREATE TABLE country_mappings (
         country_name VARCHAR(100) NOT NULL,
         country_code VARCHAR(100) NOT NULL
    );";

    $result = $db->query($createTempTableQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
    }
    // Create Unique Index
    $createIndexQuery = "CREATE UNIQUE INDEX idx_country_name ON country_mappings (country_name);";

    $result = $db->query($createIndexQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
    }

    $insertDataQuery = "INSERT INTO country_mappings (country_name, country_code) VALUES
        ('Afghanistan', 'AF'), ('AF', 'AF'),
        ('Albania', 'AL'), ('AL', 'AL'),
        ('Algeria', 'DZ'), ('DZ', 'DZ'),
        ('American Samoa', 'AS'), ('AS', 'AS'),
        ('Andorra', 'AD'), ('AD', 'AD'),
        ('Angola', 'AO'), ('AO', 'AO'),
        ('Anguilla', 'AI'), ('AI', 'AI'),
        ('Antarctica', 'AQ'), ('AQ', 'AQ'),
        ('Antigua and Barbuda', 'AG'), ('AG', 'AG'),
        ('Argentina', 'AR'), ('AR', 'AR'),
        ('Armenia', 'AM'), ('AM', 'AM'),
        ('Aruba', 'AW'), ('AW', 'AW'),
        ('Australia', 'AU'), ('asutralia', 'AU'),('AU', 'AU'),
        ('Austria', 'AT'),('Österreich', 'AT'),('Oesterreich', 'AT'),('AUT', 'AT'),('A', 'AT'), ('AT', 'AT'),
        ('Azerbaijan', 'AZ'), ('AZ', 'AZ'),
        ('Bahamas (the)', 'BS'), ('Bahamas', 'BS'), ('BS', 'BS'),
        ('Bahrain', 'BH'),('Kingdom of Bahrain', 'BH'), ('BH', 'BH'),
        ('Bangladesh', 'BD'), ('BD', 'BD'),
        ('Barbados', 'BB'), ('BB', 'BB'),
        ('Belarus', 'BY'), ('BY', 'BY'),
        ('Belgium', 'BE'), ('BE', 'BE'),
        ('Belize', 'BZ'), ('BZ', 'BZ'), 
        ('Benin', 'BJ'), ('BJ', 'BJ'),
        ('Bermuda', 'BM'), ('BM', 'BM'),
        ('Bhutan', 'BT'), ('BT', 'BT'),
        ('Bolivia (Plurinational State of)', 'BO'), ('Bolivia', 'BO'), ('BO', 'BO'),
        ('Bonaire, Sint Eustatius and Saba', 'BQ'), ('Bonaire', 'BQ'), ('Sint Eustatius', 'BQ'), ('Saba', 'BQ'), ('BQ', 'BQ'),
        ('Bosnia and Herzegovina', 'BA'), ('Bosnia', 'BA'), ('Herzegovina', 'BA'), ('BA', 'BA'),
        ('Botswana', 'BW'), ('BW', 'BW'),
        ('Bouvet Island', 'BV'), ('BV', 'BV'),
        ('Brazil', 'BR'),('Brasil', 'BR'),('Brasile', 'BR'), ('BR', 'BR'),
        ('British Indian Ocean Territory (the)', 'IO'), ('British Indian Ocean Territory', 'IO'), ('IO', 'IO'),
        ('Brunei Darussalam', 'BN'), ('Brunei', 'BN'), ('BN', 'BN'),
        ('Bulgaria', 'BG'), ('BG', 'BG'),
        ('Burkina Faso', 'BF'), ('BF', 'BF'),
        ('Burundi', 'BI'), ('BI', 'BI'),
        ('Cabo Verde', 'CV'), ('CV', 'CV'),
        ('Cambodia', 'KH'), ('KH', 'KH'),
        ('Cameroon', 'CM'), ('CM', 'CM'),
        ('Canada', 'CA'), ('CA', 'CA'),
        ('Cayman Islands (the)', 'KY'), ('Cayman Islands', 'KY'), ('KY', 'KY'),
        ('Central African Republic (the)', 'CF'), ('Central African Republic', 'CF'), ('CF', 'CF'),
        ('Chad', 'TD'), ('TD', 'TD'),
        ('Chile', 'CL'), ('CL', 'CL'),
        ('China', 'CN'), ('P.R.China', 'CN'), ('PR China', 'CN'), ('People\'s Republic of China', 'CN'),('CHN', 'CN'),('CN', 'CN'),
        ('Christmas Island', 'CX'), ('CX', 'CX'),
        ('Cocos (Keeling) Islands (the)', 'CC'), ('Cocos Islands', 'CC'), ('Keeling Islands', 'CC'), ('CC', 'CC'),
        ('Colombia', 'CO'), ('CO', 'CO'),
        ('Comoros (the)', 'KM'), ('Comoros', 'KM'), ('KM', 'KM'),
        ('Congo (the Democratic Republic of the)', 'CD'), ('Democratic Republic of the Congo', 'CD'), ('CD', 'CD'),
        ('Congo (the)', 'CG'), ('CG', 'CG'),
        ('Cook Islands (the)', 'CK'), ('Cook Islands', 'CK'), ('CK', 'CK'),
        ('Costa Rica', 'CR'), ('CR', 'CR'),
        ('Croatia', 'HR'), ('HR', 'HR'),
        ('Cuba', 'CU'), ('CU', 'CU'),
        ('Curaçao', 'CW'),('AN', 'CW'), ('CW', 'CW'),
        ('Cyprus', 'CY'), ('CY', 'CY'),
        ('Czechia', 'CZ'), ('Czechy', 'CZ'),('\\\Czech Republic', 'CZ'), ('Czech Repbublic', 'CZ'),('Prague', 'CZ'),('Czech Republik', 'CZ'),('Czech Republic', 'CZ'),('Ceska republika', 'CZ'),('czechRepublic', 'CZ'), ('Cehia', 'CZ'),('Tschechien', 'CZ'),('Česko', 'CZ'), ('e', 'CZ'),('CZK', 'CZ'),('CZ', 'CZ'),
        ('Côte d\'Ivoire', 'CI'), ('Ivory Coast', 'CI'), ('CI', 'CI'),
        ('Denmark', 'DK'),('Dernmark', 'DK'),('Demark', 'DK'),('Denmrak', 'DK'), ('DK', 'DK'),
        ('Djibouti', 'DJ'), ('DJ', 'DJ'),
        ('Dominica', 'DM'), ('DM', 'DM'),
        ('Dominican Republic (the)', 'DO'), ('Dominican Republic', 'DO'),('DR', 'DO'), ('DO', 'DO'),
        ('Ecuador', 'EC'), ('EC', 'EC'),
        ('Egypt', 'EG'), ('EG', 'EG'),
        ('El Salvador', 'SV'), ('SV', 'SV'),
        ('Equatorial Guinea', 'GQ'), ('GQ', 'GQ'),
        ('Eritrea', 'ER'), ('ER', 'ER'),
        ('Estonia', 'EE'),('Estland', 'EE'), ('EST', 'EE'),('EE', 'EE'),
        ('Eswatini', 'SZ'), ('Swaziland', 'SZ'), ('SZ', 'SZ'),
        ('Ethiopia', 'ET'), ('ET', 'ET'),
        ('Falkland Islands (the) [Malvinas]', 'FK'), ('Falkland Islands', 'FK'), ('Malvinas', 'FK'), ('FK', 'FK'),
        ('Faroe Islands (the)', 'FO'), ('Faroe Islands', 'FO'), ('FO', 'FO'),
        ('Fiji', 'FJ'), ('FJ', 'FJ'),
        ('Finland', 'FI'), ('FI', 'FI'),
        ('France', 'FR'), ('FR', 'FR'),
        ('French Guiana', 'GF'), ('GF', 'GF'),
        ('French Polynesia', 'PF'), ('PF', 'PF'),
        ('French Southern Territories (the)', 'TF'), ('French Southern Territories', 'TF'), ('TF', 'TF'),
        ('Gabon', 'GA'), ('GA', 'GA'),
        ('Gambia (the)', 'GM'), ('Gambia', 'GM'), ('GM', 'GM'),
        ('Georgia', 'GE'), ('GE', 'GE'),
        ('Germany', 'DE'),('Germany ', 'DE'),('German', 'DE'),('Germania', 'DE'), ('DEU', 'DE'),('Osnabrück', 'DE'),('Deutchland', 'DE'),('Deutsch', 'DE'),('Germay', 'DE'),('Gemany', 'DE'),('Germa', 'DE'),('Deutschland', 'DE'),('Deut', 'DE'),('Saxony', 'DE'),('Hamburg', 'DE'),('Detschland', 'DE'),('Bavaria', 'DE'),('Mecklenburg-Vorpommern', 'DE'),('Bremen', 'DE'),('Sachsen', 'DE'),('Germny', 'DE'),('d', 'DE'),('Germnay', 'DE'), ('Munich', 'DE'),('Geramny', 'DE'),('Thuringia', 'DE'),('Musterland', 'DE'),('Brandenburg', 'DE'),('GER', 'DE'),('NRW', 'DE'),('DE', 'DE'),
        ('Ghana', 'GH'), ('GH', 'GH'),
        ('Gibraltar', 'GI'), ('GI', 'GI'),
        ('Greece', 'GR'), ('GR', 'GR'),
        ('Greenland', 'GL'), ('GL', 'GL'),
        ('Grenada', 'GD'), ('GD', 'GD'),
        ('Guadeloupe', 'GP'), ('GP', 'GP'),
        ('Guam', 'GU'), ('GU', 'GU'),
        ('Guatemala', 'GT'), ('GT', 'GT'),
        ('Guernsey', 'GG'), ('GG', 'GG'),
        ('Guinea', 'GN'), ('GN', 'GN'),
        ('Guinea-Bissau', 'GW'), ('GW', 'GW'),
        ('Guyana', 'GY'), ('GY', 'GY'),
        ('Haiti', 'HT'), ('HT', 'HT'),
        ('Heard Island and McDonald Islands', 'HM'), ('HM', 'HM'),
        ('Holy See (the)', 'VA'), ('Holy See', 'VA'), ('VA', 'VA'),
        ('Honduras', 'HN'), ('HN', 'HN'),
        ('Hong Kong', 'HK'), ('HK', 'HK'),
        ('Hungary', 'HU'),('Hungari', 'HU'), ('Ungarn', 'HU'),('HU', 'HU'),
        ('Iceland', 'IS'), ('IS', 'IS'),
        ('India', 'IN'), ('IN', 'IN'),
        ('Indonesia', 'ID'), ('ID', 'ID'),('Idonesia', 'ID'),('Indoensia', 'ID'),('Surabaya', 'ID'),('Indoneaia', 'ID'),
        ('Iran (Islamic Republic of)', 'IR'), ('Iran', 'IR'), ('IR', 'IR'),
        ('Iraq', 'IQ'), ('IQ', 'IQ'),
        ('Ireland', 'IE'),('Irland', 'IE'), ('IE', 'IE'),
        ('Isle of Man', 'IM'), ('IM', 'IM'),
        ('Israel', 'IL'), ('IL', 'IL'),
        ('Italy', 'IT'),('Italia', 'IT'), ('IT', 'IT'),
        ('Jamaica', 'JM'), ('JM', 'JM'),
        ('Japan', 'JP'), ('JP', 'JP'),
        ('Jersey', 'JE'), ('JE', 'JE'),
        ('Jordan', 'JO'), ('JO', 'JO'),
        ('Kazakhstan', 'KZ'), ('KZ', 'KZ'),
        ('Kenya', 'KE'), ('KE', 'KE'),
        ('Kiribati', 'KI'), ('KI', 'KI'),
        ('Korea (the Democratic People\'s Republic of)', 'KP'), ('North Korea', 'KP'), ('KP', 'KP'),
        ('Korea (the Republic of)', 'KR'), ('South Korea', 'KR'),('South-Korea', 'KR'), ('KR', 'KR'),
        ('Kuwait', 'KW'),('KWT', 'KW'), ('KW', 'KW'),
        ('Kyrgyzstan', 'KG'), ('KG', 'KG'),
        ('Lao People\'s Democratic Republic (the)', 'LA'), ('Laos', 'LA'), ('LA', 'LA'),
        ('Latvia', 'LV'), ('LV', 'LV'),
        ('Lebanon', 'LB'), ('LB', 'LB'),
        ('Lesotho', 'LS'), ('LS', 'LS'),
        ('Liberia', 'LR'), ('LR', 'LR'),
        ('Libya', 'LY'), ('LY', 'LY'),
        ('Liechtenstein', 'LI'),('Fürstentum Liechtenstein', 'LI'),('Lichtenstein', 'LI'), ('LI', 'LI'),
        ('Lithuania', 'LT'), ('LT', 'LT'),
        ('Luxembourg', 'LU'),('Luxemburg', 'LU'),('Luxembours', 'LU'), ('LU', 'LU'),
        ('Macao', 'MO'), ('MO', 'MO'),
        ('Madagascar', 'MG'), ('MG', 'MG'),
        ('Malawi', 'MW'), ('MW', 'MW'),
        ('Malaysia', 'MY'), ('MY', 'MY'),
        ('Maldives', 'MV'), ('MV', 'MV'),('Tulip, Majeedhi, magu, Male, maledives', 'MV'), 
        ('Mali', 'ML'), ('ML', 'ML'),
        ('Malta', 'MT'), ('MT', 'MT'),
        ('Marshall Islands (the)', 'MH'), ('Marshall Islands', 'MH'), ('MH', 'MH'),
        ('Martinique', 'MQ'), ('MQ', 'MQ'),
        ('Mauritania', 'MR'), ('MR', 'MR'),
        ('Mauritius', 'MU'), ('MU', 'MU'),
        ('Mayotte', 'YT'), ('YT', 'YT'),
        ('Mexico', 'MX'), ('MX', 'MX'),
        ('Micronesia (Federated States of)', 'FM'), ('Micronesia', 'FM'), ('FM', 'FM'),
        ('Moldova (the Republic of)', 'MD'),('Republic of Moldova', 'MD'), ('Moldova', 'MD'), ('MD', 'MD'),
        ('Monaco', 'MC'), ('MC', 'MC'),
        ('Mongolia', 'MN'), ('MN', 'MN'),
        ('Montenegro', 'ME'), ('ME', 'ME'),
        ('Montserrat', 'MS'), ('MS', 'MS'),
        ('Morocco', 'MA'), ('MA', 'MA'),
        ('Mozambique', 'MZ'), ('MZ', 'MZ'),
        ('Myanmar', 'MM'), ('Burma', 'MM'), ('MM', 'MM'),
        ('Namibia', 'NA'), ('NA', 'NA'),
        ('Nauru', 'NR'), ('NR', 'NR'),
        ('Nepal', 'NP'), ('NP', 'NP'),
        ('Netherlands (Kingdom of the)', 'NL'),('The Netherlands', 'NL'),('The Netherlands - Keizersgracht', 'NL'),('Niederlande', 'NL'), ('Netherlands', 'NL'),('Nederland', 'NL'),('Netherlands ', 'NL'), ('NL', 'NL'),
        ('New Caledonia', 'NC'), ('NC', 'NC'),
        ('New Zealand', 'NZ'), ('NZ', 'NZ'),
        ('Nicaragua', 'NI'), ('NI', 'NI'),
        ('Niger (the)', 'NE'), ('Niger', 'NE'), ('NE', 'NE'),
        ('Nigeria', 'NG'), ('NG', 'NG'),
        ('Niue', 'NU'), ('NU', 'NU'),
        ('Norfolk Island', 'NF'), ('NF', 'NF'),
        ('North Macedonia', 'MK'), ('Macedonia', 'MK'), ('MK', 'MK'),
        ('Northern Mariana Islands (the)', 'MP'), ('Northern Mariana Islands', 'MP'), ('MP', 'MP'),
        ('Norway', 'NO'), ('NO', 'NO'),
        ('Oman', 'OM'),('Sultanate of Oman', 'OM'), ('OM', 'OM'),
        ('Pakistan', 'PK'), ('PK', 'PK'),
        ('Palau', 'PW'), ('PW', 'PW'),
        ('Palestine, State of', 'PS'), ('Palestine', 'PS'), ('State of Palestine', 'PS'), ('PS', 'PS'),
        ('Panama', 'PA'), ('PA', 'PA'),
        ('Papua New Guinea', 'PG'), ('PG', 'PG'),
        ('Paraguay', 'PY'), ('PY', 'PY'),
        ('Peru', 'PE'), ('PE', 'PE'),
        ('Philippines (the)', 'PH'), ('Philippines', 'PH'),('Philipines', 'PH'), ('PHIL', 'PH'), ('PH', 'PH'),
        ('Pitcairn', 'PN'), ('PN', 'PN'),
        ('Poland', 'PL'),('Polamd', 'PL'),('olandP', 'PL'), ('Ooland', 'PL'),('Polska', 'PL'),('Poalnd', 'PL'),('Polen', 'PL'),('oland', 'PL'), ('PL', 'PL'),
        ('Portugal', 'PT'), ('PT', 'PT'),
        ('Puerto Rico', 'PR'), ('PR', 'PR'),
        ('Qatar', 'QA'),('QTR', 'QA'), ('QA', 'QA'),
        ('Romania', 'RO'),('Romani', 'RO'), ('Romaniaia', 'RO'),('Romanai', 'RO'), ('Cluj', 'RO'),('RO', 'RO'),
        ('Russian Federation (the)', 'RU'), ('Russia', 'RU'), ('RU', 'RU'),
        ('Rwanda', 'RW'), ('RW', 'RW'),
        ('Réunion', 'RE'), ('RE', 'RE'),
        ('Saint Barthélemy', 'BL'), ('BL', 'BL'),
        ('Saint Helena, Ascension and Tristan da Cunha', 'SH'), ('Saint Helena', 'SH'), ('Ascension', 'SH'), ('Tristan da Cunha', 'SH'), ('SH', 'SH'),
        ('Saint Kitts and Nevis', 'KN'), ('Saint Kitts', 'KN'), ('Nevis', 'KN'), ('KN', 'KN'),
        ('Saint Lucia', 'LC'), ('LC', 'LC'),
        ('Saint Martin (French part)', 'MF'), ('Saint Martin', 'MF'), ('MF', 'MF'),
        ('Saint Pierre and Miquelon', 'PM'), ('Saint Pierre', 'PM'), ('Miquelon', 'PM'), ('PM', 'PM'),
        ('Saint Vincent and the Grenadines', 'VC'), ('Saint Vincent', 'VC'), ('VC', 'VC'),
        ('Samoa', 'WS'), ('WS', 'WS'),
        ('San Marino', 'SM'),('RSM', 'SM'), ('SM', 'SM'),
        ('Sao Tome and Principe', 'ST'), ('Sao Tome', 'ST'), ('Principe', 'ST'), ('ST', 'ST'),
        ('Saudi Arabia', 'SA'),('Kingdom of  Saudi Arabia', 'SA'),('Kingdom of Saudi Arabia', 'SA'), ('SA', 'SA'),
        ('Senegal', 'SN'), ('SN', 'SN'),
        ('Serbia', 'RS'), ('YU', 'RS'), ('Yugoslavia', 'RS'),('RS', 'RS'),
        ('Seychelles', 'SC'), ('SC', 'SC'),
        ('Sierra Leone', 'SL'), ('SL', 'SL'),
        ('Singapore', 'SG'), ('SG', 'SG'),
        ('Sint Maarten (Dutch part)', 'SX'), ('Sint Maarten', 'SX'), ('SX', 'SX'),
        ('Slovakia', 'SK'),('Slovak Republic', 'SK'),('Slovensko', 'SK'),('SIovakia', 'SK'),  ('SK', 'SK'),
        ('Slovenia', 'SI'),('Slovenija', 'SI'), ('SI', 'SI'),
        ('Solomon Islands', 'SB'), ('SB', 'SB'),
        ('Somalia', 'SO'), ('SO', 'SO'),
        ('South Africa', 'ZA'),('Africa', 'ZA'), ('ZA', 'ZA'),
        ('South Georgia and the South Sandwich Islands', 'GS'), ('South Georgia', 'GS'), ('South Sandwich Islands', 'GS'), ('GS', 'GS'),
        ('South Sudan', 'SS'), ('SS', 'SS'),
        ('Spain', 'ES'), ('ESP', 'ES'),('España,', 'ES'),('España', 'ES'),('SP', 'ES'), ('ES', 'ES'),
        ('Sri Lanka', 'LK'), ('LK', 'LK'),('Srilanka', 'LK'),
        ('Sudan (the)', 'SD'), ('Sudan', 'SD'), ('SD', 'SD'),
        ('Suriname', 'SR'), ('SR', 'SR'),
        ('Svalbard and Jan Mayen', 'SJ'), ('Svalbard', 'SJ'), ('Jan Mayen', 'SJ'), ('SJ', 'SJ'),
        ('Sweden', 'SE'),('Schweden', 'SE'), ('SW', 'SE'),('SE', 'SE'),
        ('Switzerland', 'CH'), ('Suisse', 'CH'),('8620', 'CH'),('Schwitzerland', 'CH'), ('Swiss', 'CH'),('Crissier', 'CH'), ('Schweiz', 'CH'), ('Swizerland', 'CH'),('Schaffhausen', 'CH'), ('Svizzera', 'CH'),  ('CH', 'CH'),
        ('Syrian Arab Republic (the)', 'SY'), ('Syria', 'SY'), ('SY', 'SY'),
        ('Taiwan (Province of China)', 'TW'), ('Taiwan', 'TW'), ('TW', 'TW'),
        ('Tajikistan', 'TJ'),('Tajikistan.', 'TJ'), ('TJ', 'TJ'),
        ('Tanzania, the United Republic of', 'TZ'), ('Tanzania', 'TZ'), ('TZ', 'TZ'),
        ('Thailand', 'TH'), ('TH', 'TH'),
        ('Timor-Leste', 'TL'), ('TL', 'TL'),
        ('Togo', 'TG'), ('TG', 'TG'),
        ('Tokelau', 'TK'), ('TK', 'TK'),
        ('Tonga', 'TO'), ('TO', 'TO'),
        ('Trinidad and Tobago', 'TT'), ('TT', 'TT'),
        ('Tunisia', 'TN'), ('Tunis', 'TN'), ('TN', 'TN'),
        ('Turkmenistan', 'TM'), ('TM', 'TM'),
        ('Turks and Caicos Islands (the)', 'TC'), ('TC', 'TC'),
        ('Tuvalu', 'TV'), ('TV', 'TV'),
        ('Türkiye', 'TR'), ('Turkey', 'TR'),('Türkei', 'TR'),('Istanbul', 'TR'), ('TR', 'TR'),
        ('Uganda', 'UG'), ('UG', 'UG'),
        ('Ukraine', 'UA'), ('UA', 'UA'),
        ('United Arab Emirates (the)', 'AE'), ('United Arab Emirates', 'AE'),('State of Qatar', 'AE'),('Uni Emirates Arab', 'AE'),('UAE', 'AE'),('Dubai', 'AE'), ('Qatar, UAE', 'AE'),('Quatar', 'AE'),('GOL', 'AE'),('EAU', 'AE'),('AE', 'AE'),
        ('United Kingdom of Great Britain and Northern Ireland (the)', 'GB'),('England, UK', 'GB'), ('XB', 'GB'), ('United Kingdom', 'GB'),('Great Britain', 'GB'),('Geart Britain', 'GB'),('Scotland', 'GB'), ('Reino Unido', 'GB'),('UK', 'GB'),('Grate Britain', 'GB'),('Britain', 'GB'),('Vereinigtes Königreich', 'GB'), ('England', 'GB'), ('GB', 'GB'),
        ('United States Minor Outlying Islands (the)', 'UM'), ('UM', 'UM'),
        ('United States of America (the)', 'US'),('United States of America', 'US'),('The United States of America', 'US'),  ('United States', 'US'),('NY', 'US'), ('USA', 'US'),('U.S.A.' , 'US'),('US.', 'US'),('US', 'US'),
        ('Uruguay', 'UY'), ('UY', 'UY'),
        ('Uzbekistan', 'UZ'), ('UZ', 'UZ'),
        ('Vanuatu', 'VU'), ('VU', 'VU'),
        ('Venezuela (Bolivarian Republic of)', 'VE'), ('Venezuela', 'VE'), ('VE', 'VE'),
        ('Viet Nam', 'VN'), ('Vietnam', 'VN'), ('VN', 'VN'),
        ('Virgin Islands (British)', 'VG'), ('British Virgin Islands', 'VG'), ('VG', 'VG'),
        ('Virgin Islands (U.S.)', 'VI'), ('US Virgin Islands', 'VI'), ('VI', 'VI'),
        ('Wallis and Futuna', 'WF'), ('WF', 'WF'),
        ('Western Sahara', 'EH'), ('EH', 'EH'),
        ('Yemen', 'YE'), ('YE', 'YE'),
        ('Zambia', 'ZM'), ('ZM', 'ZM'),
        ('Zimbabwe', 'ZW'), ('ZW', 'ZW'),
        ('Åland Islands', 'AX'), ('AX', 'AX');";
    $result = $db->query($insertDataQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
    }

    // Update the accounts table, setting B1, S1, P1 to the corresponding country code
    $updateQueries = [
        // Update accounts table billing address country
        "UPDATE accounts 
         JOIN country_mappings ON country_mappings.country_name = accounts.billing_address_country
         SET accounts.billing_address_country = country_mappings.country_code
         WHERE accounts.billing_address_country IS NOT NULL;",

        // Update accounts table shipping address country
        "UPDATE accounts 
         JOIN country_mappings ON country_mappings.country_name = accounts.shipping_address_country
         SET accounts.shipping_address_country = country_mappings.country_code
         WHERE accounts.shipping_address_country IS NOT NULL;",

        // Update accounts table pobox country
        "UPDATE accounts 
         JOIN country_mappings ON country_mappings.country_name = accounts.pobox_country
         SET accounts.pobox_country = country_mappings.country_code
         WHERE accounts.pobox_country IS NOT NULL;",

        // Update aos_quotes table billing address country
        "UPDATE aos_quotes 
         JOIN country_mappings ON country_mappings.country_name = aos_quotes.billing_address_country
         SET aos_quotes.billing_address_country = country_mappings.country_code
         WHERE aos_quotes.billing_address_country IS NOT NULL;",

        // Update aos_quotes table shipping address country
        "UPDATE aos_quotes 
         JOIN country_mappings ON country_mappings.country_name = aos_quotes.shipping_address_country
         SET aos_quotes.shipping_address_country = country_mappings.country_code
         WHERE aos_quotes.shipping_address_country IS NOT NULL;",

        // Update contacts table primary address country
        "UPDATE contacts 
         JOIN country_mappings ON country_mappings.country_name = contacts.primary_address_country
         SET contacts.primary_address_country = country_mappings.country_code
         WHERE contacts.primary_address_country IS NOT NULL;",

        // Update contacts table alternate address country
        "UPDATE contacts 
         JOIN country_mappings ON country_mappings.country_name = contacts.alt_address_country
         SET contacts.alt_address_country = country_mappings.country_code
         WHERE contacts.alt_address_country IS NOT NULL;",

        // Update fp_event_locations table address country
        "UPDATE fp_event_locations 
         JOIN country_mappings ON country_mappings.country_name = fp_event_locations.address_country
         SET fp_event_locations.address_country = country_mappings.country_code
         WHERE fp_event_locations.address_country IS NOT NULL;",

        // Update leads table primary address country
        "UPDATE leads 
         JOIN country_mappings ON country_mappings.country_name = leads.primary_address_country
         SET leads.primary_address_country = country_mappings.country_code
         WHERE leads.primary_address_country IS NOT NULL;",

        // Update leads table alternate address country
        "UPDATE leads 
         JOIN country_mappings ON country_mappings.country_name = leads.alt_address_country
         SET leads.alt_address_country = country_mappings.country_code
         WHERE leads.alt_address_country IS NOT NULL;"
    ];


    // Disable safe updates for session
    $db->query("SET SQL_SAFE_UPDATES = 0;");

    // Execute Update Queries with error checking
    foreach ($updateQueries as $query) {
        $result = $db->query($query);
        if (!$result) {
            $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
        } else {
            $GLOBALS['log']->fatal('SQL Execution succeeded: ' . $query);
        }
    }

    // Re-enable safe updates for session
    $db->query("SET SQL_SAFE_UPDATES = 1;");
    // Drop the 'country_mappings' table if it exists
    $dropTableQuery = "DROP TABLE IF EXISTS country_mappings;";

    // Execute the DROP TABLE query
    $result = $db->query($dropTableQuery);
    if (!$result) {
        $GLOBALS['log']->fatal('SQL Execution failed: ' . $db->lastError());
    } else {
        $GLOBALS['log']->fatal('SQL Execution succeeded: ' . $dropTableQuery);
    }

    $GLOBALS['log']->fatal('ISOCodes --> : SQL commands executed successfully.');
}
ISOCodes();
?>