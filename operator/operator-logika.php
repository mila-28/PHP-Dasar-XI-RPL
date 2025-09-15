<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operator logika</title>
</head>
<body>
	<?php 
	    $A = true;
	    $B =false;

	     echo "========operator logika and ========";
	     echo"<br>";
	     echo " true && false " . var_dump($A && $B);
	     echo"<br>";
	     echo "false && false" . var_dump ($B && $B);
	     echo"<br>";
	     echo "true && true "  . var_dump($A && $A);
	     echo"<br>";
	     echo "false && true "  . var_dump($B && $A);
	     echo"<br>";


	     echo "=========operator logika or========";
	     echo"<br>";
	     echo "A || B " . var_dump($A || $B);
	     echo"<br>";
	     echo "B || B" . var_dump ($B || $B);
	     echo"<br>";
	     echo "A || A " . var_dump($A || $A);
	     echo"<br>";
	     echo "B || A " . var_dump($B || $A);
	     echo"<br>";

	      echo "=========operator logika nagasi========";
	     echo"<br>";
	     echo "! B " . var_dump(!  $B);
	     echo"<br>";
	     echo "! A" . var_dump (!  $A);
	       
	 ?>
</body>
</html>