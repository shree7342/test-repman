<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c6f59ce7a835fc0ea981e589ce5a2c7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sthombare\\TestRepman\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sthombare\\TestRepman\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c6f59ce7a835fc0ea981e589ce5a2c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c6f59ce7a835fc0ea981e589ce5a2c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c6f59ce7a835fc0ea981e589ce5a2c7::$classMap;

        }, null, ClassLoader::class);
    }
}
