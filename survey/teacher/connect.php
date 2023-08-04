<?php


$dbhost = 'localhost'; $dbuser = 'apexart291'; $dbpass = 'love2php!'; $dbname = 'allsurveys';



$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');


mysql_select_db($dbname, $conn);
?>