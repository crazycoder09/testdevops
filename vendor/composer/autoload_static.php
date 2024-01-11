<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita93b39e60425b795785e711ce1512a51
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pc50\\Testdevops\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pc50\\Testdevops\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita93b39e60425b795785e711ce1512a51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita93b39e60425b795785e711ce1512a51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita93b39e60425b795785e711ce1512a51::$classMap;

        }, null, ClassLoader::class);
    }
}
