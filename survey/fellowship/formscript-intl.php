<?php
	include('../../header.php');
	include ('../fellowship/connect.php');
	//error_reporting(E_ALL);
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang=en-US><HEAD><TITLE>apexart :: International Fellowship Application Form</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
	<?php
	 
	$query = sprintf("INSERT INTO questionnaire (`recommender`, `relationship`, `relationshipl`, `first`, `last`, `created_on`, `address`, `phone`, `email`, `birth`, `pronouns`, `citizen`, `residence`, `country`,`language`,`fluency`,`language2`,`fluency2`,`language3`,`fluency3`,`language4`,`fluency4`,`language5`,`fluency5`,`ername`, `erphone`, `eremail`, `errel`, `medical`,`conditions`, `planned`, `nyc`, `dest1`, `date1`, `reason1`, `take1`, `sponsor1`, `dest2`, `date2`, `reason2`, `take2`, `sponsor2`, `dest3`, `date3`, `reason3`, `take3`, `sponsor3`, `dest4`, `date4`, `reason4`, `take4`, `sponsor4`, `dest5`, `date5`, `reason5`, `take5`, `sponsor5`, `dest6`, `date6`, `reason6`, `dest7`, `date7`, `reason7`, `dest8`, `date8`, `reason8`, `dest9`, `date9`, `reason9`, `dest10`, `date10`, `reason10`, `gentrav`, `res1`, `resloc1`, `resdate1`, `res2`, `resloc2`, `resdate2`, `res3`, `resloc3`, `resdate3`, `res4`, `resloc4`, `resdate4`, `res5`, `resloc5`, `resdate5`, `benefit`,`gain`, `support`, `available`, `question`, `understand`) VALUES('%s','%s','%s','%s','%s',NOW(),'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

		mysql_real_escape_string($_POST['recommender']), 	
		mysql_real_escape_string($_POST['relationship']),
		mysql_real_escape_string($_POST['relationshipl']), 
		mysql_real_escape_string($_POST['first']), 
		mysql_real_escape_string($_POST['last']), 
		//mysql_real_escape_string($_POST['created_on']),
		mysql_real_escape_string($_POST['address']),
	    mysql_real_escape_string($_POST['phone']),
	    mysql_real_escape_string($_POST['email']),
	    mysql_real_escape_string($_POST['birth']),
	    mysql_real_escape_string($_POST['pronouns']),
	    mysql_real_escape_string($_POST['citizen']),
	    mysql_real_escape_string($_POST['residence']),
	    mysql_real_escape_string($_POST['country']),
		mysql_real_escape_string($_POST['language']),
		mysql_real_escape_string($_POST['fluency']),
		mysql_real_escape_string($_POST['language2']),
		mysql_real_escape_string($_POST['fluency2']),
		mysql_real_escape_string($_POST['language3']),
		mysql_real_escape_string($_POST['fluency3']),
		mysql_real_escape_string($_POST['language4']),
		mysql_real_escape_string($_POST['fluency4']),
		mysql_real_escape_string($_POST['language5']),
		mysql_real_escape_string($_POST['fluency5']),
	    mysql_real_escape_string($_POST['ername']),
	    mysql_real_escape_string($_POST['erphone']),
	    mysql_real_escape_string($_POST['eremail']),
	    mysql_real_escape_string($_POST['errel']),
	    mysql_real_escape_string($_POST['medical']),
	    mysql_real_escape_string($_POST['conditions']),
	    mysql_real_escape_string($_POST['planned']),
	    mysql_real_escape_string($_POST['nyc']),
	    mysql_real_escape_string($_POST['dest1']),
	    mysql_real_escape_string($_POST['date1']),
	    mysql_real_escape_string($_POST['reason1']),
	    mysql_real_escape_string($_POST['take1']),
	    mysql_real_escape_string($_POST['sponsor1']),
	    mysql_real_escape_string($_POST['dest2']),
	    mysql_real_escape_string($_POST['date2']),
	    mysql_real_escape_string($_POST['reason2']),
	    mysql_real_escape_string($_POST['take2']),
	    mysql_real_escape_string($_POST['sponsor2']),
	    mysql_real_escape_string($_POST['dest3']),
	    mysql_real_escape_string($_POST['date3']),
	    mysql_real_escape_string($_POST['reason3']),
	    mysql_real_escape_string($_POST['take3']),
	    mysql_real_escape_string($_POST['sponsor3']),
	    mysql_real_escape_string($_POST['dest4']),
	    mysql_real_escape_string($_POST['date4']),
	    mysql_real_escape_string($_POST['reason4']),
	    mysql_real_escape_string($_POST['take4']),
	    mysql_real_escape_string($_POST['sponsor4']),
	    mysql_real_escape_string($_POST['dest5']),
	    mysql_real_escape_string($_POST['date5']),
	    mysql_real_escape_string($_POST['reason5']),
	    mysql_real_escape_string($_POST['take5']),
	    mysql_real_escape_string($_POST['sponsor5']),
	    mysql_real_escape_string($_POST['dest6']),
	    mysql_real_escape_string($_POST['date6']),
	    mysql_real_escape_string($_POST['reason6']),
	    mysql_real_escape_string($_POST['dest7']),
	    mysql_real_escape_string($_POST['date7']),
	    mysql_real_escape_string($_POST['reason7']),
	    mysql_real_escape_string($_POST['dest8']),
	    mysql_real_escape_string($_POST['date8']),
	    mysql_real_escape_string($_POST['reason8']),
	    mysql_real_escape_string($_POST['dest9']),
	    mysql_real_escape_string($_POST['date9']),
	    mysql_real_escape_string($_POST['reason9']),
	    mysql_real_escape_string($_POST['dest10']),
	    mysql_real_escape_string($_POST['date10']),
	    mysql_real_escape_string($_POST['reason10']),
	    mysql_real_escape_string($_POST['gentrav']),
	    mysql_real_escape_string($_POST['res1']),
	    mysql_real_escape_string($_POST['resloc1']),
	    mysql_real_escape_string($_POST['resdate1']),
	    mysql_real_escape_string($_POST['res2']),
	    mysql_real_escape_string($_POST['resloc2']),
	    mysql_real_escape_string($_POST['resdate2']),
	    mysql_real_escape_string($_POST['res3']),
	    mysql_real_escape_string($_POST['resloc3']),
	    mysql_real_escape_string($_POST['resdate3']),
	    mysql_real_escape_string($_POST['res4']),
	    mysql_real_escape_string($_POST['resloc4']),
	    mysql_real_escape_string($_POST['resdate4']),
	    mysql_real_escape_string($_POST['res5']),
	    mysql_real_escape_string($_POST['resloc5']),
	    mysql_real_escape_string($_POST['resdate5']),
	    mysql_real_escape_string($_POST['benefit']),
	    mysql_real_escape_string($_POST['gain']),
		mysql_real_escape_string($_POST['support']),
		mysql_real_escape_string($_POST['available']),
		mysql_real_escape_string($_POST['question']),
	    mysql_real_escape_string($_POST['understand']));
		
	
		$result = mysql_query($query, $conn); 
			
			
		if (!$result) {
		    $message  = '<br>Invalid query: ' . mysql_error() . "<br>";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		
		$to = $_POST['email'];
		$to .= ", info@apexart.org";
		if (!isset($_POST['email'])||empty($_POST['email'])) $_POST['email']="noemail@lentered.com";
		$from = "info@apexart.org";
		$subject = 'apexart International Fellowship Application Form';
	    $message = 'apexart International Fellowship Application Form'.
					  nl2br($body)
					."

Name of Recommender: {$_POST['recommender']} 
Relationship to Recommender: {$_POST['relationship']}
Length of relationship to Recommender: {$_POST['relationshipl']}
First Name: {$_POST['first']} 
Last Name: {$_POST['last']} 
Address: {$_POST['address']} 
Phone: {$_POST['phone']}
Email: {$_POST['email']}
Birthdate: {$_POST['birth']}
Pronouns: {$_POST['pronouns']}
Citizenship: {$_POST['citizen']}
Country of Residence: {$_POST['residence']}
Languages: {$_POST['language']} 

Emergency Contact: 
	Name: {$_POST['ername']}
	Phone: {$_POST['erphone']}
	Email: {$_POST['eremail']}
	Relationship: {$_POST['errel']}

Any planned travel during next 12 months?
	{$_POST['planned']}

Please list the destinations and reasons for your travel over the past five years: 
{$_POST['dest1']}

Any additional countries traveled to:
	{$_POST['gentrav']}

What is your availability during the next 12 months? Do you have planned residencies or travel? If so please provide details.
	{$_POST['planned']}

After you have looked at the description of the Fellowship and associated materials on our website www.apexart.org, tell us why this is a good time for you to be part of an apexart International Fellowship.  (200 words minimum)
	{$_POST['benefit']}

What do you hope to gain from the experience? (200 words minimum)
	{$_POST['gain']}


The Fellowship Program is very active, with 3-4 activities per day, often requiring a lot of walking, traveling alone during the evening, using public transportation, and participating in a range of physical and social activities. The assigned activities are required. When necessary, we work with Fellows to find alternatives in the event of physical limitations, however the program still remains physically demanding. Please let us know if you have any concerns.
	{$_POST['medical']}

Do you have any medical conditions we should be aware of?
	{$_POST['conditions']}

Please state your availability over the next 9 months:
	{$_POST['available']}

Describe how you will be able to arrange time away from your daily life, work, projects, and other responsibilities for one month in order to focus exclusively on the Fellowship.
	{$_POST['support']}

If you have any questions about what is expected of Fellows in our program, or about our Fellowship Program more broadly, please list them here. We will be happy to answer.
	{$_POST['question']}

An apexart fellowship is not about making work.
 You do not get a studio.
We will not schedule meetings with curators, artists or people to promote your work. 
It is not an opportunity for networking, career development, research, or production. 

It focuses on new experiences and personal development that may affect the work you do and will likely affect the way you think about some things. It is a cultural and experiential immersion program that is intended to be part of a creative catalytic process, and includes many diverse activities some of which you would not ordinarily do. The activities are not elective unless you have done the exact same thing, in the same exact place with the same exact people. 

You are agreeing to not to make artwork, network, promote or engage in other work during the program but to concentrate on new experiences.
Clicking the box below is a covenant between you and us.
	{$_POST['understand']}


Thank you for applying for the apexart International Fellowship.
Please note that more deserving candidates are recommended than apexart can accommodate. We will contact you with further details regarding your application status.


		
";
					
$headers = 'From: info@apexart.org' . "\r\n" .
    'Reply-To: info@apexart.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


		
		
				
	
$resultw="Application submitted.";
					echo "<center><br><br><br><font color=green size=4>$resultw</font><br><a href='http://www.apexart.org'>Return to apexart website.</a><br>";
					die();
			
			


?>



</HEAD>


</body>
</html>