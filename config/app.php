<?php

session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'prayerprojectdb');

define('SITE_URL', 'http://localhost/fundadatabase/fundaDatabasePhp/');

include_once("DBConnection.php");
$db = new DBConnection;

function base_url($slug){
    echo SITE_URL.$slug;
}

function redirect($message, $page){

    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("Location: $page");
    exit(0);
}


function validateInput($dbconn, $input){
    return mysqli_real_escape_string($dbconn, $input);
}
?>