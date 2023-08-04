<?php
	include ("../organizer/connect.php");
	include("../../../headerb.php");
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Exhibition Organizer Questionnaire</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
    
    
    
    <?php
	
	
	$resultw="";
 	//error_reporting(E_ALL);
			
			
			$query = sprintf("INSERT INTO exhiborg (`id`, `name`, `email`, `guidelines`, `questions`, `feedback`, `supportive`, `helpful`, `sense`,`better`,`changes`,`different`,`challenges`,`success`,`attendance`,`advice`,`other`) 
	VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['id']), 
		mysql_real_escape_string($_POST['name']),		
	    mysql_real_escape_string($_POST['email']), 
		mysql_real_escape_string($_POST['guidelines']),
	    mysql_real_escape_string($_POST['questions']),
	    mysql_real_escape_string($_POST['feedback']),
	    mysql_real_escape_string($_POST['supportive']),
	    mysql_real_escape_string($_POST['helpful']),
	    mysql_real_escape_string($_POST['sense']),
	    mysql_real_escape_string($_POST['better']),
		mysql_real_escape_string($_POST['changes']),
		mysql_real_escape_string($_POST['different']),
	    mysql_real_escape_string($_POST['challenges']),
	    mysql_real_escape_string($_POST['success']),
	    mysql_real_escape_string($_POST['attendance']),
	    mysql_real_escape_string($_POST['advice']),
	    mysql_real_escape_string($_POST['other']));
		
		
					$result = mysql_query($query, $conn); 
					
					
					if (!$result) {
					    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
					    $message .= 'Whole query: ' . $query;
					    die($message);
					}
					
					
					$to = $_POST['email'];
					$to = 'info@apexart.org';
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
Thank you for helping us to improve our programs by sharing your experiences. 
Below is a copy of your responses to our questionnaire. 
<br/> <br/> 

Full Name: {$_POST['name']}<br/> <br/> 

Were the apexart guidelines clear to you? Any specific issues?<br/> 
	{$_POST['guidelines']} <br/> <br/> 

How could the staff be more helpful in explaining issues or answering questions throughout the process?<br/> 
	{$_POST['questions']} <br/> <br/> 

Was feedback from the staff helpful in thinking about and developing your exhibition?<br/> 
	{$_POST['feedback']}<br/> <br/> 

List up to three unexpected issues that you had to deal with and what worked (or didn't):<br/> 
	{$_POST['supportive']}<br/> <br/> 
	
In your opinion, what was most successful about the exhibition?<br/> 
	{$_POST['helpful']}<br/> <br/> 

What was the least successful? <br/> 
	{$_POST['sense']} <br/> <br/> 

Was there a critical issue that arose after your proposal was selected?<br/> 
	{$_POST['better']} <br/> <br/> 

Is there anything you would do differently next time (an artist selection, venue [for International Exhibitions],
shipping method, installation decision, or anything else)?<br/> 
	{$_POST['changes']} <br/> <br/> 

What was the most challenging part of putting together the exhibition? <br/> 
	{$_POST['challenges']} <br/> <br/> 

If you organized an International Exhibition, what was the total exhibition attendance and what was the attendance for event(s)?<br/> 
	{$_POST['attendance']} <br/> <br/> 
	
What advice would you have for other curators/organizers?<br/> 
	{$_POST['advice']} <br/> <br/> 


Any other comments or suggestions? We like constructive criticism. Really.<br/> 
	{$_POST['other']} 

	
";
					
					if (mail($to, $subject, $message, $headers)) {
					  ;;
					  //mail("info@apexart.org", "BCC: ".$subject, $body,$headers);
					 } else {
					  echo("<p>Responses saved to database, but your email didn't work so we can't send you a copy.</p>");
					 }
					 echo error_get_last();
					
					//header('Location: '.$_SERVER['PHP_SELF'].'?justregistered=1' ) ;
					
					$resultw="Submission Successful!<br>Thank you for your feedback.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
		
		
			
		
?>



</body>
</html>