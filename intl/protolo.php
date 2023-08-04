<?php
	include("../header.php");
	session_start(); 
	?>

<?php echo $error; ?> 
  <!--<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd"> 
    Password: 
     <table align="center"> 
       <tr> 
         <td><br /><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="3">To view secret apexart links, please enter password here:</font><br />
         <input name="passwd" type="password"/><br/> 
          <input type="submit" name="submit_pwd" value="Login"/> </td> 
       </tr> 
       
     </table>   
   </form> -->
      
<?php    

?>
 
<?php 
/*$Password = 'a2p9e1x291'; // Set your password here 

if (isset($_POST['submit_pwd'])){ 
   $pass = isset($_POST['passwd']) ? $_POST['passwd'] : ''; 
      
   if ($pass != $Password) { 
      showForm("Wrong password"); 
      exit();      
   } 
} else { 
   showForm("protolo"); 
   exit(); 
} */
?>
	<link href="http://www.apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
<title>apexart :: INTL Exhibition Program 2023-24 :: Submissions</title>
<body bgcolor="#000000">

<table  width="845" align="center" border="0">
  <tr>
    <td><div class="exhibitionProgram">INTL Exhibition Program 2023-24 Submissions</div>
    <?php
 	error_reporting(E_ALL);
	include ('connect.php');
		
				$query2="SELECT * FROM intl23_proposal_PREVOTE WHERE is_accepted!=1";// WHERE is_accepted=1 ";
		
		$result2 = mysql_query($query2, $conn);
		$nums=mysql_num_rows($result2); 
		
		echo "<tr> <td class='standardText'>";
		echo "<br><font color='red'>Total Submissions: $nums</font>";
		echo "</tr></td>";
		
	$query="SELECT * FROM intl23_proposal_PREVOTE WHERE is_accepted=0 ORDER BY id desc";//WHERE is_accepted=0
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	    
		$ff=$row["id"];
		$query2="SELECT avg(score) as 'aver' FROM intl23_rating Where proposal_id=$ff";
		$result2 = mysql_query($query2, $conn); 
		
		if (!$result2) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		while ($row2 = mysql_fetch_assoc($result2)){
			$aver=$row2["aver"];
		}
		
		$query2="SELECT count(*) as 'cnt' FROM intl23_rating Where proposal_id=$ff";
		$result2 = mysql_query($query2, $conn); 
		
		if (!$result2) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		while ($row2 = mysql_fetch_assoc($result2)){
			$cnt=$row2["cnt"];
		}
		
		$rowID=$row["id"];
		echo "<table width=850 border=0 cellpadding=0 align='center'><tr>";
		echo "<a id=".$rowID."></a><td class='grayback' width='50' align=left valign=top class='standardTextLg';'>#".$row["id"]."</td>";
		$SESSION['id'] = $row["id"];
		echo "<td class='grayback' align=left valign=top class='standardTextLg'>".$row["submitters"]."</td>";
		echo "<td class='grayback' align=left valign=top class='standardText'>Artists: ".$row["artist_names"].",</td>";
		echo "<td class='grayback' align=left valign=top class='standardTextLg' style='text-transform: uppercase;'>&nbsp;</td>";
		echo "</tr><tr>";
		echo "<td class='grayback' align=left valign=top class='standardTextLg' style='text-transform: uppercase;'>&nbsp;</td>";
		echo "<td class='grayback' align=left valign=top class='standardTextLg' style='text-transform: uppercase;'>".$row["title"]."</td>";
		echo "<td class='grayback' align=left valign=top class='standardTextLg'>Proposed for: ".$row["franchise_city"].", ".$row["franchise_country"]."</td>";
		echo "<td class='grayback' align=left valign=top class='standardTextLg' style='text-transform: uppercase;'></td>";
	    echo "</tr>";
	    echo "</td></tr>";
		echo "<td  class='standardText' colspan=5 align='left'>".nl2br(($row["content"]))."<br>";
	  	echo "<tr>&nbsp;</tr>"; 
	  	echo "<tr>&nbsp;</tr>";
	  	echo "<td  class='grayback' colspan=3 align='left'>

        <a href='mailto:".$row["email"]."?subject=Re:%20Your%20Submission%20#".$rowID."&body=Dear%20".$row["submitters"].",%0A%0AThank%20you%20for%20submitting%20a%20proposal%20to%20apexart&#39;s%20Open%20Call%20for%20exhibitions.%20We%20are%20writing%20to%20get%20clarification%20on%20your proposal,%20as%20it%20currently%20does%20not%20seem%20to%20meet%20our%20qualifications%20and%20will%20not%20be%20sent%20to%20the%20jury%20without%20additional%20information.%0A%0AIt%20appears%20your%20proposal:%0A

					- is a solo exhibition, or does not include individual works by at least three artists working independently (and not as a collective)%0A
					- is an artist project, where multiple people follow specific instructions to create works, and/or collaborate on a project with a unified outcome%0A
					- includes an open call for artists%0A
					- includes an artist residency component%0A
					- includes sales-related activities%0A
					- has been presented previously%0A
					- has partial sponsorship from another funding entity%0A
					- has been submitted on behalf of another organization%0A
					- has insufficient components on view in person for the exhibition&#39;s duration and/or is an online-only exhibition%0A
					- is written in a language other than English%0A
					- is intended to take place in New York City.%0A
					- Other:%0A%0AIf%20we%20have%20made%20an%20error%20in%20our%20determination%20or%20you%20would%20like%20to%20amend%20your%20proposal%20to%20fit%20our%20guidelines,%20please%20submit%20revised%20text%20to%20us%20via%20email%20only%20to%20opencalls@apexart.org%20with%20the%20email%20subject%20line%20&#39;Submission #".$row["id"]."%20REVISED&#39;%20within%205%20days%20of%20the%20send%20date%20of%20this%20email.%20%20Do%20not%20submit%20revisions%20through%20the%20online%20system.%0A%0A

					Thank%20you%20again%20for%20your%20interest%20in%20apexart&#39;s%20Open%20Call.%0A%0A

					Best%20wishes,%0A
					apexart%0A&nbsp;

			'>
Email Submitter</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='submission-comments.php?id=".$row["id"]."'><button>Add notes to Submission #".$row["id"]."</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><button>Disqualify Submission #".$row["id"]."</button></a>

	  	</td></tr>";
	  	echo "<tr class='standardText' valign='top'><td colspan=6>";
	  	echo '<form name="frmUser" method="post" action="update2.php">';
		if(isset($message)) { echo $message;} 

		$id = $row['id'];
		$queryb="SELECT * FROM intl23_proposal_PREVOTE WHERE id='" . $id . "'";
		$resultb = mysql_query($queryb, $conn);
		$row = mysql_fetch_assoc($resultb);
		echo'<input type="hidden" name="id" class="txtField" value="'.$row['id'].'">';

		echo'Notes: <br>
		<textarea name="notes" id="notes" rows="10" cols="50">'.$row['notes'].'</textarea><br>

		<input size="50" type="submit" name="submit" value="Submit" class="button">

		</form>';
	  	echo "<br><strong>Submission ".$row["id"]." Notes:</strong><br>".nl2br(($row["notes"]))."<br><br>
 		</td></tr>";
	  	
	  	echo "<tr><td>&nbsp;</td></tr>";
	  	echo "<tr><td>&nbsp;</td></tr>";
			
		  echo "</table>";
    
	}
	
	mysql_free_result($result);
	include("../footer.php");

?>




</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

</body>