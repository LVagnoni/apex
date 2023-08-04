
    <?php
	include ("../organizer/connect.php");
	include("../../headerb.php");
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Exhibition Organizer Questionnaire</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	
	$query = sprintf("INSERT INTO curator (`id`, `name`, `email`,`created_on`, `guidelines`, `questions`, `feedback`, `supportive`, `helpful`, `sense`,`better`,`changes`,`challenges`, `success`, `other`) 
	VALUES('%s','%s','%s',NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['id']), 
		mysql_real_escape_string($_POST['name']),		
	    mysql_real_escape_string($_POST['email']), 
		//mysql_real_escape_string($_POST['created_on']),
		mysql_real_escape_string($_POST['guidelines']),
	    mysql_real_escape_string($_POST['questions']),
	    mysql_real_escape_string($_POST['feedback']),
	    mysql_real_escape_string($_POST['supportive']),
	    mysql_real_escape_string($_POST['helpful']),
	    mysql_real_escape_string($_POST['sense']),
	    mysql_real_escape_string($_POST['better']),
		mysql_real_escape_string($_POST['changes']),
	    mysql_real_escape_string($_POST['challenges']),
	    mysql_real_escape_string($_POST['success']),
	    mysql_real_escape_string($_POST['other']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
					    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
					    $message .= 'Whole query: ' . $query;
					    die($message);
					}
					
					
					$to = $_POST['email'];
			
					if (!isset($_POST['email'])||empty($_POST['email'])) $_POST['email']="noemail@lentered.com";
					$from = "info@apexart.org";
					$headers .= 'From: '.$from. "\r\n" .
					    'Reply-To: '.$from. "\r\n";
					$headers .= 'Bcc: info@apexart.org' . "\r\n";
					// To send HTML mail, the Content-type header must be set
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					
					$headers .= 'X-Mailer: PHP/' . phpversion();
						$subject = 'apexart Exhibition Organizer Questionnaire';
	    $message = 'apexart Exhibition Organizer Questionnaire'.
					  nl2br($body)
					."
Thank you for helping us to improve our programs by sharing your experiences. Below is a copy of your responses to our questionnaire. 


Full Name: {$_POST['name']} 

Were the apexart guidelines clear to you? Any specific issues? 
	{$_POST['guidelines']} 

How could the staff be more helpful in explaining issues or answering questions throughout the process?
	{$_POST['questions']} 

Was feedback from the staff helpful in thinking about and developing your exhibition?
	{$_POST['feedback']} 

List up to three unexpected issues that you had to deal with and what worked (or didn't):
	{$_POST['supportive']} 

What advice would you have for other curators/organizers? 
	{$_POST['helpful']} 

What was most successful about the show in your opinion?
	{$_POST['sense']} 

What was the least successful? 
	{$_POST['better']} 

Was there an important issue in the development of your exhibition that arose after your were selected? Was there an artist selection, venue (in the case of Franchise Exhibitions), shipping, installation, or other that you would do differently next time?
	{$_POST['changes']} 

What was the most challenging part of putting together the show?
	{$_POST['challenges']} 

What could we do next time to be more effective at any stage? 
	{$_POST['success']} 

Any other comments or suggestions? We like constructive criticism. Really.
	{$_POST['other']} 

	
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Survey Submitted. <br>Thank you for your feedback.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='https://www.apexart.org'>Return to apexart website.</a><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>