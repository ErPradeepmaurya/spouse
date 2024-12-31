<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default admin "guard" and password reset options.
    | You may change these defaults as required, but they're a perfect
    | starting point for most applications.
    |
    */

    'defaults' => [
        'guard' => 'admin',
        'passwords' => 'admins',
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Here you may define every admin authentication guard for your application.
    | A great default configuration has been defined for you here which
    | uses session storage and the Eloquent admin provider.
    |
    */

    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | admins are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your admin's data.
    |
    | If you have multiple admin user tables or models, you may configure
    | multiple sources which represent each model/table. These sources may
    | then be assigned to any extra authentication guards you have defined.
    |
    */

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Admin Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple admin password reset configurations if you have
    | more than one admin table or model in the application and you want to
    | have separate password reset settings based on the specific admin types.
    |
    */

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
];
