<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd28dac4d6e1326233c9d6578b05ae13e
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '64066d6642c58ac09523063f34a9f383' => __DIR__ . '/..' . '/tamtamchik/namecase/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tamtamchik\\NameCase\\' => 20,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
            'Dompdf\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tamtamchik\\NameCase\\' => 
        array (
            0 => __DIR__ . '/..' . '/tamtamchik/namecase/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
        'S' => 
        array (
            'Svg\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src',
            ),
        ),
        'F' => 
        array (
            'FontLib\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-font-lib/src',
            ),
        ),
    );

    public static $classMap = array (
        'Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd28dac4d6e1326233c9d6578b05ae13e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd28dac4d6e1326233c9d6578b05ae13e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd28dac4d6e1326233c9d6578b05ae13e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd28dac4d6e1326233c9d6578b05ae13e::$classMap;

        }, null, ClassLoader::class);
    }
}
