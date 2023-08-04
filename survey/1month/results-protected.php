<?php
	include('../../header.php');
	include ('../1month/connect.php');
	?>
<table width="850" align="center"><tr><td class="standardText">
        <br /><br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd"> 
    Password: </td>
         <td><br /><br />
         <input name="passwd" type="password"/>&nbsp;<input type="submit" name="submit_pwd" value="Login"/> </td> 
       </tr> 
       
     </table>   
   </form> 
   <?php 
$Password = 'a2p9e1x'; // Set your password here 

if (isset($_POST['submit_pwd'])){ 
   $pass = isset($_POST['passwd']) ? $_POST['passwd'] : ''; 
      
   if ($pass != $Password) { 
      showForm("Wrong password"); 
      exit();      
   } 
} else { 
   showForm("tally"); 
   exit(); 
} 
?>
<TITLE>apexart :: 1 Month Fellowship Survey</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />1 month Fellowship Survey Results<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
        include('../survdrop.php');
		?></td></tr></table>
			<?php
 	error_reporting(E_ALL);
?>

      
<?php    

?>
 


<?php
		
	$query="SELECT * FROM 1month ORDER BY created_on DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    

		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>".$row["name"]."</td>";
		echo "<td class='grayback' align='left'>Date submitted: ".$row["created_on"]."</td>";
	    echo "</tr></table>";
	echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td>1. Was your experience of apexart’s Fellowship different than what you expected? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["expected"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>2. Did you find your Fellowship engaging overall? Intellectually challenging?    </td></tr><tr><td class='standardText'><blockquote style='margin-top:0'>".$row["challenging"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardGray' valign='top'><td>3. How engaged did you feel in our program? (Scale of 1 – 5)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["engaged"]."</blockquote></td></tr>";

		
		echo "<tr><td  class='standardGray' valign='top' width=800>
		4. What event did you find most challenging? Why? And what did it feel like once you overcame your fears about it?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["event"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>5. How rigorous did you feel the program was (scale of 1 – 5) </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["rigorous"]."</blockquote></td></tr>";
		
		echo "<tr class='standardGray' valign='top'><td>6. What was your least favorite event - or type of event? Why?  </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["worst"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>7. What was your favorite – or favorite type of event? Why?  </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["favorite"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>8. Who was the most interesting or influential person you met on your Fellowship?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["person"]."</blockquote></td></tr>";	
		echo "<tr class='standardGray' valign='top'><td>9. What did you find on your own explorations? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["explorations"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>10. Did you discover new topics of interest? Can you give an example?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["topics"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>11. Can you give an example of a problem you had before you arrived?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["problem"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>12. Was your schedule clear? If not why not? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["schedule"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>13.	Has the fellowship caused you to reconsider how you relate and approach your creative process? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["creative"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>14.	In the context of a residency, was the absence of pressure to create work helpful? Restful or stressful? Energizing or taxing?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["absence"]."</blockquote></td></tr>";
echo "<tr class='standardGray' valign='top'><td>15.	Did the journal help you reflect on your experience? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["journal"]."</blockquote></td></tr>";
	echo "<tr class='standardGray' valign='top'><td>16.	Did you enjoy the exit interview? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["interview"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>17.	Could the goals of apexart’s Fellowship been made clearer? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["goals"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>18.	Was the Fellowship long or short? </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["timing"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>19.	What advice do you have for future Fellows?</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["advice"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>20.	Please give us one example about how the program overall could be improved. </td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["improve"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>21.	Other thoughts about the Fellowship or your experience? We welcome and thoughts or ideas that you have about the program and encourage you to tell us more. 
(300 words max)</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["thoughts"]."</blockquote></td></tr>";
		echo "<tr class='standardGray' valign='top'><td>22.	Can you think of anyone who might be particularly interested in learning more about apexart? If so, and with their permission, please include their contact information.</td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>".$row["anyone"]."</blockquote></td></tr>";
		
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


	  }
		
	mysql_free_result($result);


?>
