<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="styledarkboxes.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/modernizr-2.8.3.min.js"></script>

    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script> //countdown
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 2, 2023 03:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
          // Output the result in an element with id="demo"
          document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo2").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
    <style>
        #demo{
            color: red !important;
        }
        #demo2{
            color: red !important;
        }

        h5.footertext {
            text-transform: none !important;
            font-weight: bold !important;
        }
        .red {
            background-color: red !important;
        }
        @media only screen and (max-width: 600px) {
  .button-boxed {
            background: #232323 none repeat scroll 0 0;
            border: 1px solid #232323;
            display: inline-block;
            color: #ffffff;
            font-size: 9px;
            font-weight: 700;
            height: 18px;
            letter-spacing: 1px;
            line-height: 18px;
            padding: 0 7px;
            text-transform: uppercase;
            transition: .3s;
        }
  .footer-bottom {
    background: #1C1C1C none repeat scroll 0 0;
    padding: 0;
}
        .button-boxed {
            background: #232323 none repeat scroll 0 0;
            border: 1px solid #232323;
            display: inline-block;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            height: 25px;
            letter-spacing: 1px;
            line-height: 25px;
            padding: 0 10px;
            text-transform: uppercase;
            transition: .3s;
        }
        li#lowercase{
            text-transform: none !important;
        }


    </style>
    </head>

    

<body>


    <!-- Main wrapper start -->
    <div class="wrapper">
        <? require ('header-test-3.php'); ?>
        <div class="fixed-header-space"></div>

        <!-- Main content area start -->
         <div class="content">
            <!-- xboot Portfolio start -->
            <div class="xboot-standard-row">
                <!-- LG-VIEW space --><div class="hidden-xs hidden-sm hidden-md"><br><br><br><br></div>

                <!-- SM-VIEW space --><div class="hidden-xs hidden-md hidden-lg"><br></div>

                <!-- Portfolio content -->
                <div class="container">
                    <div class="portfolio-content">
                        <!-- LARGE VIEW LG-VIEW -->
                        <div class="hidden-md">
                           
                        <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-masonry portfolio-not-full portfolio-3-column">  

                            <!-- <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="https://apexart.org/intl/results23.php"><img src="https://apexart.org/images/intl23winners.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/intl/results23.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li><a><strong>INTL Open Call - Online</strong></a></li>
                                        </ul>
                                        <h4><a href="https://apexart.org/intl/results23.php">&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International Open Call<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Winners - 2023-24</a></h4>
                               
                                        <ul class="portfolio-category">
                                            <li><a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are 4 winning proposals as part of</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;our INTL Open Call.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div> -->

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="https://apexart.org/opencalls.php"><img src="https://apexart.org/images/opencallani-home.gif" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/opencalls.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li><a><strong>NYC Open Call - Online</strong></a></li>
                                        </ul>
                                        <h4><a href="https://apexart.org/opencalls.php">&nbsp;<br>NYC Open Call - 2024-25<br>&nbsp;</a></h4>
                               
                                        <ul class="portfolio-category">
                                            <li><a>Submit proposals online</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>October 1 - November 1, 2023</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="terrell.php"><img src="https://apexart.org/images/protect-home.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/terrell.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Jun. 23 - Oct. 15, 2023 Atlanta Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="terrell.php" >&nbsp;<br><em>Living Room, San Francisco, 1986<br><br>&nbsp;</em></a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a href="terrell.php">Curated by <strong>Matthew Terrell</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrell.php"><strong>Opening Jun, 23, 2023</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrellworkshop.php"><strong>Online Workshop Jun. 23, 11am EDT</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrelltour.php"><strong>Online Tour Jun. 30, 12pm EDT</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrelltalk.php"><strong>Online Talk Oct. 12, 3pm EDT</strong></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                           
                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="davis.php"><img src="https://apexart.org/images/davis-home.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/davis.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Sep. 8 - Oct. 21, 2023 NYC Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="davis.php" >&nbsp;<br><em>Fitter, Happier, More<br>Productive</em><br>&nbsp;</a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a>Curated by <strong>Lexington Davis</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                     

                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="youssef.php"><img src="https://apexart.org/images/youssef-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/youssef.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Oct. 14 - Nov. 11, 2023 Cairo Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="youssef.php" >&nbsp;<br><em>The Valley of Walls<br><br>&nbsp;</em></a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a href="youssef.php">Curated by <strong>Farida Youssef</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="youssef.php"><strong>Opening Oct. 14, 2023</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="shapira.php"><img src="https://apexart.org/images/shapira-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/shapira.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Nov. 3 - Dec. 23, 2023 NYC Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="shapira.php" >&nbsp;<br><em>Fruits of Labor— Reframing Motherhood and Artmaking</em><br>&nbsp;</a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a>Curated by <strong>Bruna Shapira</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                     

                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="ritaro2.php"><img src="https://apexart.org/images/ritaro2/ritaro2-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/ritaro2.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Nov. 18 - Dec. 18, 2023 Bklyn Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="ritaro2.php" >&nbsp;<br><em>Hairitage</em><br><br>&nbsp;</a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a>Curated by <strong>Favour Ritaro</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                     

                                    </div>
                                </div>
                            </div>
                            

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="bernstein.php"><img src="https://apexart.org/images/fellowship/bernstein-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/bernstein.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="bernstein.php"><strong>Jul. 7 - Aug. 7, 2023 NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="bernstein.php" >&nbsp;<br>Laura Bernstein<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="bernstein.php"><strong>Outgoing to from: Bogota, Columbia</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="bernstein.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                  
                                    
                                    </div>
                                </div>
                            </div>


                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="rycerz.php"><img src="https://apexart.org/images/fellowship/rycerz-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/rycerz.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="rycerz.php"><strong>Jul. 7 - Aug. 7, 2023 NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="rycerz.php" >&nbsp;<br>MONIKA RYCERZ<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="rycerz.php"><strong>Incoming from: Plymouth, UK</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="rycerz.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                    
                                    </div>
                                </div>
                            </div>

                           <!-- <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="sandhu.php"><img src="https://apexart.org/images/fellowship/sandhu-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/sandhu.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="sandhu.php"><strong>Dates TBA, 2023 NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="sandhu.php" >&nbsp;<br>Manmeet Sandhu<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="sandhu.php"><strong>Incoming from: Delhi, India</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="sandhu.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                    
                                    </div>
                                </div>
                            </div>-->
                         



                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="https://apexart.org/mailingsignup.php"><img src="https://apexart.org/images/brochures2b.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/mailingsignup.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li><a><strong>Signup for Mailed Brochures</strong></a></li>
                                        </ul>
                                        <h4><a href="https://apexart.org/mailingsignup.php">&nbsp;<br>Sign up to receive Brochure Mailings</a></h4>

                                        <ul class="portfolio-category">
                                            <li><a href="https://apexart.org/mailingsignup.php">Each exhibition presented by apexart includes a full color brochure with curator's essay and artwork pictures.</a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>

                        <br><br><br>
                    </div>

                        <!-- END LARGE VIEW LG-VIEW -->

                        <!-- MEDIUM VIEW MD-VIEW -->
                        <div class="hidden-sm hidden-lg hidden-xs">
                            &nbsp;<br><br>
                        <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-masonry portfolio-not-full portfolio-3-column">  
                            
                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="https://apexart.org/opencalls.php"><img src="https://apexart.org/images/opencallani-home.gif" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/opencalls.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li><a><strong>NYC Open Call - Online</strong></a></li>
                                        </ul>
                                        <h4><a href="https://apexart.org/opencalls.php">&nbsp;<br>NYC Open Call - 2024-25<br>&nbsp;</a></h4>
                               
                                        <ul class="portfolio-category">
                                            <li><a>Submit proposals online</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>October 1 - November 1, 2023</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>

                            

                        <!--    <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="https://apexart.org/intl/results23.php"><img src="https://apexart.org/images/intl23winners.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/intl/results23.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li><a><strong>INTL Open Call - Online</strong></a></li>
                                        </ul>
                                        <h4><a href="https://apexart.org/intl/results23.php">&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International Open<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call Winners - 2023-24</a></h4>
                               
                                        <ul class="portfolio-category">
                                            <li><a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are 4 winning proposals as<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;part of our INTL Open Call.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a>&nbsp;</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div> -->

                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="terrell.php"><img src="https://apexart.org/images/protect-home.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/terrell.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Jun. 23 - Oct. 15, 2023 Atlanta Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="terrell.php" ><em>Living Room, San Francisco, 1986<br>&nbsp;</em></a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a href="terrell.php">Curated by <strong>Matthew Terrell</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrell.php"><strong>Opening Jun, 23, 2023</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrellworkshop.php"><strong>Online Workshop Jun. 23, 11am EDT</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrelltour.php"><strong>Online Tour Jun. 30, 12pm EDT</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="terrelltalk.php"><strong>Online Talk Oct. 12, 3pm EDT</strong></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            


                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="davis.php"><img src="https://apexart.org/images/davis-home.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/davis.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Sep. 8 - Oct. 21, 2023 NYC Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="davis.php" >&nbsp;<br><em>Fitter, Happier, More Productive<br>&nbsp;</em></a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a>Curated by <strong>Lexington Davis</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                             <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="youssef.php"><img src="https://apexart.org/images/youssef-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/youssef.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Oct. 14 - Nov. 11, 2023 Cairo Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="youssef.php" >&nbsp;<br><em>The Valley of Walls<br><br>&nbsp;</em></a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a href="youssef.php">Curated by <strong>Farida Youssef</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="youssef.php"><strong>Opening Oct. 14, 2023</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="shapira.php"><img src="https://apexart.org/images/shapira-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/shapira.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Nov. 3 - Dec. 23, 2023 NYC Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="shapira.php" >&nbsp;<br><em>Fruits of Labor— Reframing Motherhood and Artmaking</em><br>&nbsp;</a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a>Curated by <strong>Bruna Shapira</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                     

                                    </div>
                                </div>
                            </div>


                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="ritaro2.php"><img src="https://apexart.org/images/ritaro2/ritaro2-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description"  onclick="location.href='https://apexart.org/ritaro2.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="opencalls.php"><strong>Nov. 18 - Dec. 18, 2023 Bklyn Exhibition</strong><br></a></li>
                                       </ul>
                                        <h4><a href="ritaro2.php" >&nbsp;<br><em>Hairitage</em><br><br>&nbsp;</a></h4>
                                        
                                        <ul class="portfolio-category">
                                            <li><a>Curated by <strong>Favour Ritaro</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                     

                                    </div>
                                </div>
                            </div>

                          
                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="bernstein.php"><img src="https://apexart.org/images/fellowship/bernstein-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/bernstein.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="bernstein.php"><strong>Jul. 7 - Aug. 7, 2023 NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="bernstein.php" >&nbsp;<br>Laura Bernstein<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="bernstein.php"><strong>Outgoing to from: Bogota, Columbia</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="bernstein.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                  
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="rycerz.php"><img src="https://apexart.org/images/fellowship/rycerz-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/rycerz.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="rycerz.php"><strong>Jul. 7 - Aug. 7, 2023 NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="rycerz.php" >&nbsp;<br>MONIKA RYCERZ<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="rycerz.php"><strong>Incoming from: Plymouth, UK</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="rycerz.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                    
                                    </div>
                                </div>
                            </div>

                         <!--   <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="sandhu.php"><img src="https://apexart.org/images/fellowship/sandhu-home.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/sandhu.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="sandhu.php"><strong>Dates TBA, 2023 NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="sandhu.php" >&nbsp;<br>Manmeet Sandhu<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="sandhu.php"><strong>Incoming from: Delhi, India</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="sandhu.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                  
                                    
                                    </div>
                                </div>
                            </div>  -->

                            <!--<div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="fraser.php"><img src="https://apexart.org/images/fellowship/fraser-home.png" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/fraser.php';" style="cursor: pointer;">
                                         <ul class="portfolio-category" style="text-align: right">
                                            <li> <a href="fraser.php"><strong>NY Fellow</strong><br></a></li>
                                       </ul>
                                        <h4><a href="fraser.php" >&nbsp;<br><br>Jenny Fraser<br><br>&nbsp;</h4>
                                        <ul class="portfolio-category">
                                            <li><a href="fraser.php"><strong>Incoming from: Brisbane, Australia</strong></a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="fraser.php">Read more about her here.</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="fraser.php"><strong>Mar. 11 - Apr. 11, 2023</strong></a></li>
                                        </ul>
                                       <ul class="portfolio-category">
                                            <li><a><strong>&nbsp;</strong></a></li>
                                        </ul>
                                    
                                    </div>
                                </div>
                            </div>-->



                            <div class="portfolio-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="portfolio-item-content">
                                    <div class="item-thumbnail">
                                        <a href="https://apexart.org/mailingsignup.php"><img src="https://apexart.org/images/brochures2b.jpg" alt=""></a>
                                        <a href="img/portfolio/box/image7.jpg" data-lightbox="roadtrip"></a>
                                    </div>
                                    <div class="portfolio-description" onclick="location.href='https://apexart.org/mailingsignup.php';" style="cursor: pointer;">
                                        <ul class="portfolio-category" style="text-align: right">
                                            <li><a><strong>Mailed Brochures - Signup</strong></a></li>
                                        </ul>
                                        <h4><a href="https://apexart.org/mailingsignup.php">&nbsp;<br>Sign up to receive<br>Brochure Mailings</a></h4>

                                        <ul class="portfolio-category">
                                            <li><a href="https://apexart.org/mailingsignup.php">Each exhibition presented by apexart includes a full color brochure with curator's essay and artwork pictures.</a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- END MEDIUM VIEW MD-VIEW -->

         
                    </div>
                </div>
                <br><br>
                <!-- portfolio content end -->
            </div>
        </div>
        <!-- Main content area end -->
        <? require ('footer-test.php'); ?>
    </div>
    <!-- Main wrapper end -->
    <!-- All JS files included -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>