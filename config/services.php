<?php

return [



    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook'=>[
        'client_id' => env('FB_KEY'),
        'client_secret' => env('FB_SECRET'),
        'redirect' => env('FB_REDIRECT_URI'),
    ],
    'twitter'=>[
        'client_id' => env('TW_KEY'),
        'client_secret' => env('TW_SECRET'),
        'redirect' => env('TW_REDIRECT_URI'),
    ],
    'linkedin'=>[

        'client_id' => env('LN_KEY'),
        'client_secret' => env('LN_SECRET'),
        'redirect' => env('LN_REDIRECT_URI'),
    ],
    'vkontakte'=>[
        'client_id' => env('VKONTAKTE_KEY'),
        'client_secret' => env('VKONTAKTE_SECRET'),
        'redirect' => env('VKONTAKTE_REDIRECT_URI'),
    ],
    'google'=>[
        'client_id' => env('GG_KEY'),
        'client_secret' => env('GG_SECRET'),
        'redirect' => env('GG_REDIRECT_URI'),
    ],
    'odnoklassniki' => [
        'client_id' => env('ODNOKLASSNIKI_ID'),
        'client_secret' => env('ODNOKLASSNIKI_SECRET'),
        'redirect' => env('ODNOKLASSNIKI_REDIRECT'),
    ],



];
