<?php
	// inputan
	$u ="admin";
	$p ="123";

	 // proses
	$iu = $_GET['username'];
	$ip = $_GET['password'];

	// decision / percabangan
	if ($iu == $u && $ip == $p) {

		// output 1
		header("location:dashboard.php");

	}else{

		//output 2
		echo "username dan password salah!"; 
	}

	 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="1-get.php"method="get">
		<input type="text" name="username" id="usename">
		<input type="password" name="password" id="password"><br>
		<input type="submit" name="login" value="login">
	</form>

</body>
</html>