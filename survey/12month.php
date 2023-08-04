<?php
	include ('12month/connect.php');
	include("../header.php");
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: One Year Fellowship Evaluation</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	

<body>
<form action="12month/formscript.php" method="post" >
	<table width="840" align="center">
        <tr valign="top"> 
          <td width="6">&nbsp;</td>
          <td width="840" height="35" colspan="3" class="exhibitionProgram">
              <p class="exhibitionProgram"><strong>apexart</strong> One Year Fellowship Evaluation</p>
		  </td>
        </tr>

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText"> 		          
            <p>Dear Fellow,<br><br>

Wow! It has been 12 months since you took part in the apexart Fellowship. What are you thinking about it now?<br><br> Thank you,<br><strong>apexart </strong>staff<br><br>
</p>
            <p>Fill in the form below and press the Submit button. </p>
            <table class="standardText">
                <tr> 
                  <td width="806" height="30" align="left" valign="top">Full name:
                  <input style="width: 250px;" type="text" name="name"></td>
                </tr>
                <tr> 
                  <td width="806" height="30" align="left" valign="top">Fellowship start date:
                  <input style="width: 250px;" type="date" name="res_dates"></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>1. Is there a particular activity or circumstance that stands out in your mind a year later? 
                  <textarea rows="8" cols="100" name="standout"></textarea></td>
                </tr>
                
                <tr> 
                  <td height="35" align="left" valign="top"><br>2. Did any particular person you met during your Fellowship have a strong effect on you? How so? 

                  <textarea rows="8" cols="100" name="person"></textarea></td>
                </tr></table>
                <table>
                <tr> 
                <td align="left" valign="top" colspan="2"><br>
                3. Do you refer to your Fellowship often? What's the number one thing you say about it, or the story you tell most often? <br>
                
                  <textarea rows="8" cols="100" name="refer"></textarea></td></tr>
                  
				</table>
               <table class="standardText">
     			
                <tr><td height="30" align="left" valign="top"><br>
                4. Did you find that you were more likely to attend activities, lectures, and / or events outside of your comfort zone when you returned?  Do you still?<br>
                  <textarea rows="8" cols="100" name="attend"></textarea></td>
                </tr>
                
                     <tr> 
                  <td height="30" align="left" valign="top"><br>5. Any long lasting psychological effects?
                  <textarea rows="8" cols="100" name="psych"></textarea></td>
                </tr>
                 
                 <tr> 
                  <td height="30" align="left" valign="top"><br>6. Did it have any effect on broadening your view of art, travel or other people?
                  <textarea rows="8" cols="100" name="broaden"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>7. Did it have any effect on your creative practice?  If so how?
                  <textarea rows="8" cols="100" name="creative"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>8. Have you returned? Do you have intentions of returning to your Fellowship location?
                  <textarea rows="8" cols="100" name="return"></textarea></td>
                </tr>
				<tr> 
                  <td height="30" align="left" valign="top"><br>9. Do you follow apexart on facebook? Twitter? Subscribe to our email list? 
                  <textarea rows="8" cols="100" name="social"></textarea></td>
                </tr>
             
                <tr> 
                  <td height="30" align="left" valign="top"><br>10. Do you have a sentence of advice for future fellows?   
                  <textarea rows="8" cols="100" name="sent"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" align="left" valign="top"><br>11. Can you give one suggestion on how we might improve the program?
                  <textarea rows="8" cols="100" name="suggestion"></textarea></td>
                </tr>
                
                     
          </table>
<br><br>
<input type="submit" value="SUBMIT">
</form>


</body>
</html>