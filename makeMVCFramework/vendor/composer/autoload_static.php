<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bf093417e565febaba4c8a0c2239587
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bf093417e565febaba4c8a0c2239587::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bf093417e565febaba4c8a0c2239587::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6bf093417e565febaba4c8a0c2239587::$classMap;

        }, null, ClassLoader::class);
    }
}
