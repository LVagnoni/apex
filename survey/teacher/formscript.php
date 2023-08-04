<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: Open Call Teacher Evaluation Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="../../apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="../../css/elements.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="../../css/custom.css">
    <script src="https://www.apexart.org/js/modernizr-2.8.3.min.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
<style>
        #demo{
            color: darkred !important;
        }

        h5.footertext {
            text-transform: none !important;
            font-weight: bold !important;
        }
        .red {
            background-color: red !important;
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
        #lowercase{
            text-transform: none !important;
        }

    </style>
<!-- All JS files included -->




</head>

<body>


    <!-- Main wrapper start -->
    <div class="wrapper">
        <? require ('../../header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- Main content area start -->
        <div class="content">
           <br><br><br><br>
          
<!-- Service section start -->
            <div class="container">

            	<?php
	
	require ('connect.php');


    
?>
	
	<?php
	 	
	 			
	//$query = "INSERT INTO application (first, last, email, phone, jobs, install) VALUES ('{$_POST["first"]}','{$_POST["last"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["jobs"]}','{$_POST["install"]}')";
	


	$query = sprintf("INSERT INTO `teachers_opencall` (`created_on`, `name`, `email`, `college`, `grade`, `dept`, `title`, `other`, `learn`, `provide`, `signup`, `signup2`, `enjoy`, `group`, `required`, `surprise`, `inc`, `discuss`, `know`, `rec`, `future`, `resources`, `again`, `colleagues`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",


		mysql_real_escape_string($_POST['name']), 
		mysql_real_escape_string($_POST['email']),
		mysql_real_escape_string($_POST['college']),
	    mysql_real_escape_string($_POST['grade']),
	    mysql_real_escape_string($_POST['dept']),
	    mysql_real_escape_string($_POST['title']),
	    mysql_real_escape_string($_POST['other']),
	    mysql_real_escape_string($_POST['learn']),
		mysql_real_escape_string($_POST['provide']),
	    mysql_real_escape_string($_POST['signup']),
        mysql_real_escape_string($_POST['signup2']),
	    mysql_real_escape_string($_POST['enjoy']),
	    mysql_real_escape_string($_POST['group']),
	    mysql_real_escape_string($_POST['required']),
	    mysql_real_escape_string($_POST['surprise']),
	    mysql_real_escape_string($_POST['inc']),
	    mysql_real_escape_string($_POST['discuss']),
	    mysql_real_escape_string($_POST['know']),
	    mysql_real_escape_string($_POST['rec']),
	    mysql_real_escape_string($_POST['future']),
	    mysql_real_escape_string($_POST['resources']),
        mysql_real_escape_string($_POST['again']),
        mysql_real_escape_string($_POST['colleagues']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		
						
$to      = 'info@apexart.org';
$subject = 'Open Call Teacher Survey';
	
$message = 'Open Call Teacher Survey'.
					  nl2br($body)
					."

Name: {$_POST['name']}

Email: {$_POST['email']}

College/University/Affiliation: 
{$_POST['college']}

Year/Grade Level:  
{$_POST['grade']}			
                
Class title:
{$_POST['title']}	 

Department/Field: 
{$_POST['dept']}             
				 
What classes/subjects did you use the program for?
{$_POST['other']}                  
				  
If this is your first time, how did you learn about the apexart Open Call Student Juror Program?
{$_POST['learn']}  

Was it easy to explain the apexart Open Call Jury Process and reasoning to your class syllabus? (Long answer)
{$_POST['provide']}  

Are there one or two important social issues students discussed?
{$_POST['signup']}  

Did you discuss the structure of the process and program as to its efficacy?
{$_POST['signup2']}  

Did your class enjoy the process? Did they feel invested to look at the winners and follow the exhibitions? Even to submit a proposal in the future?
{$_POST['required']}  

Did you use our resources available on the apexart website (Open Call Jury Classroom Guide, past exhibitions and past winning open call proposals)? 
{$_POST['inc']}  

Would you participate in the Open Call Jury process again and why?
{$_POST['discuss']}  

Was there a most important student “take away”?
{$_POST['know']}  

What resources would be helpful to have available for your class- before, during or after the jury process?
{$_POST['enjoy']}  

Was student participation required or optional?
{$_POST['again']}  

Any suggestions for making the process more effective?
{$_POST['resources']}

Would you personally consider submitting an exhibition proposal in the future?
{$_POST['future']} 

Are there any colleagues we should contact that you think might be interested in using the jurying process or should be aware of our programming? Give us an email and we’ll contact them.
{$_POST['colleagues']} 				 
			
		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Survey Submitted. <br>Thank you for your invaluable feedback.";
					echo "<p>$resultw<br><a href='http://www.apexart.org'>Return to apexart website.</a></p><br>";
				
			
			


?>



</HEAD>
<!-- Footer area start -->
        <footer class="footer-area">
            
            
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
<script src="https://www.apexart.org/js/plugins.js"></script>
    <script src="https://www.apexart.org/js/main.js"></script>

</body>
</html>