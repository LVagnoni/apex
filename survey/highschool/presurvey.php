<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart :: High School Students Pre-Session Survey</title>
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
  color: #FFFFFF !important;
  background-color: #232323 !important;
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

label.check {
  padding: 0 !important;
}

input[type=text].other {
  width: auto !important;
  max-height: 10px !important;
}
</style>

</head>

<body>


    <!-- Main wrapper start -->
    <div class="wrapper">
       <? require ('../../header-test.php'); ?>
        <div class="fixed-header-space"></div>
        <!-- End header area -->
        <!-- Slider area -->
        <div class="hidden-sm hidden-xs">
        <div class="xboot-slider-area">
            <div class="xboot-slider-active">
                <div class="xboot-single-slider slide-one">
                    <div class="xboot-slider-content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-9">
                                    <!-- <div class="xboot-slider-content">
                                        <h2>I am a Designer</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minus, molestias minima voluptates voluptas ad quae sunt consequuntur amet itaque</p>
                                        <a href="#" class="button">Contact Me <i class="ti-arrow-right"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <!-- End of slider area -->
        <!-- Main content area start -->
        <div class="content">
           <br>
          
<!-- Service section start -->
            <div class="container2">
              <div class="container">
                <div class="xboot-tab-area cleafix">
              <form action="pre-survey_formscript4.php" method="post" name="input" id="myform" onsubmit="return validate_form(this)" enctype="multipart/form-data">
                <div class="row2">
                      <h3><strong>HIGH SCHOOL PROGRAM - SURVEY</strong></h3> 
                </div>
                <!--<div class="row2">
                    <label for="fname">
                      Goals:<br>
                      - Encouraging students to consider their preconceptions and expectations of art.<br>
- How to apply it to the art that they see and the art that they make, and how to deliver and express their own ideas. <br>
- Considering what ideas/topics you can use art to address? <br>
- Can art allow you to communicate ideas, or be more honest about feelings sometimes? <br>
- Students will leave these sessions with important questions to return to and reference.
<br><br>
                      apexart is an alternative arts organization in lower Manhattan. We are “alternative” from typical art galleries because we are non-commercial (we don’t sell art) and non-promotional (we care more about ideas than artist branding or careers), and because our programs are idea-driven. Our exhibitions are chosen by more than 800 jurors from more than 70 countries, and most of our exhibitions are about social and political issues. Having an international jury is important because exhibition ideas from other cultures need to be evaluated by some people from those cultures in order to be fair.<br><br>
                      Art is not only about pretty things on your wall. Artists address every aspect of life, and life can address creativity. You can apply this creativity to every aspect of your life, and use it to make things more interesting and compelling. Exhibitions aren’t always about finding answers, often they are about asking questions or raising unresolved issues.

                                        
 
</label><br>
                </div>-->
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
                    <label for="fname" class="check">School/Program:</label><br>
                  </div>
                  <div class="col-75">
                  <input type="text" name="school" value="<?=(isset($_REQUEST["school"])? $_REQUEST["school"]:"")?>" id="school" >
                

                </div>
                  </div>
                
                
                
        
                
               
                <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check"><br><br>Select 3 questions to answer.</label>
                  </div>
                </div>

               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check"><br>What is your earliest memory of making art?</label>
                  </div>
                </div>
                <div class="row2">     
                  <div class="col-100">
                  <textarea rows="3" name="role" value="<?=(isset($_REQUEST["role"])? $_REQUEST["role"]:"")?>" id="role" ></textarea>
                </div>    
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">What is a piece of art or an object that you grew up with that means a lot to you?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="traits" value="<?=(isset($_REQUEST["traits"])? $_REQUEST["traits"]:"")?>" id="traits" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">What is the difference between art and creativity?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="now" value="<?=(isset($_REQUEST["now"])? $_REQUEST["now"]:"")?>" id="now" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">Have you been to a museum? What was your reaction?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="recent" value="<?=(isset($_REQUEST["recent"])? $_REQUEST["recent"]:"")?>" id="recent" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">Are there specific qualities that you think a successful artist must have?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="look" value="<?=(isset($_REQUEST["look"])? $_REQUEST["look"]:"")?>" id="look" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">Do you remember an activity that you did when you were really young that you enjoyed and that you haven't done in years? Describe it.</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="feel" value="<?=(isset($_REQUEST["feel"])? $_REQUEST["feel"]:"")?>" id="feel" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">What materials do you like to use when being creative?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="success" value="<?=(isset($_REQUEST["success"])? $_REQUEST["success"]:"")?>" id="success" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">Is there a general theme or idea that you address most often when you create?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="important" value="<?=(isset($_REQUEST["important"])? $_REQUEST["important"]:"")?>" id="important" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">What is the purpose of art?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="after" value="<?=(isset($_REQUEST["after"])? $_REQUEST["after"]:"")?>" id="after" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">Is social media like Tik tok or Instagram a form of art?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="rank" value="<?=(isset($_REQUEST["rank"])? $_REQUEST["rank"]:"")?>" id="rank" ></textarea>
                </div>
               </div>
               <div class="row2">
                  <div class="col-100">
                    <label for="fname" class="check">How important is it to get feedback on your creative efforts, or do you not need to show people?</label>
                  </div>
                </div>
               <div class="row2">     
                <div class="col-100">
                    <textarea rows="3" name="part" value="<?=(isset($_REQUEST["part"])? $_REQUEST["part"]:"")?>" id="part" ></textarea>
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