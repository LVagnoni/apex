<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Open Call Teacher Participation Survey 3</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Open Call Teacher Participation Survey Results 3<br />
        <br /><br /></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM teachers_opencall WHERE id > '84' ORDER BY created_on DESC";
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
		
		echo "<tr class='standardGray' valign='top'><td>What classes/subjects did you use the program for (age, topic)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["other"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>If this is your first time, how did you learn about the apexart Open Call Student Juror Program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["learn"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Was it easy to explain the apexart Open Call Jury Process and reasoning to your class syllabus? (Long answer)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["provide"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Can you identify one or two important issues students discussed?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["signup"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Did your class enjoy the process? Did they feel invested to look at the winners and follow the exhibitions? Even to submit a proposal in the future?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["required"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did you use our resources available on the apexart website (Open Call Jury Classroom Guide, past exhibitions and past winning open call proposals)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["inc"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Would you participate in the Open Call Jury process again and why?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["discuss"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Was there a most important student “take away”?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["know"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What additional resources would be helpful to have available for your class- before, during or after the jury process?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["enjoy"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Was the process easy?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["again"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>ould you personally consider submitting an exhibition proposal in the future?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["future"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Are there any colleagues we should contact that you think might be interested in using the jurying process or should be aware of our programming?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["colleagues"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
