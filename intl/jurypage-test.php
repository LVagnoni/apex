<?php
session_start();
define('VOTE_LIMITER_INCREASE_COUNT', 3);

if(!isset($_SESSION["userID"])) {
    echo '<br><a href="login.php">Please Log In to Rate</a><br><br>';
    exit;
}

include ('connect.php');


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart Open Calls</title>
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

    

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-2228943-1');


        function killCopy(e){
            return false;
        }

        function reEnable(){
            return true;
        }

        document.onselectstart=new Function ("return false");
        if (window.sidebar){
            document.onmousedown=killCopy;
            document.onclick=reEnable
        }
    </script>
    <script> //countdown
        // Set the date we're counting down to
        var countDownDate = new Date("Apr 5, 2022 03:00:00").getTime();

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

        table {
            background-color:white !important;
            color:black !important;
        }
        tr {
            background-color:white !important;
            color:black !important;
        }
        #demo{
            color: red !important;
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
        <? require ('../header-test.php'); ?>
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

<!--<title>apexart :: Open Call Program :: Juror Voting</title>-->

            <?php

            // check limiter status or increase limiter
             $query2="SELECT * FROM intl22_rating WHERE juror_id=".$_SESSION["userID"];
            $result2 = mysql_query($query2, $conn);
            $nums2=mysql_num_rows($result2);
                                                            if ($nums2 === 10){include ('popup1.php');}
                                                             elseif ($nums2 === 25){include ('popup2.php');}
                                                             elseif ($nums2 === 50){include ('popup3.php');}
                                                             elseif ($nums2 === 100){include ('popup4.php');}
                                                             elseif ($nums2 === 266){include ('popup5.php');}

            $sql = "SELECT * FROM intl22_proposal WHERE checked_count < vote_limiter";
            $result = mysql_query($sql, $conn);
            $testCount = mysql_num_rows($result);


            $sql = "SELECT MIN(checked_count) as checked_count, MAX(vote_limiter) as vote_limiter, MIN(vote_limiter) as min_vote_limiter, COUNT(*) as total FROM intl22_proposal";
            $result = mysql_query($sql, $conn);

            if ($result) {
                $rows = mysql_fetch_array($result);

                $totalCount = intval($rows['total']);
                $minCheckedCount = intval($rows['checked_count']);
                $maxVoteLimiter = intval($rows['vote_limiter']);
                $minVoteLimiter = intval($rows['min_vote_limiter']);

                if($maxVoteLimiter === 0) {
                    // set initial vote limiter 
                    $sql = "UPDATE intl22_proposal SET vote_limiter = " . VOTE_LIMITER_INCREASE_COUNT;
                    $res = mysql_query($sql, $conn);
                }
                else if ($minVoteLimiter < $maxVoteLimiter) {
                    // update vote limiter to max value
                    $sql = "UPDATE intl22_proposal SET vote_limiter = " . $maxVoteLimiter;
                    $res = mysql_query($sql, $conn);
                } else if($testCount < 15 * $totalCount / 100 && $minCheckedCount > $maxVoteLimiter - 2) {
                    $updateVoteLimiter = $maxVoteLimiter + VOTE_LIMITER_INCREASE_COUNT;
                    $sql = "UPDATE intl22_proposal SET vote_limiter = " . $updateVoteLimiter;

                    $res = mysql_query($sql, $conn);
                }
            }

            //* error_reporting(E_ALL);

            $query2="SELECT * FROM intl22_proposal WHERE is_accepted!=1"; // WHERE is_accepted=1 ";
            $result2 = mysql_query($query2, $conn);
            $nums=mysql_num_rows($result2);

            $query2="SELECT * FROM intl22_rating WHERE juror_id=".$_SESSION["userID"];
            $result2 = mysql_query($query2, $conn);
            $nums2=mysql_num_rows($result2);

            if (!$result2) {
                echo 'Pardon us, we are experiencing longer load times and server timeouts during our final jurying week due to heavier traffic than we anticipated. Please continue to support us by coming back in a few hours, or during the workday.' . mysql_error();
                exit;
            }

            while ($row2 = mysql_fetch_assoc($result2)){
                $k=$row2["proposal_id"];
                $rates[$k]=$row2["score"];
            }
            ?>

            <!-- Service section start -->
            <br><br><br>
            <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                         <table width="950" border="0" align="center" bgcolor="#FFFFFF">
                             <tr valign="top">
                                 <td>
                                     <table  width="850" border="0">
                                         <tr>
                                             <td width="938" colspan="3" align="center" valign="top">
                                                 <table border="0" bgcolor="#FFFFFF">
                                                     <tr valign="top">
                                                         <td  width="38">&nbsp;</td>
                                                         <td  width="514">
                                                             <span class="standardText"><br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JUROR NOTES:</strong>
                                                                 <ul>
                                                                     <li>Please vote on every proposal whether you like or dislike it.
                                                                         <br>5 is best (highest) 1 is worst (lowest).
                                                                     </li>
                                                                     <li>Click SAVE VOTE/NEXT to save your vote  and go to the next one.<br><br>
                                                                        Time left to vote:&nbsp;<span id="demo"></span>
                                                                        <br><br>
                                                                     </li>
                                                                 </ul>
                                                             </span>
                                                         </td>
                                                         <td width="28">&nbsp;</td>
                                                         <td width="305" class="standardTextLg" style="padding-left:50px" valign="top">
                                                             <?php
                                                             echo "<br/><br/>Logged in as : " . $_SESSION['username']  . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Log Out</a><br/><br>";
                                                             echo "<b>You have voted on <font color='red'>$nums2</font> proposals.</b>";
                                                             ?>
                                                         </td>
                                                     </tr>
                                                 </table>
                                                 <table width='825' align='center' bgcolor='#FFFFFF'><tr><td class='standardText'></td></tr>
                                                 </table>
                                             </td>
                                         </tr>
                                     </table>

                                     <?php

                                     // get checked proposal ids
                                     $sql = "SELECT proposal_id FROM intl22_rating WHERE juror_id = " . $_SESSION["userID"];
                                     $result = mysql_query($sql, $conn);
                                     $condition = "";
                                     while ($row = mysql_fetch_assoc($result)){
                                         $k=$row["proposal_id"];
                                         $condition .= " AND id != " . $k;
                                     }

                                     $query="SELECT * FROM intl22_proposal";
                                     $query .= " WHERE is_accepted !=1 AND checked_count < vote_limiter";
                                     if ($condition !== "") {
                                         $query .= $condition;
                                     }
                                     $query .= " ORDER BY RAND() LIMIT 1";

                                     $result = mysql_query($query, $conn);
                                     if (!$result) {
                                         echo 'Could not run query: ' . mysql_error();
                                         exit;
                                     }

                                     $num_rows_proposals = mysql_num_rows($result);

                                     if ($num_rows_proposals < 1)
                                     {
                                         echo "<br/><br/><br/><br/><br/><br/><br/><center><h2>Come back later to vote for other proposals</h2></center>";
                                         die();
                                     }

                                     echo '<form action="logvote.php" method="get" onsubmit="return onValidate()">';
                                     $sumbits=0;
                                     while ($row = mysql_fetch_assoc($result)) {
                                         $id=$row["id"];
                                         echo "<table  width=820 align='center' bgcolor='#FFFFFF'>
                                         <tr>
                                         <td>&nbsp;</td>
                                         </tr>
                                         </table>";
                                         echo "<table  width=820 align='center' bgcolor='#FFFFFF'><tr>";
                                        //echo "<th><a href='vote.php?sub=".$row["id"]."'>Vote</a></th>";
                                         echo "<td class='grayback' width=100 align=left >ID#".$id."</td>";
                                         echo "<td class='grayback' width=350 align=left style='text-transform: uppercase;'>Title: ".$row["title"]."</td>";
                                         echo "<td class='grayback' width=250 align=left style='text-transform: uppercase;'>Exhibition Location:<br>".$row["franchise_city"].",&nbsp;".$row["franchise_country"]."</td>";
    
     
                                        /* if ($country = 'United States') {
                                          echo "".$row["state"]."";
                                        } if ($country === 'United States') {
                                            echo "".$row["country"]."";
                                        } */

                                        echo "</td></tr><tr>";
                                        echo "<td colspan=3 class='standard2' align=left>".nl2br(($row["content"]))."";

                                        echo "<table  width=820 align='center' bgcolor='#FFFFFF'><tr><td>&nbsp;</td></tr></table>";
                                        if (!isset($_SESSION["userID"]))
                                            echo "<br>Please <a href='./login.php'>log in</a> to be able to vote.";
                                        else{
                                            if (isset($rates[$id]))
                                                echo "<br><i>You already voted for this proposal. Your vote was $rates[$id]</i>";
                                            else{ ?>
                                                <br>
                                                <span>(best)
                                                    <input type="hidden" id="rowId" value="<?=$row["id"]?>"/>
                                                    &nbsp;&nbsp;&nbsp;5&nbsp;<input type="radio" value="5" name="vote[<?=$row["id"]?>]">
                                                    &nbsp;&nbsp;4&nbsp;<input type="radio" value="4" name="vote[<?=$row["id"]?>]">
                                                    &nbsp;&nbsp;3&nbsp;<input type="radio" value="3" name="vote[<?=$row["id"]?>]">
                                                    &nbsp;&nbsp;2&nbsp;<input type="radio" value="2" name="vote[<?=$row["id"]?>]">
                                                    &nbsp;1&nbsp;<input type="radio" value="1" name="vote[<?=$row["id"]?>]">
                                                    &nbsp;&nbsp;&nbsp;(worst)
                                                </span>
                                            <?php }
                                        }
                                        echo "<br></td></tr></table>";
                                        echo "<table width=820 align='left'>";
                                        echo "<tr ><td align='left'>";
                                     }
  
                                     if (isset($_SESSION["userID"]))
                                         echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='SAVE VOTE/NEXT-->'></form><br><br><br><br>";
                                     else
                                         echo "Please log in to be able to vote.";

                                     mysql_free_result($result);
                                     echo "<br><br></td></tr></table>";
                                     echo '</div>';
                                     ?>
                         </table>
                     </div>
                </div>
            </div>
        <!-- Main wrapper end -->
        <!-- All JS files included -->
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
            <script>
                function onValidate() {
                    var rowId = document.getElementById("rowId").value;
                    var radios = document.getElementsByName('vote[' + rowId + ']');

                    var bOkay = false;

                    for (var i = 0; i < radios.length; i++) {
                        var radioItem = radios[i];
                        if (radioItem.checked) {
                            bOkay = true;
                            break;
                        }
                    }

                    if (bOkay === false) {
                        alert("Please select one...")
                    }
                    return bOkay;
                }
            </script>

    </body>
</html>