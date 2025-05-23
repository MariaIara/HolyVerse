<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f5a7a702f011b460c13bbbea2d8e1ea
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hefestos\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hefestos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
            1 => __DIR__ . '/..' . '/brunoggdev/hefestosphp-core/src/system',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
            1 => __DIR__ . '/..' . '/brunoggdev/hefestosphp-core/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f5a7a702f011b460c13bbbea2d8e1ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f5a7a702f011b460c13bbbea2d8e1ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f5a7a702f011b460c13bbbea2d8e1ea::$classMap;

        }, null, ClassLoader::class);
    }
}
