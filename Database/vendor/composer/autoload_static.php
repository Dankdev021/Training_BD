<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4515594ea382fc2a4f4f55d7ff03b592
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4515594ea382fc2a4f4f55d7ff03b592::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4515594ea382fc2a4f4f55d7ff03b592::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4515594ea382fc2a4f4f55d7ff03b592::$classMap;

        }, null, ClassLoader::class);
    }
}
