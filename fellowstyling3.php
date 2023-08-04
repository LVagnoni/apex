<style>
    h5.footertext {
            text-transform: none !important;
            font-weight: bold !important;
        }
        
        .button-boxed2 {
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

    .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    img.fellowimage {
        width: 100%;
    }

    h4 {
        text-transform: none;
    }
    .about-me-text {
        margin-top: 0px !important;
    }
</style>

<?php
//Check if the query has results, and iterate over it
if (mysql_num_rows($query) > 0)
{


    //Iterate over the MySQL results and print the data
    while ($result = mysql_fetch_assoc($query))
	
    {
		
	$first = $result['first'];
    $last = $result['last'];
    $fromto = $result['from-to'];
    $direction = $result['in-out'];
    $location = $result['location'];
    $sdate = $result['sdate'];
    $edate = $result['edate'];
    $uend = $result['urlend'];
    $pre = $result['pre'];
    $nex = $result['nex'];
    $addtext = $result['add-text'];
    $faceimg = $result['face-img'];
    $rectit = $result['rec-title'];
    $locorg = $result['locorg'];
    $recby = $result['rec-by']; 
    $image = $result['video-img'];
    $event = $result['event-link'];
    $video = $result['video-link'];
    $video1 = $result['video1'];
    $video2 = $result['video2'];
    $quote1 = $result['quote1'];
    $quote2 = $result['quote2'];
    $vid = $result['vid'];
    $caption = $result['event-caption'];
    $size = $result['video-size'];
    $bloglink = $result['blog-link'];
	$curdate = date('Y-m-d');
	
	
	 echo '<div class="about-standard-row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1><br><br>&nbsp;<div id="left"><a href="'.$pre.'"><</a></div><div id="right"><a href="'.$nex.'">></a></div></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="about-me-img text-right">
                                <br><img class="fellowimage" src="'.$faceimg.'" alt="">
                                   </div>
                                   </div>';
                            echo '<div class="col-sm-6 col-md-8 col-lg-9">
                            <div class="adfas">
                                <div class="about-me-text text-left">
                                    <div class="section-title-2">
                                        <h2 class="area-title">'.$first.' '.$last.'</h2>
                                    </div>';
                            echo '<p>'.$fromto.': '.$location.' <br>';
                            echo date('F j',strtotime($sdate));
                             echo ' - ';
                             echo date('F j, Y',strtotime($edate));
                            echo'<br>Recommended by: '.$recby.'</p>';
                                        echo '<p>'.$result['bio-long'].'<br><br></p>';
	                           
                                
                                
                                if (!empty($bloglink)){ echo '<a class="button-boxed" href="'.$bloglink.'">Read journal here  <i class="ti-arrow-right"></i></a><br><br><br>
                                </div>
                                    </div>
                                    </div>
                                    </div>';}
                                if (!empty($video1)){
                                    echo'<div class="row">
                                            <br>&nbsp;
                                            <div class="col-md-4 col-lg-4">
                                                
                                                    '.$video1.'
                                          
                                            </div>
                                            <div class="col-md-8 col-lg-8">
                                                <div class="adfas">
                                                
                                                        <h4>
                                                            '.$quote1.'
                                                        </h4>
                                                        
                                                        
                                                        <br>
                                                    
                                                    </div>
                                                </div>
                                            </div>';

                                }
                                if (!empty($video2)){
                                    echo'<div class="row">
                                            <br>&nbsp;
                                            <div class="col-md-4 col-lg-4">
                                                
                                                    '.$video2.'
                                          
                                            </div>
                                            <div class="col-md-8 col-lg-8">
                                                <div class="adfas">
                                                
                                                        <h4>
                                                            '.$quote2.'
                                                        </h4>
                                                        
                                                        
                                                        <br>
                                                    
                                                    </div>
                                                </div>
                                            </div>';

                                }

                                echo '
                              <br><br><br><br><br><br><br><br><br><br><br><br><br>
                              
                            </div>
                        </div>
                    </div>';
    
	}}
?>