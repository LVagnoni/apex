<?php
	session_start();
	if (isset($_COOKIE[session_name()])) {
				    setcookie(session_name(), '', time()-42000, '/');
				}
	session_destroy();
 	include("../headerc.php");
 	?>


<table width="1000" border="0" align="center" style="margin-top:5px;">
  <tr valign="top">
    <td width="947" align="center" valign="top"><table width="941" border="0" bgcolor="#FFFFFF">
      <tr valign="top">
        <td><table  width="850" border="0">
          <tr>
            <td>


<td width="938" colspan="3" align="center" valign="top"><table width="903" border="0" bgcolor="#FFFFFF">
   <tr valign="top">
     <td  width="38">&nbsp;</td>
     <td  width="514"><span class="standardText"><br /><br />
       
 	You are now logged out.<a href="https://apexart.org">
 	<br><br><a href='login-bulawsky.php'>Log In</a>
         <br /><br /><br /></span></td>
                              <td width="28">&nbsp;</td>
                              <td width="305" class="standardTextLg" style="padding-left:50px" valign="top">&nbsp;</td>
				  		
					</tr>
				</table>
</table>

</td>
          </tr>
        </table>
 	
<?php 

	
	include("../footerb.php");		
?>
 	
