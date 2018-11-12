<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
            'linkAssets'=> true,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // 一定不要发布该资源
                    'js' => [
                        YII_ENV_DEV ?
                            'https://cdn.staticfile.org/jquery/3.3.1/jquery.js'
                            : 'https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js',
                    ]
                ],
            ],
            'converter' => [
                'class' => 'yii\web\AssetConverter'
            ]
        ],
		//文件缓存组件
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        //memcache缓存组件 我们的框架用到了memcache缓存哦，所以需要配置这个
        'memcache' => [
            'class' => 'yii\caching\MemCache',
            'useMemcached' => true, //这里简单说明一下 0是memcache, 1是memcached 两个是php里不同的扩展
            'servers' => [
                [
                    'host' => '127.0.0.1',
                    'port' => 11211,
                    'weight' => 100,
                ]
            ],
        ],
        'db' => require(__DIR__ . '/db.php')
    ],
];
