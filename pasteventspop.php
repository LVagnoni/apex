<?php
  include('connect.php');
  mysql_query("SET NAMES UTF8"); 
  $query = mysql_query("SELECT * FROM events_test 
  WHERE `date` < curdate()
  AND live=0
  ORDER BY date DESC
  LIMIT 550");

//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{
    //Iterate over the MySQL results and print the data
    while ($result = mysql_fetch_assoc($query))
    {
    $date = $result['date'];
    $sttime = $result['start_time'];
    $url = $result['url_title'];
    $img = $result['image_small'];
    $title = $result['title_event_page'];
    $rsvp = $result['rsvplink'];
    $loc = $result['location'];
    $exh = $result['exhibitiontitle'];
    $exhiburl = $result['exhiburl'];
     

echo'<div class="about-standard-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="about-me-img text-right">
                                <a href="'.$url.'">';
                                if (!empty($result['image_small'])) {

                                echo'<img class="special" src="'.$img.'"><br>';}
                                else {

                                echo'<img class="special" src="https://apexart.org/images/apex-sm.jpg"><br>';}
                                echo'
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <div class="adfas">
                                <div class="about-me-text2 text-left">
                                    <div class="section-title-2">';
                                if (!empty($result['title_event_page'])) {

                                echo'<h2 class="area-title"><a href="'.$url.'"><em>'.$title.'</a></h2><br>';}
                                else {

                                echo'<h2 class="area-title">&nbsp;</h2><br>';}
                                        
                                        echo'<p>';
                                            echo date('F j, Y',strtotime($date));
                                        echo'<br><a href="'.$exhiburl.'">In Conjunction with&nbsp;<em>'.$exh.'</em></a><br>
                                        Location: '.$loc.'<br></p>
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

