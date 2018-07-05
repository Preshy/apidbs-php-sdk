<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
/*
@project APIDataBank PHP SDK
@author Precious Opusunju (haxorpreshy@gmail.com)
*/
// Composer
require ABSPATH.'/vendor/autoload.php';
// Initialize classes
include 'classes/Core.php';

// Services
require ABSPATH.'/src/classes/Services/Airports.php';

$apidb_php_sdk_core = new Core();
$apidb_php_sdk_core->init('ak_896cafe902674b15a887fd7e94cf3318e1ef6aa9a5f62725b91fed52624e0f3681077b5993498a39044396dede3eaed9c7410cef275e1d45547b39af4c1b7a6c');
$apidb_php_sdk_core->run();
?>