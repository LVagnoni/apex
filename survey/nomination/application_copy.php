<?php
  include("../../headerb.php");
  include ('connect.php');
?>


<html>
<head>

<title>apexart :: New York City Fellowship Recommendation Form</title>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://apexart.org/js/submit_disable.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="../../favicon.ico" type="image/ico" />

<style>
input {
    word-break: break-word;
}
</style>

</head>
<body>
  
          
        
  
    
    
<form action="formscript.php" method="post" >


<table width="1047" border="0" align="center" style="margin-top:17px;">
  
  
  <tr valign="top">
    <td width="68" align="center" valign="top"><a href="https://apexart.org" class="standardText" bgcolor="#181818"><img src="http://apex-art.org/images/hexlogo.jpg" alt="" width="60" height="226" border="0" /></a></td>
    <td width="947" colspan="3" align="center" valign="top"><table width="941" border="0" bgcolor="#FFFFFF">
      <tr valign="top">
        <td style="border: 1px solid #e0e0e0; padding: 15px;">
        <span class="exhibitionProgram"><strong>apexart Fellowship Nomination Form</strong></span>
        <br /><table class="standardText">
          <tr>
            <td height="33" colspan="2" align="left" valign="top">Thank you for your interest in submitting a nomination for the apexart Fellowship. The apexart Fellowship is unusual. It is not a residency program, and Fellows do not receive a studio or an exhibition as part of the opportunity. It is a rigorous month-long program of diverse activities that requires a clear understanding and commitment to participate on the part of the Fellow. Additionally, Fellows must agree not to produce work or engage in career promotion during the Fellowship. Nominees must be over 21 years old and the ideal candidate tends to be over 30. 
            <br><br>
            Your first-hand knowledge of the nominee is very important to us. The more complete your answers, the better the chances of your nominee succeeding. 
            <br><br>
            Please complete the form fields and press the Submit button.
            </td>
          </tr>
          <tr>
            <td height="22" align="left" valign="top">My name: </td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" id="rec_name" name="rec_name" /></td>
          </tr>
          <tr>
            <td height="22" align="left" valign="top">My email:</td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" name="rec_email" /></td>
          </tr>
          <tr>
            <td height="22" align="left" valign="top">Nominee name: </td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" name="nom_name" /></td>
          </tr>
          <tr>
            <td height="32" align="left" valign="top">Nominee email: </td>
            <td align="left" valign="top"><input style="width: 450px;" type="text" name="nom_email" /></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top">1. How do you know this person? (Colleague, friend, etc.)<br>
              <textarea rows="10" cols="100" name="relation"></textarea></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top">2. How long have you known them?<br>
              <textarea rows="10" cols="100" name="rellength"></textarea></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top">3. It is important that recommendations be rooted in an individual’s openness to exploration and new ideas. Why do you think this candidate is a good fit for the apexart Fellowship model, which is based on trying many new non-art activities and exploring unfamiliar experiences? (100-200 words)<br>
              <textarea rows="10" cols="100" name="recommend"></textarea></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top">4. apexart’s Fellowship aims to reach creative individuals who are at a stage in their career where they are re-evaluating and reconsidering their work and purpose, and have not had similar opportunities (residencies, international travel) recently. Please describe how this applies to your candidate. (50-100 words)<br>
              <textarea rows="10" cols="100" name="applies"></textarea></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top">5. What do you hope might be the results of participating in the program for your nominee? (100-200 words)<br>
              <textarea rows="10" cols="100" name="results"></textarea></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="top">6. Is there any additional information about the candidate that would help us in our selection?<br>
              <textarea rows="10" cols="100" name="comments"></textarea></td>
          </tr>
          <tr>
            <td height="30" colspan="2" align="left" valign="top"><br />
              My nominee has never visited New York City.<br />
              <input type="checkbox" name="nyc" value="YES" />
              YES</td>
          </tr>
        </table>
        <span class="standardText">
         <input type="submit" id="submit" value="Submit">         
          </form><br><br>Thank you for your valuable recommendation to apexart's Fellowship Program. Please note that more candidates are considered than apexart can accommodate. We will contact you with further details regarding your nominee’s application status.
          <br><br>
          If you have further questions in regard to the program and/or its expectations please feel free to contact us at info@apexart.org.

        </span>
        </td>
    </TABLE></td>
  </tr>
    </table>

    
    
</body>
</html>
