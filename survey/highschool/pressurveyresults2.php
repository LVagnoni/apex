<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY RESULTS</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />HIGH SCHOOL PROGRAM - PRE-SESSION SURVEY ALL RESULTS<br />
        <br /><br /></td>
       <!-- <td class="standardText" width="500" align="right">      
        <?php
        /*include('survdrop-highschool.php');*/
		?></td> -->
        </tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM students_highschool_presurvey2 ORDER BY created_on DESC";
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
		
		echo "<tr class='standardGray' valign='top'><td>How does art have an effect on society?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["role"]."
		</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>What differentiates an artist from everyone else?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["traits"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What qualities of being an artist do you have now? Do you feel like you need to learn certain skills in order to be an artist?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["now"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Describe your most recent creative expression or activity.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["recent"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Where do you go, or what do you do, to look for inspiration?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["look"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How do you feel when you go to museums or visit art galleries? What could be different about this experience?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["feel"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>For you, what is success? What does it mean to be a successful artist?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["success"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>It is more important to be successful or more important to be authentic?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["important"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How do you think art will be a part of your life after high school? Why or why not?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["after"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
