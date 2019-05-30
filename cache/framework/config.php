<?php return array (
  'app' => 
  array (
    'APP_NAME' => 'test',
    'TIME_ZONE' => 'RPC',
    'url' => 'http://localhost/one',
    'template' => 'resource/template',
    'static' => 'static',
    'cookie' => 
    array (
      'expires' => 1559828559,
      'path' => '/',
      'domain' => NULL,
      'secure' => false,
      'httponly' => false,
    ),
    'session' => 
    array (
      'name' => 'BlankPhp',
      'driver' => 'file',
      'secure' => false,
    ),
    'Provider' => 
    array (
      0 => 'App\\Provider\\AppServiceProvider',
      1 => 'App\\Provider\\EventServiceProvider',
      2 => 'App\\Provider\\MiddleWareProvider',
      3 => 'App\\Provider\\RouteProvider',
    ),
  ),
  'db' => 
  array (
    'default' => 'mysql',
    'database' => 
    array (
      'mysql' => 
      array (
        'host' => '127.0.0.1',
        'driver' => 'mysql',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'database' => 'test',
        'username' => 'root',
        'password' => 'admin',
        'engine' => 'PDO',
      ),
      'redis' => 
      array (
        'host' => '127.0.0.1',
        'port' => '6379',
        'password' => NULL,
      ),
    ),
  ),
  'route' => 
  array (
    'web' => 
    array (
      0 => 'TokenMiddleWare',
    ),
    'api' => 
    array (
      0 => 'JWTMiddleWare',
    ),
  ),
);