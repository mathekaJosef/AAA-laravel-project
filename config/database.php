<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
<<<<<<< HEAD
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
=======
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        ],

        'mysql' => [
            'driver' => 'mysql',
<<<<<<< HEAD
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'pat'),
            'username' => env('DB_USERNAME', 'root'),
=======
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
<<<<<<< HEAD
            'strict' => true,
            'engine' => null,
=======
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        ],

        'pgsql' => [
            'driver' => 'pgsql',
<<<<<<< HEAD
=======
            'url' => env('DATABASE_URL'),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
<<<<<<< HEAD
=======
            'prefix_indexes' => true,
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
<<<<<<< HEAD
=======
            'url' => env('DATABASE_URL'),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
<<<<<<< HEAD
=======
            'prefix_indexes' => true,
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
<<<<<<< HEAD
    | provides a richer set of commands than a typical key-value systems
=======
    | provides a richer body of commands than a typical key-value system
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

<<<<<<< HEAD
        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
=======
        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        ],

    ],

];
