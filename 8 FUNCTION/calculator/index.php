<?php 

$hasil=0;

if (isset($_POST['tambah'])|| isset($_POST['kurang']) || isset($_POST['kali']) || isset($_POST['bagi']))


{
	$a1=$_POST['angka1'];
	$a2=$_POST['angka2'];

	function tambah(){
		global $a1 , $a2;
		return $a1 + $a2;
	}
	function kurang(){
		global $a1 , $a2;
		return $a1 - $a2;
	}
	function kali(){
		global $a1 , $a2;
		return $a1 * $a2;
	}
	function bagi(){
		global $a1 , $a2;
		return $a1 / $a2;
	}
	if (isset($_POST['tambah'])) {
		$hasil = tambah();
		
	}elseif (isset($_POST['kurang'])) {
		$hasil = kurang();
		
	}elseif (isset($_POST['kali'])) {
		$hasil = kali();
		
	}elseif (isset($_POST['bagi'])) {
		$hasil = bagi();
    }

}




 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>calculator</title>

	 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex justify-content-center align-items-center" style="min-height: 100vh">
		<div class="card bg-white py-5 px-4 text-center">
			<h1>caculator buatan mila</h1>
			<div class='alert alert-primary mt-4 text-end' role= 'alert'>
				<?= $hasil ?>
	       </div>
			<form method="post" action="">
			<input type="number" name="angka1" class="form-control my-2">
			<input type="number" name="angka2" class="form-control my-2">
			<div class="d-flex justify-content-between">
			<button class="btn btn-secondary" type="sumbit" name="tambah">+</button>
			<button class="btn btn-secondary" type="sumbit" name="kurang">-</button>
			<button class="btn btn-secondary" type="sumbit" name="kali">*</button>
			<button class="btn btn-secondary" type="sumbit" name="bagi">/</button>
			</form>
			
		</div>
	</div>

</body>
</html>