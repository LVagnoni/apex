<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY RESULTS</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY RESULTS - Arts and Humanities LPS Focus - Portfolio Class<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('survdrop-highschool.php');
		?></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM students_highschool_presurvey WHERE school = 'LPS Portfolio' ORDER BY created_on DESC";
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
