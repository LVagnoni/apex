<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: INTL Exhibition Program 2023-24 :: Submission Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="../css/elements.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../js/modernizr-2.8.3.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<SCRIPT LANGUAGE="JavaScript">

//<!-- This script and many more are available free online at -->
//<!-- The JavaScript Source!! http://javascript.internet.com -->

//<!-- Begin
   var submitcount=0;
   function checkSubmit() {

      if (submitcount == 0)
      {
      submitcount++;
      document.Surv.submit();
      }
   }


function wordCounter(field, countfield, maxlimit) {
wordcounter=0;
for (x=0;x<field.value.length;x++) {
      if (field.value.charAt(x) == " " && field.value.charAt(x-1) != " ")  {wordcounter++}  // Counts the spaces while ignoring double spaces, usually one in between each word.
      if (wordcounter > 500) {field.value = field.value.substring(0, x);}
      else {countfield.value = maxlimit - wordcounter;}
      }
   }

//  End -->
</script>

<style>

.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 300px;
    background-color: gray;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px;
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 100%;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 100%;
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent gray transparent transparent;
}
.tooltip:hover .tooltiptext {
    visibility: visible;
}

.goog-logo-link {
   display:none !important;
} 

.goog-te-gadget{
   color: transparent !important;
}

.submit {
    background-color: white;
    border: black;
    
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;

}

select {
    font: inherit;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
    color: black;
    text-align: center;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container2 {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */

.row2:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.standardTextSm {
  color: #232323 !important;
}
h4 {
  text-transform: none !important;
}

input[type="text"], textarea {

  background-color : #a6c9ba; 

}
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;

filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #000000;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>

</head>

<body>
<?php
    
    require ('connect.php');
?>
    <!--Loader
    <div class="xboot-loader">
        <div class="loader-wrapper">
            <div class="loader-content">
                <div class="loader-dot dot-1"></div>
                <div class="loader-dot dot-2"></div>
                <div class="loader-dot dot-3"></div>
                <div class="loader-dot dot-4"></div>
                <div class="loader-dot dot-5"></div>
                <div class="loader-dot dot-6"></div>
                <div class="loader-dot dot-7"></div>
                <div class="loader-dot dot-8"></div>
                <div class="loader-dot dot-center"></div>
            </div>
        </div>
    </div>
    Loader end -->
    <!-- Main wrapper start -->
    <div class="wrapper">
       <?php include ('../header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- Main content area start -->
        <div class="content">
           <br><br><br><br>
          
<!-- Service section start -->
            <div class="container2">
              <div class="container">
                <!-- All JS files included -->
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
                <div class="xboot-tab-area cleafix">

                  <?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LcBrWcUAAAAAFSGwkE0jsVwGh23UC_9IUN61VBx',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...

        // Paste mail function or whatever else you want to happen here!
        $resultw="";
  //error_reporting(E_ALL);

      
      
      $query = sprintf("INSERT INTO intl23_proposal (submitters, phone, email, city, state, country, franchise_city, franchise_state, franchise_country, artist_names, title, content, hear, hearinfo, created_on, mlist) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW(),'%s')",  
         
            mysql_real_escape_string($_POST['submitters']),
            mysql_real_escape_string($_POST['phone']),
            mysql_real_escape_string($_POST['email']),
            mysql_real_escape_string($_POST['city']),
            mysql_real_escape_string($_POST['state']),
            mysql_real_escape_string($_POST['country']),
            mysql_real_escape_string($_POST['franchise_city']),
            mysql_real_escape_string($_POST['franchise_state']),
            mysql_real_escape_string($_POST['franchise_country']),
            mysql_real_escape_string($_POST['artist_names']),
            mysql_real_escape_string($_POST['title']),
            mysql_real_escape_string($_POST['content']),
            mysql_real_escape_string($_POST['hear']),
            mysql_real_escape_string($_POST['hearinfo']),
            mysql_real_escape_string($_POST['created_on']),
            mysql_real_escape_string($_POST['mlist']));
            //echo $query;
          $mlist = 
          $result = mysql_query($query, $conn); 
          $newUserID=mysql_insert_id();
          // or die("no USER ID after inserting new user.");
          
          
          if (!$result) {
              $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
              $message .= 'Whole query: ' . $query;
              die($message);
          }
          
          
          $to = $_POST['email'];
      
          if (!isset($_POST['email'])||empty($_POST['email'])) $_POST['email']="noemail@lentered.com";
          $from = "info@apexart.org";
          $headers .= 'From: '.$from. "\r\n" .
              'Reply-To: '.$from. "\r\n";
          $headers .= 'Bcc: info@apexart.org' . "\r\n";
          // To send HTML mail, the Content-type header must be set
          $headers .= 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
          
          $headers .= 'X-Mailer: PHP/' . phpversion();
          $subject = "Open Call Submission for INTL / #$newUserID";
          
          
          $body = "Thank you for submitting a proposal to apexart's Open Call for International Exhibitions. \n
          <strong>Your ID# is $newUserID.</strong>\n
          Proposals will be accepted through March 1, 2023, and then undergo apexart's crowd-sourced jurying process with more than 700 jurors from around the world. Results will be <a href='https://www.apexart.org/intl/results23.php'>announced here</a> the first week of April 2023.\n
           Below is a copy of your proposal for your records. If we have any questions about your proposal we will be in touch via email.\n
           Thank you for your participation and best of luck, \napexart\n---------------------------\n\n";
          
          
          $message = '
          <html>
          <head>
            <title>Open Call for INTL Exhibitions</title>
          </head>
          <body>'.
            nl2br($body)
          ."
          Name(s): {$_POST['submitters']}<br/> 
          Email: {$_POST['email']}<br/> 
          Phone: {$_POST['phone']}<br/> 
          Submitter's location: {$_POST['city']}, {$_POST['state']}, {$_POST['country']}<br/>
          Exhibition location: {$_POST['franchise_city']}, {$_POST['franchise_country']}<br/>
          Where you heard: {$_POST['hear']}, {$_POST['hearinfo']}<br/>  
          Did you opt-out of mailing list? {$_POST['mlist']}<br/>           
          User ID: $newUserID<br/> <br/>
            Exhibition Title: {$_POST['title']}<br/>
          Submission: ".nl2br(($_POST['content']))."
          <br><br>
          </body>
          </html>
          ";
          if (mail($to, $subject, $message, $headers)) {
            ;;
            //mail("info@apexart.org", "BCC: ".$subject, $body,$headers);
           } else {
            echo("<p>Submission Saved to database, but your email didn't work. Make sure you <a href='mailto:lisa.vagnoni@apexart.org'>send us your email</a> so we can contact you.</p>");
           }
           //echo error_get_last();
          
          //header('Location: '.$_SERVER['PHP_SELF'].'?justregistered=1' ) ;
          
          $resultw="<p>Submission Successful.<br>You will receive a confirmation by email. Your ID is $newUserID</p>";
          echo "$resultw<p><a href='https://www.apexart.org'>Return to apexart website.</a></p>";
          die();
    }
} else { ?>

    <!-- FORM GOES HERE -->
    <div class='popup'>
<div class='cnt223'>
<h1>Important Notice</h1>
<p>
We are currently experiencing a technical issue. Please check back tomorrow.
<br/>
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>
    
              <form action="submit-broken-503.php" method="post" name="input" id="myform" onsubmit="return validate_form(this)" enctype="multipart/form-data">
                <div class="row2">
                    <h2>Open Call INT'L 2023-2024</h2>
                    <!--<h3>This form will be live on February 1, 2023.</h3>-->
                    <p>Below is a list of proposal requirements for submitting a proposal to the Open Call. Please check each box and make sure you adhere to them before pressing Submit.<br>
Confirm that your proposal:
</p>
                </div>
                <div class="row2">
                    <input required type="checkbox" name="check[]" id="original" value="yes">&nbsp; is an original, group exhibition, consisting of works by at least 3 people working independently of one another. <br>
                    <input required type="checkbox" name="check[]" id="english" value="yes" >&nbsp;is in English. Google translate works well for converting.<br>
                    <input required type="checkbox" name="check[]" id="nobio" value="yes" />&nbsp;contains no biographical statements, CVs, links or your name, as they are juried anonymously from the idea submitted.<br>
                    <input required type="checkbox" name="check[]" id="nodates" value="yes" >&nbsp;does not include specific dates for the exhibition as the schedule is not determined until after the process.<br>
                    <input required type="checkbox" name="check[]" id="nonyc" value="yes" />&nbsp;is for an exhibition that will take place outside New York, and I have previously been to the city I am proposing.<br>
                    <input  required type="checkbox" name="check[]" id="artproj" value="yes" >&nbsp;is not an "artist project" wherein several artists are directed to work together to create a unified project (<a href="https://en.wikipedia.org/wiki/Exquisite_corpse" target="_blank">exquisite corpse</a>, or delegation of specific tasks as in a multi-artist installation work or film production). <br>          
                    <input required  type="checkbox" name="check[]" id="noopencall" value="yes" >&nbsp;does not include an Open Call for artists.<br>
                    <input required  type="checkbox" name="check[]" id="nosales" value="yes" >&nbsp;does not include any sales-related activities.<br><br>
                    <input required  type="checkbox" name="check[]" id="onlyone" value="yes" >&nbsp;I am only submitting 1 proposal.<br>
                    <input required  type="checkbox" name="check[]" id="faqs" value="yes" >&nbsp;I read and understand the <a href="https://apexart.org/opencallsfaqs.html" target="_blank"> <strong>FAQs.</strong></a><br><br>

                   
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Where did you hear about this Open Call?</label>
                  </div>
                  <div class="col-75">
                    <select required labelID="" name="hear" value="<?=(isset($_REQUEST["hear"])? $_REQUEST["hear"]:"")?>">
                              <option value="">Please select</option>
                              <option value="apexart">apexart</option>
                              <option value="Art and Education">Art and Education</option>
                              <option value="Art in America">Art in America</option>
                              <option value="Art Opportunities Monthly">Art Opportunities Monthly</option>
                               <option value="ArtConnect">ArtConnect</option>
                              <option value="ArtRabbit">ArtRabbit</option>
                              <option value="Art Scene India">Art Scene India</option>
                              <option value="Call for Curators">Call for Curators</option>
                              <option value="Circuloa">Circuloa</option>
                              <option value="e-flux">e-flux</option>
                              <option value="Hyperallergic">Hyperallergic</option>
                              <option value="Kajet Journal">Kajet Journal</option>
                              <option value="Kunstkritikk">Kunstkritikk</option>
                              <option value="MetropolisM">MetropolisM</option>
                              <option value="Mousse">Mousse</option>
                              <option value="re-title">re-title</option>
                              <option value="RU Opportunities">RU Opportunities</option>
                              <option value="Texte Zur Kunst">Text Zur Kunst</option>
                              <option value="The Art Newspaper">The Art Newspaper</option>
                              <option value="Social Media">Twitter/Facebook/Social Media</option>
                              <option value="Teacher/Colleague">Teacher/Colleague</option>
                              <option value="Triple Canopy">Triple Canopy</option>
                              <option value="Whitehot">Whitehot Magazine</option>
                              <option value="Wooloo">Wooloo</option>
                              <option value="Other">Other</option>
                            </select>
                  </div>
                </div>
                <div class="row2">
                    <div class="col-25">
                    Please specify if other:
                    </div>
                    <div class="col-75">
                            <input type="text" name="hearinfo" value="<?=(isset($_REQUEST["hearinfo"])? $_REQUEST["hearinfo"]:"")?>">
                    </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Name(s) of submitters:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="submitters" value="<?=(isset($_REQUEST["submitters"])? $_REQUEST["submitters"]:"")?>" id="submitters"  placeholder="Full names of all individual organizers or collective name">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Phone:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="phone" value="<?=(isset($_REQUEST["phone"])? $_REQUEST["phone"]:"")?>" placeholder="Your phone number">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Email:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="email" value="<?=(isset($_REQUEST["email"])? $_REQUEST["email"]:"")?>" placeholder="Your email">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Submitter's City:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="city" value="<?=(isset($_REQUEST["city"])? $_REQUEST["city"]:"")?>" placeholder="The city you are based in">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Submitter's State (for USA):</label>
                  </div>
                  <div class="col-75">
                    <select id="state" name="state" value="<?=(isset($_REQUEST["state"])? $_REQUEST["state"]:"")?>">
                            <option value="">N/A</option>
                            <option value="Alabama"  >Alabama</option>
                            <option value="Alaska"  >Alaska</option>
                            <option value="Arizona"  >Arizona</option>
                            <option value="Arkansas"  >Arkansas</option>
                            <option value="California"  >California</option>
                            <option value="Colorado"  >Colorado</option>
                            <option value="Connecticut"  >Connecticut</option>
                            <option value="Delaware"  >Delaware</option>
                            <option value="District of Columbia"  >District of Columbia</option>
                            <option value="Florida"  >Florida</option>
                            <option value="Georgia"  >Georgia</option>
                            <option value="Hawaii"  >Hawaii</option>
                            <option value="Idaho"  >Idaho</option>
                            <option value="Illinois"  >Illinois</option>
                            <option value="Indiana"  >Indiana</option>
                            <option value="Iowa"  >Iowa</option>
                            <option value="Kansas"  >Kansas</option>
                            <option value="Kentucky"  >Kentucky</option>
                            <option value="Louisiana"  >Louisiana</option>
                            <option value="Maine"  >Maine</option>
                            <option value="Maryland"  >Maryland</option>
                            <option value="Massachusetts"  >Massachusetts</option>
                            <option value="Michigan"  >Michigan</option>
                            <option value="Minnesota"  >Minnesota</option>
                            <option value="Mississippi"  >Mississippi</option>
                            <option value="Missouri"  >Missouri</option>
                            <option value="Montana"  >Montana</option>
                            <option value="Nebraska"  >Nebraska</option>
                            <option value="Nevada"  >Nevada</option>
                            <option value="New Hampshire"  >New Hampshire</option>
                            <option value="New Jersey"  >New Jersey</option>
                            <option value="New Mexico"  >New Mexico</option>
                            <option value="New York"  >New York</option>
                            <option value="North Carolina"  >North Carolina</option>
                            <option value="North Dakota"  >North Dakota</option>
                            <option value="Ohio"  >Ohio</option>
                            <option value="Oklahoma"  >Oklahoma</option>
                            <option value="Oregon"  >Oregon</option>
                            <option value="Pennsylvania"  >Pennsylvania</option>
                            <option value="Rhode Island"  >Rhode Island</option>
                            <option value="South Carolina"  >South Carolina</option>
                            <option value="South Dakota"  >South Dakota</option>
                            <option value="Tennessee"  >Tennessee</option>
                            <option value="Texas"  >Texas</option>
                            <option value="Utah"  >Utah</option>
                            <option value="Vermont"  >Vermont</option>
                            <option value="Virginia"  >Virginia</option>
                            <option value="Washington"  >Washington</option>
                            <option value="West Virginia"  >West Virginia</option>
                            <option value="Wisconsin"  >Wisconsin</option>
                            <option value="Wyoming"  >Wyoming</option>
                          </select>
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="country">Submitter's Country</label>
                  </div>
                  <div class="col-75">
                    <select required labelID="country" id="country" name="country" value="<?=(isset($_REQUEST["country"])? $_REQUEST["country"]:"")?>">
                            <option value="">Please select</option>
                            <option value="United States"  >United States</option>
                            <option value="Canada"  >Canada</option>
                            <option value="Afghanistan"  >Afghanistan</option>
                            <option value="Albania"  >Albania</option>
                            <option value="Algeria"  >Algeria</option>
                            <option value="American Samoa"  >American Samoa</option>
                            <option value="Andorra"  >Andorra</option>
                            <option value="Angola"  >Angola</option>
                            <option value="Anguilla"  >Anguilla</option>
                            <option value="Antarctica"  >Antarctica</option>
                            <option value="Antigua and Barbuda"  >Antigua and Barbuda</option>
                            <option value="Argentina"  >Argentina</option>
                            <option value="Armenia"  >Armenia</option>
                            <option value="Aruba"  >Aruba</option>
                            <option value="Australia"  >Australia</option>
                            <option value="Austria"  >Austria</option>
                            <option value="Azerbaijan"  >Azerbaijan</option>
                            <option value="Bahamas"  >Bahamas</option>
                            <option value="Bahrain"  >Bahrain</option>
                            <option value="Bangladesh"  >Bangladesh</option>
                            <option value="Barbados"  >Barbados</option>
                            <option value="Belarus"  >Belarus</option>
                            <option value="Belgium"  >Belgium</option>
                            <option value="Belize"  >Belize</option>
                            <option value="Benin"  >Benin</option>
                            <option value="Bermuda"  >Bermuda</option>
                            <option value="Bhutan"  >Bhutan</option>
                            <option value="Bolivia"  >Bolivia</option>
                            <option value="Bosnia and Herzegowina"  >Bosnia and Herzegowina</option>
                            <option value="Botswana"  >Botswana</option>
                            <option value="Bouvet Island"  >Bouvet Island</option>
                            <option value="Brazil"  >Brazil</option>
                            <option value="British Indian Ocean Territory"  >British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam"  >Brunei Darussalam</option>
                            <option value="Bulgaria"  >Bulgaria</option>
                            <option value="Burkina Faso"  >Burkina Faso</option>
                            <option value="Burundi"  >Burundi</option>
                            <option value="Cambodia"  >Cambodia</option>
                            <option value="Cameroon"  >Cameroon</option>
                            <option value="Cape Verde"  >Cape Verde</option>
                            <option value="Cayman Islands"  >Cayman Islands</option>
                            <option value="Central African Republic"  >Central African Republic</option>
                            <option value="Chad"  >Chad</option>
                            <option value="Chile"  >Chile</option>
                            <option value="China"  >China</option>
                            <option value="Christmas Island"  >Christmas Island</option>
                            <option value="Cocoa (Keeling) Islands"  >Cocoa (Keeling) Islands</option>
                            <option value="Colombia"  >Colombia</option>
                            <option value="Comoros"  >Comoros</option>
                            <option value="Congo"  >Congo</option>
                            <option value="Cook Islands"  >Cook Islands</option>
                            <option value="Costa Rica"  >Costa Rica</option>
                            <option value="Cote Divoire"  >Cote Divoire</option>
                            <option value="Croatia (local name: Hrvatska)"  >Croatia (local name: Hrvatska)</option>
                            <option value="Cuba"  >Cuba</option>
                            <option value="Cyprus"  >Cyprus</option>
                            <option value="Czech Republic"  >Czech Republic</option>
                            <option value="Denmark"  >Denmark</option>
                            <option value="Djibouti"  >Djibouti</option>
                            <option value="Dominica"  >Dominica</option>
                            <option value="Dominican Republic"  >Dominican Republic</option>
                            <option value="East Timor"  >East Timor</option>
                            <option value="Ecuador"  >Ecuador</option>
                            <option value="Egypt"  >Egypt</option>
                            <option value="El Salvador"  >El Salvador</option>
                            <option value="Equatorial Guinea"  >Equatorial Guinea</option>
                            <option value="Eritrea"  >Eritrea</option>
                            <option value="Estonia"  >Estonia</option>
                            <option value="Ethiopia"  >Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)"  >Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands"  >Faroe Islands</option>
                            <option value="Fiji"  >Fiji</option>
                            <option value="Finland"  >Finland</option>
                            <option value="France"  >France</option>
                            <option value="France, Metropolitan"  >France, Metropolitan</option>
                            <option value="French Guiana"  >French Guiana</option>
                            <option value="French Polynesia"  >French Polynesia</option>
                            <option value="French Southern Territories"  >French Southern Territories</option>
                            <option value="Gabon"  >Gabon</option>
                            <option value="Gambia"  >Gambia</option>
                            <option value="Georgia"  >Georgia</option>
                            <option value="Germany"  >Germany</option>
                            <option value="Ghana"  >Ghana</option>
                            <option value="Gibraltar"  >Gibraltar</option>
                            <option value="Greece"  >Greece</option>
                            <option value="Greenland"  >Greenland</option>
                            <option value="Grenada"  >Grenada</option>
                            <option value="Guadeloupe"  >Guadeloupe</option>
                            <option value="Guam"  >Guam</option>
                            <option value="Guatemala"  >Guatemala</option>
                            <option value="Guinea"  >Guinea</option>
                            <option value="Guinea-Bissau"  >Guinea-Bissau</option>
                            <option value="Guyana"  >Guyana</option>
                            <option value="Haiti"  >Haiti</option>
                            <option value="Heard and Mc Donald Islands"  >Heard and Mc Donald Islands</option>
                            <option value="Honduras"  >Honduras</option>
                            <option value="Hong Kong"  >Hong Kong</option>
                            <option value="Hungary"  >Hungary</option>
                            <option value="Iceland"  >Iceland</option>
                            <option value="India"  >India</option>
                            <option value="Indonesia"  >Indonesia</option>
                            <option value="Iran (Islamic Republic of)"  >Iran (Islamic Republic of)</option>
                            <option value="Iraq"  >Iraq</option>
                            <option value="Ireland"  >Ireland</option>
                            <option value="Israel"  >Israel</option>
                            <option value="Italy"  >Italy</option>
                            <option value="Jamaica"  >Jamaica</option>
                            <option value="Japan"  >Japan</option>
                            <option value="Jordan"  >Jordan</option>
                            <option value="Kazakhstan"  >Kazakhstan</option>
                            <option value="Kenya"  >Kenya</option>
                            <option value="Kiribati"  >Kiribati</option>
                            <option value="Korea, Democratic Peoples Republic of"  >Korea, Democratic Peoples Republic of</option>
                            <option value="Korea, Republic of"  >Korea, Republic of</option>
                            <option value="Kosovo"  >Kosovo</option>
                            <option value="Kuwait"  >Kuwait</option>
                            <option value="Kyrgyzstan"  >Kyrgyzstan</option>
                            <option value="Lao Peoples Democratic Republic"  >Lao Peoples Democratic Republic</option>
                            <option value="Latvia"  >Latvia</option>
                            <option value="Lebanon"  >Lebanon</option>
                            <option value="Lesotho"  >Lesotho</option>
                            <option value="Liberia"  >Liberia</option>
                            <option value="Libyan Arab Jamahiriya"  >Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein"  >Liechtenstein</option>
                            <option value="Lithuania"  >Lithuania</option>
                            <option value="Luxembourg"  >Luxembourg</option>
                            <option value="Macau"  >Macau</option>
                            <option value="Macedonia"  >Macedonia</option>
                            <option value="Madagascar"  >Madagascar</option>
                            <option value="Malawi"  >Malawi</option>
                            <option value="Malaysia"  >Malaysia</option>
                            <option value="Maldives"  >Maldives</option>
                            <option value="Mali"  >Mali</option>
                            <option value="Malta"  >Malta</option>
                            <option value="Marshall Islands"  >Marshall Islands</option>
                            <option value="Martinique"  >Martinique</option>
                            <option value="Mauritania"  >Mauritania</option>
                            <option value="Mauritius"  >Mauritius</option>
                            <option value="Mayotte"  >Mayotte</option>
                            <option value="Mexico"  >Mexico</option>
                            <option value="Micronesia, Federated States Of"  >Micronesia, Federated States Of</option>
                            <option value="Moldova, Republic of"  >Moldova, Republic of</option>
                            <option value="Monaco"  >Monaco</option>
                            <option value="Mongolia"  >Mongolia</option>
                            <option value="Montenegro"  >Montenegro</option>
                            <option value="Montserrat"  >Montserrat</option>
                            <option value="Morocco"  >Morocco</option>
                            <option value="Mozambique"  >Mozambique</option>
                            <option value="Myanmar"  >Myanmar</option>
                            <option value="Namibia"  >Namibia</option>
                            <option value="Nauru"  >Nauru</option>
                            <option value="Nepal"  >Nepal</option>
                            <option value="Netherlands"  >Netherlands</option>
                            <option value="Netherlands Antilles"  >Netherlands Antilles</option>
                            <option value="New Caledonia"  >New Caledonia</option>
                            <option value="New Zealand"  >New Zealand</option>
                            <option value="Nicaragua"  >Nicaragua</option>
                            <option value="Niger"  >Niger</option>
                            <option value="Nigeria"  >Nigeria</option>
                            <option value="Niue"  >Niue</option>
                            <option value="Norfolk Island"  >Norfolk Island</option>
                            <option value="Northern Mariana Islands"  >Northern Mariana Islands</option>
                            <option value="Norway"  >Norway</option>
                            <option value="Oman"  >Oman</option>
                            <option value="Pakistan"  >Pakistan</option>
                            <option value="Palau"  >Palau</option>
                            <option value="Panama"  >Panama</option>
                            <option value="Papua New Guinea"  >Papua New Guinea</option>
                            <option value="Paraguay"  >Paraguay</option>
                            <option value="Peru"  >Peru</option>
                            <option value="Philippines"  >Philippines</option>
                            <option value="Pitcairn"  >Pitcairn</option>
                            <option value="Poland"  >Poland</option>
                            <option value="Portugal"  >Portugal</option>
                            <option value="Puerto Rico"  >Puerto Rico</option>
                            <option value="Qatar"  >Qatar</option>
                            <option value="Reunion"  >Reunion</option>
                            <option value="Romania"  >Romania</option>
                            <option value="Russian Federation"  >Russian Federation</option>
                            <option value="Rwanda"  >Rwanda</option>
                            <option value="Saint Kitts and Nevis"  >Saint Kitts and Nevis</option>
                            <option value="Saint Lucia"  >Saint Lucia</option>
                            <option value="Saint Vincent and the Grenadines"  >Saint Vincent and the Grenadines</option>
                            <option value="Samoa"  >Samoa</option>
                            <option value="San Marino"  >San Marino</option>
                            <option value="Sao Tome and Principe"  >Sao Tome and Principe</option>
                            <option value="Saudi Arabia"  >Saudi Arabia</option>
                            <option value="Senegal"  >Senegal</option>
                            <option value="Serbia"  >Serbia</option>
                            <option value="Seychelles"  >Seychelles</option>
                            <option value="Sierra Leone"  >Sierra Leone</option>
                            <option value="Singapore"  >Singapore</option>
                            <option value="Slovakia (Slovak Republic)"  >Slovakia (Slovak Republic)</option>
                            <option value="Slovenia"  >Slovenia</option>
                            <option value="Solomon Islands"  >Solomon Islands</option>
                            <option value="Somalia"  >Somalia</option>
                            <option value="South Africa"  >South Africa</option>
                            <option value="South Georgia"  >South Georgia</option>
                            <option value="Spain"  >Spain</option>
                            <option value="Sri Lanka"  >Sri Lanka</option>
                            <option value="St. Helena"  >St. Helena</option>
                            <option value="St. Pierre and Miquelon"  >St. Pierre and Miquelon</option>
                            <option value="Sudan"  >Sudan</option>
                            <option value="Suriname"  >Suriname</option>
                            <option value="Svalbard and Jan Mayen Islands"  >Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland"  >Swaziland</option>
                            <option value="Sweden"  >Sweden</option>
                            <option value="Switzerland"  >Switzerland</option>
                            <option value="Syrian Arab Republic"  >Syrian Arab Republic</option>
                            <option value="Taiwan"  >Taiwan</option>
                            <option value="Tajikistan"  >Tajikistan</option>
                            <option value="Tanzania, United Republic of"  >Tanzania, United Republic of</option>
                            <option value="Thailand"  >Thailand</option>
                            <option value="Togo"  >Togo</option>
                            <option value="Tokelau"  >Tokelau</option>
                            <option value="Tonga"  >Tonga</option>
                            <option value="Trinidad and Tobago"  >Trinidad and Tobago</option>
                            <option value="Tunisia"  >Tunisia</option>
                            <option value="Turkey"  >Turkey</option>
                            <option value="Turkmenistan"  >Turkmenistan</option>
                            <option value="Turks and Caicos Islands"  >Turks and Caicos Islands</option>
                            <option value="Tuvalu"  >Tuvalu</option>
                            <option value="Uganda"  >Uganda</option>
                            <option value="Ukraine"  >Ukraine</option>
                            <option value="United Arab Emirates"  >United Arab Emirates</option>
                            <option value="United Kingdom"  >United Kingdom</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay"  >Uruguay</option>
                            <option value="Uzbekistan"  >Uzbekistan</option>
                            <option value="Vanuatu"  >Vanuatu</option>
                            <option value="Vatican City State"  >Vatican City State</option>
                            <option value="Venezuela"  >Venezuela</option>
                            <option value="Viet Nam"  >Viet Nam</option>
                            <option value="Virgin Islands (British)"  >Virgin Islands (British)</option>
                            <option value="Virgin Islands (U.S.)"  >Virgin Islands (U.S.)</option>
                            <option value="Wallis and Futuna Islands"  >Wallis and Futuna Islands</option>
                            <option value="Yemen"  >Yemen</option>
                            <option value="Yugoslavia"  >Yugoslavia</option>
                            <option value="Zaire"  >Zaire</option>
                            <option value="Zambia"  >Zambia</option>
                            <option value="Zimbabwe"  >Zimbabwe</option>
                          </select>
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Three examples of potential exhibition artists - (not visible to the jury):</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="artist_names" value="<?=(isset($_REQUEST["artist_names"])? $_REQUEST["artist_names"]:"")?>" placeholder="The names of the artists to be included in the exhibition">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Exhibition City:</label>
                  </div>
                  <div class="col-75">
                    <input required type="text" name="franchise_city" value="<?=(isset($_REQUEST["franchise_city"])? $_REQUEST["franchise_city"]:"")?>" placeholder="The city where the exhibition is to be held">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Exhibition State (for USA):</label>
                  </div>
                  <div class="col-75">
                    <select id="franchise_state" name="franchise_state" value="<?=(isset($_REQUEST["franchise_state"])? $_REQUEST["franchise_state"]:"")?>">
                            <option value="">N/A</option>
                            <option value="Alabama"  >Alabama</option>
                            <option value="Alaska"  >Alaska</option>
                            <option value="Arizona"  >Arizona</option>
                            <option value="Arkansas"  >Arkansas</option>
                            <option value="California"  >California</option>
                            <option value="Colorado"  >Colorado</option>
                            <option value="Connecticut"  >Connecticut</option>
                            <option value="Delaware"  >Delaware</option>
                            <option value="District of Columbia"  >District of Columbia</option>
                            <option value="Florida"  >Florida</option>
                            <option value="Georgia"  >Georgia</option>
                            <option value="Hawaii"  >Hawaii</option>
                            <option value="Idaho"  >Idaho</option>
                            <option value="Illinois"  >Illinois</option>
                            <option value="Indiana"  >Indiana</option>
                            <option value="Iowa"  >Iowa</option>
                            <option value="Kansas"  >Kansas</option>
                            <option value="Kentucky"  >Kentucky</option>
                            <option value="Louisiana"  >Louisiana</option>
                            <option value="Maine"  >Maine</option>
                            <option value="Maryland"  >Maryland</option>
                            <option value="Massachusetts"  >Massachusetts</option>
                            <option value="Michigan"  >Michigan</option>
                            <option value="Minnesota"  >Minnesota</option>
                            <option value="Mississippi"  >Mississippi</option>
                            <option value="Missouri"  >Missouri</option>
                            <option value="Montana"  >Montana</option>
                            <option value="Nebraska"  >Nebraska</option>
                            <option value="Nevada"  >Nevada</option>
                            <option value="New Hampshire"  >New Hampshire</option>
                            <option value="New Jersey"  >New Jersey</option>
                            <option value="New Mexico"  >New Mexico</option>
                            <option value="New York"  >New York</option>
                            <option value="North Carolina"  >North Carolina</option>
                            <option value="North Dakota"  >North Dakota</option>
                            <option value="Ohio"  >Ohio</option>
                            <option value="Oklahoma"  >Oklahoma</option>
                            <option value="Oregon"  >Oregon</option>
                            <option value="Pennsylvania"  >Pennsylvania</option>
                            <option value="Rhode Island"  >Rhode Island</option>
                            <option value="South Carolina"  >South Carolina</option>
                            <option value="South Dakota"  >South Dakota</option>
                            <option value="Tennessee"  >Tennessee</option>
                            <option value="Texas"  >Texas</option>
                            <option value="Utah"  >Utah</option>
                            <option value="Vermont"  >Vermont</option>
                            <option value="Virginia"  >Virginia</option>
                            <option value="Washington"  >Washington</option>
                            <option value="West Virginia"  >West Virginia</option>
                            <option value="Wisconsin"  >Wisconsin</option>
                            <option value="Wyoming"  >Wyoming</option>
                          </select>
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Exhibition Country:</label>
                  </div>
                  <div class="col-75">
                    <input required type="text" name="franchise_country" value="<?=(isset($_REQUEST["franchise_country"])? $_REQUEST["franchise_country"]:"")?>" placeholder="The country where the exhibition is to be held">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Exhibition Title:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="title" value="<?=(isset($_REQUEST["title"])? $_REQUEST["title"]:"")?>" placeholder="The title of the exhibition">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="subject">500 word proposal:</label>
                  
                  Words remaining:
                          <input type=box readonly name=remLen size=5 value=500 class="standardTextSm"></div>
                  <div class="col-75">
                    <textarea name="content" required cols="110" rows="15" onkeydown="wordCounter(this.form.content,this.form.remLen,500);" onkeyup="wordCounter(this.form.content,this.form.remLen,500);"><?=(isset($_REQUEST["content"])? $_REQUEST["content"]:"")?></textarea>
                  </div>
                </div>
                
                <div class="row2"><br>
                    <div class="col-75"><input type="checkbox" name="mlist" value="yes">
                    
                            &nbsp;Opt-out: We will put you on our mailing list to receive info about our exhibitions and opportunities unless you opt-out.
                    </div>
                </div>
                <div class="row">
               
                 <div class="push-right"><div class="g-recaptcha" data-sitekey="6LcBrWcUAAAAANJdK46GtQgy1gu_iVtr8yf1ntm9"></div><input type="submit" value="Submit" name="submit"></div></div>
                 
                </div>
              </form>

<?php } ?>
            </div>
            </div>
          </div>


 
            <br><br><br><br><br><br>
            <!-- Service section end -->
        </div>
        <!-- Main content area end -->
        <!-- Footer area start -->
        
        <!-- Footer area end -->
    </div>
    <!-- Main wrapper end -->
    <script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

</body>

</html>