<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit80ce4473100edd20fd6c17775a76ce9a
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

        spl_autoload_register(array('ComposerAutoloaderInit80ce4473100edd20fd6c17775a76ce9a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit80ce4473100edd20fd6c17775a76ce9a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit80ce4473100edd20fd6c17775a76ce9a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}