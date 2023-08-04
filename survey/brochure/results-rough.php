<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Brochure Survey - RESULTS</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Brochure Survey - RESULTS<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        /*include('survdrop-highschool.php');*/
		?></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
	
	$result = mysql_query("SELECT name FROM brochure2");
	$storeArray = Array();
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    $storeArray[] =  $row['name']; 
	    $storeArraysorted = array_filter($storeArray); 
	    sort($storeArraysorted, SORT_NATURAL | SORT_FLAG_CASE);
}
	$result2 = mysql_query("SELECT based FROM brochure2");
	$storeArray2 = Array();
	while ($row = mysql_fetch_array($result2, MYSQL_ASSOC)) {
	    $storeArray2[] =  $row['based'];
	    $storeArraysorted2 = array_filter($storeArray2);  
	    sort($storeArraysorted2, SORT_NATURAL | SORT_FLAG_CASE);
}
	$result3 = mysql_query("SELECT printed FROM brochure2");
	$storeArray3 = Array();
	while ($row = mysql_fetch_array($result3, MYSQL_ASSOC)) {
	    $storeArray3[] =  $row['printed'];
	    $storeArraysorted3 = array_filter($storeArray3);
	    sort($storeArraysorted3, SORT_NATURAL | SORT_FLAG_CASE);  
}
	$result4 = mysql_query("SELECT digital FROM brochure2");
	$storeArray4 = Array();
	while ($row = mysql_fetch_array($result4, MYSQL_ASSOC)) {
	    $storeArray4[] =  $row['digital'];
	    $storeArraysorted4 = array_filter($storeArray4); 
	    sort($storeArraysorted4, SORT_NATURAL | SORT_FLAG_CASE); 
}
	$result5 = mysql_query("SELECT age FROM brochure2");
	$storeArray5 = Array();
	while ($row = mysql_fetch_array($result5, MYSQL_ASSOC)) {
	    $storeArray5[] =  $row['age'];
	    $storeArraysorted5 = array_filter($storeArray5);
	    sort($storeArraysorted5, SORT_NATURAL | SORT_FLAG_CASE);  
}
	$result6 = mysql_query("SELECT primarily FROM brochure2");
	$storeArray6 = Array();
	while ($row = mysql_fetch_array($result6, MYSQL_ASSOC)) {
	    $storeArray6[] =  $row['primarily'];
	    $storeArraysorted6 = array_filter($storeArray6);
	    sort($storeArraysorted6, SORT_NATURAL | SORT_FLAG_CASE);  
}
	$result7 = mysql_query("SELECT feedback FROM brochure2");
	$storeArray7 = Array();
	while ($row = mysql_fetch_array($result7, MYSQL_ASSOC)) {
	    $storeArray7[] =  $row['feedback'];
	    $storeArraysorted7 = array_filter($storeArray7);  
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
	
		echo "<tr class='standardGray' valign='top'><td><strong>Name:</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

						foreach($storeArraysorted as $value){
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
		
		echo "<tr class='standardGray' valign='top'><td><strong>Where are you based?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArraysorted2 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo "</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td><strong>Do you read the printed apexart exhibition essays you receive and think we should continue to print and send?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArraysorted3 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Do you read the digital version?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArraysorted4 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>What is your age range?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArraysorted5 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Are you primarily an artist or curator?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArraysorted6 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td><strong>Any feedback about what we do is always welcome.</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArraysorted7 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


		
	mysql_free_result($result);


?>
