<?php
	include('../../header.php');
	include ('../12month/connect.php');
	?>

<TITLE>apexart :: 12 Month Post-Residency Evaluation Results</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />12 Month Post-Residency Evaluation Results<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM 12month ORDER BY created_on DESC";
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
		echo "<tr class='standardGray' valign='top'><td>1. Is there a particular activity or circumstance that stands out in your mind a year later? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["standout"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>2. Did any particular person you met during your residency have a strong effect on you? How so? </td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["person"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>3. Do you refer to your residency often? What’s the number one thing you say about it, or the story you tell most often?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["refer"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		4. Did you find that you were more likely to attend activities, lectures, and / or events outside of your comfort zone when you returned?  Do you still?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["attend"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>5. Any long lasting psychological effects?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["psych"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>6. Did it have any effect on broadening your view of art, travel or other people? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["broaden"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>7. Did it have any effect on your creative practice?  If so how? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["creative"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>8. Have you returned? Do you have intentions of returning to your residency location?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["return"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>9. Do you follow apexart on facebook? Twitter? Subscribe to our email list? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["social"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>10. Do you have a sentence of advice for future residents </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["sent"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>11. Can you give one suggestion on how we might we improve the program? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["suggestion"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";



	  }
		
	mysql_free_result($result);


?>
