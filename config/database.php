<?php return array (
  'fetch' => 8,
  'default' => 'mysql',
  'connections' =>
  array (
    'sqlite' =>
    array (
      'driver' => 'sqlite',
      'database' => storage_path().DIRECTORY_SEPARATOR.'database.sqlite',
      'prefix' => '',
    ),
    'mysql' =>
    array (
      'driver' => 'mysql',
      'host' => env('DB_HOST', '127.0.0.1'),
      'database' => env('DB_DATABASE', 'cms_web'),
      'username' => env('DB_USERNAME', 'root'),
      'password' => env('DB_PASSWORD', ''),
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => 'cmsweb_',
      'strict' => false,
    ),
    'pgsql' =>
    array (
      'driver' => 'pgsql',
      'host' => 'localhost',
      'database' => 'forge',
      'username' => 'forge',
      'password' => '',
      'charset' => 'utf8',
      'prefix' => '',
      'schema' => 'public',
    ),
    'sqlsrv' =>
    array (
      'driver' => 'sqlsrv',
      'host' => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'prefix' => '',
    ),
  ),
  'migrations' => 'migrations',
  'redis' =>
  array (
    'cluster' => false,
    'default' =>
    array (
      'host' => '127.0.0.1',
      'port' => 6379,
      'database' => 0,
    ),
  ),
);
