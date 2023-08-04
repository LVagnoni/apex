<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: Open Call Program :: Teacher Survey</title>
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
            <div class="container2">
              <div class="container">
                <div class="xboot-tab-area cleafix">
              <form action="formscript.php" method="post" name="input" id="myform" onsubmit="return validate_form(this)" enctype="multipart/form-data">
                <div class="row2">
                    <label for="fname">Thank you for your participation in the apexart Open Call Jury process! We hope you and your class enjoyed the process and that it provided a challenging discussion platform. To improve the process and expand upon existing tools and resources we would like to ask for some feedback.
                    <br><br>
                    Steven Rand<br>
                    Executive Director<br>
                  apexart</label><br>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Name:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="name" value="<?=(isset($_REQUEST["name"])? $_REQUEST["name"]:"")?>" id="name" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Email:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="email" value="<?=(isset($_REQUEST["email"])? $_REQUEST["email"]:"")?>" id="email" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">College/University/Affiliation:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="college" value="<?=(isset($_REQUEST["college"])? $_REQUEST["college"]:"")?>" id="college" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Year/Grade level:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="grade" value="<?=(isset($_REQUEST["grade"])? $_REQUEST["grade"]:"")?>" id="grade" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Class title:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="title" value="<?=(isset($_REQUEST["title"])? $_REQUEST["title"]:"")?>" id="title" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Department/Field:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="dept" value="<?=(isset($_REQUEST["dept"])? $_REQUEST["dept"]:"")?>" id="dept" >
                  </div>
                </div>
              
                <div class="row2">
                    <label for="fname">What classes/subjects did you use the program for?</label><br>
                    <input type="text" name="other" value="<?=(isset($_REQUEST["other"])? $_REQUEST["other"]:"")?>" id="learn" >
                </div>
                
                <div class="row2">
                    <label for="fname">If this is your first time, how did you learn about the apexart Open Call Student Juror Program?</label><br>
                    <input type="text" name="learn" value="<?=(isset($_REQUEST["learn"])? $_REQUEST["learn"]:"")?>" id="learn" >
                </div>
                <div class="row2">
                    <label for="fname">Was it easy to explain the apexart Open Call Jury Process and reasoning to your class syllabus? (Long answer)</label><br>
                    <textarea rows="5" name="provide" value="<?=(isset($_REQUEST["provide"])? $_REQUEST["provide"]:"")?>" id="provide"></textarea>
                </div>
                <div class="row2">
                    <label for="fname">Are there one or two important social issues students discussed?</label><br>
                    <input type="text" name="signup" value="<?=(isset($_REQUEST["signup"])? $_REQUEST["signup"]:"")?>" id="signup" >
                </div>
                <div class="row2">
                    <label for="fname">Did you discuss the structure of the process and program as to its efficacy?</label><br>
                    <input type="text" name="signup2" value="<?=(isset($_REQUEST["signup2"])? $_REQUEST["signup2"]:"")?>" id="signup2" >
                </div>
                <div class="row2">
                    <label for="fname">Did your class enjoyed the process? Did they feel invested to look at the winners and follow the exhibitions? Even to submit a proposal in the future?</label><br>
                    <input type="text" name="required" value="<?=(isset($_REQUEST["required"])? $_REQUEST["required"]:"")?>" id="required" >
                </div>
                <div class="row2">
                    <label for="fname">Did you use our resources available on the apexart website (Open Call Jury Classroom Guide, past exhibitions and past winning open call proposals)?</label><br>
                    <textarea rows="5" name="inc" value="<?=(isset($_REQUEST["inc"])? $_REQUEST["inc"]:"")?>" id="inc"></textarea>
                </div>
                <div class="row2">
                    <label for="fname">Would you participate in the Open Call Jury process again and why?</label><br>
                    <input type="text" name="discuss" value="<?=(isset($_REQUEST["discuss"])? $_REQUEST["discuss"]:"")?>" id="discuss" >
                </div>
                <div class="row2">
                    <label for="fname">Was there a most important student “take away”?</label><br>
                    <input type="text" name="know" value="<?=(isset($_REQUEST["know"])? $_REQUEST["know"]:"")?>" id="know" >
                </div>
                <div class="row2">
                    <label for="fname">What resources would be helpful to have available for your class- before, during or after the jury process?</label><br>
                    <input type="text" name="enjoy" value="<?=(isset($_REQUEST["enjoy"])? $_REQUEST["enjoy"]:"")?>" id="enjoy" >
                </div>
                <div class="row2">
                    <label for="fname">Was student participation required or optional?</label><br>
                    <input type="text" name="again" value="<?=(isset($_REQUEST["again"])? $_REQUEST["again"]:"")?>" id="again" >
                </div>
                <div class="row2">
                    <label for="fname">Any suggestions for making the process more effective?</label><br>
                    <input type="text" name="resources" value="<?=(isset($_REQUEST["resources"])? $_REQUEST["resources"]:"")?>" id="resources" >
                </div>
                
                
                <div class="row2">
                    <label for="fname">Would you personally consider submitting an exhibition proposal in the future?</label><br>
                    <input type="text" name="future" value="<?=(isset($_REQUEST["future"])? $_REQUEST["future"]:"")?>" id="future" >
                </div>
                <div class="row2">
                    <label for="fname">Are there any colleagues we should contact that you think might be interested in using the jurying process or should be aware of our programming? Give us an email and we’ll contact them.</label><br>
                    <input type="text" name="colleagues" value="<?=(isset($_REQUEST["colleagues"])? $_REQUEST["colleagues"]:"")?>" id="colleagues" >
                </div>
                <div class="row2">
                  <!-- <img src="https://www.apexart.org/images/submitbutton2.png"> -->
                  <br><input type="submit" value="Submit">
                </div>
              </form>
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
    <script src="../../js/plugins.js"></script>
    <script src="../../js/main.js"></script>

</body>

</html>