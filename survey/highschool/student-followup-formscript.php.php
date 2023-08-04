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
	


	$query = sprintf("INSERT INTO `student-followup` (`created_on`, `role`, `traits`, `now`, `recent`, `look`) VALUES(NOW(),'%s','%s','%s','%s','%s')",


	    mysql_real_escape_string($_POST['role']),
        mysql_real_escape_string($_POST['traits']),
        mysql_real_escape_string($_POST['now']),
        mysql_real_escape_string($_POST['recent']),
        mysql_real_escape_string($_POST['look']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'High School Student Follow Up survey';
	
$message = 'High School Student Follow Up survey'.
					  nl2br($body)
					."
           
				  
Did you participate in the apexart Fellowship Session?
{$_POST['role']} 

Did the questions and class activity make you think differently about creativity or what being an artist is?
{$_POST['traits']}    

Can you share one example of something new that you realized about art and artists that you hadn’t thought of before?
{$_POST['now']}   
                
Was there a most favorite or least favorite part of the apexart Fellowship Session?
{$_POST['recent']}              
                 
If you were the teacher of this session for another class, what would you add or change?
{$_POST['look']}



			
		
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