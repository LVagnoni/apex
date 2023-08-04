<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

session_start();
    error_reporting(E_ALL);
    include ('connect.php');
    global $DB_CONNECTION;
    
    $auth_failed = false;
    if (isset($_POST["username"])){
        $xx=mysql_real_escape_string($_POST["username"], $conn);
        $yy=$_POST["password"];
        
        $query="SELECT * FROM nyc23_juror WHERE username='".$xx."' LIMIT 1";
        $result = mysql_query($query, $conn);
        if (!$result) {
            header('Location: login-lisa.php');
            exit;
        }
        
        $row = mysql_fetch_assoc($result);
        if (is_array($row) AND !empty($row)) 
        {
            $_SESSION["userID"]=(int)$row["id"];
            $_SESSION["username"]=$row["username"];

            $query3="UPDATE nyc23_juror SET login_on = NOW() WHERE `id`=".(int)$row["id"]." LIMIT 1";
            //UPDATE Persons SET Age = '36' WHERE FirstName = 'Peter'
            $result3 = mysql_query($query3, $conn);

            header("location: jurypage-lisa.php");
            exit();
            
        }
        else 
        {
                $auth_failed = true;
            session_destroy();  
        }
        mysql_free_result($result);
    }

                

    //error_reporting(E_ALL);
    //include ('connect.php');
    
    
    if ($auth_failed) :
        echo "<tr align='center'><td class='verdana' size='4'>";
            echo "<br><br><br><br><br><br><br><center><a href='login-lisa.php'>WRONG LOGIN<br>Try Again</a><br><br><br><br><br><br><br>";
        echo "</tr></td>";
    endif;
        ?>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart Open Calls - Juror Login</title>
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
<style>
    .input[type=text] {
  color: #232323 !important;
  background-color: #232323 !important;
}

.lowercase {
    text-transform: none !important;
}
</style>
</head>

<body>

    <!--Loader-->
    <!-- <div class="xboot-loader">
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
    </div> -->
    <!-- Loader end -->
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
           <div class="breadcrumb-area gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                        </div>
                    </div>
                </div>
            </div>
           <div class="container">
                <div class="row">
                        <div class="col-xs-12">
                            
                        </div>
                </div>
            </div> 
    <!-- Service section start -->
<br><br><br>
            <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="xboot-tab-area clearfix">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="classroom-guide">
                                    <h4><u><span class="lowercase">apexart</span> International Exhibition Program Juror Login and FAQs</u></h4>

          <br />
          <p>Thank you for helping us determine our schedule for next season as a Juror for apexart’s International Exhibition Program. We appreciate your time and input. Please read the following FAQs and then follow the prompts at the bottom of the page to login and access the proposals. Happy voting!<br />
  <strong><br /> Q: Are there any specific criteria you are looking for in evaluation and scoring?</strong><br />
          A: Yes, and no. The strength and clarity of the proposed exhibition is the most important thing but of course this will vary from person to person. We suggest that you evaluate proposals based on your interest in the subject, was the idea clearly communicated, and whether you would like to see the proposal transformed into an exhibition. If proposals are unclear or you feel they would not result in an interesting show, you give the submission a "1". Conversely, if proposals are clear and you feel they would result in a very interesting show, you may evaluate the submission as a 5. Don’t feel guilty. If everyone else likes a show you don’t they’ll make up for your vote.&nbsp;<br />
  <br />
  <strong>Q: Do I judge the writing or the idea?</strong><br />
          A: Mainly, you should judge how well the idea comes through. The substance of the idea is important as is the ability to convince you of its value. Please note that many proposals come from non-native English speakers, so while the grammar may not be perfect, the strength of the idea should shine through in a good proposal.<br />
  <br />
  <strong>Q: Should I skip a proposal if it is difficult to understand?</strong><br />
          A: You may, but it’s better for the process if you don’t. If it is hard to understand the proposal concept, just assign it a lower score. <br />
  <br />
  <strong>Q: If I really want to skip a proposal?</strong><br />
          A: Refresh the page and that will bring up another proposal. But you can’t go back to the previous proposal.<br />
  <br />
  <strong> Q: What if I am unfamiliar with the names/ ideas/ terminologies in a proposal?</strong><br />
          A: It is the responsibility of the submitter to use their 500 words in the most effective way possible. Do not worry if you are not familiar with a particular artist's work--many people are only known locally. Some jurors have elected to look up artists mentioned but we do not recommend or ask you to do this since you’re really judging the idea and not the artists, which may change anyway.<br />
  <br />
  <strong>Q: If I recognize a submitter can I still score that proposal?</strong><br />
          A: Yes, if you feel you can do so fairly. Otherwise, this is the only situation that we ask you to skip that one and move on to the next. Their proposal will quickly pop up for another juror.<br />
  <strong><br />
    Q: How will I know how many proposals I have scored? </strong><br />
          A: You will find your voting tally at the top of the jurying page, under your User ID#.&nbsp;<br />
  <br />
  <strong>Q: Can I rate more than 50 proposals? </strong><br />
          A: Absolutely. If you want to read and vote on more, it will add votes to the tally, increasing the number of votes for each proposal, and making the process even more effective. <br />
  <br />
  <strong>Q: Can I go back and change my scores?</strong><br />
          A: Sorry, our system does not allow that. You may only view 1 proposal at a time, and cannot go back to change your saved scores. Remember that 5 is the highest score you can give, and 1 is the lowest score.<br />
  <br />
  <strong>Q: How many jurors are there? </strong><br />
          A: Each year we have more than 400 jurors from all over the world-more than 70 countries, most in the arts but many from other professions. Everyone's vote is equal and equally important to the process. We think anyone that thinks about art, goes to a museum or is interested in the arts will add to the process and is qualified. <br /> <br />
   
<strong>Q: When is the voting deadline?</strong><br />
    A: Sunday April 4, 2021, 23:59 PST </p>
    <br />
                

                <form action="login-lisa.php" method="post">
                    username:
                    <input type="text" size="20" maxlength="30" name="username" style="background-color:#000000;">
                    password:
                    <input type="text" size="20" maxlength="30" name="password" style="background-color:#000000;"><br><br \>
                    <input type="submit" style="width:200px; height:35px; background-color:#000000;" value="Log&nbsp;In">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- All JS files included -->
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
  </body>
 </div>
</html>