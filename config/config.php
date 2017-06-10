<?php
return [
    'cacheNamespace' => '_web3',
    'crypto' => [
        // the key and seed should be a minimum of 32 random generated bytes
        'key' => '***REPLACE***', // used as the key for encryption
        'seed' => '***REPLACE***', // used as the seed for hashing like hmac
    ],
    // the key is the LOWERCASE domain to blacklist, the value is something non-null
    'blacklistedDomains' => [],
    'allowImpersonation' => false, // MUST BE OFF ON LIVE AT ALL TIMES. usage: /impersonate?user=Cene or /impersonate?userId=12
    'profile' => [
        'nameChangeLimit' => 0
    ],
    'android' => [
        'app' => ''
    ],
    'links' => [],
    'privateKeys' => [
        'chat' => '',
        'minecraft' => '',
        'api' => '',
    ],
    'chat' => [
        'uri' => '',
        'privatekey' => ''
    ],
    'images' => [
        'path'          => _BASEDIR . '/static/cache/',
        'uri'           => '/cache',
    ],
    'redis' => [
        'host'          => 'localhost',
        'port'          => 6379,
        'database'      => 0,
        'scriptdir'     => _BASEDIR . '/scripts/redis/',
    ],
    'curl' => [
        'verifypeer'     => false,
        'timeout'        => 30,
        'connecttimeout' => 5
    ],
    'authProfiles' => [
        'twitch',
        'google',
        'twitter',
        'reddit'
    ],
    'oauth' => [
        'callback' => '/%s',
        'providers' => [
            'google' => [
                'clientId' => '',
                'clientSecret' => ''
            ],
            'twitch' => [
                'clientId' => '',
                'clientSecret' => ''
            ],
            'twitter' => [
                'clientId' => '',
                'clientSecret' => '',
            ],
            'reddit' => [
                'clientId' => '',
                'clientSecret' => '',
            ]
        ]
    ],
    'cdn' => [
        'domain' => ''
    ],
    'cookie' => [
        'domain'    => '',
        'path'      => '/',
        'secure'    => false,
        'httponly'  => true,
    ],
    'tpl' => [
        'path' => _BASEDIR . '/views/',
    ],
    'log' => [
        'path' => _BASEDIR . '/log/'
    ],
    'cache' => [
        'path' => _BASEDIR . '/tmp/'
    ],
    'db' => [
        'driver'        => 'pdo_mysql',
        'host'          => '',
        'user'          => '',
        'dbname'        => '',
        'password'      => '',
        'charset'       => 'UTF8',
        'driverOptions' => [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8,time_zone = \'+0:00\'']
    ],
    'meta' => [
        'shortName'      => 'Website',
        'title'          => 'Website - probably the best',
        'author'         => 'John Doe',
        'description'    => 'John Doe is a professional streamer',
        'keywords'       => 'John Doe,Some,Other,Keywords',
        'video'          => '',
        'videoSecureUrl' => '',
        'image'          => ''
    ],
    'paypal' => [
        'support_email' => '',
        'email' => '',
        'name' => '',
        'api' => [
            'endpoint' => '',
            'ipn' => ''
        ]
    ],
    'youtube' => [
        'apikey' => '',
        'playlistId' => '',
        'user' => ''
    ],
    'analytics' => [
        'account' => '',
        'domainName' => ''
    ],
    'googleads' => [
        '300x250' => [
            'google_ad_client' => '',
            'google_ad_slot' => ''
        ]
    ],
    'g-recaptcha' => [
        'key' => '',
        'secret' => '',
    ],
    'google-verification' => '',
    'calendar' => '',
    'lastfm' => [
        'apikey' => '',
        'user' => ''
    ],
    'twitch' => [
        'id' => -1,
        'user' => ''
    ],
    'twitter' => [
        'user' => '',
    ],
    'subscriptionType' => 'website',
    'commerce' => [
        'receiver_email' => '',
        'currency' => 'USD',
        'subscriptions' => [
            '1-MONTH-SUB' => [
                'id'                => '1-MONTH-SUB',
                'tier'              => 1,
                'tierLabel'         => 'Tier I',
                'itemLabel'         => 'Tier 1 (1 month)',
                'agreement'         => '$5.00 (per month) recurring subscription',
                'amount'            => '5.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB' => [
                'id'                => '3-MONTH-SUB',
                'tier'              => 1,
                'tierLabel'         => 'Tier I',
                'itemLabel'         => 'Tier 1 (3 month)',
                'agreement'         => '$12.00 (per 3 months) recurring subscription',
                'amount'            => '12.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ],
            '1-MONTH-SUB2' => [
                'id'                => '1-MONTH-SUB2',
                'tier'              => 2,
                'tierLabel'         => 'Tier II',
                'itemLabel'         => 'Tier 2 (1 month)',
                'agreement'         => '$10.00 (per month) recurring subscription',
                'amount'            => '10.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB2' => [
                'id'                => '3-MONTH-SUB2',
                'tier'              => 2,
                'tierLabel'         => 'Tier II',
                'itemLabel'         => 'Tier 2 (3 month)',
                'agreement'         => '$24.00 (per 3 months) recurring subscription',
                'amount'            => '24.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ],
            '1-MONTH-SUB3' => [
                'id'                => '1-MONTH-SUB3',
                'tier'              => 3,
                'tierLabel'         => 'Tier III',
                'itemLabel'         => 'Tier 3 (1 month)',
                'agreement'         => '$20.00 (per month) recurring subscription',
                'amount'            => '20.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB3' => [
                'id'                => '3-MONTH-SUB3',
                'tier'              => 3,
                'tierLabel'         => 'Tier III',
                'itemLabel'         => 'Tier 3 (3 month)',
                'agreement'         => '$48.00 (per 3 months) recurring subscription',
                'amount'            => '48.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ],
            '1-MONTH-SUB4' => [
                'id'                => '1-MONTH-SUB4',
                'tier'              => 4,
                'tierLabel'         => 'Tier IV',
                'itemLabel'         => 'Tier 4 (1 month)',
                'agreement'         => '$40.00 (per month) recurring subscription',
                'amount'            => '40.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB4' => [
                'id'                => '3-MONTH-SUB4',
                'tier'              => 4,
                'tierLabel'         => 'Tier IV',
                'itemLabel'         => 'Tier 4 (3 month)',
                'agreement'         => '$96.00 (per 3 months) recurring subscription',
                'amount'            => '96.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ]
        ]
    ]
];
