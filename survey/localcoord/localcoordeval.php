<?php
  include("../../header.php");
  include ('connect.php');
  ?>
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Local Coordinator Questionnaire</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  

<body>
<form action="formscript.php" method="post" >
  <table width="840" align="center">
        <tr valign="top"> 
          <td width="6">&nbsp;</td>
          <td width="840" height="35" colspan="3" class="exhibitionProgram">
              <p class="exhibitionProgram"><strong>apexart</strong> Local Coordinator Questionnaire</p>
      </td>
        </tr>

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText">               
            <p>Thank you very much for your work to make the Fellowship a success! We are interested in hearing about your experience so that we can improve the process in the future. We look forward to reading your feedback on the following questions.<br><br> Thank you,<br><strong>apexart </strong>staff<br><br>
</p>
            <p>Fill in the form below and press the Submit button. </p>
            <table class="standardText">
                <tr> 
                  <td width="806" height="30" align="left" valign="top">Your name: 
                  <input style="width: 250px;" type="text" name="name"></td>
                </tr>
                <tr> 
                  <td width="806" height="30" align="left" valign="top">Your email address: 
                  <input style="width: 250px;" type="text" name="email"></td>
                </tr>
                <tr> 
                  <td width="806" height="30" align="left" valign="top">Your hosted fellow’s name: 
                  <input style="width: 250px;" type="text" name="fellowname"></td>
                </tr>
                 <tr> 
                  <td width="806" height="30" align="left" valign="top">Your coordinating city: 
                  <input style="width: 250px;" type="text" name="city"></td>
                </tr>

                <tr> 
                  <td height="30" align="left" valign="top"><br>
                    1. Were the responsibilities of the Local Coordinator position made clear from the beginning? <br>
                  <textarea rows="8" cols="100" name="responsibilities"></textarea></td>
                </tr>
                
                <tr> 
                  <td height="35" align="left" valign="top"><br>
                  2.  How was the brainstorming phase of the planning process? Did you understand what was expected? <br>                    
                   <textarea rows="8" cols="100" name="brainstorming"></textarea></td>
                </tr></table>
            <table class="standardText">
                
                  <tr> 
                  <td height="30" align="left" valign="top"><br>
                    3.  How was the experience of working with the Director of Programs to fill out the schedule in Google Suite, and is there anything that you would change? <br>                  
                    <textarea rows="8" cols="100" name="schedule"></textarea></td>
                </tr>
                 
                 <tr> 
                  <td height="30" align="left" valign="top"><br>
                    4.  How did the Fellow’s arrival go? Did you feel prepared for the start of the Fellowship? <br>   
                  <textarea rows="8" cols="100" name="arrival"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>
                    5.  During the Fellowship were there any unexpected occurrences? <br>
                      <textarea rows="8" cols="100" name="unexpected"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>
                    6.  What in the Fellowship did not work so well? Do you have suggestions for how to improve it next time? <br>
                      <textarea rows="8" cols="100" name="suggestions"></textarea></td>
                </tr>
        <tr> 
                  <td height="30" align="left" valign="top"><br>
                    7.  If you have previously been a fellow in NYC, what do you see as the differences in a Fellowship in your city? <br>
                      <textarea rows="8" cols="100" name="previously"></textarea></td>
                </tr>
             
               
                <tr> 
                  <td height="30" align="left" valign="top"><br>
                    8.  How was the amount and quality of communication with apexart? Did you feel you needed more? Or less?  <br> 
                      <textarea rows="8" cols="100" name="communication"></textarea></td>
                </tr>
                
                  <tr> 
                  <td height="30" align="left" valign="top"><br>
                   9. Was the time required by the job more or less than you expected, or about the same?   <br>
                   <textarea rows="8" cols="100" name="time"></textarea></td>
                </tr>
                  <tr> 
                  <td height="30" align="left" valign="top"><br>
                    10. What did you enjoy about being the Local Coordinator? <br> 
                    <textarea rows="8" cols="100" name="enjoy"></textarea></td>
                </tr>   
                
                
                 <tr> 
                  <td height="30" align="left" valign="top"><br>
                    11. What was the most challenging part of being the Local Coordinator?<br>  
                      <textarea rows="8" cols="100" name="challenging"></textarea></td>
                </tr>

                 <tr> 
                  <td height="30" align="left" valign="top"><br>
                    12. Did you feel you had the support you needed from apexart?<br>  
                      <textarea rows="8" cols="100" name="support"></textarea></td>
                </tr>

                  <tr> 
                  <td height="30" align="left" valign="top"><br>
                    13. Was the experience of being a Local Coordinator what you had expected? Or if different, in what ways?<br>  
                      <textarea rows="8" cols="100" name="experience"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>
                    14. Would you like to be a Local Coordinator again the future?<br>  
                      <textarea rows="8" cols="100" name="future"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>
                    15. Is there anything else you would like to say?<br>  
                      <textarea rows="8" cols="100" name="else"></textarea></td>
                </tr>
                
          </table>
<br><br>
<input type="submit" value="SUBMIT">
</form>


</body>
</html>