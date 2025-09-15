<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugas nilai 3 percabangan</title>
</head>
<body>
	<?php 
	$na = 80;
	if ($na >= 110){
		    echo("keterangan : lulus");
		    echo"<br>";
            echo("predikat : A");
		    echo"<br>";
		    echo("nilai akhir : . $na");
		    echo"<br>";

		}else if ($na >= 80){
			echo("keterangan : lulus");
		    echo"<br>";
		    echo("predikat : B");
		    echo"<br>";
		    echo("nilai akhir : . $na");
		    echo"<br>";
			
		}else if ($na >= 70){
			echo("keterangan : lulus");
		    echo"<br>";
		    echo("predikat : C");
		    echo"<br>";
		    echo("nilai akhir : . $na");
		    echo"<br>";

		}else if ($na >= 60){
			echo("keterangan :Tidak lulus");
		    echo"<br>";
		    echo("predikat : D");
		    echo"<br>";
		    echo("nilai akhir : . $na");
		    echo"<br>";

		}else if ($na <= 59){
			echo("keterangan : Tidak lulus");
		    echo"<br>";
		    echo("predikat : E");
		    echo"<br>";
		    echo("nilai akhir : . $na");
		    echo"<br>";
		} else if ($na <= 0){ 
			echo("keterangan : nilai tidak valid");
		    echo"<br>";
		    echo("predikat : nilai tidak valid ");
		    echo"<br>";
		    echo("nilai akhir : . $na");
		    
		}     

	 ?>

</body>
</html>