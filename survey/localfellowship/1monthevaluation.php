<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: apexart Local New York City Fellowship 1 Month Evaluation</title>
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

<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  color: #FFFFFF !important;
  background-color: #232323 !important;
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
              <form action="1montheval-formscript.php" method="post" name="input" id="myform" onsubmit="return validate_form(this)" enctype="multipart/form-data">
                <div class="row2">
                      <h3><strong>Local New York City Fellowship 1 Month Evaluation</strong></h3> 
                </div>
                <div class="row2">
                    <label for="fname">
                    A month flies by! We look forward to reading about your month after the Fellowship.
                     
                    </label><br>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">My name:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="name" value="<?=(isset($_REQUEST["name"])? $_REQUEST["name"]:"")?>" id="name" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="fname">Fellowship Dates:</label><br>
                  </div>
                  <div class="col-75">
                    <input type="text" name="dates" value="<?=(isset($_REQUEST["dates"])? $_REQUEST["dates"]:"")?>" id="dates" >
                  </div>
                </div>
                <div class="row2">
                  <div class="col-100">
                    <label for="fname">Was your experience of apexart's Fellowship different than what you expected?</label><br>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="different" value="<?=(isset($_REQUEST["different"])? $_REQUEST["different"]:"")?>" id="different" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">How engaged did you feel in our program?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <input type="radio" name="engaged" value="1" id="engaged" checked="checked"><label for="engaged">1 (not engaged at all)</label>
                    <input type="radio" name="engaged" value="2" id="engaged"><label for="engaged">2</label>
                    <input type="radio" name="engaged" value="3" id="engaged"><label for="engaged">3</label>
                    <input type="radio" name="engaged" value="4" id="engaged"><label for="engaged">4</label>
                    <input type="radio" name="engaged" value="5" id="engaged"><label for="engaged">5 (very engaged)</label>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">How rigorous was the program for you?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <input type="radio" name="rigorous" value="1" id="rigorous" checked="checked"><label for="rigorous">1 (not very rigorous)</label>
                    <input type="radio" name="rigorous" value="2" id="rigorous"><label for="rigorous">2</label>
                    <input type="radio" name="rigorous" value="3" id="rigorous"><label for="rigorous">3</label>
                    <input type="radio" name="rigorous" value="4" id="rigorous"><label for="rigorous">4</label>
                    <input type="radio" name="rigorous" value="5" id="rigorous"><label for="rigorous">5 (too rigorous)</label>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">How disconnected did you feel from your “other life”.</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <input type="radio" name="disconnected" value="1" id="disconnected" checked="checked"><label for="disconnected">1 (not very)</label>
                    <input type="radio" name="disconnected" value="2" id="disconnected"><label for="disconnected">2</label>
                    <input type="radio" name="disconnected" value="3" id="disconnected"><label for="disconnected">3</label>
                    <input type="radio" name="disconnected" value="4" id="disconnected"><label for="disconnected">4</label>
                    <input type="radio" name="disconnected" value="5" id="disconnected"><label for="disconnected">5 (completely)</label>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Now that you have had a month to process, absorb, and reflect on the Fellowship experience, how would you describe the personal impact of the Fellowship?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="reflect" value="<?=(isset($_REQUEST["reflect"])? $_REQUEST["reflect"]:"")?>" id="reflect" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Did you learn anything in particular about yourself this month?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="learn" value="<?=(isset($_REQUEST["learn"])? $_REQUEST["learn"]:"")?>" id="learn" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Has your relationship to the city changed in any way?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="relationship" value="<?=(isset($_REQUEST["relationship"])? $_REQUEST["relationship"]:"")?>" id="relationship" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Did the time away from your work affect how you relate to and approach your creative process afterwards? If so, how?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="away" value="<?=(isset($_REQUEST["away"])? $_REQUEST["away"]:"")?>" id="away" rows="3"></textarea>
                </div>
               </div>
               
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Remembering back to specific activities, what event(s) did you find the most challenging?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="challenging" value="<?=(isset($_REQUEST["challenging"])? $_REQUEST["challenging"]:"")?>" id="challenging" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">The most fun?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="fun" value="<?=(isset($_REQUEST["fun"])? $_REQUEST["fun"]:"")?>" id="fun" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Did you feel an absence of pressure to create work restful or stressful? Energizing or taxing?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="absence" value="<?=(isset($_REQUEST["absence"])? $_REQUEST["absence"]:"")?>" id="absence" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">How has it been to return to your studio this month?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="return" value="<?=(isset($_REQUEST["return"])? $_REQUEST["return"]:"")?>" id="return" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Did the journal help you reflect on your daily experience? Have you continued writing on your own since? </label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="journal" value="<?=(isset($_REQUEST["journal"])? $_REQUEST["journal"]:"")?>" id="journal" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">Can you share an example of any challenges you faced in planning or preparing for the apexart Fellowship, either logistically, emotionally or professionally?</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="example" value="<?=(isset($_REQUEST["example"])? $_REQUEST["example"]:"")?>" id="example" rows="3"></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname">We welcome your thoughts, ideas or criticisms about the program and encourage you to tell us more.</label>
                  </div>
                </div>
                <div class="row2">     
                <div class="col-100">
                    <textarea name="comments" value="<?=(isset($_REQUEST["comments"])? $_REQUEST["comments"]:"")?>" id="comments" rows="3"></textarea>
                </div>
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