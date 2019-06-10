<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7aa41b1d94b9fbcd7906a85e0fba1c3e
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Base64Url\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Base64Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/base64url/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7aa41b1d94b9fbcd7906a85e0fba1c3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7aa41b1d94b9fbcd7906a85e0fba1c3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}