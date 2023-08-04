<?php
session_start();
include("../header.php");
?>
	<link href="https://apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
	
		<body bgcolor="#000000">
		
		
<?php
 	error_reporting(E_ALL);
	include ('connect.php');
	
	$xx=$_GET["proposal"];	
	$query="SELECT * FROM intl23_proposal WHERE id=$xx";
	
		
	//$query="SELECT * FROM proposal";
	$result = mysql_query($query, $conn);

	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {

		mysql_query("UPDATE intl23_proposal SET is_accepted = '0' WHERE id = '".$xx."'");
		echo "<table width=800 border=0 cellpadding=10  bgcolor='#FFFFFF' align='center'><tr>";
		echo "<td align=center valign=top class='standardText' style='color:green;''>Submission Requalified</td></tr>";
		echo "<tr><td align=left valign=top class='standardText'>#".$row["id"]."<br>".$row["title"]."<br><br>".$row["submitters"]."<br>".$row["artist_names"]."</a><br><br>".$row["content"]."<br></td>";
	    echo "</tr>";
	    echo "<tr>";

	    echo"</table>";    
	
	}
	
	mysql_free_result($result);
	//$query2="UPDATE proposal SET is_accepted = '1' WHERE id=$xx;"
	//$result2 = mysql_query($query2, $conn); 
		
?>	

