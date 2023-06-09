<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc143994ffe469e972feda22ab2701dda
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Urbikas\\Bankas3\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Urbikas\\Bankas3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc143994ffe469e972feda22ab2701dda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc143994ffe469e972feda22ab2701dda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc143994ffe469e972feda22ab2701dda::$classMap;

        }, null, ClassLoader::class);
    }
}
