<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b383653e90b14e1e616f9a6f3a26bb0
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Pheanstalk\\' => 11,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Pheanstalk\\' => 
        array (
            0 => __DIR__ . '/..' . '/pda/pheanstalk/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b383653e90b14e1e616f9a6f3a26bb0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b383653e90b14e1e616f9a6f3a26bb0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
