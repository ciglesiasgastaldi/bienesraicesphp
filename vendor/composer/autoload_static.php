<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c34040022339e8db97a70747051098b
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
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c34040022339e8db97a70747051098b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c34040022339e8db97a70747051098b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c34040022339e8db97a70747051098b::$classMap;

        }, null, ClassLoader::class);
    }
}
