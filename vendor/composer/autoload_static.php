<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50d8ac0ff263eabbb26be3b6942b2e0c
{
    public static $files = array (
        'c594688b3441835d5575f3085da4a242' => __DIR__ . '/..' . '/webonyx/graphql-php/src/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StarWar\\' => 8,
        ),
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StarWar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/StarWar',
        ),
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50d8ac0ff263eabbb26be3b6942b2e0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50d8ac0ff263eabbb26be3b6942b2e0c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
