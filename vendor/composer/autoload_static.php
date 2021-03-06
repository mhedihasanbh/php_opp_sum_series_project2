<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf14c5538684abc0fdccdde0cdfd5b334
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf14c5538684abc0fdccdde0cdfd5b334::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf14c5538684abc0fdccdde0cdfd5b334::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf14c5538684abc0fdccdde0cdfd5b334::$classMap;

        }, null, ClassLoader::class);
    }
}
