<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language'=>'vi',
    'modules' => [
        'gridview' => [ 'class' => '\kartik\grid\Module' ],
        'backuprestore' => [ 'class' => '\oe\modules\backuprestore\Module']
    ],
    'name' => 'Quản lý học viên',
    'components' => [
        'mail' => [
            'class' => 'yashop\ses\Mailer',
            'access_key' => 'AKIAIF47GOAH7TA26BKQ',// '',//'AKIAJRGM5I5NSEIKG53A',
            'secret_key' => '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',//'',//'Nq8TbCGeMtlVq5PPr/9900uo0sx2bUWVfmyPpEae',
            //'host' => 'eu-west-1.amazonses.com' // not required
        ],
        'translate' => [
            'class' => 'richweber\google\translate\Translation',
            'key' => 'AIzaSyCgGetWQ-yGXBdM5EsnUouEc3hASAofJAI',
        ],
//        'youtube' => [
//            'class' => \sr1871\youtubeApi\components\YoutubeApi::className(),
//            'clientId' => '{your Oauth Client Id, you can get it from google console}',
//            'clientSecret' => '{your Oauth Client Secret, you can get it from google console}',
//            'setAccessTokenFunction' => function($client){ file_put_contents('pathFile.txt'json_encode($client->getAccessToken());}, //anonymous function where save the accesToken
//            'getAccessTokenFunction' => function(){ return file_get_contents('pathFile.txt');}, // an anonymous function where get the accessToken
//            'scopes' => ['{scopes that you going to use}', '{as array}'],
//        ],
//        'mail' => [
//            'class' => 'yashop\ses\Mailer',
//            'access_key' => 'AKIAINSKQYLDLXGOLLWA',
//            'secret_key' => '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',
//            'host' => 'email-smtp.eu-west-1.amazonaws.com' // not required
//        ],
        'mailer' => [
            'class' => 'boundstate\mailgun\Mailer',
            'key' => 'f63796ff053dba3d0d4dc262fdd31826-6140bac2-7d69294a',
            'domain' => 'app.ranvang.com',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'nullDisplay' => '',
        ],
        'view' => [
//            'theme' => [
//                'pathMap' => [
//                    '@app/views' => '@backend/themes/qltk2'
//                ],
//            ],
        ],
//        'assetManager' => [
//            'bundles' => [
//                'dmstr\web\AdminLteAsset' => [
//                    'skin' => 'skin-black',
//                ],
//            ],
//        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

            ],
        ],

    ],
    'params' => $params,
];
