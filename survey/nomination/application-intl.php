<?php
  include ('connect.php');
?>


<html>
<head>


      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://apexart.org/js/submit_disable.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="../../favicon.ico" type="image/ico" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: New York City Fellowship Recommendation Form</title>
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
    <script src="../../js/modernizr-2.8.3.min.js"></script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
</head>
<style>
input {
    word-break: break-word;
}
</style>

</head>
<body>
  
          
        
<div class="wrapper">
        <? require ('../../header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- End header area -->  
    
<div class="content">



<form action="formscript-intl.php" method="post" >


<table width="1047" border="0" align="center" style="margin-top:17px;">
      <br /><br /><br /><br />
  
  <tr valign="top">
    <td width="68" align="center" valign="top"></td>
    <td width="947" colspan="3" align="center" valign="top"><table width="941" border="0" bgcolor="#FFFFFF">
      <tr valign="top">
        <td style="border: 1px solid #e0e0e0; padding: 15px;">
        <span class="exhibitionProgram"><strong><p>apexart Fellowship Nomination Form</p></strong></span>
        <br /><table class="standardText">
          <tr>
            <td height="33" colspan="2" align="left" valign="top"><p>Thank you for your interest in submitting a nomination for the apexart Fellowship. The apexart Fellowship is unusual. It is not a residency program, and Fellows do not receive a studio or an exhibition as part of the opportunity. It is a rigorous month-long program of diverse activities that requires a clear understanding and commitment to participate on the part of the Fellow. Additionally, Fellows must agree not to produce work or engage in career promotion during the Fellowship. Nominees must be over 21 years old and the ideal candidate tends to be over 30. Artists enrolled in graduate or undergraduate programs at the time of nomination are not eligible.
            <br><br>
            Your first-hand knowledge of the nominee is very important to us. The more complete your answers, the better the chances of your nominee succeeding. 
            <br><br>
            Please complete the form fields and press the Submit button.</p>
            </td>
          </tr>
          <tr>
            <td height="22" align="left" valign="top"><p>My name:</p></td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" id="rec_name" name="rec_name" required/></td>
          </tr>
          <tr>
            <td height="22" align="left" valign="top"><p>My email:</p></td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" name="rec_email" required/></td>
          </tr>
          <tr>
            <td height="22" align="left" valign="top"><p>Nominee name:</p></td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" name="nom_name" required/></td>
          </tr>
          <tr>
            <td height="32" align="left" valign="top"><p>Nominee email:</p></td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" name="nom_email" required/></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top"><p>1. How do you know this person? (Colleague, friend, etc.)</p>
              <textarea rows="10" cols="100" name="relation" required></textarea><br><br></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top"><p>2. How long have you known them?</p>
              <textarea rows="10" cols="100" name="rellength" required></textarea><br><br></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top"><p>3. It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and exploring unfamiliar experiences? (100-200 words)</p>
              <textarea rows="10" cols="100" name="recommend" required></textarea><br><br></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top"><p>4. apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, international travel) recently. Please describe how this applies to your candidate. (50-100 words)</p>
              <textarea rows="10" cols="100" name="applies" required></textarea><br><br></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top"><p>5. What do you hope might be the results of participating in the program for your nominee? (100-200 words)</p>
              <textarea rows="10" cols="100" name="results" required></textarea><br><br></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top"><p>6. Is there any additional information about the candidate that would help us in our selection?</p>
              <textarea rows="10" cols="100" name="comments"></textarea><br><br></td>
          </tr>
        </table>
        <span class="standardText">
         <input type="submit" id="submit" value="Submit">         
          </form><br><br><p>Thank you for your valuable recommendation to apexart's Fellowship Program. Please note that more candidates are considered than apexart can accommodate. We will contact you with further details regarding your nominee’s application status.</p>
          <br><br>
          <p>If you have further questions in regard to the program and/or its expectations please feel free to contact us at info@apexart.org.</p>

        </span>
        </td>
    </TABLE></td>
  </tr>
    </table>
    <br /><br /><br /><br />
</div>
<!-- Footer area start -->
        <footer class="footer-area">
            <!-- start footer top -->
            
            <!-- End of footer top -->
            <!-- Start footer bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                                <div class="subscribe-widget">
                                <div id="sib_embed_signup"> 
                                    <a href="https://www.apexart.org/signup.php"><div class="forms-builder-wrapper">
                                          
                                      <input type="text" name="email" id="email" value="" placeholder="Subscribe to our Newsletter">
                                              
                                    </div></a>
                                </div>
                                <script type="text/javascript"> var sib_prefix = 'sib'; var sib_dateformat = 'mm-dd-yyyy'; </script>
                                <script type='text/javascript' src='https://my.sendinblue.com/public/theme/version4/assets/js/src/subscribe-validate.js?v=1565084133'></script>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer bottom -->
        </footer>
        <!-- Footer area end -->

</div>    
    <script src="../../js/plugins.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
