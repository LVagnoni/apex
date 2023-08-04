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
	


	$query = sprintf("INSERT INTO `students_highschool_presurvey3` (`created_on`, `name`, `school`, `role`, `traits`, `now`, `recent`, `look`, `feel`, `success`, `important`, `after`, `rank`, `part`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


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
				  
What is your earliest memory of making art?
{$_POST['role']} 

What is a piece of art or an object that you grew up with that means a lot to you?
{$_POST['traits']}    

What is the difference between art and creativity?
{$_POST['now']}   
                
Have you been to a museum? What was your reaction?
{$_POST['recent']}              
                 
Are there specific qualities that you think a successful artist must have?
{$_POST['look']}

Do you remember an activity that you did when you were really young that you enjoyed and that you haven't done in years?
{$_POST['feel']}

What materials do you like to use when being creative?
{$_POST['success']}

Is there a general idea or theme you address most often when you create?
{$_POST['important']} 

What is the purpose of art?
{$_POST['after']} 

Is social media like Tik tok or Instagram a form of art?
{$_POST['rank']} 

How important is it to get feedback on your creative efforts, or do you not need to show people?
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