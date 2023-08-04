<?php
	include("../../header.php");
	include ('../inbound/connect.php');
	?>

<TITLE>apexart :: 6 months Post-Residency Evaluation Results</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />6 months Post-Residency Evaluation Results<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM 6months ORDER BY id DESC";
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
		echo "<tr class='standardGray' valign='top'><td>1. Is there a particular aspect that you recall or think about often regarding your apexart residency?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["recall"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>2. What aspects/events/people still stand out in your mind? </td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["standout"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>3. Has there been a lasting effect? Either on your self or your work? How so or how not?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["lasting"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		4. Do you keep in touch with anyone you met during the apexart residency? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["intouch"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>5. Have any projects developed out of these relationships? Or with people you met on your own? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["projects"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>6. Have you participated in any residencies since? Were they cultural immersion models (like apexart) or production oriented programs centered around showing your work? Any thoughts about these?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["residencies"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>7. With more time to reflect, what would your advice be now both for the apexart staff and for future residents? What one thing would you like to see changed in the program? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["advice"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>8. Would you find it useful to have a message board with past and current residents?  </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["message_board"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>9. Have you used/looked at the apexart blog since your residency? Would you like login information to continue posting?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["blog"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>10. Did your experience make you want to return to the location of your residency? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["return"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>11. What are you up to now! And do you have any email lists or blogs we should sign up for to receive information about your projects? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["lists"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>12. Please let us know if you have feedback on anything we might have forgotten to ask.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["other"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";



	  }
		
	mysql_free_result($result);


?>
<?php
	include("../../footer.php");
	?>