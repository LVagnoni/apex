<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Local Fellowship 1 Month Evaluation</TITLE>
		<table width="850" align="center"><tr>
        <td class="standardTextLg" width="500"><br /><br />Local Fellowship 1 Month Evaluation<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      

        </td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM 1monthlocaleval ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]." - Fellowship Dates: ".$row["dates"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td>Was your experience of apexart's Fellowship different than what you expected?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["different"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How engaged did you feel in our program on a scale of 1-5?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["engaged"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How rigorous was the program for you?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["rigorous"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How disconnected did you feel from your “other life”.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["disconnected"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Now that you have had a month to process, absorb, and reflect on the Fellowship experience, how would you describe the personal impact of the Fellowship?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["reflect"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did you learn anything in particular about yourself this month?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["learn"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Has your relationship to the city changed in any way?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["relationship"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did the time away from your work affect how you relate to and approach your creative process afterwards? If so, how?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["away"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Remembering back to specific activities, what event(s) did you find the most challenging?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["challenging"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>The most fun?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["fun"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did you feel an absence of pressure to create work restful or stressful? Energizing or taxing?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["absence"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How has it been to return to your studio this month?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["return"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did the journal help you reflect on your daily experience? Have you continued writing on your own since?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["journal"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Can you share an example of any challenges you faced in planning or preparing for the apexart Fellowship, either logistically, emotionally or professionally?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["example"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>We welcome your thoughts, ideas or criticisms about the program and encourage you to tell us more.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["comments"]."</blockquote></td></tr>";
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }

		
	mysql_free_result($result);


?>
