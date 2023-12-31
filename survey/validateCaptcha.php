<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Validate Captcha</title>
	<link rel="stylesheet" href="styles.css" />
	<style>
		body { margin: 0; padding: 0; font-family: Arial, sans-serif; font-size: 14px; line-height: 180%; }
		.center { margin: 0 auto; max-width: 900px; }
		.green {color: green;}
		.red {color: red;}
	</style>
</head>
<body>

<div class="center">
	
	<?php
		$captchaResult = $_POST["captchaResult"];
		$firstNumber = $_POST["firstNumber"];
		$secondNumber = $_POST["secondNumber"];

		$checkTotal = $firstNumber + $secondNumber;

		if ($captchaResult == $checkTotal) {
			echo '<h2 class="green">Captcha OK</h2>';
		} else {
			echo '<h2 class="red">Wrong Captcha. Try Again</h2>';
		}
	?>
</div>

</body>
</html>