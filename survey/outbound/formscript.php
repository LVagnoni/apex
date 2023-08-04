<?php
	include ('connect.php');
	include('../../header.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Post-Outbound Residency Survey</TITLE>
<link href="https://apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	

	
	$query = sprintf("INSERT INTO outbound (`name`, `expectations`, `exp_rate`, `differ`, `adequate`, `adequate1`, `adequate2`, `adequate3`, `adequate4`, `adequate5`, `host`, `host1`, `host2`, `host3`, `host4`, `host5`, `host6`, `host7`, `host_comments`, `itinerary`, `info`, `events`, `meetings`, `contact`, `event`, `evenings`, `percentage`, `money`, `month`, `time`, `change`, `restriction`, `blog`, `program`, `improve`, `remain`, `scale`, `effect`, `confident`, `experiential`, `residencies`, `difference`, `advice`, `comments`) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['name']), 
		mysql_real_escape_string($_POST['expectations']),
	    mysql_real_escape_string($_POST['exp_rate']),
	    mysql_real_escape_string($_POST['differ']),
	    mysql_real_escape_string($_POST['adequate']),
	    mysql_real_escape_string($_POST['adequate1']),
	    mysql_real_escape_string($_POST['adequate2']),
	    mysql_real_escape_string($_POST['adequate3']),
	    mysql_real_escape_string($_POST['adequate4']),
	    mysql_real_escape_string($_POST['adequate5']),
	    mysql_real_escape_string($_POST['host']),
	    mysql_real_escape_string($_POST['host1']),
	    mysql_real_escape_string($_POST['host2']),
	    mysql_real_escape_string($_POST['host3']),
	    mysql_real_escape_string($_POST['host4']),
	    mysql_real_escape_string($_POST['host5']),
	    mysql_real_escape_string($_POST['host6']),
	    mysql_real_escape_string($_POST['host7']),
	    mysql_real_escape_string($_POST['host_comments']),
	    mysql_real_escape_string($_POST['itinerary']),
	    mysql_real_escape_string($_POST['info']),
	    mysql_real_escape_string($_POST['events']),
	    mysql_real_escape_string($_POST['meetings']),
	    mysql_real_escape_string($_POST['contact']),
	    mysql_real_escape_string($_POST['event']),
	    mysql_real_escape_string($_POST['evenings']),
	    mysql_real_escape_string($_POST['percentage']),
	    mysql_real_escape_string($_POST['money']),
	    mysql_real_escape_string($_POST['month']),
	    mysql_real_escape_string($_POST['time']),
	    mysql_real_escape_string($_POST['change']),
	    mysql_real_escape_string($_POST['restriction']),
	    mysql_real_escape_string($_POST['blog']),
	    mysql_real_escape_string($_POST['program']),
	    mysql_real_escape_string($_POST['improve']),
	    mysql_real_escape_string($_POST['remain']),
		mysql_real_escape_string($_POST['scale']),
		mysql_real_escape_string($_POST['effect']),
		mysql_real_escape_string($_POST['confident']),
		mysql_real_escape_string($_POST['experiential']),
		mysql_real_escape_string($_POST['residencies']),
		mysql_real_escape_string($_POST['difference']),
		mysql_real_escape_string($_POST['advice']),
		mysql_real_escape_string($_POST['comments']));
		
	

	
		$result = mysql_query($query, $conn); 
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
				
$to      = 'info@apexart.org';
$subject = 'Outbound Survey Result';
	
$message = 'Outbound Survey Result'.
					  nl2br($body)
					."

Name: {$_POST['name']}

1. Was the program clearly explained to you before your departure? What were your expectations of the program?
{$_POST['expectations']}
			
2. On a scale of 1-5, how closely did the actual program match these expectations?
{$_POST['exp_rate']}

3. How did your expectations and the actual residency experience differ?
{$_POST['differ']}

4. On a scale of 1-5, how adequate did you find support from apexart to be...
...prior to your departure (visa, plane tickets, etc...)?
{$_POST['adequate']}
...in answer to practical, travel, or administrative issues?
{$_POST['adequate1']}
...in connecting you with a contact person/host organization?
{$_POST['adequate2']}
...in connecting you with interesting people?
{$_POST['adequate3']}
...with support during your residency?
{$_POST['adequate4']}
...upon your return home?
{$_POST['adequate5']}

5. On a scale of 1-5, how adequate did you find your contact person or host organization to be...
...in the first week of your residency?
{$_POST['host']}
...throughout the rest of your residency?
{$_POST['host1']}
...in finding non-arts related activities for you?
{$_POST['host2']}
...in finding arts-related activities for you?
{$_POST['host3']}
...in answer to practical, travel, or language issues?
{$_POST['host4']}
...for travels outside the city in which you were based?
{$_POST['host5']}
...in connecting you with interesting people?
{$_POST['host6']}
...in preparing to return home?
{$_POST['host7']}

6. If you have other comments about your contact person or host organization, please elaborate in the space below.
{$_POST['host_comments']}

7. On a scale of 1-5 how would you rate the daily itinerary?
{$_POST['itinerary']}

8. Was information about events, institutions, and meetings clearly available to you?
{$_POST['info']}

9. Did you feel that you were asked to attend too many events? To few events?
{$_POST['events']}

10. Did you feel there were too many meetings arranged for you? Too few?
{$_POST['meetings']}

11. Who was the most interesting/beneficial contact you met either arranged by apexart or your host or that you made independently? And briefly, why?
{$_POST['contact']}

12. What was the most interesting/beneficial event you attended that was either arranged by apexart or your host or that you participated in independently? And briefly, why?
{$_POST['event']}

13. Were your evenings full enough? Too full?
{$_POST['evenings']}

14. What percentage of planned events did you manage to attend?
{$_POST['percentage']}

15. Did you spend more or less money on personal expenses than you imagined?
{$_POST['money']}

16. Do you think one month was adequate time to explore a new culture?
{$_POST['month']}

17. Would you want to spend more/less time traveling outside of the city that you were based in? If so, please explain why.
{$_POST['time']}

18. What would you change about the itinerary?
{$_POST['change']}

19. Did you find the restriction on producing work during the residency useful or constraining? Please explain.
{$_POST['restriction']}

20. What are your thoughts on the requirement to keep a resident blog?
{$_POST['blog']}

21. Do you think this program is best described as a residency, a fellowship, or some other term?
{$_POST['program']}

22. What about the program could be improved?
{$_POST['improve']}

23. What aspects of the program should remain the same?
{$_POST['remain']}

24. Overall, on a scale of 1-5, how would you rate your apexart residency experience?
{$_POST['scale']}

25. Do you think the residency will have an effect on your work? If yes, please let us know how.
{$_POST['effect']}

26. Did you come out of this experience more/less confident in your work?
{$_POST['confident']}

27. Do you think the experiential nature of the residency has affected the way you travel and approach new situations? If yes, please let us know how.
{$_POST['experiential']}

28. Have you participated in other residencies abroad prior to this one? If so, how has this residency affected you in comparison?
{$_POST['residencies']}

29. What is the main difference between New York and your residency location?
{$_POST['difference']}

30. What advise do you have for future residents?
{$_POST['advice']}

31. If you have any additional comments, thoughts, or questions, please use the space below to tell us.
{$_POST['comments']}
			
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



					
					//header('Location: '.$_SERVER['PHP_SELF'].'?justregistered=1' ) ;
					
					$resultw="Survey Submitted. <br>Thank you for your invaluable feedback.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
			
			
			
		
		

	
?>



</HEAD>


</body>
</html>