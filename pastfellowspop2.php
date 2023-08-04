<?php
mysql_query("SET NAMES UTF8"); 
 $query = mysql_query("SELECT * FROM fellows_test
 WHERE `edate` < CURDATE() AND live=0
 ORDER BY `sdate` DESC");

//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{
    //Iterate over the MySQL results and print the data
    while ($result = mysql_fetch_assoc($query))
    {
        $id = $result['id'];
        $direction = $result['in-out'];
        $location = $result['location'];
        $sdate = $result['sdate'];
        $edate = $result['edate'];
        $biomd = $result['biomd'];


echo'<div class="about-standard-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="about-me-img text-right">
                                <a href="https://www.apexart.org/';
                                if ($id < '164') {
                                            echo "fellowship/";
                                        } 

                                echo''.$result['urlend'].'"><img src="'.$result['face-img'].'" width="180">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <div class="adfas">
                                <div class="about-me-text2 text-left">
                                    <div class="section-title-2">
                                        <h2 class="area-title"><a href="https://www.apexart.org/';
                                if ($id < '164') {
                                            echo "fellowship/";
                                        } 

                                echo''.$result['urlend'].'">'.$result['first'].' '.$result['last'].'</a></h2>
                                    </div>

                                    
                                    <p>';

                                        if ($direction == 'NYC Fellow') {
                                            echo "Visiting from: ".$location."";
                                        } elseif ($direction == 'International Fellow') {
                                            echo "Destination: ".$location."";
                                        }

                                        echo'<br>';
                                        echo date('F j',strtotime($sdate));
                                        echo ' - ';
                                        echo date('F j, Y',strtotime($edate));

                                        echo'<br>'.$direction.'<br></p>';
                                    echo'<p>'.$biomd.'</p>';
                                    echo'<div class="about-block-icons">
                                        <div class="prising-footer">
                                           
                                    <a class="button-boxed" href="https://www.apexart.org/';
                                if ($id < '164') {
                                            echo "fellowship/";
                                        } 

                                echo''.$result['urlend'].'">More info  <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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



