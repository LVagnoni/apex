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
    <title>apexart :: Outgoing International Fellowship Application Form</title>
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
<script>
function toggle() {
 if( document.getElementById("hidethis").style.display=='none' ){
   document.getElementById("hidethis").style.display = 'table'; // set to the html tag you are hiding by its id
 }else{
   document.getElementById("hidethis").style.display = 'none';
 }
}
</script>

  <script type="text/javascript">
function checkWordCount(){
    s = document.getElementById("wordcount").value;
    s = s.replace(/(^\s*)|(\s*$)/gi,"");
    s = s.replace(/[ ]{2,}/gi," ");
    s = s.replace(/\n /,"\n");
    if (s.split(' ').length <= 190) {
        alert("Not enough words in the required fields.");
return false;
    }
}
</script>
</head>

<style>
input {
    word-break: break-word;
}
</style>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Helvetica, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:grey;color:#FFFFFF !important;}
.tg th{font-family:Helvetica, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:grey;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top;color:#FFFFFF !important;}
.tg .tg-us36{border-color:inherit;vertical-align:top;color:#FFFFFF !important;}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}
textarea {width: 98%; height: 98%; border:none;}
input#submit {color: black !important;}
   </style>

</head>
<body>
  
          
 <div class="wrapper">
       <? require ('../../header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- End header area -->       

    
<div class="content">  
<br><br><br><br><br>
<form id="myform" action="formscript-intl.php" method="post" >

  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Helvetica, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:grey;}
.tg th{font-family:Helvetica, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:grey;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-us36{border-color:inherit;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}
textarea {width: 98%; height: 98%; border:none;}
   </style>

<div class="tg-wrap"><table class="tg" id="myTable" align="center" style="undefined;table-layout: fixed; width: 700px">
<colgroup>
<col style="width: 168px">
<col style="width: 328px">
<col style="width: 150px">
</colgroup>
  <tr>
    <th class="tg-c3ow" colspan="3"><strong>apexart</strong> Outgoing International Fellowship Application Form</th>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="3">Please complete all form fields and press the Submit button. </td>
        </tr>
        <tr>
          <td class="tg-us36">Name of recommender:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="recommender" id="recommender"></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">What is your relationship to the recommender? (i.e. teacher, friend)</td>
        </tr>
        <tr>
          <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="relationship" id="relationship" required></textarea></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">How long have you known him/her?</td>
        </tr>
        <tr>
          <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="relationshipl" required></textarea></td>
        </tr>
        <tr>
          <td class="tg-us36">First name:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="first"></td>
        </tr>
        <tr>
          <td class="tg-us36">Last name:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="last"></td>
        </tr>
        <tr>
          <td class="tg-us36">Address:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="address"></td>
        </tr>
        <tr>
          <td class="tg-us36">Phone:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="phone"></td>
        </tr>
        <tr>
          <td class="tg-us36">Email:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="email"></td></td>
        </tr>
        <tr>
          <td class="tg-us36">Birthdate:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="birth"></td>
        </tr>
        <tr>
          <td class="tg-us36">Preferred Pronouns:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="pronouns"></td>
        </tr>
        <tr>
          <td class="tg-us36">Citizenship:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="citizen"></td>
        </tr>
        <tr>
          <td class="tg-us36">Please list the city and country you currently live in:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="residence"></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">What languages do you speak?</td>
        </tr>
        <tr>
          <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="language" required></textarea></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">Emergency Contact:</td>
        </tr>
        <tr>
          <td class="tg-us36">Name:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="ername"></td>
        </tr>
        <tr>
          <td class="tg-us36">Phone:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="erphone"></td>
        </tr>
        <tr>
          <td class="tg-us36">Email:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="eremail"></td>
        </tr>
        <tr>
          <td class="tg-us36">Relationship:</td>
          <td class="tg-us36" colspan="2"><input required style="width: 334px;" type="text" name="errel"></td>
        </tr>
        <tr>
          <td class="tg-us36" colspan="3">Please list the destinations and reasons for your travel over the past five years, beginning with the most recent including residencies/workshops/seminars you’ve participated in.
          </td>
        </tr>
          <tr>
            <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="dest1"></textarea></td>
          </tr>
</table>
<table class="tg" id="myTable" align="center" style="undefined;table-layout: fixed; width: 700px">
<colgroup>
<col style="width: 168px">
<col style="width: 328px">
<col style="width: 150px">
</colgroup>
          <tr>
            <td class="tg-us36" colspan="3">Please list any additional countries you've been to.</td>
          </tr>
          <tr>
            <td class="tg-us36">Country list:</td>
            <td class="tg-us36" colspan="2"><input style="width: 334px;" type="text" name="gentrav"></td>
          </tr>         
            <tr>
              <td class="tg-us36" colspan="3">What is your availability during the next 12 months? Do you have planned residencies or travel? If so please provide details.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="planned"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                After you have looked at the description of the Fellowship and associated materials on our website <a href="http://apexart.org/" target="_blank">www.apexart.org</a>, tell us why this is a good time for you to be part of an apexart Fellowship. (200 words minimum)</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="benefit" id="wordcount" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">What do you hope to gain from the experience? (200 words minimum)</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="gain" id="wordcount" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                The Fellowship Program is very active, with 3-4 activities per day, often requiring a lot of walking, traveling alone during the evening, using public transportation, and participating in a range of physical and social activities. The assigned activities are required. When necessary, we work with Fellows to find alternatives in the event of physical limitations, however the program still remains physically demanding. Please let us know if you have any concerns.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="medical"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                Please state your availability over the next 9 months:</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="available"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                Do you have any medical conditions we should be aware of?</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="conditions"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">
                Describe how you will be able to arrange time away from your daily life, work, projects, and other responsibilities for one month in order to focus exclusively on the Fellowship.</td>
                </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="support" required></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">If you have any questions about what is expected of Fellows in our program, or about our Fellowship Program more broadly, please list them here. We will be happy to answer.</td>
            </tr>
            <tr>
              <td class="tg-us36" style="height: 100px;" colspan="3"><textarea name="question"></textarea></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">An apexart fellowship is not about making work.<br>
 You do not get a studio.<br>
We will not schedule meetings with curators, artists or people to promote your work. <br>
It is not an opportunity for networking, career development, research, or production. 
<br><br>
It focuses on new experiences and personal development that may affect the work you do and will likely affect the way you think about some things. It is a cultural and experiential immersion program that is intended to be part of a creative catalytic process, and includes many diverse activities some of which you would not ordinarily do. The activities are not elective unless you have done the exact same thing, in the same exact place with the same exact people. 
<br><br>
You are agreeing to not to make artwork, network, promote or engage in other work during the program but to concentrate on new experiences.<br> 
Clicking the box below is a covenant between you and us.
<br>
                </td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3"><input required type="checkbox" name="understand" value="YES"> I agree</td>
            </tr>
            <tr>
              <td><input name="submit" type="submit" id="submit" onclick="return checkWordCount()" value="SUBMIT"></td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Thank you for applying for the apexart International Fellowship.</td>
            </tr>
            <tr>
              <td class="tg-us36" colspan="3">Please note that more deserving candidates are recommended than apexart can accommodate. We will contact you with further details regarding your application status.<br><br><br><br><br><br><br><br><br><br></td>
            </tr>
  
</table></div></form>
<script>
$('#myform').saveStorage();
</script>
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

