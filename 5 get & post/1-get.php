<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Get di PHP</title>
</head>
<body>
	<h1>Get di PHP</h1>
	<form action="1-get.php"method="get">
		<input type="text" name="nama"placeholder="Nama">
		<input type="submit" value ="nama"placeholder="Submit">	
	</form>
	<?php
	echo $_GET['nama']; 	
	
	 ?>

</body>
</html>