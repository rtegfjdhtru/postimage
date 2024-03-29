<?php

return array(
    'active' => 'testdb',
    /**
     * Base config, just need to set the DSN, username and password in env. config.
     */

    'default' => array(
        'type' => 'pdo',
        'connection' => array(
            'persistent' => false,
        ),
        'identifier' => '`',
        'table_prefix' => '',
        'charset' => 'utf8',
        'enable_cache' => true,
        'profiling' => false,
    ),

    'redis' => array(
        'default' => array(
            'hostname' => '127.0.0.1',
            'port' => 6379,
        )
    ),

    'testdb' => array(
        'type' => 'mysqli',
        'connection' => array(
            'hostname' => 'localhost',
            'database' => 'postImage',
            'username' => 'root',
            'password' => 'root',
            'persistent' => FALSE,
        ),
        'identifier' => '`',
        'profiling'  => true,
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => false,
        'profiling' => true,
    ),

);