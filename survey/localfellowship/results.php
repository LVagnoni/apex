<?php
	include('../../header.php');
	include ('../fellowship/connect.php');
	?>

<TITLE>apexart :: Local Fellowship Applications</TITLE>
		<table width="850" align="center"><tr>
        <td class="standardTextLg" width="500"><br /><br />Local Fellowship Applications<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?>
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
	
echo "Name:&nbsp; ".$row["name"]."<br><br> 

Address:&nbsp; ".$row["address"]."<br><br>

Phone:&nbsp; ".$row["phone"]."<br><br>

Email:&nbsp; ".$row["email"]."<br><br>

Birthday:&nbsp; ".$row["birthdate"]."<br><br>

Pronouns:&nbsp; ".$row["pronouns"]."<br><br>

How long have you lived in New York City?&nbsp;
".$row["howlong"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay1"]."<br><br>

Dates of living there:&nbsp; ".$row["dates1"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay2"]."<br><br>

Dates of living there:&nbsp; ".$row["dates2"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay3"]."<br><br>

Dates of living there:&nbsp; ".$row["dates3"]."<br><br>

NYC Neighborhood lived in:&nbsp; ".$row["nay4"]."<br><br>

Dates of living there:&nbsp; ".$row["dates4"]."<br><br>

Other languages spoken:&nbsp; ".$row["lang"]."<br><br>

Emergency name:&nbsp; ".$row["ename"]."<br><br>

Emergency phone:&nbsp; ".$row["ephone"]."<br><br>

Emergency email:&nbsp; ".$row["eemail"]."<br><br>

Emergency relationship:&nbsp; ".$row["erel"]."<br><br>


Travel history:<br>
Destination:&nbsp; ".$row["dest1"]."<br>
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

Additional travel:&nbsp; ".$row["addl"]."<br><br>

From reading more about our program online, what is your sense of the program and what might you might hope to gain from the experience?&nbsp;
".$row["sense"]."<br><br>

An apexart fellowship is not about making or promoting your work. We do not give you a studio and we do not arrange meetings with people to promote your work. This is not an opportunity for networking, career development, or production of new work. It is about you as a person and taking a moment to spend time with yourself. Why is this is a good time for you to participate in a program that values experience and reflection over production?&nbsp;
".$row["good"]."<br><br>

The fellowship asks individuals to give up control of their time. You agree to follow your schedule regardless of whether you have already done the exact same thing in the exact same place at the exact same time and are sure you won’t enjoy doing it. Part of the point is we spend years deciding what we like and don’t, often making these decisions based on our expectations rather than being open to new things. In our program you don’t have time to say you don’t have time. Our experience over many years and with many people is that you will find new things you like. And new things you don’t like. You have to agree to this. And it’s only two weeks. Fellows receive a detailed itinerary that maps out their day, from early morning hours to late at night. This is an opportunity to step away from routine, familiarity, daily correspondence and distractions. Really, how excited are you by this process? (200 words minimum)&nbsp;
".$row["excited"]."<br><br>

When was the last time that you that felt outside of your comfort zone? Did it feel unexpectedly good afterwards or not?&nbsp;
".$row["comfort"]."<br><br>

The apexart Fellowship Program is active; with up to 4 activities per day, often requiring a lot of walking, traveling alone during the evening, and participating in a range of physical activities. The assigned activities are required. When necessary, we work with Fellows to find alternatives in the event of physical limitations, however the program still remains demanding. Please let us know if you have any concerns.&nbsp;
".$row["concerns"]."<br><br>

Do you have any medical conditions we should be aware of?&nbsp;
".$row["medical"]."<br><br>

Other questions:&nbsp;
".$row["questions"]."<br><br>

Subway comfort from 1-5 due to covid:&nbsp;
".$row["sub"]."<br><br>

Any in-detail subway concerns:&nbsp;
".$row["middle"]."<br><br>

Allergies:&nbsp;
".$row["allergies"]."<br><br>

How much have you curtailed normal activities due to covid?&nbsp;
".$row["normal"]."<br><br>";



	  }
		
	mysql_free_result($result);


?>
