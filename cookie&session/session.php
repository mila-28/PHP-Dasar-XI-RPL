<?php
session_start();



// ketika button  
   if (isset($_POST['buat'])) {
   	// nama dari infutan
   	$namasession=$_POST['session'];
   	// membuat cookie
   	 $_SESSION['isi']= $namasession;

   	 header("Location:session.php");

   }
   if (isset($_POST['hapus'])) {

   	// menghapus cookie
   	 setcookie('kue', "" ,time () - 3600);

   	 header("Location:cookie.php");

   }



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cookie</title>
</head>
<body>
	<h1>nanti session muncul dibawah</h1>
	<?php if (isset($_SESSION['isi'])): ?>
		<h4>sekarang makan kue <?= $_SESSION['isi']?><h4>

	 <?php endif ?>
	
	<form method="post" action="">
		<input type="text" name="session">
		<button type="sumbit" name="buat">buat<button>
		<button type="sumbit" name="hapus">hapus<button>
	</form>
</body>
</html>

