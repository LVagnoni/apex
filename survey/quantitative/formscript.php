<?php
	include ('connect.php');
	include('../../header.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Quantitative Resident Survey</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	

	
	$query = sprintf("INSERT INTO quantitative (`name`,`question1`,`question2`,`question3`,`question4`,`question5`,`created_on`) VALUES('%s','%s','%s','%s','%s','%s',NOW())",

		mysql_real_escape_string($_POST['name']),
	    mysql_real_escape_string($_POST['question1']),
	    mysql_real_escape_string($_POST['question2']),
	    mysql_real_escape_string($_POST['question3']),
	    mysql_real_escape_string($_POST['question4']),
	    mysql_real_escape_string($_POST['question5']),
		mysql_real_escape_string($_POST['created_on']));
		
	

	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'Quantitative Survey Result';
	
$message = 'Quantitative Survey Result'.
					  nl2br($body)
					."

Name: {$_POST['name']}

1. How confident do you feel as a traveler?
{$_POST['question1']}
			
2. How confident do you feel in your work? 
{$_POST['question2']}

3. Do you consider yourself successful?
{$_POST['question3']}

4. How inspired do you feel by your daily surroundings? 
{$_POST['question4']}

5. How comfortable are you being alone?
{$_POST['question5']}


		
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