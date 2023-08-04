
<?php
mysql_query("SET NAMES UTF8"); 
 $query = mysql_query("SELECT * FROM fellows_test WHERE `edate` < CURDATE() AND live=0 ORDER BY `sdate` DESC");



//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{
$query2 = mysql_query("SELECT * FROM fellows_test WHERE `edate` < CURDATE() AND `live`=0");
$x = mysql_num_rows($query2)+1;

    //Iterate over the MySQL results and print the data
    while ($result = mysql_fetch_assoc($query))
    {
        $id = $result['id'];
        $direction = $result['in-out'];
        $location = $result['location'];
        $sdate = $result['sdate'];
        $edate = $result['edate'];
        $biomd = $result['biomd'];


$x = $x-1;

        
        

echo'<div class="about-standard-row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                            <div class="about-me-img text-right">
                                <a href="https://www.apexart.org/';
                                if ($id < '164') {
                                            echo "fellowship/";
                                        } 

                                echo''.$result['urlend'].'"><img src="'.$result['face-img'].'" width="180">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-8">
                            <div class="adfas">
                                <div class="about-me-text2">
                                    <div class="section-title-2">
                                        <h2 class="area-title"><a href="https://www.apexart.org/';
                                if ($id < '164') {
                                            echo "fellowship/";
                                        } 

                                echo''.$result['urlend'].'">'.$result['first'].' '.$result['last'].'&nbsp;';

                                echo'</a></h2>
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
                
                    <div class="col-xs-4 col-sm-1 col-md-2 col-lg-2">
                         
                              
                               
                                        <h2 class="area-title text-right">'.$x.'</h2>
                                  
                          
                 
                   
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



