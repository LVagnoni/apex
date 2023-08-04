<?php
	define(MAXSUBS, 1000);// adjust the number of maximum number of submissions
	define(MAXVOTES, 450);// adjust the number of maxim number of jurors
	
	
	
	include("../header.php");
	?>
    
     <?php echo $error; ?> 
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd"> 
    Password: 
     <table align="center"> 
       <tr> 
         <td><br /><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="3">To view secret apexart links, please enter password here:</font><br />
         <input name="passwd" type="password"/><br/> 
          <input type="submit" name="submit_pwd" value="Login"/> </td> 
       </tr> 
       
     </table>   
   </form> 
      
<?php    

?>
 
<?php 
$Password = 'tally1'; // Set your password here 

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
    
    
    
    
	<br>
    <meta http-equiv="refresh" content="300" >
    <link href="https://apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
    <div align="center">
<table align="center">
    <tr><td width="953" valign="top">
    <table align="left"><tr><td width="188" valign="top">
	<div class="exhibitionProgram">INTL 2019 votes</div><br>
    </td>
    <td width="10" valign="top"></td><td width="170" valign="top" class='standardTextSm'>
1 - Margaret Dorsey's class<br />
3 - Helen Frederick's class<br />
4 - Anna Campbell's class<br />
5 - Sandra Skurvida's class<br />
</td>
<td width="181" valign="top" class='standardTextSm'>
6 - Heather Tenzer's class<br />
7 - Marit Dewhurst's class<br />
8 - Barbara Fischer's class<br />
9 - Antony Hudek's class<br />
</td>

<td width="183" valign="top" class='standardTextSm'>
10 - Grace McDonald's class<br />
11 - Zoe Cohen's class <br />
14 - Wendel White's class<br />
16 - Kevin Chen's class<br />
</td>
<td width="200" valign="top" class='standardTextSm'>
17 - Amanda Curreri's class<br />
18 - Lisa Bulawsky's class<br />
19 - Trine Friis Sørensen's class<br />
20 - Allan UPC's class<br />
21 - Martha Mysko's class<br />

</td>
<td width="200" valign="top" class='standardTextSm'>
22 - Ben Dunn's class<br />
24 - Jennifer Pepper's class<br />
25 - Christopher Kaczmarek's class<br />
26 - David Borgonjon's class<br />
</td>



</tr></table>
</td>
<tr></tr>
<tr>

</tr></table>
	<?php
	include ('connect.php');


	$sql = "SELECT COUNT(*) FROM guo_testrating";
	$result = mysql_query($sql);
	$num = mysql_result($result, 0);
	$sql2 = "SELECT COUNT(*) FROM guo_testrating";
	$result2 = mysql_query($sql2);
	$num2 = mysql_result($result2, 0);
	echo "<div class='orangeText'><strong>Total votes by all jurors: $num2</strong></div><br> ";
	
	
		
		for ($i=1;$i<MAXSUBS;$i++)// no more than MAXSUBS submissions
			for ($j=1;$j<MAXVOTES;$j++) // no more than MAXVOTES votes
			{
				$propRanks[$i][$j]=0;//fill up the array with 0 to account for missing votes
			}	
				
		for ($j=1;$j<MAXVOTES;$j++) 
		{
			$login[$j]=0;
			$numberOfVotes[$j]=0;	//zero out all votes
		}		
		//SELECT date_format(thedate, '%M %e, %Y, %l:%i%p') as newdate FROM your_table;			
					
		// get juror names from the JUROR table
		$query3="SELECT first, last, id, class, login_on, password FROM guo_testjuror ORDER BY class, first ASC";
		$result3 = mysql_query($query3, $conn); 
		
		
		if (!$result3) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		
		while ($row3 = mysql_fetch_assoc($result3)){
			$idd=$row3["id"];
		
				
			$jurs[$idd]=$row3['first']." ".$row3['last']."<br>".$row3['class'];
			//has juror names
			$login[$idd]=$row3["login_on"];
			//echo $row3["fullname"]."    ".$row3["password"].",<br/>";
		}
		
		
		
		
		// get votes count
		$query3="SELECT count(*) as thecount, juror_id FROM guo_testrating GROUP BY juror_id";
		$result3 = mysql_query($query3, $conn); 
		
		if (!$result3) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		
		while ($row3 = mysql_fetch_assoc($result3)){
			$idd=$row3["juror_id"];			
			$numberOfVotes[$idd]=$row3["thecount"];	//has juror names
			//echo $idd.", ";
			//echo $numberOfVotes[$idd].",<br/>";
		}
		
		
			
		
		foreach($jurs as $x=>$y){  //fill up the 2 dimensional juror/submission array
			
			$query3="SELECT score, juror_id, proposal_id FROM guo_testrating WHERE juror_id=$x";
			$result3 = mysql_query($query3, $conn); 
			
			if (!$result3) {
			    echo 'Could not run query: ' . mysql_error();
			    exit;
			}
			
			while ($row3 = mysql_fetch_assoc($result3)){
			
			$id=$row3["proposal_id"];
			$score=$row3["score"];
			$propRanks[$id][$x]=$score;//[submission_id][juror]
			
			
			}	
		
		}
	
			
	
		// get all the score statistics for each submission_id;
		$query="SELECT * FROM guo_testproposal WHERE is_accepted!=1";	
		$query3="SELECT avg(score) as 'aver', count(score) as 'cnt', sum(score) as 'sum', proposal_id FROM guo_testrating GROUP BY proposal_id";
		$result3 = mysql_query($query3, $conn); 
		
		if (!$result3) {
		    echo '<br><br>Could not run query: ' . mysql_error()."<br>";
		    exit;
		}
		
			
		for ($i=1;$i<MAXSUBS;$i++)
			$averageScores[$i]=0;//fill up the array with 0 to account for missing votes
		
		while ($row3 = mysql_fetch_assoc($result3)){
			
			//$i=$row3["aver"];
			$j=$row3["proposal_id"];
			$k=$row3["aver"];
			$averageScores[$j]=$k;				//has submission_id=>score average
			$sumScores[$j]=$row3["sum"];				//has proposal_id=>score sum
			$countScores[$j]=$row3["cnt"];				//has proposal_id=>score count, how many voted
			
			$query4="UPDATE guo_testproposal SET averageRate = $k WHERE id=$j;";
			$result4 = mysql_query($query4, $conn); 
			
			if (!$result4) {
			    echo '<br><br>Could not run query: ' . mysql_error()."<br>";
			    exit;
			}
			
			
			
		}
		
		

		

		
	/*
	SELECT * , nickname IS NULL AS isnull
	FROM people 
	ORDER BY isnull ASC, nickname ASC
	
	
	*/	
		
		
	//$query="SELECT *, averageRate IS NULL AS isnull FROM submission ORDER BY isnull DESC, averageRate DESC";	
	$query="SELECT * FROM guo_testproposal WHERE is_accepted!=1 ORDER BY averageRate DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	
	echo "<table class='t2' align='center'>";

		
	//printHEADERS();
	
	
	$jj=0;$hh=0;
        $submission_position=0;
	while ($row = mysql_fetch_assoc($result)) {
	    if ($jj%30==0) printHEADERS(); //print the headers every 30 entries
            $submission_position++;
                $ff=$row["id"];
		$rowID=$row["id"];
		
		$avscore=number_format($averageScores[$rowID],2);
		//if (isset($averageScores[$rowID])) $avscore=number_format($averageScores[$rowID],2);		else $avscore="No votes";
		
		if (isset($countScores[$rowID])) $CScore=$countScores[$rowID];
			else $CScore="No votes";
			
		
		
		if ($jj%3==1) $type="alt";
		//if ($jj%3==2) $type="alt1";
		if ($jj%3==0) $type="alt1";	
		echo "<tr>";
        echo "<td style='border:1px solid white;'  class='grayback' align=left class='standardText' style='text-transform: uppercase;'>".$submission_position."</td>";
		echo "<td  class='grayback' style='border:1px solid white;' align=left class='standardText' style='text-transform: uppercase;'>".$avscore."</td>";
 	    echo "<td class='grayback' style='border:1px solid white;' align-left class='standardText'><a href='anon.php?sub=".$rowID."'>$rowID</a></td>";
		//echo "<th>".$row["email"]."</th>";
		echo "<td  width=50 class='grayback' style='border:1px solid white;' align-left class='standardText'>".$row["title"]."</td>";
		
		echo "<td  width=50 class='grayback' style='border:1px solid white;' align-left class='standardText'>".$row["franchise_city"].", ".$row["franchise_country"]."</td>";
		echo "<td  style='border:1px solid white;' class='grayback' align-left class='standardText'>".$CScore."</td>";
		
		
echo "</td>";
		//echo "<th>".$row["created_on"]."</th>";
		
		//$propRanks[$x][$id]
		
		//print out individual votes now
		$ff=0;
		foreach($jurs as $id=>$name)
			
			{
				if ($ff%3==1) $typeF="alt";
				//if ($jj%3==2) $type="alt1";
				if ($ff%3==0) $typeF="alt1";	
				$score=$propRanks[$rowID][$id];
				echo "<td  class='grayback' style='border:1px solid white;' align-left class='standardText'>";
				if (0==$score) $score=" ";
				//echo "$id=$score";
				echo "$score";
				echo "</td>";
				$ff++;
				
			}
		echo "</tr>";
		

	  
	  $jj++;  $hh++;
	}
	echo "</table>";
	

	
	
	
	mysql_free_result($result);
	
	
	
	
	
	
	
	
	function printHEADERS()
	{
	  global $jurs;
	  global $numberOfVotes;
	  global $login;
	  ?>
<table align="center">
	  <tr>
		    <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Position</th>
             <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Average<br />Score</th>
			<th class='grayback' style='border:1px solid white;' align-left class='standardText'>ID</th>
			<th class='grayback' style='border:1px solid white;' align-left class='standardText'>Title</th>
			<th class='grayback' style='border:1px solid white;' align-left class='standardText'>Country</th>
			<th class='grayback' style='border:1px solid white;' align-left class='standardText'>Number of Ratings</th>
			
			
   
			<?php
	
				foreach($jurs as $id=>$name) 
				echo "<th class='grayback' style='border:1px solid white;' align=left valign=top class='standardText'>$name
				<div class=orangeText><br>V:".$numberOfVotes[$id]."</div>".(isset($login[$id])?("Login:<br/>".date( 'm-d',strtotime($login[$id]))):"")."</th>";  
				 //prints out all juror names

						
			?>
            
            
            
			
			
			
		</tr>
		<?php
	}


?>


