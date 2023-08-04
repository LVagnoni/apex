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
		$query="INSERT INTO rating (juror_id, proposal_id, score, created_on) VALUES ";
		$leng=strlen($query);
		$i=0;
		//echo "QUERY:  $query <br><br>";
		
		//echo "<center><br><br><br><br><br>";
		foreach($v as $pr=>$sc){
			
			
			
			$query2="SELECT * FROM rating where juror_id=$x AND proposal_id=$pr;";
			
			
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
		
		header("location: jurypage-bulawsky.php");
		/*
		$num_rows = mysql_num_rows($result);
		if ($num_rows>=1) 
		{
		
			die("<br><br><br><br><br><br><br><br><br><br><br><center>You already voted for Submission $y. Your vote was $z.<br><a href='listjuror.php'>go back</a><br>");
		}
		*/
		
		
	}
	
	else header("location: jurypage-bulawsky.php"); 
	//die("Wrong parameters");
	

?>

		
	<link href="https://apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
<title>apexart :: NYC20 :: Juror Vote Recorded</title>
<table width="800" align="center">
<tr><td class="standardText" align="center"> 	    
	  
	  
	  
	    <br><br /><br />
	    Your vote has been recorded.<br>
	    Thank you!
	    
	    <br><a href="jurypage-bulawsky.php">Back to submissions list</a>
	    
	   </td></tr></table>
	    
		</center>
	    
