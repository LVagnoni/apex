<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Open Call Teacher Participation Survey 2</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Open Call Teacher Participation Survey Results 2<br />
        <br /><br /></td>
        </tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM teachers_opencall WHERE id > '50' ORDER BY created_on DESC";
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
		
		echo "<tr class='standardGray' valign='top'><td>How did you learn about the apexart Open Call Student Juror Program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["learn"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>How did you explain the apexart Open Call Jury Process to your class?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["provide"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Can you summarize one or two important social issues students addressed?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["signup"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>Did you feel your class enjoyed the process? Did they feel invested to look at the winners and follow the exhibitions? Even to submit a proposal?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["required"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Did you use our resources available on the apexart website (Open Call Jury Classroom Guide, past exhibitions and past open call proposals)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["inc"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Would you participate in the Open Call Jury process again? Best reason?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["discuss"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Most important student take away?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["know"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>What resources would be helpful to have available for your class- before, during or after the jury process?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["enjoy"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Was our sign up process easy?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["again"]."</blockquote></td></tr>";
echo "<tr class='standardGray' valign='top'><td>Was student participation required or optional?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["resources"]."</blockquote></td></tr>";
	echo "<tr class='standardGray' valign='top'><td>Please suggest additional support/info we could provide in the future?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["rec"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Would you personally consider submitting an exhibition proposal in the future? Why/why not?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["future"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Do you have any colleagues we should contact regarding the jurying process or our program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["colleagues"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
