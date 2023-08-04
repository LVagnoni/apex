<?php
	include ('connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Fellowship Recommendation Form</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 
	$query = sprintf("INSERT INTO recommendation_new (`rec_name`,`rec_email`,`nom_name`,`nom_email`,`relation`,`rellength`,`recommend`,`applies`,`results`,`comments`,`created_on`,`nyc`) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW(),'%s')",

		mysql_real_escape_string($_POST['rec_name']), 
		mysql_real_escape_string($_POST['rec_email']), 
		mysql_real_escape_string($_POST['nom_name']),
	    mysql_real_escape_string($_POST['nom_email']),
	    mysql_real_escape_string($_POST['relation']),
	    mysql_real_escape_string($_POST['rellength']),
	    mysql_real_escape_string($_POST['recommend']),
	    mysql_real_escape_string($_POST['applies']),
	    mysql_real_escape_string($_POST['results']),
	    mysql_real_escape_string($_POST['comments']),
		//mysql_real_escape_string($_POST['created_on']),
	    mysql_real_escape_string($_POST['nyc']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		$to = $_POST['rec_email'];
		$to .= ", info@apexart.org";
		if (!isset($_POST['rec_email'])||empty($_POST['rec_email'])) $_POST['rec_email']="noemail@lentered.com";
		$from = "info@apexart.org";
		$subject = 'apexart US Cities Fellowship Recommendation';
	    $message = 'apexart US Cities Fellowship Recommendation'.
					  nl2br($body)
					."

Recommender name: {$_POST['rec_name']} 
Recommender email: {$_POST['rec_email']} 
Nominee name: {$_POST['nom_name']} 
Nominee email: {$_POST['nom_email']}

1. How do you know this person? (Colleague, friend, etc.) {$_POST['relation']}

2. How long have you known them? {$_POST['rellength']}

3. It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and exploring unfamiliar experiences? (100-200 words) {$_POST['recommend']}

4. apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, international travel) recently. Please describe how this applies to your candidate. (50-100 words) {$_POST['applies']}

5. What do you hope might be the results of participating in the program for your nominee? (100-200 words) {$_POST['results']}

6. Is there any additional information about the candidate that would help us in our selection? {$_POST['comments']}




Thank you for recommendation to apexart's Fellowship Program! We will be in touch with you regarding next steps. 
	
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

$resultw="Thank you for your nomination to apexart's Fellowship Program!";
				echo "<center><br><br><br><style='font-family: Arial, sans-serif; font-size: 20px; color: #FFFFFF;'>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>