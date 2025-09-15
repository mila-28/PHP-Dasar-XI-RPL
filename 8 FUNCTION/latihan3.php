<?php 

$pelajar="kiran";

function siswa($nama="kirana", $kelas="XI RPL"){
	global $pelajar; //menganbil variabel dari luar function
	echo "siswa kelas $kelas yang bernama $pelajar selalu bolos";

}

siswa();


 ?>