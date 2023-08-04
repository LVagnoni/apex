<?php
	include("../../header.php");
	?>
	<br>
    <meta http-equiv="refresh" content="300" >
    <link href="http://www.apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
    <div align="center">
	<div class="exhibitionProgram">Votes by Anna Campbell's class</div><br>
	<?php
	include ('../connect.php');


	$sql = "SELECT COUNT(*) FROM intl23_rating WHERE juror_id IN (657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676)";
	$result = mysql_query($sql);
	$num = mysql_result($result, 0);
	$sql2 = "SELECT COUNT(*) FROM intl23_rating";
	$result2 = mysql_query($sql2);
	$num2 = mysql_result($result2, 0);
	echo "<div class='orangeText'><strong>Number of votes submitted by class: $num  &#183;&#183;&#183; Total votes by all jurors: $num2</strong> </div><br> ";
	
	
		
		for ($i=1;$i<=500;$i++)// no more than MAXSUBS submissions
			for ($j=1;$j<=300;$j++) // no more than MAXVOTES votes
			{
				$propRanks[$i][$j]=0;//fill up the array with 0 to account for missing votes
			}	
				
		for ($j=1;$j<=50;$j++) 
		{
			$login[$j]=0;
			$numberOfVotes[$j]=0;	//zero out all votes
		}		
		//SELECT date_format(thedate, '%M %e, %Y, %l:%i%p') as newdate FROM your_table;			
					
		// get juror names from the JUROR table
		$query3="SELECT first, last, id, login_on, password FROM intl23_juror WHERE class=28 ORDER BY first ASC";
		$result3 = mysql_query($query3, $conn); 
		
		if (!$result3) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		
		while ($row3 = mysql_fetch_assoc($result3)){
			$idd=$row3["id"];

				
			$jurs[$idd]=$row3['first']." ".$row3['last'];
			//has juror names
			$login[$idd]=$row3["login_on"];
			//echo $row3["fullname"]."    ".$row3["password"].",<br/>";
		}
		
		
		
		
		// get votes count
		$query3="SELECT count(*) as thecount, juror_id FROM intl23_rating GROUP BY juror_id";
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
			
			$query3="SELECT score, juror_id, proposal_id FROM intl23_rating WHERE juror_id=$x";
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
		$query="SELECT * FROM intl23_proposal WHERE is_accepted=0";	
		$query3="SELECT avg(score) as 'aver', count(score) as 'cnt', sum(score) as 'sum', proposal_id FROM intl23_rating GROUP BY proposal_id";
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
			
			$query4="UPDATE intl23_proposal SET averageRate = $k WHERE id=$j;";
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
	$query="SELECT * FROM intl23_proposal WHERE is_accepted=0 ORDER BY averageRate DESC";
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
                echo "<td  class='grayback' style='border:1px solid white;' align=left class='standardText' style='text-transform: uppercase;'>".$avscore."</td>";
 	    echo "<td class='grayback' style='border:1px solid white;' align-left class='standardText'><a href='../anon.php?sub=".$rowID."'>$rowID</a></td>";
		//echo "<th>".$row["email"]."</th>";
		echo "<td  width=50 class='grayback' style='border:1px solid white;' align-left class='standardText'>".$row["title"]."</td>";
		
		
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
	include("../../footer.php");
	
	
	
	
	 
	
	
	function printHEADERS()
	{
	  global $jurs;
	  global $numberOfVotes;
	  global $login;
	  ?>

	  <tr>
		    <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Average<br />score by<br />600+ jurors</th>	
			<th class='grayback' style='border:1px solid white;' align-left class='standardText'>ID</th>
			<th class='grayback' style='border:1px solid white;' align-left class='standardText'>Title</th>
            
			
			
   
			<?php


				foreach($jurs as $id=>$name) 
				echo "<th class='grayback' style='border:1px solid white;' align=left valign=top class='standardText'>$name<br>
				<div class=orangeText>V:".$numberOfVotes[$id]."</div>".(isset($login[$id])?("Login:<br/>".date( 'm-d',strtotime($login[$id]))):"")."</th>";  
				 //prints out all juror names

						
			?>
            
            
            
			
			
			
		</tr>
		<?php
	}


?>










