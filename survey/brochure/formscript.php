<?php
	include('../../headerc.php');
	include ('connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Brochure Survey</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	


	$query = sprintf("INSERT INTO `brochure` (`created_on`, `name`, `email`, `read`, `stop`, `still`, `contact`, `ca`, `digital`, `signup`, `thoughts`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['name']),
		mysql_real_escape_string($_POST['email']),
	    mysql_real_escape_string($_POST['read']),
	    mysql_real_escape_string($_POST['stop']),
	    mysql_real_escape_string($_POST['still']),
	    mysql_real_escape_string($_POST['contact']),
	    mysql_real_escape_string($_POST['ca']),
	    mysql_real_escape_string($_POST['digital']),
	    mysql_real_escape_string($_POST['signup']),
	    mysql_real_escape_string($_POST['thoughts']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'Brochure Survey';
	
$message = 'Brochure Survey'.
					  nl2br($body)
					."

Name:
{$_POST['name']}
Email:
{$_POST['email']}
Mailing Address:
{$_POST['contact']}


Do you read the mailed apexart brochures?
{$_POST['read']}

Should we stop printing them and rely on alternative digital methods to distribute their content?
{$_POST['stop']}

Should we continue to do a small print run of our brochures for you to still receive them in the post free of charge?
{$_POST['still']}

If you were a curator or artist in an apexart exhibition, would it be important to you to have printed brochures sent to people around the world via snail mail?
{$_POST['ca']}

Would you read a digital version of the brochure?
{$_POST['digital']}

Add this person to EEM for digital brochures?
{$_POST['signup']}

Do you have any other thoughts or suggestions about the printed brochures?		 
{$_POST['thoughts']}			
		
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