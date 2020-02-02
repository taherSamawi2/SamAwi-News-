<?php


// Error Reporting

ini_set('display_errors', 'On');
error_reporting(E_ALL);

include 'control_panel/connect.php';

$sessionUser = '';

if (isset($_SESSION['user'])) {
    $sessionUser = $_SESSION['user'];
}


//Routes

$tpl = 'includes/templates/';
$lang = 'includes/languages/';
$func = 'includes/functions/';
$css = 'layout/css/';
$js = 'layout/js/';


//Include the important files

include $lang . 'english.php';
//include $lang . 'arabic.php';
include $func . 'function.php';
include $tpl . 'header.php';




