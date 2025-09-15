<?php 

session_start();

$random=rand(1, 3);
  $player="🧚‍♀️"; //ini yang muncul pertama kali di player
	$robot="🧟‍♀️";  //ini yang muncul pertama kali di robot
	$hasil="";     //
	$loveplayer="🤍🤍🤍";
	$loverobot="🖤🖤🖤";

	if (isset($_POST['reset'])) {
		session_unset();
		session_unset();
	}



// ketika tombol yang di pilih di klik
if (isset($_POST["🫲"]) || isset($_POST["✌️"]) || isset($_POST["✊"]))
{
	// ketika player memilih
	if (isset($_POST['🫲'])){
	$player="🫲";

}elseif(isset($_POST['✌️'])){
	$player="✌️";

}elseif(isset($_POST['✊'])){
	$player="✊";
}

	// ketika robot memilih
	if ($random ==1 ){
	$robot="🫲";

    }

elseif($random == 2){
	$robot="✌️";

    }

elseif($random == 3){
	$robot="✊";
    }

}

//mencari hasil
if ($player == $robot) {
	$hasil =="hasil seri";

	//syarat ketika player menang
}elseif(
	($player=="🫲" && $robot=="✊")||
	($player=="✌️" && $robot=="🫲")||
	($player=="✊" && $robot=="✌️")

)

{
	$hasil="kamu menang";

}elseif(
	// syarat ketika robot menang
	($robot=="🫲" && $player=="✊")||
	($robot=="✌️" && $player == "🫲")||
	($robot=="✊" && $player=="✌️")

)

{

	$hasil="kamu kalah";

	
}

//logika pengurangan nyawa robot dan player
// cek apakah nyawa robot ada?
if ($hasil=="kamu menang") {

	// membuat session nyawa robot dengan isi 2
	if (!isset($_SESSION['nyawarobot'])) {
		$_SESSION['nyawarobot']=2;

  // ubah nyawa robot jadi 1 
	}elseif($_SESSION['nyawarobot']==2){
		$_SESSION['nyawarobot']=1;

 // ubah nyawa robot jadi 0
}elseif($_SESSION['nyawarobot']==1){
		$_SESSION['nyawarobot']=0;

		
	}
	
// cek apakah nyawa robot ada?
}if ($hasil=="kamu kalah") {

	// membuat session nyawa player dengan isi 2
	if (!isset($_SESSION['nyawaplayer'])) {
		$_SESSION['nyawaplayer']=2;

   // ubah nyawa player jadi 1 
	}elseif($_SESSION['nyawaplayer']==2){
		$_SESSION['nyawaplayer']=1;

 // ubah nyawa player jadi 0
}elseif($_SESSION['nyawaplayer']==1){
		$_SESSION['nyawaplayer']=0;

		
	}
}
 // menyimpan nyawa end

if (isset($_SESSION['nyawaplayer']) || isset($_SESSION['nyawarobot'])) {
	$nyawarobot=$_SESSION['nyawarobot'];


  // khusus untuk mengurus nyawa robot
	if (isset($_SESSION['nyawarobot'])) {
		 $nyawarobot=$_SESSION['nyawarobot'];

	if ($nyawarobot==2) {
		$loverobot="🖤🖤";
	}elseif($nyawarobot==1){
	  $loverobot="🖤";
	}elseif($nyawarobot==0){
	  $loverobot="";

	}
}

}


	 // khusus untuk mengurus nyawa player
	if (isset($_SESSION['nyawaplayer'])) {
		 $nyawaplayer=$_SESSION['nyawaplayer'];

	if ($nyawaplayer==2) {
		$loveplayer="🤍🤍";
	}elseif($nyawaplayer==1){
	  $loveplayer="🤍";
	}elseif($nyawaplayer==0){
	  $loveplayer="";

	}

	
}
	

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kertas gunting batu</title>

<!-- ini terkoneksi dengan css dari bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	
	<!-- ini terkoneksi dengan css milik sendiri -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<!-- ini terkoneksi dengan js dari boostrap -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="bg-img">
		<div class="bg-atas d-flex text-light shadow-sm">
			<div class="bg-kiri col-6 ps-4 d-flex align-items-center">
				<h1>🧚‍♀️</h1>
				<h1><?= $loveplayer ?></h1>

			</div>
			<div class=" bg-kanan col-6 pe-4 d-flex align-items-center justify-content-end">
				<h1>🧟‍♀️</h1>
				<h1><?= $loverobot ?></h1>
			</div>
		</div>
		<div class="body d-flex align-items-center justify-content-center flex-column" style="min-height: 85vh;">

			<!-- tombol reset -->

			<form method="post" action="">
				<button type="submit" name="reset" class="btn btn-outline-light mb-4">reset</button>
			</form>

			<!-- tombol reset end -->

			<!-- ini area arena -->
			<div class="arena bg-glases p-3 col-lg-8 row text-light">
				<div class="col-4 kiri p-3">
				<h3 class="">player</h3>
				<h1 style="font-size: 80px;" class="text-center"><?= $player ?></h1>
			</div>

			<!-- ini bagian vs -->
			<div class="col-4 tengah p-3 text-center d-flex align-items-center justify-content-center flex-column">
				<p class="fw-bold" style="font-size:60px;">VS</p>
			</div>

			<div class="col-4 kanan p-3 text-end">
				<h3 class="">robot</h3>
				<h1 style="font-size: 80px;" class="text-center"><?= $robot ?></h1>
				</div>
			</div>

			<!-- ini arena end -->

			<!-- Button trigger modal -->
			<!-- tombol start -->
<button type="button" class="btn btn-outline-light-badge rounded-pill text-bg-white mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">start</button>

<!-- Modal pilih emoji-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-glases text-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">pilih emoji</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body text-center">
      	<form method="post" action="">
        <button class="btn" name="🫲">
        	<h1>🫲</h1>
        </button>

         <button class="btn" name="✌️">
        	<h1>✌️</h1>
        </button>

         <button class="btn" name="✊">
        	<h1>✊</h1>
        </button>

        </form>
      </div>
		</div>
	</div>
  </div>

  <!-- modal end-->

<!-- modal ketika pesan muncul -->
  <div class="modal fade" id="ModalPesan" tabindex="-1" aria-labelledby="modalPesan" aria-hidden="true">


  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-glases text-light">
      <div class="modal-body text-center">

      	<h1><?= $hasil ?></h1>

      </div>
		</div>
	</div>
 </div>


    <!-- modal pesan end -->
  </div>
</div>
</body>
</html>

<?php 	if (!empty($hasil)): ?>

<script>
	var hasilModal = new bootstrap.Modal(document.getElementById('ModalPesan'));
	hasilModal.show();
</script>

<?php 	endif ?>