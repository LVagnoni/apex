<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: High School Students Pre-Session Survey</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="../../apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="../../css/elements.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="../../js/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>



</head>

<body>


    <!-- Main wrapper start -->
    <div class="wrapper">
        <? require ('../../header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- Main content area start -->
        <div class="content">
           <br><br><br><br>
          
<!-- Service section start -->
            <div class="container">

            	<?php
	
	require ('connect.php');
?>
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	


	$query = sprintf("INSERT INTO `students_highschool_presurvey2` (`created_on`, `name`, `school`, `role`, `traits`, `now`, `recent`, `look`, `feel`, `success`, `important`, `after`, `rank`, `part`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['name']),
        mysql_real_escape_string($_POST['school']), 
	    mysql_real_escape_string($_POST['role']),
        mysql_real_escape_string($_POST['traits']),
        mysql_real_escape_string($_POST['now']),
        mysql_real_escape_string($_POST['recent']),
        mysql_real_escape_string($_POST['look']),
        mysql_real_escape_string($_POST['feel']),
        mysql_real_escape_string($_POST['success']),
        mysql_real_escape_string($_POST['important']),
        mysql_real_escape_string($_POST['after']),
        mysql_real_escape_string($_POST['rank']),
        mysql_real_escape_string($_POST['part']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'High School Pre-session survey';
	
$message = 'High School Pre-session survey'.
					  nl2br($body)
					."

Name: {$_POST['name']}

School / Program: {$_POST['school']}                 
				  
How does art affect your life?
{$_POST['role']} 

What qualities does an artist have?
{$_POST['traits']}    

What artistic qualities or tendencies do you have?  
{$_POST['now']}   
                
Describe your most recent creative expression or activity.
{$_POST['recent']}              
                 
Who/What makes you think most creatively and why?
{$_POST['look']}

Do you go to museums or visit art galleries? How do you feel when you go into a museum? And when you leave? What could be different about this experience?
{$_POST['feel']}

What does it mean to be a successful artist? How do you describe success for yourself?
{$_POST['success']}

How important is success to be happy?
{$_POST['important']} 

Name one activity that you did as a kid that you enjoyed that you haven't done in years:
{$_POST['after']} 

Rank the terms from most important to least: Money, power, friends, freedom:
{$_POST['rank']} 

How do you think art might be a part of your life after high school?
{$_POST['part']} 
			
		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'Bcc: abbie.hebein@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Survey Submitted. <br>Thank you for filling out the survey! We look forward to our session with your class.";
					echo "<p>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></p><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>