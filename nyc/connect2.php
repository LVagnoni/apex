

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "apexart291", "love2php!", "opencalls");

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

/* get the name of the current default database */
$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("Default database is %s.\n", $row[0]);

?>