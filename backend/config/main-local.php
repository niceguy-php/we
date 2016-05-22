<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1G7mZ4Pe0g_8JzimJ9JxuYS_BJL9Y7N5',
        ],
    ],
    'modules' => [  
        'gridview' => [
            'class' => 'kartik\grid\Module',
        ],
        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',
 
            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'Y-m-d',
                'time' => 'H:i:s A',
                'datetime' => 'Y-m-d H:i:s A',
            ],
 
            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'Y-m-d', 
                'time' => 'H:i:s',
                'datetime' => 'Y-m-d H:i:s',
            ],
 
 
 
            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
 
        ]

    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    /*$config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];*/

    //change it to
    $config['modules']['gii']['class'] = 'yii\gii\Module';
    //Add this into backend/config/main-local.php
    $config['modules']['gii']['generators'] = [
            'kartikgii-crud' => ['class' => 'warrence\kartikgii\crud\Generator'],
        ];
    }

return $config;
