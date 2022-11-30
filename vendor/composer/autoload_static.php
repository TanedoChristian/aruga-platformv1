<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf8f8e4147d9df9fb144c64fbfc9af3e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aruga\\Platform\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aruga\\Platform\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf8f8e4147d9df9fb144c64fbfc9af3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf8f8e4147d9df9fb144c64fbfc9af3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf8f8e4147d9df9fb144c64fbfc9af3e::$classMap;

        }, null, ClassLoader::class);
    }
}
