<style>
input[type="text"] {
	height:500px;
    width:500px;
    word-break: break-word;
}
</style>
<?php

$id = $_GET['id'];
include 'connect.php';
if(count($_POST)>0) {
$id = $_GET['id'];
$notes =  htmlspecialchars($_POST['notes'],ENT_QUOTES,'UTF-8');
$querya="UPDATE intl23_proposal_backup set notes='" . $notes . "' WHERE id='" . $_GET['id'] . "'";
$resulta = mysql_query($querya, $conn);
$message = "Record Modified Successfully";
}

?>
<html>
<head>
	<link href="https://apexart.org/assests/standardWhite.css" rel="stylesheet" type="text/css">
<title>Add proposal notes</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message;
$id = $_GET['id']; 
echo '<div style="padding-bottom:5px;">
<a href="protono.php#'.$id.'">Return to Submissions (protono)</a>
</div>';
} ?>
</div>

Submission: <? 
header("Content-Type: text/html;charset=UTF-8");
$id = $_GET['id'];
$query="SELECT * FROM intl23_proposal_backup WHERE id='" . $_GET['id'] . "'";
$result = mysql_query($query, $conn);
$row = mysql_fetch_assoc($result);
echo $row['name'];
?><br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">

Notes: <br>
<textarea name="notes" id="notes" rows="10" cols="50"><?php echo $row['notes']; ?></textarea><br>

<input size="50" type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>