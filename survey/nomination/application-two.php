<?php
	include("../../headerb.php");
	include ('connect.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="favicon.ico" type="image/ico" />
<script src="js/jquery-1.4.2.min.js"></script>

<head>
<title>apexart :: New York City Fellowship Recommendation Form</title>
</head>

<body>
    
    

<script src="js/jquery.js" type="text/javascript"></script>
<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
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


<?php
	 require_once('recaptchalib.php');
	$resultw="";

 	//error_reporting(E_ALL);
	
	//session_start();
	$target_path = "picuploads/";
	
	for ($j=1;$j<=4 ;$j++)
	{
		//if ($i==$j) continue;
		$a = 'image'.$j;
		$$a=$_REQUEST[$a];
	}
	//echo "<pre>";
	//var_dump($_FILES);//die();
	//echo "</pre>";
	
	
	for ($i=1;$i<=4;$i++)
		if (isset($_REQUEST["uploadedfile".$i."f"]))
						{
							//var_dump( $_FILES["uploadedfile{$i}"]);die();
							$rnd=rand();
							$target_path = $target_path .$rnd. basename( $_FILES['uploadedfile'.$i]['name']); 
							//echo $target_path;
							if(move_uploaded_file($_FILES['uploadedfile'.$i]['tmp_name'], $target_path)) {
							    //echo "The file ".  basename( $_FILES['uploadedfil1e']['name']).    " has been uploaded";
							} else{
							    die("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There was an error uploading the image. Please ensure file is under 200kb, hit the back button, and try again.");
							}
							$a = 'image'.$i;
							$$a=$target_path;//.$rnd.basename( $_FILES['uploadedfile1']['name']);
							
							 
							//echo $r["image"];
						}

	
	
	if (isset($_POST['mainform']))
	{
		
		$publickey = "6LcQwboSAAAAAPjSuPNRvLvFcEQnWB-dLWGcHSYz";
		$privatekey = "6LcQwboSAAAAAF_PPiLAGgK9b9I2GbB7ptxU5VPH";
		
		
		$image1=$_REQUEST["image1"];
		# the response from reCAPTCHA
		$resp = null;
		# the error code from reCAPTCHA, if any
		$error = null;
		$resp = recaptcha_check_answer ($privatekey,
	                                  $_SERVER["REMOTE_ADDR"],
	                                  $_POST["recaptcha_challenge_field"],
	                                  $_POST["recaptcha_response_field"]);
	
	  if (!$resp->is_valid)  {
	    # set the error code so that we can display it. You could also use
	    # die ("reCAPTCHA failed"), but using the error message is
	    # more user friendly
	    $error = $resp->error;
	    echo '<br><br><br><br><font color="red"><div align="center"><strong>Captcha letters were entered incorrectly. Please press back button and try again.</strong></div></font>';
		//die();
	    }
	    else
	    {
				
			$email=mysql_escape_string($_POST['email']);
			$query="SELECT * FROM proposal where email='".$email."';";
			$result = mysql_query($query, $conn); 
			
			$num_rows = mysql_num_rows($result);
			if ($num_rows<1) //no proposal with this email has been submitted before.
			{
	$query = sprintf("INSERT INTO recommendation (rec_name, rec_email, nom_name, nom_email, recommend, relation, comments, over30, educa, nyc, created_on) 
	VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW())",	

		mysql_real_escape_string($_POST['rec_name']), 
		mysql_real_escape_string($_POST['rec_email']), 
		mysql_real_escape_string($_POST['nom_name']),
	    mysql_real_escape_string($_POST['nom_email']),
	    mysql_real_escape_string($_POST['recommend']),
	    mysql_real_escape_string($_POST['relation']),
	    mysql_real_escape_string($_POST['comments']),
	    mysql_real_escape_string($_POST['over30']),
	    mysql_real_escape_string($_POST['educa']),
	    mysql_real_escape_string($_POST['nyc']),
		mysql_real_escape_string($_POST['created_on']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		$to = $_POST['rec_email'];
		$to .= ", info@apexart.org";
		if (!isset($_POST['rec_email'])||empty($_POST['rec_email'])) $_POST['rec_email']="noemail@lentered.com";
		$from = "info@apexart.org";
		$subject = 'apexart Fellowship Recommendation';
	    $message = 'apexart Fellowship Recommendation'.
					  nl2br($body)
					."

Recommender name: {$_POST['rec_name']} 
Recommender email: {$_POST['rec_email']} 
Nominee name: {$_POST['nom_name']} 
Nominee email: {$_POST['nom_email']}

Recommendation: 
{$_POST['recommend']}

Relationship: 
{$_POST['relation']}

Comments: 
{$_POST['comments']}

My nominee is over 30 years old: 	{$_POST['over30']}
I understand that the purpose of apexart's Fellowship is educational and is non-promotional:  {$_POST['educa']}
My nominee has never visited New York City:  {$_POST['NYC']}


Thank you for invaluable recommendation to apexart's Fellowship Program! We will be in touch with you regarding next steps. 
	
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message,$headers)) {
					  ;;

}  else {
					  echo("<p>Submission Saved to database, but your email didnt work. Make sure you send us your email so we can contact you.</p>");
					 }
					 echo error_get_last();
	
$resultw="Recommendation Submitted. <br>Thank you for your invaluable feedback.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='https://apexart.org'>Return to apexart website.</a><br>";
					die();
			
			

?>


					
		



<script type="text/javascript">
function validate_form(theForm)
{
var reason = "";

  //reason += validateEmpty(theForm.firstname,"First name");
  //reason += validateEmpty(theForm.lastname, "Last name");
  //reason += validateEmail(theForm.email);
  //if (theForm.sub.value.length>4200) reason += "No more than 400 words please.\n"
  
  xxx=theForm.content.value.split(" ");
  if (xxx.length>515) reason += "No more than 500 words please.\n";

  //reason += validateEmpty(theForm.phone,"Phone number");
  
  
        
  if (reason != "") {
    alert("Some fields need correction:\n" + reason);
    return false;
  }

  return true;
}







function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
} 




</script>
      <script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
	{
	var required=['rec_name','rec_email','nom_name','nom_email','recommend','relation','comments'];
	// Place in this array the name of the form that you think should be mandatory
	var bool=true; // Create bool variable and set its value to true
	for(var i=0;i<required.length;i++)
		{
		if(document.getElementsByName(required[i])[0].value=='')
			{
			alert(required[i]+' textbox is mandatory to fill in.');
			bool=false;
			}
		}
	return bool;
	}
}
</script>



<!--onSubmit="return validate_form(this)"-->


<form name="input" id="myform" action="<?=$_SERVER['PHP_SELF']?>" method="post" onSubmit="return validate_form(this)" enctype="multipart/form-data" >

<table width="1047" border="0" align="center" style="margin-top:17px;">
  
  
  <tr valign="top">
    <td width="68" align="center" valign="top"><a href="https://apexart.org" class="standardText" bgcolor="#181818"><img src="http://apex-art.org/images/hexlogo.jpg" alt="" width="60" height="226" border="0" /></a></td>
    <td width="947" colspan="3" align="center" valign="top"><table width="941" border="0" bgcolor="#FFFFFF">
      <tr valign="top">
        <td height="59" style="border: 1px solid #e0e0e0; padding: 15px;">
          <span class="exhibitionProgram"><strong>apexart New York City Fellowship Recommendation Form</strong></span>
          <br /><table class="standardText">
            <tr>
              <td height="33" colspan="2" align="left" valign="top">Please complete the form fields and press the Submit button. </td>
              </tr>
            <tr>
              <td width="161" height="22" align="left" valign="top">Recommender name: </td>
              <td width="732" align="left" valign="top"><input required style="width: 450px; height: 20px;" type="text" name="rec_name" value="<?=(isset($_REQUEST["rec_name"])? $_REQUEST["rec_name"]:"")?>" />
                </td>
              </tr>
            <tr>
              <td height="22" align="left" valign="top">Recommender email:</td>
              <td align="left" valign="top"><input required style="width: 450px; height: 20px;" type="text" name="rec_email" value="<?=(isset($_REQUEST["rec_email"])? $_REQUEST["rec_email"]:"")?>" /></td>
              </tr>
            <tr>
              <td height="22" align="left" valign="top">Nominee name: </td>
              <td align="left" valign="top"><input required style="width: 450px; height: 20px;" type="text" name="nom_name" value="<?=(isset($_REQUEST["nom_name"])? $_REQUEST["nom_name"]:"")?>" /></td>
              </tr>
            <tr>
              <td height="32" align="left" valign="top">Nominee email: </td>
              <td align="left" valign="top"><input required style="width: 450px; height: 20px;" type="text" name="nom_email" value="<?=(isset($_REQUEST["nom_email"])? $_REQUEST["nom_email"]:"")?>" /></td>
              </tr>
            <tr>
              <td height="22" colspan="2" align="left" valign="top">Why do you think this person would benefit from an apexart Fellowship? 
                500 word limit - words remaining:
                <input type="box" readonly name="remLen" size="5" value="500" class="standardTextSm" /></td>
              </tr>
            <tr>
              <td height="212" colspan="2" align="left" valign="top">
                <textarea name="recommend" cols="90" rows="15" onKeyDown="wordCounter(this.form.recommend,this.form.remLen,500);" onKeyUp="wordCounter(this.form.recommend,this.form.remLen,500);"><?=(isset($_REQUEST["recommend"])? $_REQUEST["recommend"]:"")?>      </textarea>
                
                </td>
              </tr>
            <tr>
              <td height="22" colspan="2" align="left" valign="top">How do you know this person? 
                250 word limit - words remaining:
                <input type="box" readonly name="remLen" size="5" value="250" class="standardTextSm" /></td>
              </tr>
            <tr>
              <td height="111" colspan="2" align="left" valign="top">
                <textarea name="relation" cols="90" rows="15" onKeyDown="wordCounter(this.form.relation,this.form.remLen,250);" onKeyUp="wordCounter(this.form.relation,this.form.remLen,250);"><?=(isset($_REQUEST["relation"])? $_REQUEST["relation"]:"")?>      </textarea>
                </td>
              </tr>
            <tr>
              <td height="22" colspan="2" align="left" valign="top">Additional Comments: 250 word limit - words remaining:
                <input type="box" readonly name="remLen" size="5" value="250" class="standardTextSm" /> </td>
              </tr>
            <tr>
              <td height="22" colspan="2" align="left" valign="top">
                <textarea name="comments" cols="90" rows="15" onKeyDown="wordCounter(this.form.comments,this.form.remLen,250);" onKeyUp="wordCounter(this.form.comments,this.form.remLen,250);"><?=(isset($_REQUEST["comments"])? $_REQUEST["comments"]:"")?>      </textarea></td>
              </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br />
                My nominee is over 30 years old <br />
                <input type="checkbox" name="over30" value="YES" />
                YES</td>
              </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br />
                I understand that the purpose of apexart's Fellowship is educational and is non-promotional.<br />
                <input type="checkbox" name="educa" value="YES" />
                YES</td>
              </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br />
                My nominee has never visited New York City.<br />
                <input type="checkbox" name="nyc" value="YES" />
                YES</td>
              </tr>
            </table>
          
          <input type="submit" value="SUBMIT" name="mainform" /><br><br>Thank you for your valuable recommendation to apexart's Fellowship Program.<br /><br />
          We will contact you if we require more information about your recommendation. If you have any questions regarding the program and/or its expectations please feel free to contact us at info@apexart.org, 212 431 5270, or via Skype at Lorissa.Rinehart.
          
          </span></td>
                </tr>
              <tr>
                <td height="27" colspan="4" valign="top">&nbsp;</td>
                </tr>
              </table></td>
  </tr>
        </table></td>
    </TABLE></td>
  </tr>
    </table>
    </td>
  </tr>
</table>
    
  
</body>
</html>