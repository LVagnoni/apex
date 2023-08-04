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
	


	$query = sprintf("INSERT INTO `teacher-followup` (`created_on`, `name`, `email`, `role`, `traits`, `now`, `recent`, `look`, `feel`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['name']),
        mysql_real_escape_string($_POST['email']), 
	    mysql_real_escape_string($_POST['role']),
        mysql_real_escape_string($_POST['traits']),
        mysql_real_escape_string($_POST['now']),
        mysql_real_escape_string($_POST['recent']),
        mysql_real_escape_string($_POST['look']),
        mysql_real_escape_string($_POST['feel']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'High School Teacher Follow Up survey';
	
$message = 'High School Teacher Follow Up survey'.
					  nl2br($body)
					."

Name: {$_POST['name']}

Email: {$_POST['email']}                 
				  
Do you feel the questions created the right discussion?
{$_POST['role']} 

Do you feel the session was productive?
{$_POST['traits']}    

Can you give us some feedback/criticism about your class session?
{$_POST['now']}   
                
Did the session spark any interesting discussion afterwards?
{$_POST['recent']}              
                 
What would you consider to be the top three personal/social issues for your students?
{$_POST['look']}

Give us any ideas or concerns you may have.
{$_POST['feel']}
		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'Bcc: maya.suess@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Survey Submitted. <br>Thank you for filling out the survey!";
					echo "<p>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></p><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>