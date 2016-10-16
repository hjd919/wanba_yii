<?php
return [
    'components' => [
        'db'     => [
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=60.205.58.24;dbname=wulimi',
            'username' => 'super_hjd',
            'password' => 'Dev~!@#Hjd919',
            'charset'  => 'utf8',
        ],
        'mailer' => [
            'class'            => 'yii\swiftmailer\Mailer',
            'viewPath'         => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
