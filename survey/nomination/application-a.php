<?php
	include("../../header.php");
	include ('../fellowship/connect.php');
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Fellowship Recommendation Form</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

<body>
<form action="formscript.php" method="post" >
	<table width="840" align="center">
        <tr valign="top"> 
          <td width="6">&nbsp;</td>
          <td width="840" height="35" colspan="3">
              <span class="exhibitionProgram"><strong>apexart Fellowship Recommendation Form</strong></span>
		  </td>
        </tr>

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText"> 		          
           
            <table class="standardText">
                <tr>
                  <td height="33" colspan="2" align="left" valign="top">Please complete the form fields and press the Submit button. </td>
                </tr>
                <tr>
                  <td width="152" height="22" align="left" valign="top">Recommender name: </td>
                  <td width="554" align="left" valign="top"><input style="width: 450px;" type="text" name="rec_name"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Recommender email:</td>
                  <td align="left" valign="top"><input style="width: 450px;" type="text" name="rec_email"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Nominee name: </td>
                  <td align="left" valign="top"><input style="width: 450px;" type="text" name="nom_name"></td>
                </tr>
                <tr>
                  <td height="32" align="left" valign="top">Nominee email: </td>
                  <td align="left" valign="top"><input style="width: 450px;" type="text" name="nom_email"></td>
                </tr>
                <tr>
                  <td height="22" colspan="2" align="left" valign="top">Why do you think this person would benefit from an apexart Fellowship? 
(500 word limit) </td>
                </tr>
                <tr>
                  <td height="212" colspan="2" align="left" valign="top"><input style="width: 600px; height:200px;" type="text" name="recommend"></td>
                </tr>
                <tr>
                  <td height="22" colspan="2" align="left" valign="top">How do you know this person? 
(250 word limit)</td>
                </tr>
                <tr>
                  <td height="111" colspan="2" align="left" valign="top">
                  <input type="text" style="width: 600px; height:100px;" name="relation"></td>
                </tr>
                <tr>
                  <td height="22" colspan="2" align="left" valign="top">Additional Comments: (250 word limit) </td>
                </tr>
                <tr>
                  <td height="22" colspan="2" align="left" valign="top"><input style="width: 600px; height:100px;" type="text" name="comments"></td>
                </tr>
                
                <tr>
                  <td height="30" colspan="2" align="left" valign="top"><br>[] This nominee is over 30 years old 
<br>
                     <input type="checkbox" name="over30" value="YES"> YES</td>
                </tr>
                <tr> 
                  <td height="30" colspan="2" align="left" valign="top"><br>
[] I understand that the purpose of apexart's Fellowship is educational and is non-promotional.<br>
                     <input type="checkbox" name="educa" value="YES"> YES</td>
                </tr>
                
               

           
          </table>

<input type="submit" value="SUBMIT"><br><br>
Thank you for your valuable recommendation to apexart's Fellowship Program.<br><br>
More candidates are considered than apexart can accommodate. We will contact you with further details  regarding your application status. <br><br>
If you have further questions in regard to the program and/or its expectations please feel free to contact us at info@apexart.org, 212 431 5270, or via Skype at Lorissa.Rinehart.
</form>


</body>
</html>