<?php
return [
    'name'       => '管理平台',
    'language'   => 'zh-CN',
    'timeZone'   => 'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules'    => [
        'user' => [
            'class'    => 'dektrium\user\Module',
            'admins'   => ['admin'],
            'modelMap' => [
                // 'User' => 'common\models\User',
            ],
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
    ],
    'components' => [
        'cache'       => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class'        => 'dektrium\rbac\components\DbManager',
            'defaultRoles' => ['admin'],
        ],
    ],
];
