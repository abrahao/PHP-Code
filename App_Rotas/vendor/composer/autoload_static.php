<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9e896a09bcea65ed71bf5312962b318
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Abrahaoeneias\\AppRotas\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Abrahaoeneias\\AppRotas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9e896a09bcea65ed71bf5312962b318::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9e896a09bcea65ed71bf5312962b318::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9e896a09bcea65ed71bf5312962b318::$classMap;

        }, null, ClassLoader::class);
    }
}
