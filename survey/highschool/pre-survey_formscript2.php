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
        <!-- Header area -->
        <header id="header-sticky" class="header-area header-sticky">
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2  col-sm-4 col-xs-6">
                            <div class="logo">
                                <a href="../../index.html"><img src="../../img/logo/logo-md.png" alt=""></a>
                            
                               <!--<div class="address"><a href="https://www.google.com/maps/place/Apexart/@40.7190458,-74.0044688,15z/data=!4m2!3m1!1s0x0:0xbffe208fdf98b165?sa=X&ved=2ahUKEwiK99Cg9ObiAhXPct8KHcbGAQ0Q_BIwDnoECA0QCA">
                                  291 Church St. New York, NY 10013</a>
                                   &nbsp;&nbsp;(212) 431-5270<br><br></div> -->
                    
                         </div>
                     
           
                        </div>
                        <div class="col-md-10 col-sm-10 hidden-xs hidden-sm">
                            <div class="menu-area">
                                <nav>
                                    <ul class="main-menu3 clearfix hover-style-one">
                                        <li><a href="exhibitions.php">Exhibitions <span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="exhibitions.php">Current &amp; Upcoming</a></li>
                                                <li><a href="pastexhibitions.php">Past</a></li>
                                                <li><a href="opencalls.html">Open Calls</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.php">Events<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="events.php">Upcoming</a></li>
                                                <li><a href="pastevents.php">Past</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="fellowship.php">Fellowship<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="fellowship.php">About &amp; Current</a></li>
                                                <li><a href="pastfellows.php">Past Fellows</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="support.html">Support</a></li>
                                        <li><a href="publications.html">Books</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Mobile menu area start -->
                        <div class="xboot-mobile-menu-area hidden-md hidden-lg">
                            <div class="col-sm-12">
                                <nav class="xboot-mobile-menu">
                                    <ul>
                                        
                                        <li><a href="exhibitions.php">Exhibitions <span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="exhibitions.php">Current &amp; Upcoming</a></li>
                                                <li><a href="pastexhibitions.php">Past</a></li>
                                                <li><a href="opencalls.html">Open Calls</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.php">Events<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="events.php">Upcoming</a></li>
                                                <li><a href="pastevents.php">Past</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="fellowship.php">Fellowship<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="fellowship.php">About &amp; Current</a></li>
                                                <li><a href="pastfellows.php">Past Fellows</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="support.html">Support</a></li>
                                        <li><a href="publications.html">Books</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile menu area end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End header area -->
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
	


	$query = sprintf("INSERT INTO `students_highschool_presurvey2` (`created_on`, `name`, `school`, `role`, `traits`, `now`, `recent`, `look`, `feel`, `success`, `important`, `after`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


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
        mysql_real_escape_string($_POST['after']));
		
	
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
				  
How does art have an effect on society?
{$_POST['role']} 

What differentiates an artist from everyone else? 
{$_POST['traits']}    

What qualities of being an artist do you have now? Do you feel like you need to learn certain skills in order to be an artist? 
{$_POST['now']}   
                
Describe your most recent creative expression or activity.
{$_POST['recent']}              
                 
Where do you go, or what do you do, to look for inspiration?
{$_POST['look']}

How do you feel when you go to museums or visit art galleries? What could be different about this experience?
{$_POST['feel']}

For you, what is success? What does it mean to be a successful artist?
{$_POST['success']}

It is more important to be successful or more important to be authentic?
{$_POST['important']} 

How do you think art will be a part of your life after high school? Why or why not?
{$_POST['after']} 
			
		
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