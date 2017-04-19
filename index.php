<html>
    <head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
        <title>Login</title>
	<link rel="stylesheet" href="w3.css">
    </head>
<body style="max-width: 99%; margin: auto;" class="w3-green">
	<?php
		$cleared = array
		(
			array("bob@mail.com","code"),
			array("lisa@mail.com","locked")
		);
		$email = $password = "";
		$email = ($_POST["email"]);
		$password = ($_POST["password"]);
		if ($email != "") {
			if ($email === $cleared[0][0] || $email === $cleared[1][0]) {
				if ($password == $cleared[0][1] || $password == $cleared[1][1]) {
					$userTrace = fopen("profileopen.txt","w") or die("Unable to open file!");
					fwrite($userTrace, $email."\n");
					fclose($userTrace);
					echo '<script type="text/javascript">window.location = "http://localbz.co/loginmock/profile.php";</script>';
				}
			}
			else {
				echo "Failed, enter valid login.";
			}
		}
	?>

	<h1>Welcome</h1>
	<div class="w3-container w3-center" id="mainview">
	<h2>Login here:</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="w3-center">
			Email:<input name="email" id="email" type="email" value="<?php echo $email; ?>" required autofocus></input>
			<p id="invalidemail"></p>
			Password:<input name="password" id="password" type="password" value="<?php echo $password; ?>" required></input>
			<input type="submit" name="submit" value="Submit"></input>
		</div>
	</form>
	</div>
	<div>
		<h3>This is a technical demonstration of a login request made to the server. Valid logins: bob@mail.com, code; and lisa@mail.com, locked;</h3>
	</div>
        <script type="text/javascript">			
		var email = document.getElementById("email");
		email.addEventListener("keyup", function (event) {
		if (email.validity.typeMismatch) {
			document.getElementById("invalidemail").innerHTML = "Emails require @.";
		}
		else {
			document.getElementById("invalidemail").innerHTML = "";
		}
		}
		);
	</script>
</body>
</html>