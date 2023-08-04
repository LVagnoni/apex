<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: Local Fellowship</title>
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
	


	$query = sprintf("INSERT INTO `localfellowship` (`created_on`, `name`, `address`, `phone`, `email`, `birthdate`, `pronouns`, `howlong`, `nay1`, `dates1`, `nay2`, `dates2`, `nay3`, `dates3`, `nay4`, `dates4`, `lang`, `ename`, `ephone`, `eemail`, `erel`, `dest1`, `date1`, `reason1`, `take1`, `sponsor1`, `dest2`, `date2`, `reason2`, `take2`, `sponsor2`, `dest3`, `date3`, `reason3`, `take3`, `sponsor3`, `addl`, `sense`, `good`, `excited`, `comfort`, `concerns`, `medical`, `questions`, `sub`, `middle`, `allergies`, `normal`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['name']), 
		mysql_real_escape_string($_POST['address']),
		mysql_real_escape_string($_POST['phone']),
	    mysql_real_escape_string($_POST['email']),
	    mysql_real_escape_string($_POST['birthdate']),
	    mysql_real_escape_string($_POST['pronouns']),
        mysql_real_escape_string($_POST['howlong']),
	    mysql_real_escape_string($_POST['nay1']),
	    mysql_real_escape_string($_POST['dates1']),
        mysql_real_escape_string($_POST['nay2']),
        mysql_real_escape_string($_POST['dates2']),
        mysql_real_escape_string($_POST['nay3']),
        mysql_real_escape_string($_POST['dates3']),
        mysql_real_escape_string($_POST['nay4']),
        mysql_real_escape_string($_POST['dates4']),
        mysql_real_escape_string($_POST['lang']),
        mysql_real_escape_string($_POST['ename']),
        mysql_real_escape_string($_POST['ephone']),
        mysql_real_escape_string($_POST['eemail']),
        mysql_real_escape_string($_POST['erel']),
        mysql_real_escape_string($_POST['dest1']),
        mysql_real_escape_string($_POST['date1']),
        mysql_real_escape_string($_POST['reason1']),
        mysql_real_escape_string($_POST['take1']),
        mysql_real_escape_string($_POST['sponsor1']),
        mysql_real_escape_string($_POST['dest2']),
        mysql_real_escape_string($_POST['date2']),
        mysql_real_escape_string($_POST['reason2']),
        mysql_real_escape_string($_POST['take2']),
        mysql_real_escape_string($_POST['sponsor2']),
        mysql_real_escape_string($_POST['dest3']),
        mysql_real_escape_string($_POST['date3']),
        mysql_real_escape_string($_POST['reason3']),
        mysql_real_escape_string($_POST['take3']),
        mysql_real_escape_string($_POST['sponsor3']),
        mysql_real_escape_string($_POST['addl']),
        mysql_real_escape_string($_POST['sense']),
        mysql_real_escape_string($_POST['good']),
        mysql_real_escape_string($_POST['excited']),
        mysql_real_escape_string($_POST['comfort']),
        mysql_real_escape_string($_POST['concerns']),
        mysql_real_escape_string($_POST['medical']),
        mysql_real_escape_string($_POST['questions']),
        mysql_real_escape_string($_POST['sub']),
        mysql_real_escape_string($_POST['middle']),
        mysql_real_escape_string($_POST['allergies']),
        mysql_real_escape_string($_POST['normal']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'New York City Local Fellowship Application';
	
$message = 'New York City Local Fellowship Application'.
					  nl2br($body)
					."


Name: {$_POST['name']} 

Address: {$_POST['address']}

Phone: {$_POST['phone']}

Email: {$_POST['email']}

Birthday: {$_POST['birthdate']}

Pronouns: {$_POST['pronouns']}

How long have you lived in New York City?
{$_POST['howlong']}

NYC Neighborhood lived in: {$_POST['nay1']}

Dates of living there: {$_POST['dates1']}

NYC Neighborhood lived in: {$_POST['nay2']}

Dates of living there: {$_POST['dates2']}

NYC Neighborhood lived in: {$_POST['nay3']}

Dates of living there: {$_POST['dates3']}

NYC Neighborhood lived in: {$_POST['nay4']}

Dates of living there: {$_POST['dates4']}

Other languages spoken: {$_POST['lang']}

Emergency name: {$_POST['ename']}

Emergency phone: {$_POST['ephone']}

Emergency email: {$_POST['eemail']}

Emergency relationship: {$_POST['erel']}


Travel history:
Destination: {$_POST['dest1']}
Date: {$_POST['date1']}
Reason: {$_POST['reason1']}
Takeaway: {$_POST['take1']}
Sponsor: {$_POST['sponsor1']}

Destination: {$_POST['dest2']}
Date: {$_POST['date2']}
Reason: {$_POST['reason2']}
Takeaway: {$_POST['take2']}
Sponsor: {$_POST['sponsor2']}

Destination: {$_POST['dest3']}
Date: {$_POST['date3']}
Reason: {$_POST['reason3']}
Takeaway: {$_POST['take3']}
Sponsor: {$_POST['sponsor3']}

Additional travel: {$_POST['addl']}

From reading more about our program online, what is your sense of the program and what might you might hope to gain from the experience?
{$_POST['sense']}

An apexart fellowship is not about making or promoting your work. We do not give you a studio and we do not arrange meetings with people to promote your work. This is not an opportunity for networking, career development, or production of new work. It is about you as a person and taking a moment to spend time with yourself. Why is this is a good time for you to participate in a program that values experience and reflection over production?
{$_POST['good']}

The fellowship asks individuals to give up control of their time. You agree to follow your schedule regardless of whether you have already done the exact same thing in the exact same place at the exact same time and are sure you won’t enjoy doing it. Part of the point is we spend years deciding what we like and don’t, often making these decisions based on our expectations rather than being open to new things. In our program you don’t have time to say you don’t have time. Our experience over many years and with many people is that you will find new things you like. And new things you don’t like. You have to agree to this. And it’s only two weeks. Fellows receive a detailed itinerary that maps out their day, from early morning hours to late at night. This is an opportunity to step away from routine, familiarity, daily correspondence and distractions. Really, how excited are you by this process? (200 words minimum)
{$_POST['excited']}

When was the last time that you that felt outside of your comfort zone? Did it feel unexpectedly good afterwards or not?
{$_POST['comfort']}

The apexart Fellowship Program is active; with up to 4 activities per day, often requiring a lot of walking, traveling alone during the evening, and participating in a range of physical activities. The assigned activities are required. When necessary, we work with Fellows to find alternatives in the event of physical limitations, however the program still remains demanding. Please let us know if you have any concerns.
{$_POST['concerns']}

Do you have any medical conditions we should be aware of?
{$_POST['medical']}

Other questions:
{$_POST['questions']}

Subway comfort from 1-5 due to covid:
{$_POST['sub']}

Any in-detail subway concerns:
{$_POST['middle']}

Allergies:
{$_POST['allergies']}

How much have you curtailed normal activities due to covid?
{$_POST['normal']}
			
		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'Bcc: abbie.hebein@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
                    $resultw="Thank you for applying for the apexart New York City Local Fellowship.<br>
                    Please note that more deserving candidates are recommended than apexart can accommodate. We will contact you with further details regarding your application status.
                    ";
					echo "<p>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></p><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>