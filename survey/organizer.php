<?php
	include ('organizer/connect.php');
	include("../headerc.php");
		//error_reporting(E_ALL);
		
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Exhibition Organizer Questionnaire</TITLE>

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

<form action="organizer/orgpass.php" method="post" >



<table width="1047" border="0" align="center" style="margin-top:15px;">
  
  
  <tr valign="top">
    
    <td colspan="3" align="center" valign="top"><table width="947" border="0" bgcolor="#FFFFFF">
      <tr>
        <td width="931" valign="top" style="border: 1px solid #e0e0e0; padding: 15px;">
        <span class="exhibitionProgram"><strong>apexart</strong> Exhibition Organizer Questionnaire</span>
        <br><br>
        
          <table class="standardText">
            <tr>
              <td height="22" colspan="2" align="left" valign="top">Please complete the form fields and press the Submit button. </td>
            </tr>
            <tr>
              <td width="149" height="22" align="left" valign="top">Full name: </td>
              <td width="662" align="left" valign="top"><input style="width: 400px;" type="text" name="name"></td>
            </tr>
 			<tr>
              <td width="149" height="22" align="left" valign="top">Email address: </td>
              <td width="662" align="left" valign="top"><input style="width: 400px;" type="text" name="email"></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                Were the apexart guidelines and deadlines clear to you? Any specific issues?
              <br>
                <textarea rows="6" cols="120" name="guidelines"></textarea></td>
            </tr>
            
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                How could the staff be more helpful in explaining apexart guidelines, or answering questions throughout the process?
<br>
                <textarea rows="6" cols="120" name="questions"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                Was feedback from the staff helpful in thinking about and developing your exhibition?<br>
                <textarea rows="6" cols="120" name="feedback"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                List up to three unexpected challenges that you had to address. How did you deal with these issues? What worked, and what didn’t work?
<br>
                <textarea rows="6" cols="120" name="supportive"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                In your opinion, what was most successful about the exhibition?<br>
                <textarea rows="6" cols="120" name="helpful"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                What was the least successful? <br>
                <textarea rows="6" cols="120" name="sense"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                Was there a critical issue that arose after your proposal was selected?<br>
                <textarea rows="6" cols="120" name="better"></textarea></td>
                </tr>
<tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                <br />Is there anything you would do differently next time (an artist selection, venue [for International Exhibitions], <br /> shipping method, installation decision, or anything else)?<br>
                <textarea rows="6" cols="120" name="changes"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                What was the most challenging part of putting together the exhibition?<br>
                <textarea rows="6" cols="120" name="challenges"></textarea></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                What could we do next time to be more effective, at any stage? <br>
                <textarea rows="6" cols="120" name="success"></textarea></td>
            </tr>
            <tr>
            <td height="30" colspan="2" align="left" valign="top"><br>
            If you organized an International Exhibition, what was the total exhibition attendance and what was the attendance for event(s)?<br>
             <textarea rows="6" cols="120" name="attendance"></textarea></td>
            </tr>
            <tr>
            <td height="30" colspan="2" align="left" valign="top"><br>
            What advice would you have for other curators/organizers?<br>
             <textarea rows="6" cols="120" name="advice"></textarea></td>
            </tr>
	
           <tr>
              <td height="30" colspan="2" align="left" valign="top"><br>
                Any other comments or suggestions? We like constructive criticism. Really.<br>
                <textarea rows="6" cols="120" name="other"></textarea></td>
            </tr>
            <tr><td height="30" colspan="2" align="left" valign="top"><br>
            <input type="submit" value="SUBMIT"><br><br>
Thank you for your valuable feedback.

</form></td></td>
          </table>
          </td>
        </tr>
    </TABLE>
   

</body>
</html>
    
    <?php
	
include('../footerb2.php');

?>