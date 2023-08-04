<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart Fellowship</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
    <style>
        h5.footertext {
            text-transform: none !important;
            font-weight: bold !important;
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
    </style>
</head>

<body>


    <!-- Main wrapper start -->
    <div class="wrapper">
        <? require ('header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- Main content area start -->
        <div class="content">

            
            <!-- xboot Portfolio end -->
            <!-- Breadcrumb area start -->
            <div class="breadcrumb-area gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumb-content">
                                <div class="breadcrumb-text-wrapper">
                                    <div class="hidden-sm hidden-xs"><br><br><br></div>
                                    <h2 class="page-name">Fellowship</h2>
                                    <div class="single-project-description">The apexart Fellowship is an alternative educational program that invites creative individuals to leave their familiar surroundings for a month-long stay in an unfamiliar city. The program provides new sources of inspiration through exposure to new cultures, interests, and experiences. Unlike an artist residency program, the apexart Fellowship provides a rich, 30-day schedule of non-art activities, all while requiring Fellows to refrain from producing creative works. The apexart Fellowship schedule prioritizes educational experiences that are outside of the Fellow’s stated interests. This diversity of activities leaves Fellows with new ideas, approaches, and content to incorporate into their creative practices.
                                    <br><br>
                                    In doing new and interesting things, and having time away from their usual responsibilities, apexart Fellows can reflect on what they do with greater perspective. apexart Fellows keep a public journal for the duration of their program, and participate in a recorded exit interview at the end of their Fellowship, which can be found online. By providing a space for contemplation and exposure to new experiences, the apexart Fellowship is designed to be a catalyst for creativity.</div>
                                    <br><br>
                                        <a href="https://apexart-journal.tumblr.com/" class="button-boxed">Fellowship Journal</a>
                                        <a href="https://apexart.org/fellowship-faqs.html" class="button-boxed">Fellowship FAQs</a>
                                        <a href="https://apexart.org/images/fellowship/intlschedule.pdf" class="button-boxed">Sample Schedule - INT'L</a>
                                        <a href="https://apexart.org/images/fellowship/nycschedule.pdf" class="button-boxed">Sample Schedule - NYC</a>
                                        <a href="https://apexart.org/images/fellowship/essay.pdf" class="button-boxed">Essay from the Exec. Dir</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb area end -->
            <!-- xboot Portfolio start -->
                    <?php
                    include('connect.php');
                    ?>
        
          
                    
                            <?php

                            mysql_query('SET NAMES utf8');
                            $query = mysql_query("SELECT * FROM fellows_test
                             WHERE `edate` >= CURDATE() 
                             AND `live` = 0
                             ORDER BY `sdate` ASC
                             LIMIT 15 OFFSET 0");

                            //Check if the query has results, and iterate over it
                            if (mysql_num_rows($query) > 0)
                            {
                                //Creates the table
                                echo '<div class="xboot-standard-row">
                                        <div class="container">
                                            <div class="portfolio-content">
                                            <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-masonry portfolio-not-full portfolio-3-column">';
                                //Iterate over the MySQL results and print the data
                                while ($result = mysql_fetch_assoc($query))
                                {

                                $direction = $result['in-out'];
                                $fromto = $result['from-to'];
                                $location = $result['location'];
                                $sdate = $result['sdate'];
                                $edate = $result['edate'];
                                $uend = $result['urlend'];
                                $image = $result['facemd'];
                                $id = $result['id'];
                                
                                 echo '


                                <div class="portfolio-item">
                                <div class="portfolio-item-content">
                                <div class="item-thumbnail">
                                    <a href="/'.$uend.'"><img src="'.$image.'" /></a>
                                </div>
                                <div class="portfolio-description">

                                     <h4><a href="/'.$uend.'">'.$result['first'].' '.$result['last'].'</a></h4><ul class="portfolio-category"><li><a>';
                                         if ($direction == 'NYC Fellow') {
                                            echo "".$location." ➜ NYC";
                                        } elseif ($direction == 'International Fellow' && $id !=='237' && $id !=='235' && $id !=='229' && $id !=='224' && $id !=='212' && $id !=='218' && $id !=='211' && $id !=='240') {
                                            echo "NYC ➜ TBA";
                                        } elseif ($direction == 'Local NYC Fellow') {
                                            echo "Local NYC Fellowship";
                                        } elseif ($id == '237' || $id == '235' || $id == '229' || $id == '224' || $id == '212' || $id == '218' || $id == '211' || $id == '240') {
                                            echo "NYC ➜ ".$location."";
                                        } 
                                        else {
                                            echo "none";
                                        }
                                    echo'</a></li></ul>
                                    <ul class="portfolio-category">';
                                        if ($id =='228' || $id =='230' || $id =='232') {
                                            echo 'Dates TBA';
                                         }
                                         else {
                                         echo date('F j',strtotime($sdate));
                                         echo ' - ';
                                         echo date('F j, Y',strtotime($edate));
                                         }
                                        

                                         echo'</a></li></ul>';
                                        echo '<ul class="portfolio-category">
                                        <li><a>Recommended by: '.$result['rec-by'].'</a></li></ul>';

                            echo'</div>';
                            echo '</div>
                               </div>';
                                    
                                }
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            else
                            {
                                echo "Your query hasn't returned results";
                            }


                        ?>
            <!-- xboot Portfolio end -->
        <br><br><br><br>

        </div>
                    
        </div>
        <!-- Main content area end -->
        <!-- Footer area start -->
        <footer class="footer-area">
            <!-- start footer top -->
            
            
            <!-- Start footer bottom -->
            <div class="footer-bottom">
               
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                                <a href="https://my.sendinblue.com/users/subscribe/js_id/34g1q/id/2"><div class="button-boxed">Subscribe to our newsletter</div></a>
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
                            <br>
                        </div>

                    </div>
                </div>
           
            <!-- End footer bottom -->
        </footer>
        <!-- Footer area end -->
    </div>
    <!-- Main wrapper end -->
    <!-- All JS files included -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>