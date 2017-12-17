<?php

// change the following paths if necessary
$yii = dirname(__FILE__) . '/../yii/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

if ($_SERVER['SERVER_ADDR'] == '193.107.88.70') {
    define('DEVELOPMENT', false);
    define('PRODUCTION', true);
} else {
    define('DEVELOPMENT', true);
    define('PRODUCTION', false);
}

require_once($yii);
Yii::createWebApplication($config)->run();
