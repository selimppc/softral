<?php

/*
 * Automated base path settings for the application
 */
ob_start();
session_start();

$db_host = "localhost"; // MySQL DB_Hostname



if ($_SERVER['SERVER_NAME'] == 'www.softral.com' || $_SERVER['SERVER_NAME'] == 'softral.com') {
    //$websiteRoot = 'http://www.softral.com/chat/';
    $websiteRoot = 'http://softral.com/chat/';
	$websiteOriginalPath = "http://softral.com/";
    $db_user = "pronoor_softral";    //MySQL Username Here
    $db_pass = "softral@10";      //MySQL Password Here
    $db   = "pronoor_softral"; // MySQL DB Name
} else {
    //Localhost
    $websiteRoot = "http://{$_SERVER['SERVER_NAME']}/softral/";
	$websiteOriginalPath = "http://softral.com/";
    $db_user = "root";      //MySQL Username Here
    $db_pass = "root";      //MySQL Password Here
    
    $db   = "softral"; // MySQL DB Name
    
}



$dbh = new PDO('mysql:dbname=' . $db . ';host=' . $db_host . ';', $db_user, $db_pass);


//function write_array($var) {
//    echo '<pre>';
//    print_r($var);
//}

?>
