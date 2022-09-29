<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit97f0c0e9a62e9af97407a79f9e58cb4c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit97f0c0e9a62e9af97407a79f9e58cb4c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit97f0c0e9a62e9af97407a79f9e58cb4c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit97f0c0e9a62e9af97407a79f9e58cb4c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
