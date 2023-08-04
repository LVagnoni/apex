<?php
	include("../../header.php");
	?>

<TITLE>apexart :: 1 month Post-Outbound Resident Survey Results</TITLE>
		<table width="850" align="center"><tr>
		  <td class="standardText">1 month Post-Outbound Resident Survey Results<br /><br /><br />
          </td>
        <td class="standardText" width="500" align="right">      
       <?php
        include('../survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
	include ('connect.php');
		
		
	$query="SELECT * FROM outbound ORDER BY res_dates DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		
		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]."</td>";
		echo "<td class='grayback' align='left'>Residency start date: ".$row["res_dates"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
		echo "<tr class='standardGray' valign='top'><td>1. Was the program clearly explained to you before your departure? What were your expectations of the program?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["expectations"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>2. On a scale of 1-5, how closely did the actual program match these expectations?</td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["exp_rate"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>3. How did your expectations and the actual residency experience differ?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["differ"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		
		4. On a scale of 1 to 5, how adequate did you find support from apexart to be...<br></td></tr>";
				echo "</table>";
		echo "<table width=850 align=center>";
		
		echo "<tr><td class='standardGray' width=430>... prior to your departure (visa, plane tickets, etc.)</td>
		<td class='standardText'>".$row["adequate"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in answer to practical, travel, or administrative issues?</td>
		<td class='standardText'>".$row["adequate1"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in connecting you with a contact person/host organization?</td>
		<td class='standardText'>".$row["adequate2"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in connecting you with interesting people?</td>
		<td class='standardText'>".$row["adequate3"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... with support during your residency?</td>
		<td class='standardText'>".$row["adequate4"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... upon your return home?</td>
		<td class='standardText'>".$row["adequate5"]."</td></tr>";
		
				echo "</table>";
		
		echo "<table width=850 align=center>";
		echo "<tr><td  class='standardGray' valign='top' width=800>
		
		<br>5. On a scale of 1-5, how adequate did you find your contact person or host organization to be...<br></td></tr>";
		echo "</table>";
		
		echo "<table width=850 align=center>";
		
		
		echo "<tr  class='standardGray' valign='top'><td>... in the first week of your residency?</td>
		<td class='standardText'>".$row["host"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... throughout the rest of your residency?</td>
		<td class='standardText'>".$row["host1"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in finding non-arts related activities for you?</td>
		<td class='standardText'>".$row["host2"]."</td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>... in finding arts-related activities for you?</td>
		<td class='standardText'>".$row["host3"]."</td></tr>";
				echo "<tr  class='standardGray' valign='top'><td>... in answer to practical, travel, or language issues?</td>
		<td class='standardText'>".$row["host4"]."</td></tr>";
				echo "<tr  class='standardGray' valign='top'><td>... for travels outside the city in which you were based?</td>
		<td class='standardText'>".$row["host5"]."</td></tr>";
				echo "<tr  class='standardGray' valign='top'><td>... in connecting you with interesting people?</td>
		<td class='standardText'>".$row["host6"]."</td></tr>";
				echo "<tr  class='standardGray' valign='top'><td>... in preparing to return home?</td>
		<td class='standardText'>".$row["host7"]."</td></tr>";
		
		echo "</table>";
		echo "<table width=850 align=center>";
		echo "<tr class='standardGray' valign='top'><td><br>6. If you have other comments about your contact person or host organization, please elaborate in the space below. </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["host_comments"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>7. On a scale of 1-5 how would you rate the daily itinerary?
</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["itinerary"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>8. Was information about events, institutions, and meetings clearly available to you?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["info"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>9. Did you feel that you were asked to attend too many events? To few events?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["events"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>10. Did you feel there were too many meetings arranged for you? Too few?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["meetings"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>11. Who was the most interesting/beneficial contact you met either arranged by apexart or your host or that you made independently? And briefly, why?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["contact"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>12. What was the most interesting/beneficial event you attended that was either arranged by apexart or your host or that you participated in independently? And briefly, why?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["event"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>13. Were your evenings full enough? Too full? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["evenings"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>14. What percentage of planned events did you manage to attend?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["percentage"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>15. Did you spend more or less money on personal expenses than you imagined?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["money"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>16. Do you think one month was adequate time to explore a new culture?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["month"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>17. Would you want to spend more/less time traveling outside of the city that you were based in? If so, please explain why.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["time"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>18. What would you change about the itinerary?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["change"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>19. Did you find the restriction on producing work during the residency useful or constraining? Please explain.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["restriction"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>20. What are your thoughts on the requirement to keep a resident blog?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["blog"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>21. Do you think this program is best described as a residency, a fellowship, or some other term?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["program"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>22. What about the program could be improved?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["improve"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>23. What aspects of the program should remain the same?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["remain"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>24. Overall, on a scale of 1-5, how would you rate your apexart residency experience?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["scale"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>25. Do you think the residency will have an effect on your work? If yes, please let us know how.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["effect"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>26. Did you come out of this experience more/less confident in your work?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["confident"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>27. Do you think the experiential nature of the residency has affected the way you travel and approach new situations? If yes, please let us know how.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["experiential"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>28. Have you participated in other residencies abroad prior to this one? If so, how has this residency affected you in comparison?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["residencies"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>29. What is the main difference between New York and you residency location?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["difference"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>30. What advice do you have for future residents?<br></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["advice"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>31. If you have any additional comments, thoughts, or questions, please use the space below to tell us.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["comments"]."</blockquote></td></tr>";
		
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";



	  }
		
	mysql_free_result($result);
	

?>
