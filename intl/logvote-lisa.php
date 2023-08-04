<?php
	//error_reporting(E_ALL);
	include ('connect.php');
	session_start();

	//print_r($_GET["vote"]);

	if(!isset($_SESSION["userID"]))
	{
		include("../header.php");
		echo "<table width='800' align='center'><tr><td class='standardBlack'>";
			 echo "<br><br><br><br><br><br>Please <a href='login.php'>Log In</a> to vote.<br><br><br><br><br><br><br><br><br><br>";	
			 die();
		echo "</table></tr></td>";
	}	

	if (isset($_SESSION["userID"]) && isset($_GET["vote"])){
		$x=$_SESSION["userID"];

		$v=$_GET["vote"];

		$query="INSERT INTO intl23_rating (juror_id, proposal_id, score, created_on) VALUES ";
		$leng=strlen($query);
		$i=0;
		//echo "QUERY:  $query <br><br>";
		
		//echo "<center><br><br><br><br><br>";
		foreach($v as $pr=>$sc){

            // check if checked_count > vote_limiter
            $sql = "SELECT * FROM intl23_proposal WHERE checked_count < vote_limiter AND id = $pr";
            $result = mysql_query($sql, $conn);
            if (!$result) {
                $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
                $message .= 'Whole query: ' . $sql;
                die($message);
            }

            $count = mysql_num_rows($result);
            if ($count > 0) {

                // increase checked_count (++)
                $sql = "UPDATE intl23_proposal SET checked_count = checked_count + 1 WHERE id = $pr";
                if(mysql_query($sql)) {
                    $query2="SELECT * FROM intl23_rating where juror_id=$x AND proposal_id=$pr";

                    $result2 = mysql_query($query2, $conn);

                    if (!$result2) {
                        $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
                        $message .= 'Whole query: ' . $query2;
                        die($message);
                    }

                    $num_rows = mysql_num_rows($result2);

                    if ($num_rows==0)
                    {
                        if (0!=$i) $query.=", ";
                        $query.="($x, $pr, $sc, NOW())";
                        $i++;
                        //echo "Your vote=$sc for proposal $pr was saved.<br><br>";//echo "QUERY:  $query <br><br>";
                    }
                    else
                    {
                        //echo "You (juror #$x) already voted for proposal $pr before.<br>New vote for that proposal is ignored.<br><br>";

                    }

                }
            }
		}
		$query.=";";
		//echo "QUERY:  $query <br><br>";		
	
		//$query="SELECT * FROM rating where juror_id=$x AND proposal_id=$y;";
		if (strlen($query)>$leng+4)	$result = mysql_query($query, $conn);// make sure there is at least 1 entry that is not a duplicate
				else $result=1; 
		
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		header("location: jurypage-lisa.php");
		/*
		$num_rows = mysql_num_rows($result);
		if ($num_rows>=1) 
		{
		
			die("<br><br><br><br><br><br><br><br><br><br><br><center>You already voted for Submission $y. Your vote was $z.<br><a href='listjuror.php'>go back</a><br>");
		}
		*/
		
		
	}
	
	else header("location: jurypage-lisa.php"); 
	//die("Wrong parameters");
	

?>

		
	<link href="http://www.apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
<title>apexart :: INTL20 :: Juror Vote Recorded</title>
<table width="800" align="center">
<tr><td class="standardText" align="center"> 	    
	  
	  
	  
	    <br><br /><br />
	    Your vote has been recorded.<br>
	    Thank you!
	    
	    <br><a href="jurypage-lisa.php">Back to submissions list</a>
	    
	   </td></tr></table>
	    
		</center>
	    
