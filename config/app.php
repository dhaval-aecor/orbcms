<?php

return [
  'name' => env('APP_NAME', 'Laravel'),
  'env' => env('APP_ENV', 'production'),
  'debug' => (bool) env('APP_DEBUG', false),
  'url' => env('APP_URL', 'http://cmsweb.local/'),
  'login_url' => env('APP_LOGIN_URL', 'https://dev-orb.cotiqu.com.au/login'),
  'reg_url' => env('APP_REG_URL', 'https://dev-orb.cotiqu.com.au/register'),
  'asset_url' => env('ASSET_URL', null),
  'timezone' => env('APP_TIMEZONE', 'Europe/London'),
  'locale' => 'en_US',
  'fallback_locale' => 'en',
  'faker_locale' => 'en_US',
  'key' => env('APP_KEY','base64:jeHkp0JRo6W5rkdaZ81llQ/QezhUYA+TnT29aU7RYQU='),
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => [
    MicroweberPackages\App\Providers\AppServiceProvider::class,
    MicroweberPackages\App\Providers\EventServiceProvider::class,
    MicroweberPackages\App\Providers\RouteServiceProvider::class,
  ],
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
];
