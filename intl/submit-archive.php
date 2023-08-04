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
h3 {
  text-transform: none;
}

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

input[type='checkbox'] {
    width:15px;
    height:15px;
    border-radius:5px;
    vertical-align: -3px;

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
        <? require ('../header-test.php'); ?>
        <!-- End header area -->
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

                  
    <!-- FORM GOES HERE -->
    
              <form action="passon2.php" method="post" name="input" id="myform" onsubmit="return validate_form(this)" enctype="multipart/form-data">
                <div class="row2">
                 
                    <h3>Below is a list of proposal requirements for submitting a proposal to the Open Call. Please check each box and make sure you adhere to them before filling the form in.

                      <br><br>
Make sure that your proposal:
</h3>
                </div>
                <div class="row2">
                    <input required type="checkbox" name="check[]" id="original" value="yes">&nbsp;is an original exhibition, presented for the first time.<br>
                    <input required type="checkbox" name="check[]" id="group" value="yes" >&nbsp;is a group exhibition, consisting of works by at least 3 people working independently of one another and on view at all times for the exhibition's duration of 6-8 weeks.<br>
                    <input required type="checkbox" name="check[]" id="group" value="yes" >&nbsp;is in English (note: Jurors are instructed that many submitters are ESL and should not be penalized for sentence structure or terms).<br>
                    <input required type="checkbox" name="check[]" id="nobio" value="yes" />&nbsp;does not include biographical statements, CVs, or links. If your proposal contains biographical references that could potentially identify you, we will remove the biographical references.<br>
                    <input required type="checkbox" name="check[]" id="nodates" value="yes" >&nbsp;does not include specific dates for the exhibition.<br>
                    <input required type="checkbox" name="check[]" id="nonyc" value="yes" />&nbsp;is for an exhibition that is not in NYC. I have previously traveled to the location in which I am proposing this exhibition and have some sense of how to navigate the culture and getting a small exhibition produced.<br>
                    <input  required type="checkbox" name="check[]" id="artproj" value="yes" >&nbsp;<strong>is not</strong> an "artist project" wherein multiple artists work together to create a unified project, whether by instruction or detailed parameters, <a href="https://en.wikipedia.org/wiki/Exquisite_corpse" target="_blank">exquisite corpse</a>, or delegation of specific tasks (as in a unified installation or film production).<br>          
                    <input required  type="checkbox" name="check[]" id="noopencall" value="yes" >&nbsp;does not include an open call for artists.<br>
                    <input required  type="checkbox" name="check[]" id="nosales" value="yes" >&nbsp;does not include any sales-related activities.<br><br>
                    <input required  type="checkbox" name="check[]" id="onlyone" value="yes" >&nbsp;I am not submitting more than 1 proposal.<br>
                    <input required  type="checkbox" name="check[]" id="faqs" value="yes" >&nbsp;I read the <a href="https://apexart.org/opencallsfaqs.html" target="_blank"> <strong>FAQs</strong></a> before submitting.<br><br>
                     <!--<h4><strong>This form will be live on October 1, 2020.</strong></h4> -->
                    <!--<div class="page-name"><a href="https://apexart.org/images/floorplan.pdf" target="_blank">See gallery floorplan here.</a></div><br>-->
                   
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
                    <label for="country"> Submitter's Country:</label>
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
                    <label for="lname">Exhibition Artists:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="artist_names" value="<?=(isset($_REQUEST["artist_names"])? $_REQUEST["artist_names"]:"")?>" placeholder="The names of at least 3 artists that you are considering, so we know you understand the process and that your proposal is for a group show">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Exhibition City:</label>
                  </div>
                  <div class="col-75">
                    <input required type="text" name="franchise_city" value="<?=(isset($_REQUEST["franchise_city"])? $_REQUEST["franchise_city"]:"")?>" placeholder="The city where the exhibition is to be held. No New York City">
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
                    <select required labelID="franchise_country" id="franchise_country" name="franchise_country" value="<?=(isset($_REQUEST["franchise_country"])? $_REQUEST["franchise_country"]:"")?>">
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
                    <label for="lname">Exhibition Title:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" name="title" value="<?=(isset($_REQUEST["title"])? $_REQUEST["title"]:"")?>" placeholder="The title of the exhibition">
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="subject">Proposal: (500 words or less)</label>
                  
                  Words remaining:
                          <input type=box readonly name=remLen size=5 value=500 class="standardTextSm"></div>
                  <div class="col-75">
                    <textarea name="content" required cols="110" rows="29" onkeydown="wordCounter(this.form.content,this.form.remLen,500);" onkeyup="wordCounter(this.form.content,this.form.remLen,500);"><?=(isset($_REQUEST["content"])? $_REQUEST["content"]:"")?></textarea>
                  </div>
                </div>
                <div class="row2">
                  <div class="col-25">
                    <label for="lname">Where did you hear about this Open Call?</label>
                  </div>
                  <div class="col-75">
                    <select required labelID="" name="hear" value="<?=(isset($_REQUEST["hear"])? $_REQUEST["hear"]:"")?>">
                              <option value="">Please select</option>
                              <option value="apexart">apexart</option>
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
                <div class="row2"><br>
                    <div class="col-75"><input type="checkbox" name="mlist" value="yes">
                    
                            &nbsp;Opt-out: We will subscribe you to our newsletter to receive info about our exhibitions and opportunities unless you opt-out.
                    </div>
                </div>
                <div class="row">
               
               <div class="push-right"><div class="g-recaptcha" data-sitekey="6LcBrWcUAAAAANJdK46GtQgy1gu_iVtr8yf1ntm9"></div><input type="submit" value="Submit" name="submit"></div></div>
                 
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
    

</body>

</html>