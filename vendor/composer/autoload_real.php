<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit32afef5f3d11e1a4f7ac8e29e888cd6d
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

        spl_autoload_register(array('ComposerAutoloaderInit32afef5f3d11e1a4f7ac8e29e888cd6d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit32afef5f3d11e1a4f7ac8e29e888cd6d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit32afef5f3d11e1a4f7ac8e29e888cd6d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
