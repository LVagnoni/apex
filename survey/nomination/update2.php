<?php 
$id = $_POST['id'];
include 'connect.php';
$notes =  htmlspecialchars($_POST['notes'],ENT_QUOTES,'UTF-8');
		$querya="UPDATE recommendation_new set notes='" . $notes . "' WHERE id='" . $_POST['id'] . "'";
		$resulta = mysql_query($querya, $conn);
		$message = "Notes submitted";
		header( "refresh:1;url=results.php#".$id."" );

?>