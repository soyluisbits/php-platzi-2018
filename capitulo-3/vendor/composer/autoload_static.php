<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cfda399a7f2b51b2154f464cb382b97
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cfda399a7f2b51b2154f464cb382b97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cfda399a7f2b51b2154f464cb382b97::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
