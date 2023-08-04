<?php
include('connect.php');
mysql_query('SET NAMES utf8');
$query = mysql_query("SELECT * FROM exhibitions_test_copy
 WHERE edate < curdate()
 ORDER BY sdate DESC
 LIMIT 5");

//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{
    //Iterate over the MySQL results and print the data
    while ($result = mysql_fetch_assoc($query))
    {
    $up = $result['UP'];
    $fp = $result['FP'];
    $location = $result['location'];
    $sdate = $result['sdate'];
    $edate = $result['edate'];
    $brocURL = $result['brocURL'];
    $uend = $result['showURL'];
    $title = $result['title_on_exhib_page'];
    $curator = $result['organizer'];
    $image = $result['imageURLmd'];
    $desc = $result['short'];
    $curator = $result['organizer'];
    $artists = $result['artists_shortened'];


echo'<div class="about-standard-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="about-me-img text-right">
                                <a href="'.$uend.'"><img src="'.$image.'" width="280">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="adfas">
                                <div class="about-me-text2 text-left">
                                    <div class="section-title-2">
                                        <h2 class="area-title"><a href="'.$uend.'"><em>'.$title.'</em></a></h2><br>
                                        <h4>Curated by&nbsp;'.$curator.'</h4>
                                    </div>

                                    
                                    <p>';

                                        echo date('F j',strtotime($sdate));
                                             echo ' - ';
                                             echo date('F j, Y',strtotime($edate));
                                             echo'<br>'.$location.'<br>';
                                            if ($up == '1') {
                                            echo '<a href="https://apexart.org/opencalls.html"><i class="fa fa-star" aria-hidden="true"></i> Open Call Winning Exhibition</a><br>';
                                            } elseif ($fp == '1') {
                                            echo '<a href="https://apexart.org/opencalls.html"><i class="fa fa-star" aria-hidden="true"></i> Open Call Winning Exhibition</a><br>';
                                            } else {
                                            echo 'Invited Curator Exhibition<br>';}
                                        echo''.$desc.'</p>';
                                echo'</div>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2">
                       
                                <div class="about-me-text2 text-left">';
                                echo '<p><strong>Artists</strong>:<br>
                                        '.$artists.'
                                            </p>';

                                    
                                    
                                echo'</div>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>';}
}
else
{
    echo "Your query hasn't returned results";
}
?>