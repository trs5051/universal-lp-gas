<?php

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // for ($i=0; $i < 10000; $i++) {
        //     $userData[] = [
        //         'title' => Str::random(10),
        //     ];
        // }

        // foreach ($userData as $user) {
        //     ProductCategory::create($user);
        // }

        DB::table('product_categories')->delete();

		$product_categories = array(
			array('code' => 'US', 'title' => 'United States'),
			array('code' => 'CA', 'title' => 'Canada'),
			array('code' => 'AF', 'title' => 'Afghanistan'),
			array('code' => 'AL', 'title' => 'Albania'),
			array('code' => 'DZ', 'title' => 'Algeria'),
			array('code' => 'AS', 'title' => 'American Samoa'),
			array('code' => 'AD', 'title' => 'Andorra'),
			array('code' => 'AO', 'title' => 'Angola'),
			array('code' => 'AI', 'title' => 'Anguilla'),
			array('code' => 'AQ', 'title' => 'Antarctica'),
			array('code' => 'AG', 'title' => 'Antigua and/or Barbuda'),
			array('code' => 'AR', 'title' => 'Argentina'),
			array('code' => 'AM', 'title' => 'Armenia'),
			array('code' => 'AW', 'title' => 'Aruba'),
			array('code' => 'AU', 'title' => 'Australia'),
			array('code' => 'AT', 'title' => 'Austria'),
			array('code' => 'AZ', 'title' => 'Azerbaijan'),
			array('code' => 'BS', 'title' => 'Bahamas'),
			array('code' => 'BH', 'title' => 'Bahrain'),
			array('code' => 'BD', 'title' => 'Bangladesh'),
			array('code' => 'BB', 'title' => 'Barbados'),
			array('code' => 'BY', 'title' => 'Belarus'),
			array('code' => 'BE', 'title' => 'Belgium'),
			array('code' => 'BZ', 'title' => 'Belize'),
			array('code' => 'BJ', 'title' => 'Benin'),
			array('code' => 'BM', 'title' => 'Bermuda'),
			array('code' => 'BT', 'title' => 'Bhutan'),
			array('code' => 'BO', 'title' => 'Bolivia'),
			array('code' => 'BA', 'title' => 'Bosnia and Herzegovina'),
			array('code' => 'BW', 'title' => 'Botswana'),
			array('code' => 'BV', 'title' => 'Bouvet Island'),
			array('code' => 'BR', 'title' => 'Brazil'),
			array('code' => 'IO', 'title' => 'British lndian Ocean Territory'),
			array('code' => 'BN', 'title' => 'Brunei Darussalam'),
			array('code' => 'BG', 'title' => 'Bulgaria'),
			array('code' => 'BF', 'title' => 'Burkina Faso'),
			array('code' => 'BI', 'title' => 'Burundi'),
			array('code' => 'KH', 'title' => 'Cambodia'),
			array('code' => 'CM', 'title' => 'Cameroon'),
			array('code' => 'CV', 'title' => 'Cape Verde'),
			array('code' => 'KY', 'title' => 'Cayman Islands'),
			array('code' => 'CF', 'title' => 'Central African Republic'),
			array('code' => 'TD', 'title' => 'Chad'),
			array('code' => 'CL', 'title' => 'Chile'),
			array('code' => 'CN', 'title' => 'China'),
			array('code' => 'CX', 'title' => 'Christmas Island'),
			array('code' => 'CC', 'title' => 'Cocos (Keeling) Islands'),
			array('code' => 'CO', 'title' => 'Colombia'),
			array('code' => 'KM', 'title' => 'Comoros'),
			array('code' => 'CG', 'title' => 'Congo'),
			array('code' => 'CK', 'title' => 'Cook Islands'),
			array('code' => 'CR', 'title' => 'Costa Rica'),
			array('code' => 'HR', 'title' => 'Croatia (Hrvatska)'),
			array('code' => 'CU', 'title' => 'Cuba'),
			array('code' => 'CY', 'title' => 'Cyprus'),
			array('code' => 'CZ', 'title' => 'Czech Republic'),
			array('code' => 'CD', 'title' => 'Democratic Republic of Congo'),
			array('code' => 'DK', 'title' => 'Denmark'),
			array('code' => 'DJ', 'title' => 'Djibouti'),
			array('code' => 'DM', 'title' => 'Dominica'),
			array('code' => 'DO', 'title' => 'Dominican Republic'),
			array('code' => 'TP', 'title' => 'East Timor'),
			array('code' => 'EC', 'title' => 'Ecudaor'),
			array('code' => 'EG', 'title' => 'Egypt'),
			array('code' => 'SV', 'title' => 'El Salvador'),
			array('code' => 'GQ', 'title' => 'Equatorial Guinea'),
			array('code' => 'ER', 'title' => 'Eritrea'),
			array('code' => 'EE', 'title' => 'Estonia'),
			array('code' => 'ET', 'title' => 'Ethiopia'),
			array('code' => 'FK', 'title' => 'Falkland Islands (Malvinas)'),
			array('code' => 'FO', 'title' => 'Faroe Islands'),
			array('code' => 'FJ', 'title' => 'Fiji'),
			array('code' => 'FI', 'title' => 'Finland'),
			array('code' => 'FR', 'title' => 'France'),
			array('code' => 'FX', 'title' => 'France, Metropolitan'),
			array('code' => 'GF', 'title' => 'French Guiana'),
			array('code' => 'PF', 'title' => 'French Polynesia'),
			array('code' => 'TF', 'title' => 'French Southern Territories'),
			array('code' => 'GA', 'title' => 'Gabon'),
			array('code' => 'GM', 'title' => 'Gambia'),
			array('code' => 'GE', 'title' => 'Georgia'),
			array('code' => 'DE', 'title' => 'Germany'),
			array('code' => 'GH', 'title' => 'Ghana'),
			array('code' => 'GI', 'title' => 'Gibraltar'),
			array('code' => 'GR', 'title' => 'Greece'),
			array('code' => 'GL', 'title' => 'Greenland'),
			array('code' => 'GD', 'title' => 'Grenada'),
			array('code' => 'GP', 'title' => 'Guadeloupe'),
			array('code' => 'GU', 'title' => 'Guam'),
			array('code' => 'GT', 'title' => 'Guatemala'),
			array('code' => 'GN', 'title' => 'Guinea'),
			array('code' => 'GW', 'title' => 'Guinea-Bissau'),
			array('code' => 'GY', 'title' => 'Guyana'),
			array('code' => 'HT', 'title' => 'Haiti'),
			array('code' => 'HM', 'title' => 'Heard and Mc Donald Islands'),
			array('code' => 'HN', 'title' => 'Honduras'),
			array('code' => 'HK', 'title' => 'Hong Kong'),
			array('code' => 'HU', 'title' => 'Hungary'),
			array('code' => 'IS', 'title' => 'Iceland'),
			array('code' => 'IN', 'title' => 'India'),
			array('code' => 'ID', 'title' => 'Indonesia'),
			array('code' => 'IR', 'title' => 'Iran (Islamic Republic of)'),
			array('code' => 'IQ', 'title' => 'Iraq'),
			array('code' => 'IE', 'title' => 'Ireland'),
			array('code' => 'IL', 'title' => 'Israel'),
			array('code' => 'IT', 'title' => 'Italy'),
			array('code' => 'CI', 'title' => 'Ivory Coast'),
			array('code' => 'JM', 'title' => 'Jamaica'),
			array('code' => 'JP', 'title' => 'Japan'),
			array('code' => 'JO', 'title' => 'Jordan'),
			array('code' => 'KZ', 'title' => 'Kazakhstan'),
			array('code' => 'KE', 'title' => 'Kenya'),
			array('code' => 'KI', 'title' => 'Kiribati'),
			array('code' => 'KP', 'title' => 'Korea, Democratic People\'s Republic of'),
			array('code' => 'KR', 'title' => 'Korea, Republic of'),
			array('code' => 'KW', 'title' => 'Kuwait'),
			array('code' => 'KG', 'title' => 'Kyrgyzstan'),
			array('code' => 'LA', 'title' => 'Lao People\'s Democratic Republic'),
			array('code' => 'LV', 'title' => 'Latvia'),
			array('code' => 'LB', 'title' => 'Lebanon'),
			array('code' => 'LS', 'title' => 'Lesotho'),
			array('code' => 'LR', 'title' => 'Liberia'),
			array('code' => 'LY', 'title' => 'Libyan Arab Jamahiriya'),
			array('code' => 'LI', 'title' => 'Liechtenstein'),
			array('code' => 'LT', 'title' => 'Lithuania'),
			array('code' => 'LU', 'title' => 'Luxembourg'),
			array('code' => 'MO', 'title' => 'Macau'),
			array('code' => 'MK', 'title' => 'Macedonia'),
			array('code' => 'MG', 'title' => 'Madagascar'),
			array('code' => 'MW', 'title' => 'Malawi'),
			array('code' => 'MY', 'title' => 'Malaysia'),
			array('code' => 'MV', 'title' => 'Maldives'),
			array('code' => 'ML', 'title' => 'Mali'),
			array('code' => 'MT', 'title' => 'Malta'),
			array('code' => 'MH', 'title' => 'Marshall Islands'),
			array('code' => 'MQ', 'title' => 'Martinique'),
			array('code' => 'MR', 'title' => 'Mauritania'),
			array('code' => 'MU', 'title' => 'Mauritius'),
			array('code' => 'TY', 'title' => 'Mayotte'),
			array('code' => 'MX', 'title' => 'Mexico'),
			array('code' => 'FM', 'title' => 'Micronesia, Federated States of'),
			array('code' => 'MD', 'title' => 'Moldova, Republic of'),
			array('code' => 'MC', 'title' => 'Monaco'),
			array('code' => 'MN', 'title' => 'Mongolia'),
			array('code' => 'MS', 'title' => 'Montserrat'),
			array('code' => 'MA', 'title' => 'Morocco'),
			array('code' => 'MZ', 'title' => 'Mozambique'),
			array('code' => 'MM', 'title' => 'Myanmar'),
			array('code' => 'NA', 'title' => 'Namibia'),
			array('code' => 'NR', 'title' => 'Nauru'),
			array('code' => 'NP', 'title' => 'Nepal'),
			array('code' => 'NL', 'title' => 'Netherlands'),
			array('code' => 'AN', 'title' => 'Netherlands Antilles'),
			array('code' => 'NC', 'title' => 'New Caledonia'),
			array('code' => 'NZ', 'title' => 'New Zealand'),
			array('code' => 'NI', 'title' => 'Nicaragua'),
			array('code' => 'NE', 'title' => 'Niger'),
			array('code' => 'NG', 'title' => 'Nigeria'),
			array('code' => 'NU', 'title' => 'Niue'),
			array('code' => 'NF', 'title' => 'Norfork Island'),
			array('code' => 'MP', 'title' => 'Northern Mariana Islands'),
			array('code' => 'NO', 'title' => 'Norway'),
			array('code' => 'OM', 'title' => 'Oman'),
			array('code' => 'PK', 'title' => 'Pakistan'),
			array('code' => 'PW', 'title' => 'Palau'),
			array('code' => 'PA', 'title' => 'Panama'),
			array('code' => 'PG', 'title' => 'Papua New Guinea'),
			array('code' => 'PY', 'title' => 'Paraguay'),
			array('code' => 'PE', 'title' => 'Peru'),
			array('code' => 'PH', 'title' => 'Philippines'),
			array('code' => 'PN', 'title' => 'Pitcairn'),
			array('code' => 'PL', 'title' => 'Poland'),
			array('code' => 'PT', 'title' => 'Portugal'),
			array('code' => 'PR', 'title' => 'Puerto Rico'),
			array('code' => 'QA', 'title' => 'Qatar'),
			array('code' => 'SS', 'title' => 'Republic of South Sudan'),
			array('code' => 'RE', 'title' => 'Reunion'),
			array('code' => 'RO', 'title' => 'Romania'),
			array('code' => 'RU', 'title' => 'Russian Federation'),
			array('code' => 'RW', 'title' => 'Rwanda'),
			array('code' => 'KN', 'title' => 'Saint Kitts and Nevis'),
			array('code' => 'LC', 'title' => 'Saint Lucia'),
			array('code' => 'VC', 'title' => 'Saint Vincent and the Grenadines'),
			array('code' => 'WS', 'title' => 'Samoa'),
			array('code' => 'SM', 'title' => 'San Marino'),
			array('code' => 'ST', 'title' => 'Sao Tome and Principe'),
			array('code' => 'SA', 'title' => 'Saudi Arabia'),
			array('code' => 'SN', 'title' => 'Senegal'),
			array('code' => 'RS', 'title' => 'Serbia'),
			array('code' => 'SC', 'title' => 'Seychelles'),
			array('code' => 'SL', 'title' => 'Sierra Leone'),
			array('code' => 'SG', 'title' => 'Singapore'),
			array('code' => 'SK', 'title' => 'Slovakia'),
			array('code' => 'SI', 'title' => 'Slovenia'),
			array('code' => 'SB', 'title' => 'Solomon Islands'),
			array('code' => 'SO', 'title' => 'Somalia'),
			array('code' => 'ZA', 'title' => 'South Africa'),
			array('code' => 'GS', 'title' => 'South Georgia South Sandwich Islands'),
			array('code' => 'ES', 'title' => 'Spain'),
			array('code' => 'LK', 'title' => 'Sri Lanka'),
			array('code' => 'SH', 'title' => 'St. Helena'),
			array('code' => 'PM', 'title' => 'St. Pierre and Miquelon'),
			array('code' => 'SD', 'title' => 'Sudan'),
			array('code' => 'SR', 'title' => 'Suriname'),
			array('code' => 'SJ', 'title' => 'Svalbarn and Jan Mayen Islands'),
			array('code' => 'SZ', 'title' => 'Swaziland'),
			array('code' => 'SE', 'title' => 'Sweden'),
			array('code' => 'CH', 'title' => 'Switzerland'),
			array('code' => 'SY', 'title' => 'Syrian Arab Republic'),
			array('code' => 'TW', 'title' => 'Taiwan'),
			array('code' => 'TJ', 'title' => 'Tajikistan'),
			array('code' => 'TZ', 'title' => 'Tanzania, United Republic of'),
			array('code' => 'TH', 'title' => 'Thailand'),
			array('code' => 'TG', 'title' => 'Togo'),
			array('code' => 'TK', 'title' => 'Tokelau'),
			array('code' => 'TO', 'title' => 'Tonga'),
			array('code' => 'TT', 'title' => 'Trinidad and Tobago'),
			array('code' => 'TN', 'title' => 'Tunisia'),
			array('code' => 'TR', 'title' => 'Turkey'),
			array('code' => 'TM', 'title' => 'Turkmenistan'),
			array('code' => 'TC', 'title' => 'Turks and Caicos Islands'),
			array('code' => 'TV', 'title' => 'Tuvalu'),
			array('code' => 'UG', 'title' => 'Uganda'),
			array('code' => 'UA', 'title' => 'Ukraine'),
			array('code' => 'AE', 'title' => 'United Arab Emirates'),
			array('code' => 'GB', 'title' => 'United Kingdom'),
			array('code' => 'UM', 'title' => 'United States minor outlying islands'),
			array('code' => 'UY', 'title' => 'Uruguay'),
			array('code' => 'UZ', 'title' => 'Uzbekistan'),
			array('code' => 'VU', 'title' => 'Vanuatu'),
			array('code' => 'VA', 'title' => 'Vatican City State'),
			array('code' => 'VE', 'title' => 'Venezuela'),
			array('code' => 'VN', 'title' => 'Vietnam'),
			array('code' => 'VG', 'title' => 'Virgin Islands (British)'),
			array('code' => 'VI', 'title' => 'Virgin Islands (U.S.)'),
			array('code' => 'WF', 'title' => 'Wallis and Futuna Islands'),
			array('code' => 'EH', 'title' => 'Western Sahara'),
			array('code' => 'YE', 'title' => 'Yemen'),
			array('code' => 'YU', 'title' => 'Yugoslavia'),
			array('code' => 'ZR', 'title' => 'Zaire'),
			array('code' => 'ZM', 'title' => 'Zambia'),
			array('code' => 'ZW', 'title' => 'Zimbabwe'),
		);

		DB::table('product_categories')->insert($product_categories);
    }
}