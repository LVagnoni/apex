<?php


$dbhost = 'ressurvey.db.8473433.hostedresource.com'; $dbuser = 'ressurvey'; $dbpass = 'a5XkdS6!3'; $dbname = 'ressurvey';



$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');


mysql_select_db($dbname, $conn);
?>