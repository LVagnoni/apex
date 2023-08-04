<?php
	include("../../headerb.php");
	include ('connect.php');
	?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="favicon.ico" type="image/ico" />
<script src="js/jquery-1.4.2.min.js"></script>

<head>
<title>apexart :: Franchise Program 2015-16 : Submission Page</title>
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
	require_once('../recaptchalib.php');
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
				
			
					
			 	$query = sprintf("INSERT INTO proposal (rec_name, rec_email, nom_name, nom_email, recommend, relation, focus, traits, comments, over30, educa, nyc, opps, created_on) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW())",	
				 	
				    
				    mysql_real_escape_string($_POST['rec_name']),
				    mysql_real_escape_string($_POST['rec_email']),
				    mysql_real_escape_string($_POST['nom_name']),
				    mysql_real_escape_string($_POST['recommend']),
				    mysql_real_escape_string($_POST['relation']),
				    mysql_real_escape_string($_POST['focus']),
				    mysql_real_escape_string($_POST['traits']),
				    mysql_real_escape_string($_POST['comments']),
					mysql_real_escape_string($_POST['over30']),
				    mysql_real_escape_string($_POST['educa']),
				    mysql_real_escape_string($_POST['nyc']),
				    mysql_real_escape_string($_POST['opps']),
				    mysql_real_escape_string($_POST['created_on']));
				    //echo $query;
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
					$headers = 'From: '.$from. "\r\n" .
					    'Reply-To: '.$from. "\r\n";
					$headers .= 'Bcc: info@apexart.org' . "\r\n";
					// To send HTML mail, the Content-type header must be set
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					
					$headers .= 'X-Mailer: PHP/' . phpversion();
					$subject = "apexart Fellowship Recommendation";
					
					
								$body = "Thank you for recommendation to apexart's Fellowship Program! We will be in touch with you regarding next steps. Below is a copy of your recommendation.";
					
					
					$message = '
					<html>
					<head>
					  <title>apexart Fellowship Recommendation</title>
					</head>
					<body>'.
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

Focus: 
{$_POST['relation']}

Traits: 
{$_POST['relation']}

Comments: 
{$_POST['comments']}

My nominee is over 30 years old: 	{$_POST['over30']}
I understand that the purpose of apexart's Fellowship is educational and is non-promotional:  {$_POST['educa']}
My nominee has never visited New York City:  {$_POST['NYC']}
Not other opportunities: 	{$_POST['opps']}
					<br/><br/>
					</body>
					</html>
					";
					
					
					if (mail($to, $subject, $message,$headers)) {
					  ;;
					  //mail("info@apexart.org", "BCC: ".$subject, $body,$headers);
					 } else {
					  echo("<p>Receommendation saved to database, but your email didnt work. Make sure you send us your email so we can contact you.</p>");
					 }
					 echo error_get_last();
					
					//header('Location: '.$_SERVER['PHP_SELF'].'?justregistered=1' ) ;
					
					$resultw="<font color=white size=4>Thank you for recommendation to apexart's Fellowship Program!</font>";
					echo "<center><br><br><br><font color=white size=4>$resultw<br><a href='https://apexart.org'>Return to apexart website.</a></font><br>";
					die();
			}
			
			
			
			
			}
		
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




<!--onSubmit="return validate_form(this)"-->


<form name="input" id="myform" action="<?=$_SERVER['PHP_SELF']?>" method="post" onSubmit="return validate_form(this)" enctype="multipart/form-data" >

<table width="1047" border="0" align="center" style="margin-top:17px;">
  
  
  <tr valign="top">
    <td width="68" align="center" valign="top"><a href="https://apexart.org" class="standardText" bgcolor="#181818"><img src="http://apex-art.org/images/hexlogo.jpg" alt="" width="60" height="226" border="0" /></a></td>
    <td width="947" colspan="3" align="center" valign="top"><table width="941" border="0" bgcolor="#FFFFFF">
      <tr valign="top">
        <td style="border: 1px solid #e0e0e0; padding: 15px;"><table width="918">
          <tr>
            <td width="902" height="35" align="left" valign="top">
            <span class="exhibitionProgram">apexart International Fellowship Recommendation Form</span></td>
          </tr>
          <tr>
            <td align="left" valign="top"></td>
          </tr>
          <tr>
            <td align="left" valign="top"><span class="standardText"><a href="https://apexart.org/franchise.php">Find more information on the Franchise Program, funding details, and full submission guidelines here</a>. <br />
              <br />
              The only instruction given to jurors is to evaluate exhibitions based on their sense of what would be a compelling idea or concept to see as an exhibition. Submitters should use the 500 words in the way they feel will best communicate their idea. There is no right way or wrong way. Past successful proposals may be <a href="https://apexart.org/franchise/past-proposals.php"><strong>viewed here</strong></a>. </span></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table  width="904"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="6" valign="bottom">&nbsp;</td>
                </tr>
              <tr>
                <td height="41" colspan="4" valign="top" class="standardTextLg"><strong><font color="#FF0000">Enter Your Submission Here</font></strong></td>
                </tr>
              <tr>
                <td width="184" valign="top"  class="standardTextLg">My name:</td>
                <td height="22" colspan="3" valign="top"  class="standardTextLg"><input required style="width: 300px;" type="text" name="rec_name" value="<?=(isset($_REQUEST["rec_name"])? $_REQUEST["rec_name"]:"")?>" /></td>
                </tr>
              <tr>
                <td width="184" valign="top"  class="standardTextLg">My email:</td>
                <td height="22" colspan="3" valign="top"  class="standardTextLg"><input required style="width: 300px;" type="text" name="rec_email" value="<?=(isset($_REQUEST["rec_email"])? $_REQUEST["rec_email"]:"")?>" /></td>
                </tr>
              <tr>
                <td width="184" valign="top"  class="standardTextLg">&nbsp;</td>
                <td height="22" colspan="3" valign="top"  class="standardTextLg">&nbsp;</td>
                </tr>
              <tr>
                <td width="184" valign="top"  class="standardTextLg">Nominee name:</td>
                <td height="23" colspan="3" valign="top"  class="standardTextLg"><input required style="width: 300px;" type="text" name="nom_name" value="<?=(isset($_REQUEST["nom_name"])? $_REQUEST["nom_name"]:"")?>" /></td>
                </tr>
              <tr>
                <td width="184" valign="top"  class="standardTextLg">Nominee email</td>
                <td height="23" colspan="3" valign="top"  class="standardTextLg"><input required style="width: 300px;" type="text" name="nom_email" value="<?=(isset($_REQUEST["nom_email"])? $_REQUEST["nom_email"]:"")?>" /></td>
                </tr>
              <tr>
                <td width="184" valign="top"  class="standardTextLg">&nbsp;</td>
                <td height="23" colspan="3" valign="top"  class="standardTextLg">&nbsp;</td>
                </tr>
              <tr>
                <td height="29" colspan="4"><hr width="500" /></td>
                </tr>
              <tr>
                <td valign="top"  class="standardText">1. How do you know your nominee? (100 words max)</td>
                <td height="21" colspan="3" valign="top"  class="standardText"><span class="standardTextLg">
                  <textarea name="recommend" cols="100" rows="15" onKeyDown="wordCounter(this.form.recommend,this.form.remLen,250);" onKeyUp="wordCounter(this.form.recommend,this.form.remLen,250);"><?=(isset($_REQUEST["recommend"])? $_REQUEST["recommend"]:"")?>
                  </textarea>
                </span></td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">&nbsp;</td>
                <td height="21" colspan="3" valign="top"  class="standardText">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">2. How long have you known him or her? </td>
                <td height="21" colspan="3" valign="top"  class="standardText"><span class="standardTextLg">
                  <textarea name="relation" cols="100" rows="15" onKeyDown="wordCounter(this.form.relation,this.form.remLen,500);" onKeyUp="wordCounter(this.form.relation,this.form.remLen,500);"><?=(isset($_REQUEST["relation"])? $_REQUEST["relation"]:"")?>
                  </textarea>
                </span></td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">&nbsp;</td>
                <td height="21" colspan="3" valign="top"  class="standardText">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">3. apexart’s Fellowship focuses on education and exploration. Why would your nominee benefit from this unique program?  (250 words max)</td>
                <td height="21" colspan="3" valign="top"  class="standardText"><span class="standardTextLg">
                  <textarea name="focus" cols="100" rows="15" onKeyDown="wordCounter(this.form.focus,this.form.remLen,250);" onKeyUp="wordCounter(this.form.focus,this.form.remLen,250);"><?=(isset($_REQUEST["focus"])? $_REQUEST["focus"]:"")?>
                  </textarea>
                </span></td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">&nbsp;</td>
                <td height="21" colspan="3" valign="top"  class="standardText">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">4. Does s/he possess any characteristics or traits that especially qualify him/her for the program? (250 words max)</td>
                <td height="21" colspan="3" valign="top"  class="standardText"><span class="standardTextLg">
                  <textarea name="traits" cols="100" rows="15" onKeyDown="wordCounter(this.form.traits,this.form.remLen,250);" onKeyUp="wordCounter(this.form.traits,this.form.remLen,250);"><?=(isset($_REQUEST["traits"])? $_REQUEST["traits"]:"")?>
                  </textarea>
                </span></td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">&nbsp;</td>
                <td height="21" colspan="3" valign="top"  class="standardText">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top"  class="standardText">  <br />
                  <br />
                  <br />
                  <br />
                  5. Additional Comments (250 words max)<span class="standardTextSm"><br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    Words remaining:
                    <input type="box" readonly name="remLen" size="5" value="250" class="standardTextSm" />
                    </span></td>
                <td height="250" colspan="3" valign="top"  class="standardTextLg"><textarea name="comments" cols="100" rows="15" onKeyDown="wordCounter(this.form.comments,this.form.remLen,250);" onKeyUp="wordCounter(this.form.comments,this.form.remLen,250);"><?=(isset($_REQUEST["comments"])? $_REQUEST["comments"]:"")?>
                  </textarea></td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"  class="standardTextLg">&nbsp;</td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">
                <input type="checkbox" name="over30" value="yes" />
My nominee is 30 years old or older </span></td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">
                <input type="checkbox" name="educa" value="yes" />
I understand that the purpose of apexart's Fellowship is educational and is non-promotional. </span></td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">
                  <input type="checkbox" name="nyc" value="yes" />
                  <span class="standardTextLg">My nominee has never visited New York City.</span></span></td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">
                  <input type="checkbox" name="opps" value="yes" />
                  S/he has not had many similar opportunities in the past. (ie, residencies, solo shows)</span></td>
                </tr>
              <tr>
                <td height="59" colspan="4" valign="top"  class="standardTextLg"><span class="standardText">
                  <?php
		 	require_once('../recaptchalib.php');
			$publickey = "6LcQwboSAAAAAPjSuPNRvLvFcEQnWB-dLWGcHSYz";
			$privatekey = "6LcQwboSAAAAAF_PPiLAGgK9b9I2GbB7ptxU5VPH";
			
			# the response from reCAPTCHA
			$resp = null;
			# the error code from reCAPTCHA, if any
			$error = null;
			echo recaptcha_get_html($publickey, $error);
		 		
			?>
                  <input type="submit" value="SUBMIT" name="mainform" />
                </span></td>
                </tr>
              <tr>
                <td height="27" colspan="6" valign="top">&nbsp;</td>
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
    
    <?php
include('../footerb.php');

?>
</body>
</html>