<?php
	include('../../header.php');
	include ('../inbound/connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: 6 month Fellowship Evaluation</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	

	
	$query = sprintf("INSERT INTO 6months (`created_on`, `name`, `res_dates`, `recall`, `standout`, `lasting`, `intouch`, `projects`, `residencies`, `advice`,`message_board`,`blog`, `return`, `lists`, `other`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['name']), 
		mysql_real_escape_string($_POST['res_dates']),
		mysql_real_escape_string($_POST['recall']),
	    mysql_real_escape_string($_POST['standout']),
	    mysql_real_escape_string($_POST['lasting']),
	    mysql_real_escape_string($_POST['intouch']),
	    mysql_real_escape_string($_POST['projects']),
	    mysql_real_escape_string($_POST['residencies']),
	    mysql_real_escape_string($_POST['advice']),
		mysql_real_escape_string($_POST['message_board']),
	    mysql_real_escape_string($_POST['blog']),
	    mysql_real_escape_string($_POST['return']),
	    mysql_real_escape_string($_POST['lists']),
	    mysql_real_escape_string($_POST['other']));
		
	

	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'Six Month Fellowship Evaluation';
	
$message = 'Six Month Fellowship Evaluation'.
					  nl2br($body)
					."

Name: {$_POST['name']}

Fellowship start date: {$_POST['res_dates']}

1. Is there a particular aspect that you recall or think about often regarding your apexart Fellowship?
{$_POST['recall']}
			
2. What aspects/events/people still stand out in your mind?  
{$_POST['standout']}

3. Has there been a lasting effect? Either on your self or your work? How so or how not?
{$_POST['lasting']}


4. Do you keep in touch with anyone you met during the apexart Fellowship?  
{$_POST['intouch']}

5. Have any projects developed out of these relationships? Or with people you met on your own? 
{$_POST['projects']}

6. Have you participated in any residencies since? Were they cultural immersion models (like apexart) or production oriented programs centered around showing your work? Any thoughts about these? 
{$_POST['residencies']}

7. With more time to reflect, what would your advice be now both for the apexart staff and for future residents? What one thing would you like to see changed in the program?  
{$_POST['advice']}


8. Would you find it useful to have a message board with past and current residents? 
{$_POST['message_board']}

9. Have you used/looked at the apexart blog since your Fellowship? Would you like login information to continue posting? 
{$_POST['blog']}

10. Did your experience make you want to return to the location of your Fellowship? 
{$_POST['return']}

11. What are you up to now? And do you have any email lists or blogs we should sign up for to receive information about your projects?
{$_POST['lists']}

12. Please let us know if you have feedback on anything we might have forgotten to ask. 
{$_POST['other']}


			
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Survey Submitted. <br>Thank you for your feedback.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>