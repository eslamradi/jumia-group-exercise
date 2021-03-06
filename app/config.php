<?php

use Core\Container;
use Core\Definitions\ConfigInterface;
use Core\Lib\Config;
use Core\Lib\SqliteConnection;
use Psr\Container\ContainerInterface;

/**
 * Attach app config intsance to container
 */
return function (Container $container) {
    $container->set(ConfigInterface::class, function(ContainerInterface $c) {
        $config = new Config([
            'db' => [
                'driver' => SqliteConnection::class,
                'credentials' => [
                    'path' => BASEDIR .'database/sample.db'
                ]
            ],
            'countries' => [
                'Cameroon' => [
                    'code' => '+237',
                    'regex' => '\(237\)\ ?[2368]\d{7,8}$'
                ],
                'Ethiopia' => [
                    'code' => '+251',
                    'regex' => '\(251\)\ ?[1-59]\d{8}$'
                ],
                'Morocco' => [
                    'code' => '+212',
                    'regex' => '\(212\)\ ?[5-9]\d{8}$'
                ],
                'Mozambique' => [
                    'code' => '+258',
                    'regex' => '\(258\)\ ?[28]\d{7,8}$'
                ],
                'Uganda' => [
                    'code' => '+256',
                    'regex' => '\(256\)\ ?\d{9}$'
                ]
            ]
        ]);
        return $config;
    });
};