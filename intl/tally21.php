<html>
<head>
    <meta http-equiv="refresh" content="300" >
    <link href="https://www.apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
	define('MAXSUBS', 1000);// adjust the number of maximum number of submissions
	define('MAXVOTES', 430);// adjust the number of maxim number of jurors
	?>

	<br>
    <div align="center">
    <table align="center">
        <tr>
            <td width="953" valign="top">
                <table align="left" bgcolor="#FFFFFF">
                    <tr>
                        <td height="34" colspan="4" valign="top">
                            <span class="exhibitionProgram">INTL 2021 votes</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10" valign="top"></td>
                        <td width="170" valign="top" class='standardTextSm'>
                            2 - Shane Selzers<br />
                            3 - Maria Seda-Reeder<br />
                            4 - Ben Dunn<br />
                            5 - Lynn Cazabon<br />
                            6 - Amy Stoker<br />
                        </td>
                        <td width="181" valign="top" class='standardTextSm'>
                            7 - Kim Dhillon<br />
                            8 - Nathaniel Katz<br />
                            9 - Media Farzin<br />
                            10 - So Jin Chun<br />
                            11 - Jeff Martin Heinzl<br />
                        </td>
                        <td width="183" valign="top" class='standardTextSm'>
                            12 - Christian Gerstheimer<br />
                            13 - Stella Mars<br />
                            14 - Miguel Aragon<br />
                            15 - Gulsen Bal<br />
                            16 - Jarrett Mellenbruch<br />
                        </td>
                        <td width="183" valign="top" class='standardTextSm'>
                            17 - Kostas Bassanos<br />
                            19 - Paul O'Neill<br />
                            20 - Ben Parry<br />
                            21 - Kevin Chen<br />
                            22 - Kevin Chen<br />
                        </td>
                        <td width="183" valign="top" class='standardTextSm'>
                            23 - Kevin Chen<br />
                            24 - Trine Friis Sorenson<br />
                            25 - Suzanne Mooney<br />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
    </table>
	<?php
	include ('connect.php');
	$sql = "SELECT COUNT(*) FROM guo_testrating";
	$result = mysql_query($sql);
	$num = mysql_result($result, 0);

	$sql_limiter = "SELECT COUNT(checked_count) FROM guo_testproposal WHERE checked_count < vote_limiter;";
	$result_limiter = mysql_query($sql_limiter);
	$num_limiter = mysql_result($result_limiter, 0);

	$sql2 = "SELECT COUNT(*) FROM guo_testrating";
	$result2 = mysql_query($sql2);
	$num2 = mysql_result($result2, 0);
    $propRanks = [];
	echo
    "   <div class='orangeText'><strong>Total votes by all jurors: $num2</strong></div>
        <br/> 
        <div class='orangeText'><strong>Number of proposals below current limit: $num_limiter</strong></div>
        <br/> 
    	<div class='standardTextSm'>This table will fill in columns with juror names as they log in. If you don't see their name in a column, they haven't logged in yet.</div>
    	<br/>";

		for ($i = 1; $i < MAXSUBS; $i++){// no more than MAXSUBS submissions
            for ($j = 1; $j < MAXVOTES; $j++) // no more than MAXVOTES votes
            {
                $propRanks[$i][$j] = 0;//fill up the array with 0 to account for missing votes
            }
        }

		for ($j = 1; $j < MAXVOTES; $j++)
		{
			$login[$j] = 0;
			$numberOfVotes[$j] = 0;	//zero out all votes
		}		
		//SELECT date_format(thedate, '%M %e, %Y, %l:%i%p') as newdate FROM your_table;			
					
		// get juror names from the JUROR table
		$query3="SELECT first, last, id, class, login_on, password FROM guo_testjuror WHERE login_on IS NOT NULL ORDER BY class, first ASC";
		$result3 = mysql_query($query3, $conn); 

		if (!$result3) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		
		while ($row3 = mysql_fetch_assoc($result3)){
			$idd = $row3["id"];
			$jurs[$idd] = $row3['first'] . " " . $row3['last'] . "<br>" . $row3['class'];
			//has juror names
			$login[$idd] = $row3["login_on"];
			//echo $row3["fullname"]."    ".$row3["password"].",<br/>";
		}

		// get votes count
		$query3 = "SELECT count(*) as thecount, juror_id FROM guo_testrating GROUP BY juror_id";
		$result3 = mysql_query($query3, $conn); 
		
		if (!$result3) {
		    echo 'Could not run query: ' . mysql_error();
		    exit;
		}
		
		while ($row3 = mysql_fetch_assoc($result3)){
			$idd = $row3["juror_id"];
			$numberOfVotes[$idd] = $row3["thecount"];	//has juror names
			//echo $idd.", ";
			//echo $numberOfVotes[$idd].",<br/>";
		}

		foreach($jurs as $x => $y){  //fill up the 2 dimensional juror/submission array
			$query3 = "SELECT score, juror_id, proposal_id FROM guo_testrating WHERE juror_id=$x";
			$result3 = mysql_query($query3, $conn); 
			if (!$result3) {
			    echo 'Could not run query: ' . mysql_error();
			    exit;
			}
			
			while ($row3 = mysql_fetch_assoc($result3)){
                $id = $row3["proposal_id"];
                $score = $row3["score"];
                $propRanks[$id][$x] = $score;//[submission_id][juror]
			}
		}
	
		// get all the score statistics for each submission_id;
		$query = "SELECT * FROM guo_testproposal WHERE is_accepted!=1";
		$query3 = "SELECT avg(score) as 'aver', count(score) as 'cnt', sum(score) as 'sum', proposal_id FROM guo_testrating GROUP BY proposal_id";
		$result3 = mysql_query($query3, $conn); 
		
		if (!$result3) {
		    echo '<br/><br/>Could not run query: ' . mysql_error()."<br/>";
		    exit;
		}

		for ($i = 1; $i < MAXSUBS; $i++) {
            $averageScores[$i] = 0;//fill up the array with 0 to account for missing votes
        }

		while ($row3 = mysql_fetch_assoc($result3)){
			//$i=$row3["aver"];
			$j = $row3["proposal_id"];
			$k = $row3["aver"];
			$averageScores[$j] = $k;				//has submission_id=>score average
			$sumScores[$j] = $row3["sum"];				//has proposal_id=>score sum
			$countScores[$j] = $row3["cnt"];				//has proposal_id=>score count, how many voted
			
			$query4 = "UPDATE guo_testproposal SET averageRate = $k WHERE id = $j;";
			$result4 = mysql_query($query4, $conn); 
			
			if (!$result4) {
			    echo '<br/><br/>Could not run query: ' . mysql_error()."<br/>";
			    exit;
			}
		}
		
	/*
	SELECT * , nickname IS NULL AS isnull
	FROM people 
	ORDER BY isnull ASC, nickname ASC
	*/
		
		
	//$query="SELECT *, averageRate IS NULL AS isnull FROM submission ORDER BY isnull DESC, averageRate DESC";	
	$query = "SELECT * FROM guo_testproposal WHERE is_accepted!=1 ORDER BY averageRate DESC";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	
	echo "<table class='t2' align='center'>";

	//printHEADERS();

	$jj = 0; $hh = 0;
	$submission_position = 0;

	while ($row = mysql_fetch_assoc($result)) {
	    if ($jj % 30 === 0) {
            printHEADERS(); //print the headers every 30 entries
        }

        $submission_position++;
        $ff = $row["id"];
		$rowID = $row["id"];

		$avscore = number_format($averageScores[$rowID],2);
		//if (isset($averageScores[$rowID])) $avscore=number_format($averageScores[$rowID],2);		else $avscore="No votes";
		
		if (isset($countScores[$rowID])) {
            $CScore = $countScores[$rowID];
        }
		else {
            $CScore = "No votes";
        }

		if ($jj % 3 === 1) {
            $type = "alt";
        }
		//if ($jj%3==2) $type="alt1";
        else if ($jj % 3 === 0) {
            $type = "alt1";
        }

		echo "<tr>";
		echo "<td style='border:1px solid white;'  class='grayback' align=left class='standardText' style='text-transform: uppercase;'>".$submission_position."</td>";
		echo "<td  class='grayback' style='border:1px solid white;' align=left class='standardText' style='text-transform: uppercase;'>".$avscore."</td>";
 	    echo "<td class='grayback' style='border:1px solid white;' align-left class='standardText'><a href='anon.php?sub=".$rowID."'>$rowID</a></td>";
		//echo "<th>".$row["email"]."</th>";
		echo "<td  width='50' class='grayback' style='border:1px solid white;' align-left class='standardText'>".$row["title"]."</td>";
		
		echo "<td  width='50' class='grayback' style='border:1px solid white;' align-left class='standardText'>".$row["country"]."</td>";
		echo "<td  style='border:1px solid white;' class='grayback' align-left class='standardText'>".$CScore."</td>";
        echo "<td  style='color:red;border:1px solid white;' class='grayback' align-left class='standardText'>".$row['vote_limiter']."</td>";
		//echo "<th>".$row["created_on"]."</th>";
		
		//$propRanks[$x][$id]
		
		//print out individual votes now
		$ff = 0;
		foreach($jurs as $id => $name)
		{
            if ($ff % 3 === 1) {
                $typeF = "alt";
            }
            //if ($jj%3==2) $type="alt1";
            else if ($ff % 3 === 0) {
                $typeF = "alt1";
            }
            $score = isset($propRanks[$rowID][$id]) ? $propRanks[$rowID][$id] : $score = " ";

            echo "<td class='grayback' style='border:1px solid white;' align-left class='standardText'>";
            if ($score === 0) {
                $score = " ";
            }
            //echo "$id=$score";
            echo "$score";
            echo "</td>";

            $ff++;
        }
		echo "</tr>";
		$jj++;
		$hh++;
	}
	echo "</table>";
	mysql_free_result($result);

	function printHEADERS()
	{
        global $jurs;
        global $numberOfVotes;
        global $login;

        echo
        "<table align='center'>
            <tr>
                <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Position</th>
                <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Average<br />Score</th>
                <th class='grayback' style='border:1px solid white;' align-left class='standardText'>ID</th>
                <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Title</th>
                <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Country</th>
                <th class='grayback' style='border:1px solid white;' align-left class='standardText'>Number of Ratings</th>
                <th class='grayback' style='color: red; border:1px solid white;' align-left class='standardText'>Test of limiter</th>";

        foreach($jurs as $id => $name) {
            echo
                "<th class='grayback' style='border:1px solid white;' align=left valign=top class='standardText'>$name
                    <div class=orangeText><br>V:" . (isset($numberOfVotes[$id]) ? $numberOfVotes[$id] : "" ) . "</div>" . (isset($login[$id]) ? ("Login:<br/>" . date( 'm-d',strtotime($login[$id]))):"") . "</th>";
        }
                     //prints out all juror names
        echo "</tr>";
	}
?>
</body>
</html>
