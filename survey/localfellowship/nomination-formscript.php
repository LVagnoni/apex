<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: apexart Local New York City Fellowship Application Form</title>
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

    <!--Loader
    <div class="xboot-loader">
        <div class="loader-wrapper">
            <div class="loader-content">
                <div class="loader-dot dot-1"></div>
                <div class="loader-dot dot-2"></div>
                <div class="loader-dot dot-3"></div>
                <div class="loader-dot dot-4"></div>
                <div class="loader-dot dot-5"></div>
                <div class="loader-dot dot-6"></div>
                <div class="loader-dot dot-7"></div>
                <div class="loader-dot dot-8"></div>
                <div class="loader-dot dot-center"></div>
            </div>
        </div>
    </div>
    Loader end -->
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
	


	$query = sprintf("INSERT INTO `local_nomination` (`created_on`, `rec_name`, `rec_email`, `nom_name`, `nom_email`, `relation`, `recommend`, `applies`, `results`, `comments`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['rec_name']), 
		mysql_real_escape_string($_POST['rec_email']),
		mysql_real_escape_string($_POST['nom_name']),
	    mysql_real_escape_string($_POST['nom_email']),
	    mysql_real_escape_string($_POST['relation']),
	    mysql_real_escape_string($_POST['recommend']),
        mysql_real_escape_string($_POST['applies']),
	    mysql_real_escape_string($_POST['results']),
	    mysql_real_escape_string($_POST['comments']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'New York City Local Fellowship Nomination';
	
$message = 'New York City Local Fellowship Nomination'.
					  nl2br($body)
					."


My name: {$_POST['rec_name']} 

My email: {$_POST['rec_email']}

Nominee name: {$_POST['nom_name']}

Nominee email: {$_POST['nom_email']}

How do you know this person (friend, colleague, etc.) and for how long?
{$_POST['relation']}

It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and participating in unfamiliar experiences? (100-200 words)
{$_POST['recommend']}

apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, grants) recently. Please describe how this applies to your candidate. (50-100 words)
{$_POST['applies']}

What do you hope might be the results of participating in the program for your nominee? (100-200 words)
{$_POST['results']}

Any additional information about the candidate that would help us in our selection?
{$_POST['comments']}
			
		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'Bcc: abbie.hebein@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
                    $resultw="Thank you for your valuable recommendation to apexart's Fellowship Program. Please note that more candidates are considered than apexart can accommodate. We will contact you with further details regarding your nominee’s application status.<br><br>If you have further questions in regard to the program and/or its expectations please feel free to contact us at info@apexart.org
                    ";
					echo "<p>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></p><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>