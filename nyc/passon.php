<?php
  if (isset($_POST['submit'])) {
      $submitters = $_POST['submitters'];
      $secretKey = "6LcBrWcUAAAAAFSGwkE0jsVwGh23UC_9IUN61VBx";
      $responseKey = $_POST['g-recaptcha-response'];
      $userIP = $_SERVER['REMOTE_ADDR'];

      $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
      $response = file_get_contents($url);
      echo $response;
  }
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: NYC Exhibition Program 2021-22 :: Submission Page</title>
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
                                        <li><a href="../exhibitions.php">Exhibitions <span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="../exhibitions.php">Current &amp; Upcoming</a></li>
                                                <li><a href="../pastexhibitions.php">Past</a></li>
                                                <li><a href="../opencalls.html">Open Calls</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../events.php">Events<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="../events.php">Upcoming</a></li>
                                                <li><a href="../pastevents.php">Past</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../fellowship.php">Fellowship<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="../fellowship.php">About &amp; Current</a></li>
                                                <li><a href="../pastfellows.php">Past Fellows</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../support.html">Support</a></li>
                                        <li><a href="../publications.html">Books</a></li>
                                        <li><a href="../about-us.html">About</a></li>
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
                                        
                                        <li><a href="../exhibitions.php">Exhibitions <span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="../exhibitions.php">Current &amp; Upcoming</a></li>
                                                <li><a href="../pastexhibitions.php">Past</a></li>
                                                <li><a href="../opencalls.html">Open Calls</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../events.php">Events<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="../events.php">Upcoming</a></li>
                                                <li><a href="../pastevents.php">Past</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../fellowship.php">Fellowship<span><i class="fa fa-angle-down"></i></span></a>
                                            <ul>
                                                <li><a href="../fellowship.php">About &amp; Current</a></li>
                                                <li><a href="../pastfellows.php">Past Fellows</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../support.html">Support</a></li>
                                        <li><a href="../publications.html">Books</a></li>
                                        <li><a href="../about-us.html">About</a></li>
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
                <!-- All JS files included -->
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

                <?php
    
    require ('connect.php');
?>

<?php
    
    

    $resultw="";
    //error_reporting(E_ALL);
            
        $email=mysql_escape_string($_POST['email']);
            $query="SELECT * FROM proposal where email='".$email."';";
            $result = mysql_query($query, $conn); 
            
            $num_rows = mysql_num_rows($result);
            if ($num_rows<1) //no proposal with this email has been submitted before.
            {
            
            $query = sprintf("INSERT INTO proposal (submitters, email, phone, artist_names, city, state, country, content, title, hear, hearinfo, created_on, mlist) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW(),'%s')",    
                 
                    mysql_real_escape_string($_POST['submitters']),
                    mysql_real_escape_string($_POST['email']),
                    mysql_real_escape_string($_POST['phone']),
                    mysql_real_escape_string($_POST['artist_names']),
                    mysql_real_escape_string($_POST['city']),
                    mysql_real_escape_string($_POST['state']),
                    mysql_real_escape_string($_POST['country']),
                    mysql_real_escape_string($_POST['content']),
                    mysql_real_escape_string($_POST['title']),
                    mysql_real_escape_string($_POST['hear']),
                    mysql_real_escape_string($_POST['hearinfo']),
                    mysql_real_escape_string($_POST['created_on']),
                    mysql_real_escape_string($_POST['mlist']));
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
                    $subject = "Open Call for Group Exhibitions in NYC / #$newUserID";
                    
                    
                    $body = "Thank you for submitting a proposal to apexart's Open Call for NYC Exhibitions. \n
                    <strong>Your ID# is $newUserID.</strong>\n
                    Proposals will be accepted through October 31, 2020, and then undergo apexart's crowd-sourced jurying process with more than 400 jurors from around the world. Results will be <a href='https://www.apexart.org/nyc/results.php'>announced here</a> the first week of December 2020.\n
                     Below is a copy of your proposal for your records. If we have any questions about your proposal we will be in touch via email.\n
                     Thank you for your participation and best of luck, \napexart\n---------------------------\n\n";
                    
                    
                    $message = '
                    <html>
                    <head>
                      <title>Open Call for NYC Exhibitions</title>
                    </head>
                    <body>'.
                      nl2br($body)
                    ."
                    Name(s): {$_POST['submitters']}<br/> 
                    Email: {$_POST['email']}<br/> 
                    Phone: {$_POST['phone']}<br/> 
                    Submitter's location: {$_POST['city']}, {$_POST['state']}, {$_POST['country']}<br/>
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
                      echo("<p>Submission Saved to database, but your email didn't work. Make sure you <a href='mailto:lisa.vagnoni@apexart.org'>send us your email</a> so we can contact you.</p>");
                     }
                     //echo error_get_last();
                    
                    //header('Location: '.$_SERVER['PHP_SELF'].'?justregistered=1' ) ;
                    
                    $resultw="<p>Submission Successful.<br>You will receive a confirmation by email. Your ID is $newUserID</p>";
                    echo "$resultw<p><a href='https://www.apexart.org'>Return to apexart website.</a></p>";
                    die();
            }
            else    echo("<br><br><p><font color='red'>User with email $email already submitted a proposal<br>One proposal per email.</font></p>");
            
            
        
        
            
        
?>
            </div>


 
            <br><br><br><br><br><br>
            <!-- Service section end -->
        </div>
        <!-- Main content area end -->
        
    </div>
    <!-- Main wrapper end -->
    

</body>

</html>