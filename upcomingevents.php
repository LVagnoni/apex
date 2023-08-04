<?php
include('connect.php');
mysql_query('SET NAMES utf8');
                            $query = mysql_query("SELECT * FROM events_test 
                             WHERE date >= curdate() AND live=0
                             ORDER BY date ASC
                             LIMIT 15 OFFSET 0");

//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{
    //Iterate over the MySQL results and print the data
         while ($result = mysql_fetch_assoc($query))
                                {
                                $id = $result['id'];
                                $up = $result['UP'];
                                $fp = $result['FP'];
                                $location = $result['heading'];
                                $date = $result['date'];
                                $sdate = $result['show_sdate'];
                                $edate = $result['show_edate'];
                                $uend = $result['url_title'];
                                $title = $result['title'];
                                $curator = $result['organizer'];
                                $image = $result['image_small'];
                                $desc = $result['listing_desc'];
                                $sttime = $result['start_time'];
                                $exhibtitle = $result['exhibitiontitle'];
                                $type2 = $result['type2'];
                                $type = $result['type'];
                                $rsvplink = $result['rsvplink'];
                                $timezone = $result['timezone'];
                                 echo '


                                <div class="portfolio-item">
                                <div class="portfolio-item-content">
                                <div class="item-thumbnail">
                                    <a href="'.$uend.'"><img src="'.$image.'" /></a>
                                </div>
                                <div class="portfolio-description">

                                     <h4><a href="'.$uend.'"><strong><em>'.$title.'</em></a></h4>
                                        <ul class="portfolio-category">
                                            <li><a>'.$type2.'</a></li>
                                        </ul>';

                                            if (strlen($curator)<32) {
                                                echo '<ul class="portfolio-category">
                                            <li><a>organized by '.$curator.'</a></li>
                                        </ul>';
                                            }
                                            elseif (strlen($curator)>32) {
                                                    echo '<br>';
                                                }


                                        echo'<ul class="portfolio-category">
                                            <li><a>'.$location.'</a></li>
                                        </ul>
                                        <ul class="portfolio-category">
                                            <li><a href="'.$uend.'"><strong>';

                                       
                                            echo date('F j, Y',strtotime($date));
                                                        echo ', ';
                                                        echo date("g:i a", strtotime($sttime));
                                                        echo '&nbsp;'.$timezone.'';
                                        
                                             
                                         echo'</div>';

                            echo '</div>
                               </div>';
    }
}
else
{
    echo '<div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumb-content">
                                <div class="breadcrumb-text-wrapper">
                               
                            
                                    <div class="single-project-description">More events to be announced with our next exhibition.</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>';
}


?>