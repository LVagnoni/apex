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
		if (!isset($_POST['rec_email'])||empty($_POST['rec_email'])) $_POST['rec_email']="noemail@lentered.com";
		$from = "info@apexart.org";
          $headers .= 'From: '.$from. "\r\n" .
              'Reply-To: '.$from. "\r\n";
          $headers .= 'Bcc: info@apexart.org' . "\r\n";
          // To send HTML mail, the Content-type header must be set
          $headers .= 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
          
          $headers .= 'X-Mailer: PHP/' . phpversion();
          $subject = "Incoming New York City Fellowship Recommendation";
	    $message = 'Incoming New York City Fellowship Recommendation'.
					  nl2br($body)
					."

Recommender name: {$_POST['rec_name']} <br>
Recommender email: {$_POST['rec_email']} <br>
Nominee name: {$_POST['nom_name']} <br>
Nominee email: {$_POST['nom_email']}<br>
<br><br>
1. How do you know this person? (Colleague, friend, etc.) {$_POST['relation']}
<br><br>
2. How long have you known them? {$_POST['rellength']}
<br><br>
3. It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and exploring unfamiliar experiences? (100-200 words) {$_POST['recommend']}
<br><br>
4. apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, international travel) recently. Please describe how this applies to your candidate. (50-100 words) {$_POST['applies']}
<br><br>
5. What do you hope might be the results of participating in the program for your nominee? (100-200 words) {$_POST['results']}
<br><br>
6. Is there any additional information about the candidate that would help us in our selection? {$_POST['comments']}
<br><br>
My nominee has never been to NYC: {$_POST['nyc']}



<br><br>
Thank you for recommendation to apexart's Fellowship Program! We will be in touch with you regarding next steps. 
	
";
					


mail($to, $subject, $message, $headers);

$resultw="Thank you for your nomination to apexart's Fellowship Program!";
				echo "<center><br><br><br><style='font-family: Arial, sans-serif; font-size: 20px; color: #FFFFFF;'>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>