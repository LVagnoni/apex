<?php
	include("../../header.php");
	?>

<TITLE>apexart :: Exhibition Organizer Questionnaire Results</TITLE>
		<table width="850" align="center"><tr><td class="standardText">Exhibition Organizer Questionnaire Results<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
	include ('connect.php');
		
		
	$query="SELECT * FROM exhiborg ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		
		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]."</td>";
		echo "<td class='grayback' align='left'>".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
		echo "<tr class='standardGray' valign='top'><td>Were the apexart guidelines and deadlines clear to you? Any specific issues?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["guidelines"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>How could the staff be more helpful in explaining apexart guidelines, or answering questions throughout the process?</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["questions"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>Was feedback from the staff helpful in thinking about and developing your exhibition?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["feedback"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>List up to three unexpected challenges that you had to address. How did you deal with these issues? What worked, and what didn’t work?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["supportive"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>In your opinion, what was most successful about the exhibition?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["helpful"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>What was the least successful?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["sense"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>Was there a critical issue that arose after your proposal was selected?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["better"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>Is there anything you would do differently next time (an artist selection, venue [for International Exhibitions], 
shipping method, installation decision, or anything else)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["changes"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>What was the most challenging part of putting together the exhibition?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["challenges"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>What could we do next time to be more effective, at any stage?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["success"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>If you organized an International Exhibition, what was the total exhibition attendance and what was the attendance for event(s)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["attendance"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>What advice would you have for other curators/organizers?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["advice"]."</blockquote></td></tr>";
		echo "<tr  class='standardGray' valign='top'><td>Any other comments or suggestions? We like constructive criticism. Really.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["other"]."</blockquote></td></tr>";
		
		

		
		echo "</table>";
	
 


	  }
		
	mysql_free_result($result);


?>
