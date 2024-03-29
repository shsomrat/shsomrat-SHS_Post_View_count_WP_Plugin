<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit44c03c455c5fa1e4299625096e2ceafe
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

        spl_autoload_register(array('ComposerAutoloaderInit44c03c455c5fa1e4299625096e2ceafe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit44c03c455c5fa1e4299625096e2ceafe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit44c03c455c5fa1e4299625096e2ceafe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}