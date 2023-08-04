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

 	//error_reporting(E_ALL);
	
	//session_start();
				
			$result = mysql_query($query, $conn); 
			
			{
					
			$query = sprintf("INSERT INTO recommendation (`rec_name`,`rec_email`,`nom_name`, `nom_email`,`recommend`, `relation`,`comments`,`created_on`,`over30`,`educa`,`nyc`) VALUES('%s','%s','%s','%s','%s','%s','%s',NOW(),'%s','%s','%s')",

		mysql_real_escape_string($_POST['rec_name']), 
		mysql_real_escape_string($_POST['rec_email']), 
		mysql_real_escape_string($_POST['nom_name']),
	    mysql_real_escape_string($_POST['nom_email']),
	    mysql_real_escape_string($_POST['recommend']),
	    mysql_real_escape_string($_POST['relation']),
	    mysql_real_escape_string($_POST['comments']),
		mysql_real_escape_string($_POST['created_on']),
	    mysql_real_escape_string($_POST['over30']),
	    mysql_real_escape_string($_POST['educa']),
	    mysql_real_escape_string($_POST['nyc']));
				
			$result = mysql_query($query, $conn); 
			$newUserID=mysql_insert_id();	
					
					if (!$result) {
					    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
					    $message .= 'Whole query: ' . $query;
					    die($message);
					}
					
		$to = $_POST['rec_email'];
		$to .= ", info@apexart.org";
		if (!isset($_POST['rec_email'])||empty($_POST['rec_email'])) $_POST['rec_email']="noemail@lentered.com";
		$from = "info@apexart.org";
					$headers = 'From: '.$from. "\r\n" .
					    'Reply-To: '.$from. "\r\n";
					$headers .= 'Bcc: info@apexart.org' . "\r\n";
					// To send HTML mail, the Content-type header must be set
					$headers .= 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					
					$headers .= 'X-Mailer: PHP/' . phpversion();
		$subject = 'apexart Fellowship Recommendation';
		
		$body = "Thank you for invaluable recommendation to apexart's Fellowship Program! We will be in touch with you regarding next steps. 
\n\napexart\n\n---------------------------\n\n";
					
					
					$message = '
					<html>
					<head>
					  <title>apexart Fellowship Recommendation</title>
					</head>
					<body>'.
					  nl2br($body)
					."
					Recommender name: {$_POST['rec_name']} <br>
					Recommender email: {$_POST['rec_email']} <br>
					Nominee name: {$_POST['nom_name']} <br>
					Nominee email: {$_POST['nom_email']}<br>
					
					 Recommendation: <br>
					".nl2br(($_POST['recommend']))."
					
					 Relationship: <br>
					".nl2br(($_POST['relation']))."
					
					 Comments: <br>
					".nl2br(($_POST['comments']))."
					<br><br>
					Where you heard: {$_POST['hear']}, {$_POST['hearinfo']}<br/>	
					Did you opt-out of mailing list? {$_POST['mlist']}<br/>					
					User ID: $newUserID<br/> <br/>
					Title: {$_POST['title']}<br/>
				   
					<br/><br/>
					</body>
					</html>
					";
					

	
					
					if (mail($to, $subject, $message,$headers)) {
					  ;;
					  //mail("info@apexart.org", "BCC: ".$subject, $body,$headers);
					 } else {
					  echo("<p>Submission saved to database, but your email didnt work. Make sure you send us your email so we can contact you.</p>");
					 }
					 echo error_get_last();
					
					
					$resultw="<font color=white size=4>Thank you for your recommendation!<br></font>";
					
					die();
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
        <td style="border: 1px solid #e0e0e0; padding: 15px;"><table width="918">
          <tr>
            <td width="902" height="35" align="left" valign="top">
            <span class="exhibitionProgram"><strong>apexart New York City Fellowship Recommendation Form</strong></span></td>
          </tr>
          <tr>
            <td align="left" valign="top"><span class="standardTextLg">Please complete the form fields and press the Submit button.</span></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table  width="904"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="6" valign="bottom">&nbsp;</td>
              </tr>
              <tr>
                <td width="184" align="left" valign="top" class="standardText">Recommender name: </td>
                <td colspan="5" valign="bottom"><input required style="width: 450px;" type="text" name="rec_name" value="<?=(isset($_REQUEST["rec_name"])? $_REQUEST["rec_name"]:"")?>" /></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="standardText">Recommender email:</td>
                <td colspan="5" valign="bottom"><input required style="width: 450px;" type="text" name="rec_email" value="<?=(isset($_REQUEST["rec_email"])? $_REQUEST["rec_email"]:"")?>" /></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="standardText">Nominee name: </td>
                <td colspan="5" valign="bottom"><input required style="width: 450px;" type="text" name="nom_name" value="<?=(isset($_REQUEST["nom_name"])? $_REQUEST["nom_name"]:"")?>" /></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="top" class="standardText">Nominee email: </td>
                <td colspan="5" valign="top"><input required style="width: 450px;" type="text" name="nom_email" value="<?=(isset($_REQUEST["nom_email"])? $_REQUEST["nom_email"]:"")?>" /></td>
              </tr>
              <tr>
                <td height="18" colspan="4" valign="top"  class="standardText">Why do you think this person would benefit from an apexart Fellowship? <span class="standardTextSm">(500 word limit)</span></td>
                </tr>
              <tr>
                <td valign="top"  class="standardText"><span class="standardTextSm"><br />
                    Words remaining:
  <input type="box" readonly name="remLen" size="5" value="500" class="standardTextSm" />
                  </span></td>
                <td height="237" colspan="3" valign="top"><textarea name="recommend" cols="80" rows="15" onKeyDown="wordCounter(this.form.recommend,this.form.remLen,500);" onKeyUp="wordCounter(this.form.recommend,this.form.remLen,500);"><?=(isset($_REQUEST["recommend"])? $_REQUEST["recommend"]:"")?>
                  </textarea></td>
                </tr>
              <tr>
                <td colspan="6" valign="bottom"><span   class="standardText">How do you know this person? (250 word limit)</span></td>
              </tr>
              <tr>
                <td valign="top"  class="standardText"><span class="standardTextSm"><br />
                  Words remaining:
                  <input type="box" readonly name="remLen" size="5" value="250" class="standardTextSm" />
                </span></td>
                <td height="239" colspan="3" valign="top"><textarea name="relation" cols="80" rows="15" onKeyDown="wordCounter(this.form.relation,this.form.remLen,250);" onKeyUp="wordCounter(this.form.relation,this.form.remLen,250);"><?=(isset($_REQUEST["relation"])? $_REQUEST["relation"]:"")?>
                  </textarea></td>
                </tr>
              <tr>
                <td colspan="6" valign="bottom" class="standardText">Additional Comments: (250 word limit)</td>
              </tr>
              <tr>
                <td valign="top"  class="standardText"><span class="standardTextSm"><br />
                  Words remaining:
                  <input type="box" readonly name="remLen" size="5" value="250" class="standardTextSm" />
                </span></td>
                <td height="238" colspan="3" valign="top"><textarea name="comments" cols="80" rows="15" onKeyDown="wordCounter(this.form.comments,this.form.remLen,250);" onKeyUp="wordCounter(this.form.comments,this.form.remLen,250);"><?=(isset($_REQUEST["comments"])? $_REQUEST["comments"]:"")?>
                  </textarea></td>
                </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">My nominee is over 30 years old <br />
              <input type="checkbox" name="over30" value="YES" />
              YES</span></td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">
                  I understand that the purpose of apexart's Fellowship is educational and is non-promotional.<br />
              <input type="checkbox" name="educa" value="YES" />
              YES </span></td>
              </tr>
              <tr>
                <td height="42" colspan="4" valign="top"><span class="standardTextSm">
                  My nominee has never visited New York City.<br />
              <input type="checkbox" name="nyc" value="YES" />
              YES</span></td>
              </tr>
              <tr>
                <td height="59" colspan="2" valign="top"  class="standardTextLg"><span class="standardText">
                  
                  <input type="submit" value="SUBMIT" name="mainform" />
                  </span></td>
                <td width="70" height="59" valign="top">&nbsp;</td>
                <td width="354" height="59" valign="top">&nbsp;</td>
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