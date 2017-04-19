<html>
    <head>
        <meta charset="UTF-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
        <title>Profile</title>
	<link rel="stylesheet" href="w3.css">
    </head>
<body style="max-width: 99%; margin: auto;" class="w3-green">
	<?php
		$userTrace = fopen("profileopen.txt", "r");
		$email = fgets($userTrace);
		fclose($userTrace);
		$username = strstr($email, '@', true);
		echo '<div><h1 class="w3-border w3-padding w3-white w3-text-black">Welcome '.$username.'</h1>';
	?>

	<p class="w3-half w3-border w3-padding">
		Address line 1<br>City, STATE, ZipCode<br>Phone Number
	</p>
	</div>
</body>
</html>