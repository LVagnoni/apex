<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: High School Interest</title>
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
        


    $query = sprintf("INSERT INTO `tour_request` (`created_on`, `name`, `email`, `phone`, `grade`, `schoolname`, `number`, `type`, `show`, `date`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s')",


        mysql_real_escape_string($_POST['name']), 
        mysql_real_escape_string($_POST['email']),
        mysql_real_escape_string($_POST['phone']),
        mysql_real_escape_string($_POST['grade']),
        mysql_real_escape_string($_POST['schoolname']),
        mysql_real_escape_string($_POST['number']),
        mysql_real_escape_string($_POST['type']),
        mysql_real_escape_string($_POST['show']),
        mysql_real_escape_string($_POST['date']));
        
    
        $result = mysql_query($query, $conn); 
            
            
        if (!$result) {
            $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
            $message .= 'Whole query: ' . $query;
            die($message);
        }
        
        
                        
$to      = 'info@apexart.org';
$subject = 'High School Tour Interest';
    
$message = 'High School Tour Interest'.
                      nl2br($body)
                    ."

Name: {$_POST['name']}

Email: {$_POST['email']}

Phone: {$_POST['phone']}

School grade level:  
{$_POST['grade']}

School name and location:  
{$_POST['schoolname']}           

Number of anticipated students: 
{$_POST['number']}   
                
Are you requesting an online or in-person tour?
{$_POST['type']}

Which exhibition would you like a tour of?
{$_POST['show']}              
                 
What is your desired date or date range for your tour?
{$_POST['date']}                  
            
        
";
                    
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'Bcc: abbie.hebein@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


        
        
                
    
$resultw="Contact Form Submitted. <br>Thank you for your interest! We will be in touch soon.";
                    echo "<p>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></p><br>";
                    die();
            
            


?>



</HEAD>


</body>
</html>