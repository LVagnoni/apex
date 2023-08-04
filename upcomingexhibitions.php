<?php
include('connect.php');
mysql_query('SET NAMES utf8');
$query = mysql_query("SELECT * FROM exhibitions_test
                             WHERE edate >= curdate()
                             AND public=0
                             ORDER BY sdate ASC");

//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{
    //Iterate over the MySQL results and print the data
         while ($result = mysql_fetch_assoc($query))
            {
            $id = $result['id'];
            $up = $result['UP'];
            $fp = $result['FP'];
            $location = $result['location'];
            $sdate = $result['sdate'];
            $edate = $result['edate'];
            $brocURL = $result['brocURL'];
            $uend = $result['showURL'];
            $title = $result['title'];
            $curator = $result['organizer_layout'];
            $image = $result['imageURLmd'];
             echo '<div class="portfolio-item">
            <div class="portfolio-item-content">
            <div class="item-thumbnail">
                <a href="'.$uend.'"><img src="'.$image.'" /></a>
            </div>
            <div class="portfolio-description">

                 <h4><a href="'.$uend.'"><strong><em>'.$title.'</em></a></h4>
                    <ul class="portfolio-category">
                        <li><a href="'.$uend.'">curated by '.$curator.'</a></li>
                    </ul>
                    <ul class="portfolio-category">
                        <li><a href="'.$uend.'">'.$location.'</a></li>
                    </ul>
                    <ul class="portfolio-category">
                        <li><a href="'.$uend.'"><strong>';
                   

                         if ($id == '200') {echo 'Dates TBA';}
                        elseif ($id == '242') {echo date('F j, Y',strtotime($sdate));
                         echo ' - ';
                         echo date('F j, Y',strtotime($edate));}
                         elseif ($id < '266' || $id == '241') {echo date('F j',strtotime($sdate));
                         echo ' - ';
                         echo date('F j, Y',strtotime($edate));}

                         else {echo 'Dates TBA: INTL Open Call Winner';}
             
                         echo '</li></ul>';

                        
                        if ($up == '1') {
                        echo "<ul class='portfolio-category'>
                                    <li> <a href='https://apexart.org/opencalls.html'><i class='fa fa-star' aria-hidden='true'></i> Open Call Winner</a></li></ul>";
                        } elseif ($fp == '1') {
                        echo "<ul class='portfolio-category'>
                                    <li> <a href='https://apexart.org/opencalls.html'><i class='fa fa-star' aria-hidden='true'></i> Open Call Winner</a></li></ul>";
                        } else {
                        echo "&nbsp;";
                    }


              echo'</div>';

        echo '</div>
           </div>';
    }
}
else
{
    echo "Your query hasn't returned results";
}


?>