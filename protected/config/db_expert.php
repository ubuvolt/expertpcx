<?php
//
// expertpcx
//
if (DEVELOPMENT) {
    return array(
        // uncomment the following lines to use a MySQL database
        'class' => 'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=prestashoppcx',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    );
} else {
    return array(
        'class' => 'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=wolscy_expertpcx',
        'emulatePrepare' => true,
        'username' => 'wolscy_expert',
        'password' => 'Tajlo#324@foka',
        'charset' => 'utf8'
    );
}
