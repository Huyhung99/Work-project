<?php
return [
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/viethung/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
