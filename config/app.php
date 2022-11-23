<?php

return [
  'name' => env('APP_NAME', 'Laravel'),
  'env' => env('APP_ENV', 'production'),
  'debug' => (bool) env('APP_DEBUG', false),
  'url' => env('APP_URL', 'http://cmsweb.local/'),
  'asset_url' => env('ASSET_URL', null),
  'timezone' => env('APP_TIMEZONE', 'Europe/London'),
  'locale' => 'en_US',
  'fallback_locale' => 'en',
  'faker_locale' => 'en_US',
  'key' => env('APP_KEY'),
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => [
    MicroweberPackages\App\Providers\AppServiceProvider::class,
    MicroweberPackages\App\Providers\EventServiceProvider::class,
    MicroweberPackages\App\Providers\RouteServiceProvider::class,
  ],
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
];
