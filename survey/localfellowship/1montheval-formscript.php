<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: Local New York City Fellowship 1 Month Evaluation</title>
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
	


	$query = sprintf("INSERT INTO `1monthlocaleval` (`created_on`, `name`, `email`, `dates`, `different`, `engaged`, `rigorous`, `disconnected`, `reflect`, `learn`, `relationship`, `away`, `challenging`, `fun`, `absence`, `return`, `journal`, `example`, `comments`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['name']), 
	    mysql_real_escape_string($_POST['email']),
	    mysql_real_escape_string($_POST['dates']),
        mysql_real_escape_string($_POST['different']),
        mysql_real_escape_string($_POST['engaged']),
        mysql_real_escape_string($_POST['rigorous']),
        mysql_real_escape_string($_POST['disconnected']),
        mysql_real_escape_string($_POST['reflect']),
        mysql_real_escape_string($_POST['learn']),
        mysql_real_escape_string($_POST['relationship']),
        mysql_real_escape_string($_POST['away']),
        mysql_real_escape_string($_POST['challenging']),
        mysql_real_escape_string($_POST['fun']),
        mysql_real_escape_string($_POST['absence']),
        mysql_real_escape_string($_POST['return']),
        mysql_real_escape_string($_POST['journal']),
        mysql_real_escape_string($_POST['example']),
        mysql_real_escape_string($_POST['comments']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = '1 Month Local Fellowship Evaluation';
	
$message = '1 Month Local Fellowship Evaluation'.
					  nl2br($body)
					."


Name: {$_POST['name']} 

Fellowship Dates: {$_POST['dates']}

Was your experience of apexart's Fellowship different than what you expected?
{$_POST['different']}

How engaged did you feel in our program?
{$_POST['engaged']}

How rigorous was the program for you?
{$_POST['rigorous']}

How disconnected did you feel from your “other life”.
{$_POST['disconnected']}

Now that you have had a month to process, absorb, and reflect on the Fellowship experience, how would you describe the personal impact of the Fellowship? 
{$_POST['reflect']}

Did you learn anything in particular about yourself this month? 
{$_POST['learn']}

Has your relationship to the city changed in any way? 
{$_POST['relationship']}

Did the time away from your work affect how you relate to and approach your creative process afterwards? If so, how?
{$_POST['away']}

Remembering back to specific activities, what event(s) did you find the most challenging? 
{$_POST['challenging']}

The most fun?
{$_POST['fun']}

Did you feel an absence of pressure to create work restful or stressful? Energizing or taxing? 
{$_POST['absence']}

How has it been to return to your studio this month? 
{$_POST['return']}

Did the journal help you reflect on your daily experience? Have you continued writing on your own since? 
{$_POST['journal']}

Can you share an example of any challenges you faced in planning or preparing for the apexart Fellowship, either logistically, emotionally or professionally?
{$_POST['example']}

We welcome your thoughts, ideas or criticisms about the program and encourage you to tell us more.
{$_POST['comments']}
			
		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'Bcc: abbie.hebein@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
                    $resultw="Thank you for your response!
                    ";
					echo "<p>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></p><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>