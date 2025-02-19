<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f30b2bd1e9c2e069c6cba4bbf61ff7b
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '449302b6385ad456f38f8e31ed40d59f' => __DIR__ . '/../..' . '/src/Controller.php',
        '5d7b21351c8afc8f0bbb1ee4c2d36a69' => __DIR__ . '/../..' . '/src/View.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6f30b2bd1e9c2e069c6cba4bbf61ff7b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6f30b2bd1e9c2e069c6cba4bbf61ff7b::$classMap;

        }, null, ClassLoader::class);
    }
}
