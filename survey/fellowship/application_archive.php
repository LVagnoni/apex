<?php
	include("../../header.php");
	include ('../fellowship/connect.php');
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: New York City Fellowship Application Form</TITLE>

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
          <td width="840" height="35" colspan="3" class="exhibitionProgram">
              <span class="exhibitionProgram"><strong>apexart</strong> New York City Fellowship Application Form
		  </td>
        </tr>

<tr valign="top"> 
          <td>&nbsp;</td>
          <td colspan="3" class="standardText"> 		          
           <br>
           
            <table class="standardText">
                <tr>
                  <td height="22" colspan="2" align="left" valign="top">Please complete the form fields and press the Submit button. </td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Name of recommender:</td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="recommender"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">First name: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="first"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Last name:</td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="last"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Address: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="address"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Phone: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="phone"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Email: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="email"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Birthdate: </td>
                  <td align="left" valign="top">
                  	<input type="text" style="width: 400px;" id="datepicker" name="birth"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Citizenship: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="citizen"></td>
                </tr>
                <tr>
                  <td height="20" align="left" valign="top">Country of Residence:</td>
                  <td height="20" align="left" valign="top"><input style="width: 400px;" type="text" name="residence"></td>
                </tr>
                <tr>
                  <td height="20" align="left" valign="top">Country of Birth:</td>
                  <td height="20" align="left" valign="top"><input style="width: 400px;" type="text" name="country"></td>
                </tr>
                <tr>
                  <td height="34" align="left" valign="top">Languages:</td>
                  <td height="34" align="left" valign="top"><input style="width: 400px;" type="text" name="language"></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" align="left" valign="top">Emergency Contact:</td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Name: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="ername"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Phone: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="erphone"></td>
                </tr>
                <tr>
                  <td height="22" align="left" valign="top">Email: </td>
                  <td align="left" valign="top"><input style="width: 400px;" type="text" name="eremail"></td>
                </tr>
                <tr> 
                  <td width="149" height="22" align="left" valign="top">Relationship:
                  </td>
                  <td width="662" align="left" valign="top"><input style="width: 400px;" type="text" name="errel"></td>
                </tr>
                
                <tr> 
                  <td height="30" colspan="2" align="left" valign="top"><br>
                    Medical conditions apexart should be aware of: 
<br>
                  <textarea rows="4" cols="77" name="medical"></textarea></td>
                </tr>
                
                <tr> 
                  <td height="35" colspan="2" align="left" valign="top">
                  Have you ever travelled to New York City? 
                  <br>
                   <textarea rows="4" cols="77" name="nyc"></textarea></td>
                </tr>
                  <tr>
                    <td height="25" colspan="2" align="left" valign="top">Please provide list your travel destinations over the past ten years: </td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest1"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date1"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest2"></td>
              </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date2"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest3"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date3"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest4"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date4"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest5"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date5"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest6"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date6"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest7"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date7"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest8"></td>
                  </tr>
                  <tr>
                    <td height="36" align="left" valign="top">Date of Travel:</td>
                    <td height="36" align="left" valign="top"><input style="width: 400px;" type="text" name="date8"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Destination:</td>
                    <td height="22" align="left" valign="top"><input style="width: 400px;" type="text" name="dest9"></td>
                  </tr>
                  <tr>
                    <td height="30" align="left" valign="top">Date of Travel:</td>
                    <td height="30" align="left" valign="top"><input style="width: 400px;" type="text" name="date9"></td>
                  </tr>
                  <tr>
                    <td height="23" align="left" valign="top">Destination:</td>
                    <td height="23" align="left" valign="top"><input style="width: 400px;" type="text" name="dest10"></td>
                  </tr>
                  <tr>
                    <td height="40" align="left" valign="top">Date of Travel:</td>
                    <td height="40" align="left" valign="top"><input style="width: 400px;" type="text" name="date10"></td>
                  </tr>
                  <tr>
                    <td height="25" colspan="2" align="left" valign="top">Please list the residencies you've participated in over the past five years: </td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Residency:&nbsp;</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="res1"></td>
                  </tr>
                  <tr>
                    <td height="30" align="left" valign="top">Dates:</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="resdate1"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Residency:&nbsp;</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="res2"></td>
                  </tr>
                  <tr>
                    <td height="30" align="left" valign="top">Dates:</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="resdate2"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Residency:&nbsp;</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="res3"></td>
                  </tr>
                  <tr>
                    <td height="30" align="left" valign="top">Dates:</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="resdate3"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Residency:&nbsp;</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="res4"></td>
                  </tr>
                  <tr>
                    <td height="30" align="left" valign="top">Dates:</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="resdate4"></td>
                  </tr>
                  <tr>
                    <td height="22" align="left" valign="top">Residency:&nbsp;</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="res5"></td>
                  </tr>
                  <tr>
                    <td height="30" align="left" valign="top">Dates:</td>
                    <td align="left" valign="top"><input style="width: 400px;" type="text" name="resdate5"></td>
                  </tr>
                <tr> 
                  <td height="30" colspan="2" align="left" valign="top"><br>
                   Why would you be a good fit for an apexart Fellowship and what do you hope to get from your experience? <br>
                      <textarea rows="10" cols="77" name="benefit"></textarea></td>
                </tr>
                <tr> 
                  <td height="30" colspan="2" align="left" valign="top"><br>
                  How do you support yourself financially? <br>
                      <textarea rows="4" cols="77" name="support"></textarea></td>
                </tr>
                
                <tr> 
                  <td height="30" colspan="2" align="left" valign="top"><br>
                  I understand this is not a working Fellowship and it is not about networking or career development. It is a cultural and experiential immersion. <br>
                     <input type="checkbox" name="understand" value="YES"> YES</td>
                </tr>
                
               

           
          </table>

<input type="submit" value="SUBMIT"><br><br>
Thank you for applying for the apexart New York City Fellowship.<br><br>
More candidates are considered than apexart can accommodate. We will contact you with further details  regarding your application status. <br><br>
You can see an example of a schedule here. If you have further questions in regard to the program and/or its expectations please feel free to contact us at info@apexart.org, 212 431 5270, or via Skype at Lorissa.Rinehart.
</form>


</body>
</html>