<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'ic' => [
            'driver' => 'session',
            'provider' => 'ics',
        ],

        'stock' => [
            'driver' => 'session',
            'provider' => 'stocks',
        ],

        'tester' => [
            'driver' => 'session',
            'provider' => 'testers',
        ],

        'technician' => [
            'driver' => 'session',
            'provider' => 'technicians',
        ],

        'supervisor' => [
            'driver' => 'session',
            'provider' => 'supervisors',
        ],
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'ics' => [
            'driver' => 'eloquent',
            'model' => App\Ic::class,
        ],

        'stocks' => [
            'driver' => 'eloquent',
            'model' => App\Stock::class,
        ],

        'testers' => [
            'driver' => 'eloquent',
            'model' => App\Tester::class,
        ],

        'technicians' => [
            'driver' => 'eloquent',
            'model' => App\Technician::class,
        ],

        'supervisors' => [
            'driver' => 'eloquent',
            'model' => App\Supervisor::class,
        ],
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'ics' => [
            'provider' => 'ics',
            'table' => 'ic_password_resets',
            'expire' => 60,
        ],

        'stocks' => [
            'provider' => 'stocks',
            'table' => 'stock_password_resets',
            'expire' => 60,
        ],

        'testers' => [
            'provider' => 'testers',
            'table' => 'tester_password_resets',
            'expire' => 60,
        ],

        'technicians' => [
            'provider' => 'technicians',
            'table' => 'technician_password_resets',
            'expire' => 60,
        ],

        'supervisors' => [
            'provider' => 'supervisors',
            'table' => 'supervisor_password_resets',
            'expire' => 60,
        ],
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
