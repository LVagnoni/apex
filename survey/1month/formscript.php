<?php
	include('../../header.php');
	include ('../1month/connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: 1 month Fellowship Survey</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	


	$query = sprintf("INSERT INTO 1month (`created_on`, `name`, `dates`, `expected`, `challenging`, `engaged`, `event`, `rigorous`, `worst`, `favorite`,`person`,`explorations`, `preconceptions`, `topics`, `problem`, `schedule`, `creative`, `absence`, `journal`, `share`,`interview`, `goals`, `timing`, `advice`, `improve`, `thoughts`, `anyone`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['name']), 
		mysql_real_escape_string($_POST['dates']),
		mysql_real_escape_string($_POST['expected']),
	    mysql_real_escape_string($_POST['challenging']),
	    mysql_real_escape_string($_POST['engaged']),
	    mysql_real_escape_string($_POST['event']),
	    mysql_real_escape_string($_POST['rigorous']),
	    mysql_real_escape_string($_POST['worst']),
	    mysql_real_escape_string($_POST['favorite']),
		mysql_real_escape_string($_POST['person']),
	    mysql_real_escape_string($_POST['explorations']),
	    mysql_real_escape_string($_POST['preconceptions']),
	    mysql_real_escape_string($_POST['topics']),
	    mysql_real_escape_string($_POST['problem']),
	    mysql_real_escape_string($_POST['schedule']),
	    mysql_real_escape_string($_POST['creative']),
	    mysql_real_escape_string($_POST['absence']),
	    mysql_real_escape_string($_POST['journal']),
	    mysql_real_escape_string($_POST['share']),
	    mysql_real_escape_string($_POST['interview']),
	    mysql_real_escape_string($_POST['goals']),
	    mysql_real_escape_string($_POST['timing']),
	    mysql_real_escape_string($_POST['advice']),
	    mysql_real_escape_string($_POST['improve']),
	    mysql_real_escape_string($_POST['thoughts']),
	    mysql_real_escape_string($_POST['anyone']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'One Month Fellowship Evaluation';
	
$message = 'One Month Fellowship Evaluation'.
					  nl2br($body)
					."

Name: {$_POST['name']}

Fellowship start date: {$_POST['dates']}

1. Was your experience of apexart’s Fellowship different than what you expected?
{$_POST['expected']}

2. Did you find your Fellowship engaging overall? Intellectually challenging?   
{$_POST['challenging']}

3. How engaged did you feel in our program? (Scale of 1 – 5)  
{$_POST['engaged']}			
                
4. What event did you find most challenging? Why? And what did it feel like once you overcame your fears about it?
{$_POST['event']}
		
5. How rigorous did you feel the program was (scale of 1 – 5) 
{$_POST['rigorous']}                  
				 
6. What was your least favorite event - or type of event? Why? 
{$_POST['worst']}                  
				  
7. What was your favorite – or favorite type of event? Why? 
{$_POST['favorite']}                  
				  
8. Who was the most interesting or influential person you met on your Fellowship? 
{$_POST['person']}                 
				 
9. What did you find on your own explorations? 
{$_POST['explorations']}                  

10. What were your preconceptions? 
{$_POST['preconceptions']}                  
				  			  
11. Did you discover new topics of interest? Can you give an example?
{$_POST['topics']}
				  
12. Can you give an example of a problem you had before you arrived?
{$_POST['problem']}                  
				  
13. Was your schedule clear? If not why not? 
{$_POST['schedule']}                 
				 
14.	Has the fellowship caused you to reconsider how you relate and approach your creative process? 
{$_POST['creative']}			 

15.	In the context of a residency, was the absence of pressure to create work helpful? Restful or stressful? Energizing or taxing? 
{$_POST['absence']}
			 
16.	Did the journal help you reflect on your experience? 
{$_POST['journal']}                 
				 
17.	Is there anything you want to share with people, now that you’re back home? 
{$_POST['share']}                  

18.	Did you enjoy the exit interview? 
{$_POST['interview']}                  
				  
19.	Could the goals of apexart’s Fellowship been made clearer? 
{$_POST['goals']}                  
				  
20.	Was the Fellowship long or short? 
{$_POST['timing']}                  
				  
21.	What advice do you have for future Fellows?
{$_POST['advice']}                  
				  
22.	Please give us one example about how the program overall could be improved. 
{$_POST['improve']}
                  
23.	Other thoughts about the Fellowship or your experience? We welcome and thoughts or ideas that you have about the program and encourage you to tell us more. 
(300 words max)
{$_POST['thoughts']}
                  
24.	Can you think of anyone who might be particularly interested in learning more about apexart? If so, and with their permission, please include their contact information.
{$_POST['anyone']}                 
				 
			
		
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