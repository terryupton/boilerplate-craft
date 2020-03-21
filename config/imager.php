<?php

return array(
    '*'       => [
        // ------------------------------------------------------------
        // Environment: ALL
        // ------------------------------------------------------------
        // 'fillAttribute' => 'width',
        //        'fillInterval' => '300',


        'imagerSystemPath' => '@webroot/transforms/',
        'imagerUrl'        => '@web/transforms/',
        //      'transformer' => 'craft',

        'cacheEnabled'             => true,
        'cacheDuration'            => 31536000, // 1 year
        'cacheDurationRemoteFiles' => 31536000, // 1 year


        //      'hashPath' => true
        'useCwebp'                 => true,
        'jpegQuality'              => 80,
        'pngCompressionLevel'      => 0,

        'allowUpscale'         => false,
        'smartResizeEnabled'   => false,
        'removeMetadata'       => true,
        'filenamePattern'      => '{basename}-{transformString|shorthash}.{extension}',
        // 'fillTransforms'       => true,
        // 'fillInterval'         => '300',

        // Settings for optimising the transform speeds
        'resizeFilter'         => 'lanczos',
        'instanceReuseEnabled' => true,

        'interlace' => 'line',

        'optimizers' => ['mozjpeg', 'pngquant', 'optipng'],

        'optimizerConfig' => [
            'mozjpeg'  => [
                'extensions'   => ['jpg'],
                'path'         => '/usr/bin/mozjpeg',
                'optionString' => '-optimize -copy none',
            ],
            'optipng'  => [
                'extensions'   => ['png'],
                'path'         => '/usr/bin/optipng',
                'optionString' => '-o2 -strip all',
            ],
            'pngquant' => [
                'extensions'   => ['png'],
                'path'         => '/usr/bin/pngquant',
                'optionString' => '--strip --skip-if-larger',
            ],
        ]
    ],

    // Dev environment settings
    'local'   => [
        // 'filenamePattern' => '{fullname}.{extension}',
        // 'cwebpPath' => '/usr/local/bin/cwebp',
        'useCwebp' => false,

        'optimizerConfig' => [
            'mozjpeg'  => [
                'extensions'   => ['jpg'],
                'path'         => '/usr/local/bin/mozjpeg',
                'optionString' => '-optimize -copy none',
            ],
            'optipng'  => [
                'extensions'   => ['png'],
                'path'         => '/usr/local/bin/optipng',
                'optionString' => '-o2 -strip all',
            ],
            'pngquant' => [
                'extensions'   => ['png'],
                'path'         => '/usr/local/bin/pngquant',
                'optionString' => '--strip --skip-if-larger',
            ],
        ]
    ],

    // Staging environment settings
    'staging' => [

    ],

    // Live environment settings
    'live'    => [

    ],

);