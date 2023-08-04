<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: Brochure Survey</title>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LdQo6gfAAAAAMKe2uPIUy0Fid3fwEG7OedKiJm4"></script>
<style>

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
  color: #232323 !important;
}

select {
    font: inherit;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: 16px;
  font-weight: 300 !important;
  font-family: Arial !important;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    color: black;
    text-align: center;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=text] {
  color: white !important;
}

textarea {
  color: white !important;
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

.col-100 {
  float: left;
  width: 100%;
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
</style>
<script>
        grecaptcha.ready(() => {
            grecaptcha.execute('6LdQo6gfAAAAAMKe2uPIUy0Fid3fwEG7OedKiJm4', { action: 'subscribe' }).then(token => {
              document.querySelector('#recaptchaResponse').value = token;
            });
        });
</script>
</head>

<body>

    
    <!-- Main wrapper start -->
    <div class="wrapper">
         <? require ('../../header-test.php'); 
         include ('connect.php');?>
        <div class="fixed-header-space"></div>
        <!-- Main content area start -->
        <div class="content">
           <br><br><br><br>
          
<!-- Service section start -->
            <div class="container2">
              <?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['recaptcha_response'])) {
    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdQo6gfAAAAALShU4raHWmR1b4UeZK6_RHi8oqZ';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        // If CAPTCHA is successfully completed...

        // Paste mail function or whatever else you want to happen here!
        $resultw="";
  //error_reporting(E_ALL);
      $query = sprintf("INSERT INTO `brochure2` (`created_on`, `name`, `email`, `based`, `printed`, `digital`, `age`, `primarily`, `feedback`) VALUES(NOW(),'%s','%s','%s','%s','%s','%s','%s','%s')",

    mysql_real_escape_string($_POST['name']),
    mysql_real_escape_string($_POST['email']),
      mysql_real_escape_string($_POST['based']),
      mysql_real_escape_string($_POST['printed']),
      mysql_real_escape_string($_POST['digital']),
      mysql_real_escape_string($_POST['age']),
      mysql_real_escape_string($_POST['primarily']),
      mysql_real_escape_string($_POST['feedback']));
    
  
    $result = mysql_query($query, $conn); 
      
      
    if (!$result) {
        $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
        $message .= 'Whole query: ' . $query;
        die($message);
    }
    
    
            
$to      = 'info@apexart.org';
$subject = 'Brochure Survey';
  
$message = 'Brochure Survey'.
            nl2br($body)
          ."

Name:
{$_POST['name']}
Email:
{$_POST['email']}

Where are you based?
{$_POST['based']}

Do you read the printed apexart exhibition essays you receive and think we should continue to print and send?
{$_POST['printed']}

Do you read the digital version?
{$_POST['digital']}

What is your age range?
{$_POST['age']}

Are you primarily an artist or curator?
{$_POST['primarily']}

Any feedback about what we do is always welcome.
{$_POST['feedback']}
";
          
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

      echo '<br><br><br>Survey Submitted. <br>Thank you for your invaluable feedback.</font><br><br>Return to <a href="https://apexart.org">apexart website</a>.';
      die();
    }
} else { ?>
              <div class="container">
                <div class="xboot-tab-area cleafix">
              <form action="brochure.php" method="post">
                <div class="row2">
                    <label for="fname">Hi. We’re trying to determine how important our printed brochures are for our audience. If you have a moment, your help would be appreciated.</label><br>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Name: (optional)</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="name" value="<?=(isset($_REQUEST["name"])? $_REQUEST["name"]:"")?>" id="name" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Email: (optional)</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="email" value="<?=(isset($_REQUEST["email"])? $_REQUEST["email"]:"")?>" id="email" >
                  </div>
                </div>
                <div class="row2">
                    <label for="fname">Where are you based?</label><br>
                    <input type="text" name="based" value="<?=(isset($_REQUEST["based"])? $_REQUEST["based"]:"")?>" id="based" >
                </div>
                <div class="row2">
                    <label for="fname">Do you read the printed apexart exhibition essays you receive and think we should continue to print and send?</label><br>
                    <INPUT TYPE="radio" NAME="printed" VALUE="y">Yes &nbsp;&nbsp;
                    <INPUT TYPE="radio" NAME="printed" VALUE="n">No
                </div>
                <div class="row2">
                    <label for="fname">Do you read the digital version of the essay?</label><br>
                    <INPUT TYPE="radio" NAME="digital" VALUE="y">Yes &nbsp;&nbsp;
                    <INPUT TYPE="radio" NAME="digital" VALUE="n">No
                </div>
                <div class="row2">
                    <label for="fname">What is your age range?</label><br>
                    <INPUT TYPE="radio" NAME="age" VALUE="18-24">18-24<br>
                    <INPUT TYPE="radio" NAME="age" VALUE="25-30">25-30<br>
                    <INPUT TYPE="radio" NAME="age" VALUE="30-40">30-40<br>
                    <INPUT TYPE="radio" NAME="age" VALUE="40-50">40-50<br>
                    <INPUT TYPE="radio" NAME="age" VALUE="50-60">50-60<br>
                    <INPUT TYPE="radio" NAME="age" VALUE="60+">60+<br>
                    <INPUT TYPE="radio" NAME="age" VALUE="Other">Other<br>
                </div>
                <div class="row2">
                    <label for="fname">Are you primarily an artist or curator?</label><br>
                    <INPUT TYPE="radio" NAME="primarily" VALUE="y">Yes &nbsp;&nbsp;
                    <INPUT TYPE="radio" NAME="primarily" VALUE="n">No
                </div>
                <div class="row2">
                    <label for="fname">Any feedback about what we do is always welcome.</label><br>
                    <input type="text" name="feedback" value="<?=(isset($_REQUEST["feedback"])? $_REQUEST["feedback"]:"")?>" id="feedback" >
                </div>
                <div class="row2">
                  <!-- <img src="https://www.apexart.org/images/submitbutton2.png"> -->
                  <br><input type="submit" value="Submit">
                </div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
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
    <!-- All JS files included -->
    <script src="https://apexart.org/js/plugins.js"></script>
    <script src="https://apexart.org/js/main.js"></script>

</body>

</html>