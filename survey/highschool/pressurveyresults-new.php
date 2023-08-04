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
		
		
	$query="SELECT * FROM students_highschool_presurvey3 ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td>Program:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["school"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>What is your earliest memory of making art?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["role"]."
		</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>What is a piece of art or an object that you grew up with that means a lot to you?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["traits"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What is the difference between art and creativity?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["now"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Have you been to a museum? What was your reaction?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["recent"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Are there specific qualities that you think a successful artist must have?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["look"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Do you remember an activity that you did when you were really young that you enjoyed and that you haven't done in years?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["feel"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What materials do you like to use when being creative?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["success"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Is there a general idea or theme you address most often when you create?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["important"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What is the purpose of art?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["after"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Is social media like Tik tok or Instagram a form of art?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["rank"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How important is it to get feedback on your creative efforts, or do you not need to show people?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["part"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>

<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM students_highschool_presurvey ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td>Program:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["school"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>Do you have a preferred medium to best express your ideas?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["learn0"]."
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
		</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>Is there a specific concern, issue or theme that you consider when you create?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["issue"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Do you think there is a defined role of the artist in society and is it different from the responsibility of others?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["role"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Is there a specific kind of art, or an artist, that you particularly like and admire? How would you describe their work and what you like about it?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["kind"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Share 1 question about the art world:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["share"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
