<?php
	include ('../../header.php');
	include ('connect.php');
	?>

<TITLE>apexart :: Local Fellowship Applications</TITLE>
		<table width="850" align="center"><tr>
        <td class="standardTextLg" width="500"><br /><br />Local Fellowship Applications<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      

        </td></tr></table>
			<?php
 	error_reporting(E_ALL);
		
		
	$query="SELECT * FROM localfellowship ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]." - ".$row["pronouns"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td>Address:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["address"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Phone:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["phone"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Email:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["email"]."</blockquote></td></tr>";

		
		echo "<tr class='standardGray' valign='top'><td>How long have you lived in New York City?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["howlong"]."
		</blockquote></td></tr>";

		echo "<tr><td class='standardText'><blockquote style='margin-top:0'>NYC Neighborhood lived in:&nbsp; ".$row["nay1"]."<br>

Dates of living there:&nbsp; ".$row["dates1"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay2"]."<br>

Dates of living there:&nbsp; ".$row["dates2"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay3"]."<br>

Dates of living there:&nbsp; ".$row["dates3"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay4"]."<br>

Dates of living there:&nbsp; ".$row["dates4"]."<br><br>

Other languages spoken:&nbsp; ".$row["lang"]."<br><br>

Emergency name:&nbsp; ".$row["ename"]."<br>

Emergency phone:&nbsp; ".$row["ephone"]."<br>

Emergency email:&nbsp; ".$row["eemail"]."<br>

Emergency relationship:&nbsp; ".$row["erel"]."<br>
		</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>Travel History:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>Destination:&nbsp; ".$row["dest1"]."<br>
Date:&nbsp; ".$row["date1"]."<br>
Reason:&nbsp; ".$row["reason1"]."<br>
Takeaway:&nbsp; ".$row["take1"]."<br>
Sponsor:&nbsp; ".$row["sponsor1"]."<br><br>

Destination:&nbsp; ".$row["dest2"]."<br>
Date:&nbsp; ".$row["date2"]."<br>
Reason:&nbsp; ".$row["reason2"]."<br>
Takeaway:&nbsp; ".$row["take2"]."<br>
Sponsor:&nbsp; ".$row["sponsor2"]."<br><br>

Destination:&nbsp; ".$row["dest3"]."<br>
Date:&nbsp; ".$row["date3"]."<br>
Reason:&nbsp; ".$row["reason3"]."<br>
Takeaway:&nbsp; ".$row["take3"]."<br>
Sponsor:&nbsp; ".$row["sponsor3"]."<br><br>

Additional travel:&nbsp; ".$row["addl"]."<br><br></blockquote></td></tr>";


		echo "<tr class='standardGray' valign='top'><td>From reading more about our program online, what is your sense of the program and what might you might hope to gain from the experience?&nbsp;</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["sense"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>An apexart fellowship is not about making or promoting your work. We do not give you a studio and we do not arrange meetings with people to promote your work. This is not an opportunity for networking, career development, or production of new work. It is about you as a person and taking a moment to spend time with yourself. Why is this is a good time for you to participate in a program that values experience and reflection over production?&nbsp;</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["good"]."</blockquote></td></tr>";	

		echo "<tr class='standardGray' valign='top'><td>The fellowship asks individuals to give up control of their time. You agree to follow your schedule regardless of whether you have already done the exact same thing in the exact same place at the exact same time and are sure you won’t enjoy doing it. Part of the point is we spend years deciding what we like and don’t, often making these decisions based on our expectations rather than being open to new things. In our program you don’t have time to say you don’t have time. Our experience over many years and with many people is that you will find new things you like. And new things you don’t like. You have to agree to this. And it’s only two weeks. Fellows receive a detailed itinerary that maps out their day, from early morning hours to late at night. This is an opportunity to step away from routine, familiarity, daily correspondence and distractions. Really, how excited are you by this process?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["excited"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>When was the last time that you that felt outside of your comfort zone? Did it feel unexpectedly good afterwards or not?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["comfort"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>The apexart Fellowship Program is active; with up to 4 activities per day, often requiring a lot of walking, traveling alone during the evening, and participating in a range of physical activities. The assigned activities are required. When necessary, we work with Fellows to find alternatives in the event of physical limitations, however the program still remains demanding. Please let us know if you have any concerns.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["concerns"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>Do you have any medical conditions we should be aware of?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["medical"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>Other questions:</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["questions"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>Subway comfort from 1-5 due to covid:&nbsp;</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["sub"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>Any in-detail subway concerns:&nbsp;</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["middle"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>Allergies:&nbsp;</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["allergies"]."</blockquote></td></tr>";

		echo "<tr class='standardGray' valign='top'><td>How much have you curtailed normal activities due to covid?&nbsp;</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["normal"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }

		
	mysql_free_result($result);


?>
