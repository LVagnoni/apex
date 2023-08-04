<?php
	include('../../header.php');
	include ('../recommendation/connect.php');
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
		
		
	$query="SELECT * FROM recommendation WHERE id=50";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	
		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' width=280 align='left'>Recommender name: ".$row["rec_name"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Nominee name: ".$row["nom_name"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Date submitted: ".$row["created_on"]."</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' width=280 align='left'>Recommender email: ".$row["rec_email"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Nominee email: ".$row["nom_email"]."</td>";
		echo "<td class='grayback' width=280 align='left'>Nominee location: ".$row["nom_loc"]."</td>";
			echo "</tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>My relationship to nominee: </u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["recommend"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='2'><br><u>Why my nominee would benefit:</u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["focus"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>My nominee's special traits/characteristics: </u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["traits"]))."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td colspan='3'><br><u>Additional comments: </u></td></tr>
		<tr><td class='standardText' colspan='3'><blockquote style='margin-top:0'>".nl2br(($row["comments"]))."</blockquote></td></tr>";
		
		echo "<td class='standardGray' align='left'><br>My nominee is over 30 years old: ".$row["over30"]."&nbsp;&nbsp;&nbsp;<br>Understand educational program: ".$row["educa"]."<br>Not other opportunities: ".$row["opps"]."<br>Confirmed never been to NYC: ".$row["nyc"]."<br><br></td>";
		    echo "</tr></table>";
	

	  }
		
	mysql_free_result($result);


?>
