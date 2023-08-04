<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Open Call Teacher Participation Survey</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Open Call Teacher Participation Survey Results<br />
        <br /><br /></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM teachers_opencall ORDER BY created_on DESC";
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
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["college"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>Year/Grade Level:</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["grade"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>Department/Field: </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["dept"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		Class title:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["title"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>What other classes/subjects do you teach?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["other"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>How did you learn about the apexart Open Call Student Juror Program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["learn"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did apexart provide all the information you needed to sign up with your classroom? Y/N</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["provide"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>If no, what support could we provide in the future?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["signup"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Was participation in the Jury required as a part of course work? (Y/N)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["required"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How did you incorporate the apexart Open Call Jury Process into your class syllabus?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["inc"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What criteria did you and your students use to evaluate the proposals?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["discuss"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did you feel your class enjoyed the process? What was their reaction?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["know"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did you use any resources available on the apexart website (Open Call Jury Classroom Guide, past exhibitions and past open call proposals)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["enjoy"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Would you participate in the Open Call Jury process again? Why/why not?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["again"]."</blockquote></td></tr>";
echo "<tr class='standardGray' valign='top'><td>What resources would be helpful to have available for your class- before, during or after the jury process?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["resources"]."</blockquote></td></tr>";
	echo "<tr class='standardGray' valign='top'><td>Would you recommend your colleagues to join the jury process? (Y/N)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["rec"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Would you consider submitting an exhibition proposal in the future?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["future"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
