<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: INTL Exhibition Program :: Submission Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="../css/elements.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../js/modernizr-2.8.3.min.js"></script>
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
                                <a href="../index.html"><img src="../img/logo/logo-md.png" alt=""></a>
                            
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
	
	

	$resultw="";
 	//error_reporting(E_ALL);
			
		$email=mysql_escape_string($_POST['email']);
			$query="SELECT * FROM guo_testproposal where email='".$email."';";
			$result = mysql_query($query, $conn); 
			
			$num_rows = mysql_num_rows($result);
			if ($num_rows<1) //no proposal with this email has been submitted before.
			{
			
			$query = sprintf("INSERT INTO guo_testproposal (submitters, phone, email, city, state, country, artist_names, franchise_city, franchise_state, franchise_country, title, content, hear, hearinfo, mlist, created_on) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW())",	
				 
				    mysql_real_escape_string($_POST['submitters']),
				    mysql_real_escape_string($_POST['phone']),
				    mysql_real_escape_string($_POST['email']),
				    mysql_real_escape_string($_POST['city']),
				    mysql_real_escape_string($_POST['state']),
				    mysql_real_escape_string($_POST['country']),
                    mysql_real_escape_string($_POST['artist_names']),
				    mysql_real_escape_string($_POST['franchise_city']),
				    mysql_real_escape_string($_POST['franchise_state']),
				    mysql_real_escape_string($_POST['franchise_country']),
				    mysql_real_escape_string($_POST['title']),
				    mysql_real_escape_string($_POST['content']),
                    mysql_real_escape_string($_POST['hear']),
                    mysql_real_escape_string($_POST['hearinfo']),
                    mysql_real_escape_string($_POST['mlist']),
					mysql_real_escape_string($_POST['created_on']));
				    //echo $query;
					$mlist = 
					$result = mysql_query($query, $conn); 
					$newUserID=mysql_insert_id();
					// or die("no USER ID after inserting new user.");
					
					
					if (!$result) {
					    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
					    $message .= 'Whole query: ' . $query;
					    die($message);
					}
					
					
					$to = $_POST['email'];
			
					if (!isset($_POST['email'])||empty($_POST['email'])) $_POST['email']="noemail@lentered.com";
					$from = "info@apexart.org";
					$headers .= 'From: '.$from. "\r\n" .
					    'Reply-To: '.$from. "\r\n";
					$headers .= 'Bcc: info@apexart.org' . "\r\n";
					// To send HTML mail, the Content-type header must be set
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					
					$headers .= 'X-Mailer: PHP/' . phpversion();
					$subject = "Open Call for International Exhibitions / #$newUserID";
					
					
					$body = "Thank you for submitting a proposal to apexart's Open Call for International Exhibitions. \n
					<strong>Your ID# is $newUserID.</strong>\n
					Proposals will be accepted through March 1, 2021, and then undergo apexart's crowd-sourced jurying process with more than 400 jurors from around the world. Results will be <a href='https://apexart.org/intl22/results.php'>announced here</a> the second week of April 2021.\n
					 Below is a copy of your proposal for your records. If we have any questions about your proposal we will be in touch via email.\n
					 Thank you for your participation and best of luck, \napexart\n---------------------------\n\n";
					
					
					$message = '
					<html>
					<head>
					  <title>Open Call for INTL Exhibitions</title>
					</head>
					<body>'.
					  nl2br($body)
					."
					Name(s): {$_POST['submitters']}<br/> 
					Email: {$_POST['email']}<br/> 
					Phone: {$_POST['phone']}<br/> 
					Exhibition location: {$_POST['franchise_city']}, {$_POST['franchise_state']}, {$_POST['franchise_country']}<br/>
					Where you heard: {$_POST['hear']}, {$_POST['hearinfo']}<br/>	
					Did you opt-out of mailing list? {$_POST['mlist']}<br/>						
					User ID: $newUserID<br/> <br/>
				    Exhibition Title: {$_POST['title']}<br/>
					Submission: ".nl2br(($_POST['content']))."
					<br><br>
					</body>
					</html>
					";
					
					if (mail($to, $subject, $message, $headers)) {
					  ;;
					  //mail("info@apexart.org", "BCC: ".$subject, $body,$headers);
					 } else {
					  echo("<p>Submission Saved to database, but your email didn't work. Make sure you send us your email so we can contact you.</p>");
					 }
					 //echo error_get_last();
					
					//header('Location: '.$_SERVER['PHP_SELF'].'?justregistered=1' ) ;
					
					$resultw="<p>Submission Successful.<br>You will receive a confirmation by email. Your ID is $newUserID</p>";
					echo "$resultw<p><a href='https://www.apexart.org'>Return to apexart website.</a></p>";
					die();
			}
			else 	echo("<br><br><p><font color='red'>User with email $email already submitted a proposal<br>One proposal per email.</font></p>");
			
			
		
		
			
		
?>
            </div>


 
            <br><br><br><br><br><br>
            <!-- Service section end -->
        </div>
        <!-- Main content area end -->
        <!-- Footer area start -->
        <footer class="footer-area">
            <!-- start footer top -->
            
            <!-- End of footer top -->
            <!-- Start footer bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                                <div class="subscribe-widget">
                                <div id="sib_embed_signup"> 
                                    <div class="forms-builder-wrapper">
                                    <input type="hidden" id="sib_embed_signup_lang" value="en">
                                    <input type="hidden" id="sib_embed_invalid_email_message" value="That email address is not valid. Please try again.">
                                    <input type="hidden" name="primary_type" id="primary_type" value="email">
                                    <div id="sib_loading_gif_area"></div>
                                            <form class="description" id="theform" name="theform" action="https://my.sendinblue.com/users/subscribeembed/js_id/34g1q/id/1" onsubmit="return false;">
                                                <input type="hidden" name="js_id" id="js_id" value="34g1q">
                                                <input type="hidden" name="from_url" id="from_url" value="yes">
                                                <input type="hidden" name="hdn_email_txt" id="hdn_email_txt" value=""> 
                                               
                                                    <input type="hidden" name="req_hid" id="req_hid" value=""> 
                                                    <div class="header"></div><div class="view-messages"> </div>
                                                    <div class="primary-group email-group forms-builder-group ui-sortable"> 
                                                        <div class="row mandatory-email">
                                                            <input type="text" name="email" id="email" value="" placeholder="Subscribe to our Newsletter">
                                                        </div> 
                                                    </div> 
                                              
                                                <button type="submit"><i class="ti-arrow-right"></i></button>
                                            </form>
                                    </div>
                                </div>
                                <script type="text/javascript"> var sib_prefix = 'sib'; var sib_dateformat = 'mm-dd-yyyy'; </script>
                                <script type='text/javascript' src='https://my.sendinblue.com/public/theme/version4/assets/js/src/subscribe-validate.js?v=1565084133'></script>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social-bookmark-area">
                                <ul class="social-bookmark">
                                    <li><a href="search.html"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.facebook.com/apexartnyc/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/apexart" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/apexartnyc" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:lisa.vagnoni@apexart.org" class="envelope" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer bottom -->
        </footer>
        <!-- Footer area end -->
    </div>
    <!-- Main wrapper end -->
    <!-- All JS files included -->
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>