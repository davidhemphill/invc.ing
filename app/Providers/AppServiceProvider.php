<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('currencies', function ($value) {
            return [
                [
                    'label' => 'Common',
                    'values' => [
                        'USD' => 'United States Dollar',
                        'CAD' => 'Canada Dollar',
                        'EUR' => 'Euro Member Countries',
                        'GBP' => 'United Kingdom Pound',
                    ]
                ],
                [
                    'label' => 'All',
                    'values' => [
                        'AFN' => 'Afghanistan Afghani',
                        'ALL' => 'Albania Lek',
                        'ANG' => 'Netherlands Antilles Guilder',
                        'ARS' => 'Argentina Peso',
                        'AUD' => 'Australia Dollar',
                        'AWG' => 'Aruba Guilder',
                        'AZN' => 'Azerbaijan New Manat',
                        'BAM' => 'Bosnia and Herzegovina Convertible Marka',
                        'BBD' => 'Barbados Dollar',
                        'BDT' => 'Bangladeshi taka',
                        'BGN' => 'Bulgaria Lev',
                        'BMD' => 'Bermuda Dollar',
                        'BND' => 'Brunei Darussalam Dollar',
                        'BOB' => 'Bolivia Boliviano',
                        'BRL' => 'Brazil Real',
                        'BSD' => 'Bahamas Dollar',
                        'BWP' => 'Botswana Pula',
                        'BYR' => 'Belarus Ruble',
                        'BZD' => 'Belize Dollar',
                        'CAD' => 'Canada Dollar',
                        'CHF' => 'Switzerland Franc',
                        'CLP' => 'Chile Peso',
                        'CNY' => 'China Yuan Renminbi',
                        'COP' => 'Colombia Peso',
                        'CRC' => 'Costa Rica Colon',
                        'CUP' => 'Cuba Peso',
                        'CZK' => 'Czech Republic Koruna',
                        'DKK' => 'Denmark Krone',
                        'DOP' => 'Dominican Republic Peso',
                        'EEK' => 'Estonia Kroon',
                        'EGP' => 'Egypt Pound',
                        'EUR' => 'Euro Member Countries',
                        'FJD' => 'Fiji Dollar',
                        'FKP' => 'Falkland Islands (Malvinas) Pound',
                        'GBP' => 'United Kingdom Pound',
                        'GGP' => 'Guernsey Pound',
                        'GHC' => 'Ghana Cedis',
                        'GIP' => 'Gibraltar Pound',
                        'GTQ' => 'Guatemala Quetzal',
                        'GYD' => 'Guyana Dollar',
                        'HKD' => 'Hong Kong Dollar',
                        'HNL' => 'Honduras Lempira',
                        'HRK' => 'Croatia Kuna',
                        'HUF' => 'Hungary Forint',
                        'IDR' => 'Indonesia Rupiah',
                        'ILS' => 'Israel Shekel',
                        'IMP' => 'Isle of Man Pound',
                        'INR' => 'India Rupee',
                        'IRR' => 'Iran Rial',
                        'ISK' => 'Iceland Krona',
                        'JEP' => 'Jersey Pound',
                        'JMD' => 'Jamaica Dollar',
                        'JPY' => 'Japan Yen',
                        'KGS' => 'Kyrgyzstan Som',
                        'KHR' => 'Cambodia Riel',
                        'KPW' => 'Korea (North) Won',
                        'KRW' => 'Korea (South) Won',
                        'KYD' => 'Cayman Islands Dollar',
                        'KZT' => 'Kazakhstan Tenge',
                        'LAK' => 'Laos Kip',
                        'LBP' => 'Lebanon Pound',
                        'LKR' => 'Sri Lanka Rupee',
                        'LRD' => 'Liberia Dollar',
                        'LTL' => 'Lithuania Litas',
                        'LVL' => 'Latvia Lat',
                        'MKD' => 'Macedonia Denar',
                        'MNT' => 'Mongolia Tughrik',
                        'MUR' => 'Mauritius Rupee',
                        'MXN' => 'Mexico Peso',
                        'MYR' => 'Malaysia Ringgit',
                        'MZN' => 'Mozambique Metical',
                        'NAD' => 'Namibia Dollar',
                        'NGN' => 'Nigeria Naira',
                        'NIO' => 'Nicaragua Cordoba',
                        'NOK' => 'Norway Krone',
                        'NPR' => 'Nepal Rupee',
                        'NZD' => 'New Zealand Dollar',
                        'OMR' => 'Oman Rial',
                        'PAB' => 'Panama Balboa',
                        'PEN' => 'Peru Nuevo Sol',
                        'PHP' => 'Philippines Peso',
                        'PKR' => 'Pakistan Rupee',
                        'PLN' => 'Poland Zloty',
                        'PYG' => 'Paraguay Guarani',
                        'QAR' => 'Qatar Riyal',
                        'RON' => 'Romania New Leu',
                        'RSD' => 'Serbia Dinar',
                        'RUB' => 'Russia Ruble',
                        'SAR' => 'Saudi Arabia Riyal',
                        'SBD' => 'Solomon Islands Dollar',
                        'SCR' => 'Seychelles Rupee',
                        'SEK' => 'Sweden Krona',
                        'SGD' => 'Singapore Dollar',
                        'SHP' => 'Saint Helena Pound',
                        'SOS' => 'Somalia Shilling',
                        'SRD' => 'Suriname Dollar',
                        'SVC' => 'El Salvador Colon',
                        'SYP' => 'Syria Pound',
                        'THB' => 'Thailand Baht',
                        'TRL' => 'Turkey Lira',
                        'TRY' => 'Turkey Lira',
                        'TTD' => 'Trinidad and Tobago Dollar',
                        'TVD' => 'Tuvalu Dollar',
                        'TWD' => 'Taiwan New Dollar',
                        'UAH' => 'Ukraine Hryvna',
                        'USD' => 'United States Dollar',
                        'UYU' => 'Uruguay Peso',
                        'UZS' => 'Uzbekistan Som',
                        'VEF' => 'Venezuela Bolivar',
                        'VND' => 'Viet Nam Dong',
                        'XCD' => 'East Caribbean Dollar',
                        'YER' => 'Yemen Rial',
                        'ZAR' => 'South Africa Rand',
                        'ZWD' => 'Zimbabwe Dollar'
                    ]
                ],
            ];
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
