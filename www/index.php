<?php

	$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
 
// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
define("USUARIO_DB","consorcios");
ini_set('default_charset', 'utf-8');
require_once($yii);
Yii::createWebApplication($config)->run();

