<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY RESULTS</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY ALL RESULTS<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        /*include('survdrop-highschool.php');*/
		?></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
	
	$result = mysql_query("SELECT name FROM students_highschool_presurvey3");
	$storeArray = Array();
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    $storeArray[] =  $row['name'];
	    $storeArrayfiltered = array_filter($storeArray);  
}
	$result2 = mysql_query("SELECT school FROM students_highschool_presurvey3");
	$storeArray2 = Array();
	while ($row = mysql_fetch_array($result2, MYSQL_ASSOC)) {
	    $storeArray2[] =  $row['school'];  
	    $storeArrayfiltered2 = array_filter($storeArray2);
}
	$result3 = mysql_query("SELECT role FROM students_highschool_presurvey3");
	$storeArray3 = Array();
	while ($row = mysql_fetch_array($result3, MYSQL_ASSOC)) {
	    $storeArray3[] =  $row['role'];
	    $storeArrayfiltered3 = array_filter($storeArray3);  
}
	$result4 = mysql_query("SELECT traits FROM students_highschool_presurvey3");
	$storeArray4 = Array();
	while ($row = mysql_fetch_array($result4, MYSQL_ASSOC)) {
	    $storeArray4[] =  $row['traits'];
	    $storeArrayfiltered4 = array_filter($storeArray4);  
}
	$result5 = mysql_query("SELECT now FROM students_highschool_presurvey3");
	$storeArray5 = Array();
	while ($row = mysql_fetch_array($result5, MYSQL_ASSOC)) {
	    $storeArray5[] =  $row['now'];
	    $storeArrayfiltered5 = array_filter($storeArray5);  
}
	$result6 = mysql_query("SELECT recent FROM students_highschool_presurvey3");
	$storeArray6 = Array();
	while ($row = mysql_fetch_array($result6, MYSQL_ASSOC)) {
	    $storeArray6[] =  $row['recent'];
	    $storeArrayfiltered6 = array_filter($storeArray6);  
}
	$result7 = mysql_query("SELECT look FROM students_highschool_presurvey3");
	$storeArray7 = Array();
	while ($row = mysql_fetch_array($result7, MYSQL_ASSOC)) {
	    $storeArray7[] =  $row['look'];
	    $storeArrayfiltered7 = array_filter($storeArray7);  
}
	$result8 = mysql_query("SELECT feel FROM students_highschool_presurvey3");
	$storeArray8 = Array();
	while ($row = mysql_fetch_array($result8, MYSQL_ASSOC)) {
	    $storeArray8[] =  $row['feel'];
	    $storeArrayfiltered8 = array_filter($storeArray8);  
}
	$result9 = mysql_query("SELECT success FROM students_highschool_presurvey3");
	$storeArray9 = Array();
	while ($row = mysql_fetch_array($result9, MYSQL_ASSOC)) {
	    $storeArray9[] =  $row['success'];
	    $storeArrayfiltered9 = array_filter($storeArray9);  
}
	$result10 = mysql_query("SELECT important FROM students_highschool_presurvey3");
	$storeArray10 = Array();
	while ($row = mysql_fetch_array($result10, MYSQL_ASSOC)) {
	    $storeArray10[] =  $row['important'];
	    $storeArrayfiltered10 = array_filter($storeArray10);  
}
	$result11 = mysql_query("SELECT after FROM students_highschool_presurvey3");
	$storeArray11 = Array();
	while ($row = mysql_fetch_array($result11, MYSQL_ASSOC)) {
	    $storeArray11[] =  $row['after'];
	    $storeArrayfiltered11 = array_filter($storeArray11);  
}
	$result12 = mysql_query("SELECT rank FROM students_highschool_presurvey3");
	$storeArray12 = Array();
	while ($row = mysql_fetch_array($result12, MYSQL_ASSOC)) {
	    $storeArray12[] =  $row['rank'];
	    $storeArrayfiltered12 = array_filter($storeArray12);  
}
	$result13 = mysql_query("SELECT part FROM students_highschool_presurvey3");
	$storeArray13 = Array();
	while ($row = mysql_fetch_array($result13, MYSQL_ASSOC)) {
	    $storeArray13[] =  $row['part'];
	    $storeArrayfiltered13 = array_filter($storeArray13);  
}
	$result14 = mysql_query("SELECT created_on FROM students_highschool_presurvey3");
	$storeArray14 = Array();
	while ($row = mysql_fetch_array($result14, MYSQL_ASSOC)) {
	    $storeArray14[] =  $row['created_on'];
	    $storeArrayfiltered14 = array_filter($storeArray14);
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

						foreach($storeArrayfiltered2 as $value){
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
		
		echo "<tr class='standardGray' valign='top'><td><strong>What is your earliest memory of making art?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered3 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo "</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td><strong>What is a piece of art or an object that you grew up with that means a lot to you?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered4 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>What is the difference between art and creativity?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered5 as $value){
		    echo " - ". $value . "<br>";
		}
		

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Have you been to a museum? What was your reaction?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered6 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Are there specific qualities that you think a successful artist must have?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered7 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Do you remember an activity that you did when you were really young that you enjoyed and that you haven't done in years?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered8 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>What materials do you like to use when being creative?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered9 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Is there a general idea or theme you address most often when you create?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered10 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>What is the purpose of art?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered11 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>Is social media like Tik tok or Instagram a form of art?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered12 as $value){
		    echo " - ". $value . "<br>";
		}

		echo"</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td><strong>How important is it to get feedback on your creative efforts, or do you not need to show people?</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>";

								foreach($storeArrayfiltered13 as $value){
		    echo " - ". $value . "<br>";
		}
		echo"</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


		
	mysql_free_result($result);


?>
