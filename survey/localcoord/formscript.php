    <?php
    include('../../header.php');
    include('connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Local Coordinator Questionnaire</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	
	$query = sprintf("INSERT INTO localcoord (`id`, `created_on`, `name`, `email`, `fellowname`, `city`, `responsibilities`, `brainstorming`, `schedule`, `arrival`,`unexpected`,`suggestions`,`previously`, `communication`, `time`,`enjoy`,`challenging`,`support`,`experience`,`future`,`else`) 
	VALUES('%s',NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['id']), 
		//mysql_real_escape_string($_POST['created_on']),
		mysql_real_escape_string($_POST['name']),		
	    mysql_real_escape_string($_POST['email']), 
		mysql_real_escape_string($_POST['fellowname']),
	    mysql_real_escape_string($_POST['city']),
	    mysql_real_escape_string($_POST['responsibilities']),
	    mysql_real_escape_string($_POST['brainstorming']),
	    mysql_real_escape_string($_POST['schedule']),
	    mysql_real_escape_string($_POST['arrival']),
	    mysql_real_escape_string($_POST['unexpected']),
		mysql_real_escape_string($_POST['suggestions']),
	    mysql_real_escape_string($_POST['previously']),
	    mysql_real_escape_string($_POST['communication']),
	    mysql_real_escape_string($_POST['time']),
	    mysql_real_escape_string($_POST['enjoy']),
	    mysql_real_escape_string($_POST['challenging']),
	    mysql_real_escape_string($_POST['support']),
	    mysql_real_escape_string($_POST['experience']),
	    mysql_real_escape_string($_POST['future']),
	    mysql_real_escape_string($_POST['else']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		$to = $_POST['email'];
		$to .= ", info@apexart.org";
		if (!isset($_POST['email'])||empty($_POST['email'])) $_POST['email']="noemail@lentered.com";
		$from = "info@apexart.org";
		$subject = 'apexart Local Coordinator Questionnaire';
	    $message = 'apexart Local Coordinator Questionnaire'.
					  nl2br($body)
					."
Thank you for helping us to improve our programs by sharing your experiences. Below is a copy of your responses to our questionnaire. 


Your name: {$_POST['name']} 

Your email: {$_POST['email']}

Your hosted Fellow's name: {$_POST['fellowname']}

Your coordinating city: {$_POST['city']}

Were the responsibilities of the Local Coordinator position made clear from the beginning? 
	{$_POST['responsibilities']} 

How was the experience of working with the Director of Programs to fill out the schedule in Google Suite, and is there anything that you would change? 
	{$_POST['brainstorming']} 

How was the experience of filling out the schedule in the Google calendar and is there anything that should be changed?
	{$_POST['schedule']} 

How did the Fellow’s arrival go? Did you feel prepared for the start of the Fellowship?
	{$_POST['arrival']} 

During the Fellowship were there any unexpected occurrences? 
	{$_POST['unexpected']} 

What in the Fellowship did not work so well? Do you have suggestions for how to improve it next time? 
	{$_POST['suggestions']} 

If you have previously been a fellow in NYC, what do you see as the differences in a Fellowship in your city?  
	{$_POST['previously']} 

How was the amount and quality of communication with apexart? Did you feel you needed more? Or less?
	{$_POST['communication']} 

Was the time required by the job more or less than you expected, or about the same? 
	{$_POST['time']} 

What did you enjoy about being the Local Coordinator? 
	{$_POST['enjoy']} 

What was the most challenging part of being the Local Coordinator?
	{$_POST['challenging']} 

Did you feel you had the support you needed from apexart? 
	{$_POST['support']} 

Was the experience of being a Local Coordinator what you had expected? Or if different, in what ways?
	{$_POST['experience']} 

Would you like to be a Local Coordinator again the future?
	{$_POST['future']} 

Is there anything else you would like to say? 
	{$_POST['else']} 

	
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