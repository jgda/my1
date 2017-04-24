<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53d859b41bf089de621dd4f8e0bbb678
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kevin\\My1\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kevin\\My1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53d859b41bf089de621dd4f8e0bbb678::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53d859b41bf089de621dd4f8e0bbb678::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
