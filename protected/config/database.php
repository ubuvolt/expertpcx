<?php

if (DEVELOPMENT) {
    return array(
        'class' => 'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=engine_expertpcx',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    );
} else {
    return array(
        'class' => 'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=wolscy_engine_expertpcx',
        'emulatePrepare' => true,
        'username' => 'wolscy_engine_ex',
        'password' => 'uvchNC(!MZyk',
        'charset' => 'utf8'
    );
}