<?php
	include('../../header.php');
	include ('../fellowship/connect.php');
	?>

<TITLE>apexart :: Local Fellowship Nominations</TITLE>
		<table width="850" align="center"><tr>
        <td class="standardTextLg" width="500"><br /><br />Local Fellowship Nominations<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      

        </td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM local_nomination ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	
echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>Recommender name: ".$row["rec_name"]."</td>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>Nominee name: ".$row["nom_name"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td>How do you know this person (friend, colleague, etc.) and for how long?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["relation"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and participating in unfamiliar experiences? (100-200 words)</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["recommend"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, grants) recently. Please describe how this applies to your candidate. (50-100 words)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["applies"]."</blockquote></td></tr>";

		echo "<tr><td  class='standardGray' valign='top' width=800>
		What do you hope might be the results of participating in the program for your nominee? (100-200 words)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["results"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>Any additional information about the candidate that would help us in our selection?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["comments"]."</blockquote></td></tr>";
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
