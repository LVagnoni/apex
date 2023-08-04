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
		
		
	$query="SELECT * FROM questionnaire ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
		$rowID=$row["id"];
		$rowname=$row["name"];
		$id=$row["id"];
		$reviewed=$row["reviewed"];
		
		$_SESSION['rowID']=$rowID;

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
		echo "<td class='grayback' align='left'>Resides in: ".$row["residence"]."</td>";
		echo "<td class='grayback' align='left'>Birth Country: ".$row["country"]."</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' align='left'>Recommender: ".$row["recommender"]."</td>";
		echo "<td class='grayback' align='left' colspan='2'>Relationship to recommender: ".$row["relationship"]."<br>
		Recommender relationship length: ".$row["relationshipl"]."
		</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td><u>Languages:</u></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["language"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td><br><u>Medical conditions:</u></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["medical"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td><u>Have you ever travelled to New York City?</u></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["nyc"]."</blockquote></td></tr>";
		
		
		echo "<tr class='standardGray' valign='top'><td><u>Travel destinations over the past ten years:</u><br>
		 </td></tr>
		 <tr class='standardGray' valign='top'><td width='400'>
		Destination: ".$row["dest1"]."<br></td><td width='200'>
		Date: ".$row["date1"]."<br>
		Purpose: ".$row["reason1"]."<br>
		Results: ".$row["take1"]."<br>
		Sponsor: ".$row["sponsor1"]."<br><br>
		</td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest2"]."<br></td><td>
		Date: ".$row["date2"]."<br>
		Purpose: ".$row["reason2"]."<br>
		Results: ".$row["take2"]."<br>
		Sponsor: ".$row["sponsor2"]."<br><br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest3"]."<br></td><td>
		Date: ".$row["date3"]."<br>
		Purpose: ".$row["reason3"]."<br>
		Results: ".$row["take3"]."<br>
		Sponsor: ".$row["sponsor3"]."<br><br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest4"]."<br></td><td>
		Date: ".$row["date4"]."<br>
		Purpose: ".$row["reason4"]."<br>
		Results: ".$row["take4"]."<br>
		Sponsor: ".$row["sponsor4"]."<br><br></td></tr><tr class='standardGray' valign='top'><td>
		Destination: ".$row["dest5"]."<br></td><td>
		Date: ".$row["date5"]."<br>
		Purpose: ".$row["reason5"]."<br>
		Results: ".$row["take5"]."<br>
		Sponsor: ".$row["sponsor5"]."<br><br></td></tr><tr class='standardGray' valign='top'><td>
		</td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>Do you have planned residencies or travel during the next 12 months? If so please provide details.</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["planned"]))."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>After you have looked at the description of the Fellowship and associated materials on our website www.apexart.org, tell us why this is a good time for you to be part of an apexart NYC Fellowship. (200 words minimum)</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["benefit"]))."</blockquote></td></tr>";

				echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>What do you hope to gain from the experience? (200 words minimum)</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["gain"]))."</blockquote></td></tr>";

				echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>How do you support yourself financially? Will you be able to arrange time away from your daily life, work, projects, and responsibilities to attend and fully participate in an immersive one month program in a foreign country?</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["support"]))."</blockquote></td></tr>";

				echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>Understand nature of fellowship?</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["understand"]))."</blockquote></td></tr>";
				echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>If you have any questions about what is expected of Fellows in our program, or about our Fellowship Program more broadly, please list them here. We will be happy to answer.</u></td></tr>
		<tr><td class='standardText' colspan='2'><blockquote style='margin-top:0'>".nl2br(($row["question"]))."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>Emergency contact:</u></td></tr>
		<tr><td class='standardText' colspan='2'>Name: ".$row["ername"]." - Phone: ".$row["erphone"]." - Email: ".$row["eremail"]." - Relationship: ".$row["errel"]."<br><br>";
		
		echo '<form name="frmUser" method="post" action="update2.php">';
		if(isset($message)) { echo $message;} 

		$id = $row['id'];
		$queryb="SELECT * FROM questionnaire WHERE id='" . $id . "'";
		$resultb = mysql_query($queryb, $conn);
		$row = mysql_fetch_assoc($resultb);
		echo'<input type="hidden" name="id" class="txtField" value="'.$row['id'].'">';

		echo'Notes: <br>
		<textarea name="notes" id="notes" rows="10" cols="50">'.$row['notes'].'</textarea><br>

		<input size="50" type="submit" name="submit" value="Submit" class="buttom">

		</form>';
		echo"</td></tr>";
 		
 		echo "<tr class='standardText' valign='top'><td colspan=6><strong><br>Applicant Notes:</strong><br>".nl2br(($row["notes"]))."<br>";
 		//echo "<br><br>
 		//<a href='dqapplicant.php?id=".$row["id"]."'><button>Disqualify applicant ".$rowname."</button></a></td></tr>";
	    echo "<tr class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
