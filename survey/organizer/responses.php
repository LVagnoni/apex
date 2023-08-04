<?php
	include("header.php");
	?>

<TITLE>apexart :: Post-Inbound Resident Survey Results</TITLE>
		<table width="850" align="center"><tr><td class="standardText">Post-Inbound Resident Survey Results<br /></td></tr></table>
			<?php
 	error_reporting(E_ALL);
	include ('connect.php');
		
		
	$query="SELECT * FROM inbound ORDER BY RAND()";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		
		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["id"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
		echo "<tr class='standardGray' valign='top'><td>1. Was the program clearly explained to you before your arrival? What were your expectations of the program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["expectations"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>2. On a scale of 1 to 5 (with 5 being the highest), how closely did the actual program match these expectations?</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["exp_rate"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>3. How did your expectations and the actual residency experience differ?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["differ"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		
		4. On a scale of 1 to 5, how adequate did you find support from apexart to be in the following regards?<br></td></tr>";
				echo "</table>";
		echo "<table width=850 align=center>";
		
		echo "<tr><td class='standardGray' width=430>... prior to your arrival (visa, plane tickets, etc.)</td>
		<td class='standardText'>".$row["adequate"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... your first week</td>
		<td class='standardText'>".$row["adequate2"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... throughout the rest of your residency</td>
		<td class='standardText'>".$row["adequate3"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in finding non-arts-related activities for you </td>
		<td class='standardText'>".$row["adequate4"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in finding arts-related activities for you</td>
		<td class='standardText'>".$row["adequate5"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in listening to your input during the residency </td>
		<td class='standardText'>".$row["adequate10"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in answer to practical, travel, or language issues</td>
		<td class='standardText'>".$row["adequate6"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... for your trip to DC</td>
		<td class='standardText'>".$row["adequate7"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in connecting you with interesting people in New York</td>
		<td class='standardText'>".$row["adequate8"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in preparing to return home </td>
		<td class='standardText'>".$row["adequate9"]."</td></tr>";
		
		echo "</table>";
		echo "<table width=850 align=center>";
		echo "<tr class='standardGray' valign='top'><td><br>Please let us know what could be improved. </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["improve"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>5. On a scale of 1 to 5 how would you rate the daily itinerary?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["daily"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>6. Was information about events, institutions, and meetings clearly available to you?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["info"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>7.  Did you feel that you were asked to attend too many events? Too few events? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["meetings"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>8. Did you feel that we arranged too many meetings for you? Too few meetings?  </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["meet"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>9. What type of event did you find most compelling (lectures, school visits, performances, meetings, etc…)?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["compelling"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>10. Were your evenings full enough? Too full?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["evenings"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>11. What percentage of planned events did you manage to attend? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["percentage"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>12. Did you spend more or less money on personal expenses than you imaged?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["money"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>13. What would you change about the itinerary?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["change"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>14. Please list one or two people who you met with during your stay and with whom you had a particularly positive experience with and briefly tell us why.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["contacts"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>15. What was your favorite activity on the schedule?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["favorite"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>16. Could you provide us with a few examples of events that you did not enjoy?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["least"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>Can you tell us more about the different stages of the residency program? How did you residency experience differ in the first week, second week, third week, and fourth week? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["stages"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>17. What is your opinion on being asked to refrain from artistic production?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["restrict"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>18. Do you think this program is best described as a residency, a fellowship, or some other term?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["describe"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>19. Do you think the residency will have an effect on your work? If yes please let us know how.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["effect"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>20. Did you come out this experience more/less confident in your work?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["confident"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>21. What are your thoughts on the request to post blog entries? And how do you think we can make it a more productive exercise?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["blog"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>22. What are your thoughts on the residency talk? How could it be improved? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["talk"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>23. What are your thoughts on us sending you to events, lectures, and places outside of your field of interest?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["outside"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>24. Do you think the experiential nature of the residency has affected the way you travel and approach new situations? If yes please let us know how?  </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["travel"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>25. Have you participated in other residencies prior to this one? If so, how has this residency affected you in comparison?   </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["other"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>26. What is the main difference between New York and your place of origin?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["difference"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>27. Overall, on a scale of 1 to 5, how would you rate your apexart residency experience?  <br></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["rate"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>28. What improvements could be made to the program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["promo"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>29. Did you receive any funding for this residency? If yes, from where? Do you have any funding ideas for future residents from your region?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["funding"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>30. What advice do you have for future residents?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["future"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>31. If you have any additional comments, thoughts, or questions, please use the space below: </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["more"]."</blockquote></td></tr>";
	    
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";



	  }
		
	mysql_free_result($result);
	include("footer.php");

?>
