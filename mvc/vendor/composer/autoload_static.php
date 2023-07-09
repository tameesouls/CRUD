<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4649a74afa24e0f36847bae043296f49
{
    public static $classMap = array (
        'ComposerAutoloaderInit4649a74afa24e0f36847bae043296f49' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit4649a74afa24e0f36847bae043296f49' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\Database\\Connect' => __DIR__ . '/../..' . '/app/Database/Connect.php',
        'app\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/app/Database/QueryBuilder.php',
        'app\\controller\\AppController' => __DIR__ . '/../..' . '/app/controller/AppController.php',
        'core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4649a74afa24e0f36847bae043296f49::$classMap;

        }, null, ClassLoader::class);
    }
}