<?php
	include('../../header.php');
	include ('../fellowship/connect.php');
	?>

<TITLE>apexart :: Fellowship Applications</TITLE>
		<table width="850" align="center"><tr>
        <td class="standardTextLg" width="500"><br /><br />Fellowship Applications<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?>
        </td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM questionnaire WHERE id=74";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["first"]."&nbsp;".$row["last"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
		echo "<td class='grayback' align='left'>Birthdate: ".$row["birth"]."</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' align='left'>Address: ".$row["address"]."</td>";
		echo "<td class='grayback' align='left'>Phone: ".$row["phone"]."</td>";
		echo "<td class='grayback' align='left'>Email: ".$row["email"]."</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' align='left'>Citizenship: ".$row["citizen"]."</td>";
		echo "<td class='grayback' align='left'>Residency: ".$row["residence"]."</td>";
		echo "<td class='grayback' align='left'>Birth Country: ".$row["country"]."</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' align='left'>Recommender: ".$row["recommender"]."</td>";
		echo "<td class='grayback' align='left' colspan='2'>Rec rel: ".$row["relationship"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td><u>Languages:</u></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["language"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td><br><u>Medical conditions:</u></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["medical"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td><u>Have you ever travelled to New York City?</u></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["nyc"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>How do you support yourself financially?</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".$row["support"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td><u>Travel destinations over the past ten years:</u><br>
		 </td></tr>
		 <tr class='standardGray' valign='top'><td width='400'>
		Destination: ".$row["dest1"]."<br></td><td width='200'>
		Date: ".$row["date1"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest2"]."<br></td><td>
		Date: ".$row["date2"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest3"]."<br></td><td>
		Date: ".$row["date3"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest4"]."<br></td><td>
		Date: ".$row["date4"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest5"]."<br></td><td>
		Date: ".$row["date5"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest6"]."<br></td><td>
		Date: ".$row["date6"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest7"]."<br></td><td>
		Date: ".$row["date7"]."<br></td></tr><tr class='standardGray valign='top''><td>
		Destination: ".$row["dest8"]."<br></td><td>
		Date: ".$row["date8"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest9"]."<br></td><td>
		Date: ".$row["date9"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest10"]."<br></td><td>
		Date: ".$row["date10"]."<br>
		</td></tr>";

		echo "<tr valign='top' class='standardGray'><td><br><u>Residencies in past five years:</u><br>
		 </td></tr>
		 <tr class='standardGray' valign='top'><td width='400'>
		Residency: ".$row["res1"]."<br></td><td width='200'>
		Dates: ".$row["resdate1"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Residency: ".$row["res2"]."<br></td><td>
		Dates: ".$row["resdate2"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Residency: ".$row["res3"]."<br></td><td>
		Dates: ".$row["resdate3"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Residency: ".$row["res4"]."<br></td><td>
		Dates: ".$row["resdate4"]."<br></td></tr><tr class='standardGray' valign='top'><td>
		Residency: ".$row["res5"]."<br></td><td>
		Dates: ".$row["resdate5"]."<br>
		</td></tr>";
		
		
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>Why would you be a good fit for an apexart NYC Fellowship and what do you hope to get from your experience?</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["benefit"]))."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>Emergency contact:</u></td></tr>
		<tr><td class='standardText' colspan='2'>Name: ".$row["ername"]." - Phone: ".$row["erphone"]." - Email: ".$row["eremail"]." - Relationship: ".$row["errel"]."</td></tr>";
		
		
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
