<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY RESULTS</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY ALL RESULTS<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('survdrop-highschool.php');
		?></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
	
	$result = mysql_query("SELECT name FROM students_highschool_presurvey");
	$storeArray = Array();
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    $storeArray[] =  $row['name'];  
}
	$result2 = mysql_query("SELECT school FROM students_highschool_presurvey");
	$storeArray2 = Array();
	while ($row = mysql_fetch_array($result2, MYSQL_ASSOC)) {
	    $storeArray2[] =  $row['school'];  
}
	$result3 = mysql_query("SELECT issue FROM students_highschool_presurvey");
	$storeArray3 = Array();
	while ($row = mysql_fetch_array($result3, MYSQL_ASSOC)) {
	    $storeArray3[] =  $row['issue'];  
}
	$result4 = mysql_query("SELECT role FROM students_highschool_presurvey");
	$storeArray4 = Array();
	while ($row = mysql_fetch_array($result4, MYSQL_ASSOC)) {
	    $storeArray4[] =  $row['role'];  
}
$result5 = mysql_query("SELECT kind FROM students_highschool_presurvey");
	$storeArray5 = Array();
	while ($row = mysql_fetch_array($result5, MYSQL_ASSOC)) {
	    $storeArray5[] =  $row['kind'];  
}
$result6 = mysql_query("SELECT share FROM students_highschool_presurvey");
	$storeArray6 = Array();
	while ($row = mysql_fetch_array($result6, MYSQL_ASSOC)) {
	    $storeArray6[] =  $row['share'];  
}
$result7 = mysql_query("SELECT created_on FROM students_highschool_presurvey");
	$storeArray7 = Array();
	while ($row = mysql_fetch_array($result7, MYSQL_ASSOC)) {
	    $storeArray7[] =  $row['created_on'];
}


// now $storeArray will have all the names.	
		

	    

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>";
					/*	foreach($storeArray as $value){
		    echo " - ". $value . "<br>";
		} */

		echo "</td>";
		//echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
		echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td><strong>Program:</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

						foreach($storeArray2 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";
		
		/*echo "<tr class='standardGray' valign='top'><td>Do you have a preferred medium to best express your ideas?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$storeArray3."";
	<br>
		".$row["learn1"]."
		<br>
		".$row["learn2"]."
		<br>
		".$row["learn3"]."
		<br>
		".$row["learn4"]."
		<br>
		".$row["learn5"]."
				<br>
		".$row["learn6"]."
		<br>
		</blockquote> */

		echo "</td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td><strong>Is there a specific concern, issue or theme that you consider when you create?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArray3 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo "</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td><strong>Do you think there is a defined role of the artist in society and is it different from the responsibility of others?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArray4 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Is there a specific kind of art, or an artist, that you particularly like and admire? How would you describe their work and what you like about it?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArray5 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Share 1 question about the art world:</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArray6 as $value){
		    echo " - ". $value . "<br>";
		}
		echo"</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


		
	mysql_free_result($result);


?>
