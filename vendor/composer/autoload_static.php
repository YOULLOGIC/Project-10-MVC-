<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite06abd97bed0fb0a03707cc6546ca9c4
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite06abd97bed0fb0a03707cc6546ca9c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite06abd97bed0fb0a03707cc6546ca9c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite06abd97bed0fb0a03707cc6546ca9c4::$classMap;

        }, null, ClassLoader::class);
    }
}
