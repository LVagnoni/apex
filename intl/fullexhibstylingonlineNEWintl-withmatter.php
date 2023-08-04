<style>
#left{float:left;}
#right{float:right;}
h5 {text-transform: none !important}
</style>

<?php
//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{

   //Iterate over the MySQL results and print the data
    while ($result = mysql_fetch_assoc($query))
    
    {
        $up = $result['UP'];
        $fp = $result['FP'];
        $openingnotime = $result['date'];
        $sdate = $result['sdate'];
        $edate = $result['edate'];
        $otime = $result['otime'];
        $etime = $result['etime'];
        $pre = $result['pre'];
        $nex = $result['nex'];
        $title = $result['title_on_exhib_page'];
        $curator = $result['organizer'];
        $location = $result['location'];
        $uend = $result['showURL'];
        $openURL = $result['openingURL'];
        $credit = $result['credit'];
        $creditSHOW = $result['creditSHOW'];
        $string = $result['long'];
        $related = $result['related'];
        $resources = $result['resources'];
        $desc = $result['medium'];
        $press = $result['press'];
        $exttop = $result['exttop'];
        $artists = $result['artists'];
        $image = $result['imageURL'];
        $imgcap = $result['image_caption'];
        $rsvplink = $result['RSVPlink'];
        $bio = $result['bio'];
        $brochure = $result['brocURL'];
        $video = $result['related'];
        $showstuff = $result['showstuff'];
        $matter = $result['matter'];

     echo '<style>
            h1, h2, h3 {
                text-transform: none;
            }
            h3.single-project-title {
                text-transform: uppercase !important;
            }
            h1 {
                font-size: 50px;
            }
        </style>
<div class="single-project-area xboot-standard-row2">
                <div class="container">
                    <div class="row">
                        <p>&nbsp;<br>&nbsp;<br></p>
                        <div class="col-xs-12">
                        <h1><div id="left"><a href="'.$pre.'"><</a></div><div id="right"><a href="'.$nex.'">></a></div></h1>
                    </div>
                        <div class="col-lg-9 col-md-8 col-sm-12" style="overflow:hidden;">
                        <h2 class="single-project-title2"><em>'.$title.'</em></h2>
                                <div id="left"><h4 class="curator-title">curated by '.$curator.'</h4></div>';
                                if ($fp == '1') {echo '<div id="right"><h4 class="curator-title"><a href="https://apexart.org/opencalls.html">INT\'L Open Call Winner</a></h4></div>';}
                                if ($up == '1') {echo '<div id="right"><h4 class="curator-title"><a href="https://apexart.org/opencalls.html">NYC Open Call Winner</a></h4></div>';}
                            echo '</div>
                        <div class="col-lg-3 col-md-4 hidden-sm hidden-xs push-right">
                          &nbsp;
                        </div>';
                            echo'<div class="col-lg-9 col-md-8 col-sm-12" >
                            <embed src="'.$matter.'" class="embed" style="height: 500px;"><br>

                                <div class="image_caption">'.$imgcap.'</div>
                            
                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-12 push-right">
                            <div class="project-meta-wrapper meta-right-sidebar">';
                                echo '<ul class="single-portfolio-meta">
                                    <li><h5><span>Online:&nbsp;</span><br>starting&nbsp;'; echo date('F j, Y',strtotime($openingnotime)); echo'</h5>
                                    <a href="'.$openURL.'" target="_blank"><span>Opening:&nbsp;</span>';echo date('D, M j, H:i',strtotime($otime)); echo'</a>
                                    <br>
                                    <br>
                                    <h5><span>On view at <br>'.$exttop.'&nbsp;</span>';echo date('F j',strtotime($sdate));
                                                                 echo ' - ';
                                                                 echo date('F j, Y',strtotime($edate));

                                      echo'</h5></li>
                                </ul>';
                                    
                            
                       
                                echo'
                            </div>';
                            if (!empty($showstuff)) {
                                echo'<div class="project-meta-wrapper meta-right-sidebar"><ul class="single-portfolio-meta"><li><h5>'.$showstuff.'</h5></li>
                                </ul>
                            </div>';
                            }


                            
                            
                            if (!empty($press)) {
                                echo'<div class="project-meta-wrapper meta-right-sidebar">
                                <ul class="single-portfolio-meta">
                                    <li><span>Press:</span><br>'.$press.'</li>
                                </ul></div>';
                            }
                            if (!empty($resources)) {
                                echo'<div class="project-meta-wrapper meta-right-sidebar">
                                <ul class="single-portfolio-meta">
                                    <li><span>Resources:</span><br>'.$resources.'</li>
                                </ul></div>';
                            }
                            if (!empty($video)) {
                                echo'<div class="project-meta-wrapper3 meta-right-sidebar">
                                <ul class="single-portfolio-meta">
                                    <li>
                                        '.$video.'
                                    </li>
                                </ul>
                            </div>';
                            }
                    echo '</div>';
                        
/* if ($up == '1' OR $fp == '1') {
    echo "An <a href='https://apexart.org/light/opencalls2.html'><strong>Open Call</strong></a> exhibition.";
} else {
    echo " ";
} */
                    echo '<div class="col-lg-9 col-md-8 col-sm-12 push-left">
                            <div class="single-project-description">

                                '.$desc.' 
                            </div>
                          </div>';
                    if (!empty($artists)) {echo '<div class="col-lg-3 col-md-4 col-sm-12 push-right">
                            <div class="project-meta-wrapper2 meta-right-sidebar">
                                <ul class="single-portfolio-meta2">
                                    <li><h5><br><span>artists:</span><br>'.$artists.'</h5></li>
                                </ul>
                              </div>
                            </div>
                              </div>';}
                            echo'<div class="row">
                                <div class="col-md-12">
                                    <div class="single-project-description">
                                        <div class="bio">
                                        '.$bio.'
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            
                        echo'</div>';


        

    }

    echo '</div>
        </div>
      </div><br><br><br>';

}
else
{
    echo "Your query hasn't returned results";
}


?>  