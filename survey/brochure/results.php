<?php
	include('../../headerc.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Brochure Survey</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Brochure Survey Results<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM brochure ORDER BY created_on DESC";
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
	
		echo "<tr class='standardGray' valign='top'><td>College/University/Affiliation:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["email"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>Do you read the mailed apexart brochures?</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["read"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>Should we stop printing them and rely on alternative digital methods to distribute their content?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["stop"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		Should we continue to do a small print run of our brochures for you to still receive them in the post free of charge?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["still"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>If you answered yes to the above, please confirm your mailing address(es) so we know where to send the brochures. Please note we do not share your information with anyone.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["contact"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>If you were a curator or artist in an apexart exhibition, would it be important to you to have printed brochures sent to people around the world via snail mail?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["ca"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Would you read a digital version of the brochure?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["digital"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Want to sign up for them here? We'll use your email address above if so.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["signup"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Do you have any other thoughts or suggestions about the printed brochures?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["thoughts"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
