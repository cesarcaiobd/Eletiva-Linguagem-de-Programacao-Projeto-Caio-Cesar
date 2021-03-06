<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite46b057577da70f027340df224061397
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\ProjetoPhp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\ProjetoPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite46b057577da70f027340df224061397::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite46b057577da70f027340df224061397::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite46b057577da70f027340df224061397::$classMap;

        }, null, ClassLoader::class);
    }
}
