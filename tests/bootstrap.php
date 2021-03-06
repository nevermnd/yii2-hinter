<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@tests', __DIR__);

new \yii\web\Application([
    'id'         => 'test',
    'basePath'   => __DIR__,
    'vendorPath' => __DIR__ . '/../vendor',
    'components' => [
        'assetManager' => [
            'class'    => 'nevermnd\hinter\tests\AssetManager',
            'basePath' => '@tests/assets',
            'baseUrl'  => '/',
        ]
    ]
]);
