<?php
	include('../../header.php');
	include ('../12month/connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Post-Fellowship Evaluation</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	

	$query = sprintf("INSERT INTO 12month (`name`, `created_on`, `res_dates`, `standout`, `person`, `refer`, `attend`, `psych`, `broaden`, `creative`,`return`,`social`, `sent`, `suggestion`) VALUES('%s',NOW(),'%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['name']), 
		mysql_real_escape_string($_POST['created_on']),
		mysql_real_escape_string($_POST['res_dates']),
		mysql_real_escape_string($_POST['standout']),
	    mysql_real_escape_string($_POST['person']),
	    mysql_real_escape_string($_POST['refer']),
	    mysql_real_escape_string($_POST['attend']),
	    mysql_real_escape_string($_POST['psych']),
	    mysql_real_escape_string($_POST['broaden']),
	    mysql_real_escape_string($_POST['creative']),
		mysql_real_escape_string($_POST['return']),
	    mysql_real_escape_string($_POST['social']),
	    mysql_real_escape_string($_POST['sent']),
	    mysql_real_escape_string($_POST['suggestion']));
		
	

	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'One Year Fellowship Evaluation';
	
$message = 'One Year Fellowship Evaluation'.
					  nl2br($body)
					."

Name: {$_POST['name']}

Fellowship start date: {$_POST['res_dates']}

1. Is there a particular activity or circumstance that stands out in your mind a year later? 
{$_POST['standout']}
			
2. Did any particular person you met during your fellowship have a strong effect on you? How so? 
{$_POST['person']}

3. Do you refer to your fellowship often? What’s the number one thing you say about it, or the story you tell most often? 
{$_POST['refer']}

4. Did you find that you were more likely to attend activities, lectures, and / or events outside of your comfort zone when you returned?  Do you still?
{$_POST['attend']}

5. Any long lasting psychological effects?
{$_POST['psych']}

6. Did it have any effect on broadening your view of art, travel or other people? 
{$_POST['broaden']}

7. Did it have any effect on your creative practice?  If so how? 
{$_POST['creative']}

8. Have you returned? Do you have intentions of returning to your fellowship location?
{$_POST['return']}

9. Do you follow apexart on facebook? Twitter? Subscribe to our email list?  
{$_POST['social']}

10. Do you have a sentence of advice for future Fellows?  
{$_POST['sent']}

11. Can you give one suggestion on how we might improve the program?
{$_POST['suggestion']}



			
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Survey Submitted. <br>Thank you for your invaluable feedback.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>