<?php
	include('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Fellowship Recommendations</TITLE>
		<table width="850" align="center"><tr>
        <td class="standardTextLg" width="500"><br /><br />Fellowship Recommendations<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?>
        </td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM recommendation_new ORDER BY created_on DESC";
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
		echo "<td class='grayback' width=280 align='left'>Recommender name: ".$row["rec_name"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Nominee name: ".$row["nom_name"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Date submitted: ".$row["created_on"]."</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' width=280 align='left'>Recommender email: ".$row["rec_email"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Nominee email: ".$row["nom_email"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Nominee location: ".$row["nom_loc"]."</td>";
			echo "</tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>Confirmed never been to NYC:</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["nyc"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>1. How do you know this person? (Colleague, friend, etc.)</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["relation"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>2. How long have you known them?</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["rellength"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>3. It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and exploring unfamiliar experiences?</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["recommend"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>4. apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, international travel) recently. Please describe how this applies to your candidate.</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["applies"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>5. What do you hope might be the results of participating in the program for your nominee?</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["results"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>6. Is there any additional information about the candidate that would help us in our selection?</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["comments"]))."</blockquote><br><br>";
		
		echo '<form name="frmUser" method="post" action="update2.php">';
		if(isset($message)) { echo $message;} 

		$id = $row['id'];
		$queryb="SELECT * FROM recommendation_new WHERE id='" . $id . "'";
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
