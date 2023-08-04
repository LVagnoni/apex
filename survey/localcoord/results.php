<?php
	include("../../header.php");
	include ('connect.php');
	?>

<TITLE>apexart :: Local Coordinator Questionnaire Results</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Local Coordinator Questionnaire Results<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM localcoord ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    



		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]."</td>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["email"]."</td>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["fellowname"]."</td>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["city"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
		echo "<tr class='standardGray' valign='top'><td>1. Were the responsibilities of the Local Coordinator position made clear from the beginning?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["responsibilities"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>2. How was the brainstorming phase of the planning process? Did you understand what was expected?</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["brainstorming"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>3.	How was the experience of filling out the schedule in the Google calendar and is there anything that should be changed?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["schedule"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		4. How did the Fellow’s arrival go? Did you feel prepared for the start of the Fellowship? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["arrival"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>5. During the Fellowship were there any unexpected occurrences? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["unexpected"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>6. What in the Fellowship did not work so well? Do you have suggestions for how to improve it next time?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["suggestions"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>7. If you have previously been a fellow in NYC, what do you see as the differences in a Fellowship in your city?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["previously"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>8. How was the amount and quality of communication with apexart? Did you feel you needed more? Or less?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["communication"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>9. Was the time required by the job more or less than you expected, or about the same?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["time"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>10.	What did you enjoy about being the Local Coordinator?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["enjoy"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>11.	What was the most challenging part of being the Local Coordinator?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["challenging"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>12.	Did you feel you had the support you needed from apexart?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["support"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>13.	Was the experience of being a Local Coordinator what you had expected? Or if different, in what ways?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["experience"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>14.	Would you like to be a Local Coordinator again the future?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["future"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>15.	Is there anything else you would like to say?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["else"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";



	  }
		
	mysql_free_result($result);


?>
<?php
	include("../../footer.php");
	?>