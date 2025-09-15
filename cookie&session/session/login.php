<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])){
		header("Location:dashaboard.php");
	}

   if (isset($_POST['login'])) {
   	$username=$_POST['username'];
   	$password=$_POST['password'];


   	 if ($username=="susanti" && $password=="123") {
        $_SESSION['username']=$username;
         $_SESSION['password']=$password;

   	 header("Location:dashaboard.php");

   	}else{
		$pesan="
		    <div class='alert alert-danger mt-4' role= 'alert'>
		      username dan password salah
	       </div>
		";
	}	

   }
   ?>
<!DOCTYPE >
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>

	 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>	
	<div class="container-fluid bg-primry-subtle d-flex align-items-center justify-content-center" style="height: 100vh;">
		<div class="card p-5 text-center">
			<h1>login</h1>
			<?php
			if (isset($pesan)) {
			 	echo $pesan;
			 } 


			 ?>

			
		<form method="post" action="">
			<input type="text" name="username" class="form-control my-3" placeholder="input username">
			<input type="password" name="password" class="form-control my-3" placeholder="input password">
			<button type="submit" name="login" class="btn btn-primary">login</button>
		</form>
		</div>
	</div>
</body>
</html>