<?php
		include ("quantitative/connect.php");
	include("../header.php");
	?>	
	  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#slider-range-max" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
      }
    });
    $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
  });
  
  
  </script>
	
	

	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: Resident Survey</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	

<body>
<form action="quantitative/formscript.php" method="post" >
	<table width="840" align="center">
        <tr valign="top"> 
          <td width="6">&nbsp;</td>
          <td width="840" height="35" colspan="3" class="exhibitionProgram">
              <p class="exhibitionProgram"><strong>apexart</strong> Resident Evaluation/Survey </p>
		  </td>
        </tr>

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText"> 		          
            <p>Dear Resident,<br><br>

Please help us assess where you stand. Please gauge your responses on the 1-5 scale with 1 being the lowest and 5 being the highest. When you are finished, click on the Submit button. <br><br> Thank you,<br><strong>apexart </strong>staff<br><br>
</p>
            <p>&nbsp;</p>
            
            
            
            <table class="standardText">
                <tr> 
                  <td width="526" height="22" align="left" valign="top">Full name:
                  <input style="width: 250px;" type="text" name="name"><br><br></td>
                  <td width="18" align="left" valign="top">&nbsp;</td>
                  <td width="281" align="left" valign="bottom"> LOW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HIGH</td>
                </tr>
                <tr> 
                  <td height="20" align="left" valign="top">
                   <label for="amount">1. How comfortable are you being alone, especially in a new city?<br><br>  </label>
 					
                  </td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">  
                  <input type="radio" value="1" name="question1">1&nbsp;
                  <input type="radio" value="2" name="question1">2&nbsp;
                  <input type="radio" value="3" name="question1">3&nbsp;
                  <input type="radio" value="4" name="question1">4&nbsp;
                  <input type="radio" value="5" name="question1">5&nbsp; </td>
                </tr>
                
                <tr> 
                  <td height="38" align="left" valign="top">
                  2. How concerned are you that your art or art related career will be sustainable and rewarding over the long term?                    <br><br>
                  </td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">
                  <input type="radio" value="1" name="question2">1&nbsp;
                  <input type="radio" value="2" name="question2">2&nbsp;
                  <input type="radio" value="3" name="question2">3&nbsp;
                  <input type="radio" value="4" name="question2">4&nbsp;
                  <input type="radio" value="5" name="question2">5&nbsp; </td>
                </tr>
                
                  <tr> 
                  <td height="38" align="left" valign="top">
                    3. How anxious do you feel about not doing your work for a month?<br><br>                  
                   </td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">
                  <input type="radio" value="1" name="question3">1&nbsp;
                  <input type="radio" value="2" name="question3">2&nbsp;
                  <input type="radio" value="3" name="question3">3&nbsp;
                  <input type="radio" value="4" name="question3">4&nbsp;
                  <input type="radio" value="5" name="question3">5&nbsp; </td>
                </tr>
                 
                 <tr> 
                  <td height="20" align="left" valign="top">
                    4. How inspired do you feel by your daily surroundings?<br><br>
                   </td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">
                  <input type="radio" value="1" name="question4">1&nbsp;
                  <input type="radio" value="2" name="question4">2&nbsp;
                  <input type="radio" value="3" name="question4">3&nbsp;
                  <input type="radio" value="4" name="question4">4&nbsp;
                  <input type="radio" value="5" name="question4">5&nbsp; </td>
                </tr>
                <tr> 
                  <td height="20" align="left" valign="top">
                    5. How knowledgable do you feel about the art world?<br><br>
                  </td>
                  <td align="left" valign="top">&nbsp;</td>
                  <td align="left" valign="top">
                  <input type="radio" value="1" name="question5">1&nbsp;
                  <input type="radio" value="2" name="question5">2&nbsp;
                  <input type="radio" value="3" name="question5">3&nbsp;
                  <input type="radio" value="4" name="question5">4&nbsp;
                  <input type="radio" value="5" name="question5">5&nbsp; </td>
                </tr>
                
                
          </table>

<input type="submit" value="SUBMIT">
</form>


</body>
</html>