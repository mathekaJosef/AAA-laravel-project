<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
<<<<<<< HEAD
    | Supported: "apc", "array", "database", "file", "memcached", "redis"
=======
    | Supported: "apc", "array", "database", "file",
    |            "memcached", "redis", "dynamodb"
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
<<<<<<< HEAD
=======
            'serialize' => false,
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
<<<<<<< HEAD
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
=======
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
<<<<<<< HEAD
            'connection' => 'default',
=======
            'connection' => 'cache',
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */

<<<<<<< HEAD
    'prefix' => 'laravel',
=======
    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache'),
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5

];
