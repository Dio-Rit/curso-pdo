<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f211683c88b15ecdd032fee18ab88d1
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dionatan\\CursoPdo\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dionatan\\CursoPdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f211683c88b15ecdd032fee18ab88d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f211683c88b15ecdd032fee18ab88d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f211683c88b15ecdd032fee18ab88d1::$classMap;

        }, null, ClassLoader::class);
    }
}
