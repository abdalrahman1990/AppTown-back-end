<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1675548805951130',
        'client_secret' => 'f64450ca342a56cee3a286a02188362c',
        'redirect' => 'http://localhost:8000/login/facebook/callback'
    ],

    'twitter' => [
        'client_id' => '1675548805951130',
        'client_secret' => 'f64450ca342a56cee3a286a02188362c',
        'redirect' => 'http://localhost:8000/login/twitter/callback'
    ],

    'google' => [
        'client_id' => '779825896379-jnehcmf152lk42k693gon0kqdoi6h003.apps.googleusercontent.com',
        'client_secret' => 'wvPg2q-S0ryWNJm4aIE2U2N3',
        'redirect' => 'http://localhost:8000/login/google/callback'
    ],

];
