<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite37a4648ee427f3ef851d1c012865c6b
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite37a4648ee427f3ef851d1c012865c6b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
