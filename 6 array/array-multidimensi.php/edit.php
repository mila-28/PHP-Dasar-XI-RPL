<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data siswa</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

	</head>
<body>
	<div class="container-fluid bg-primary-subtle py-5">
		<div class="container" >
			<!-- card -->
			<div class="card">
  <div class="card-header">
    edit siswa
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col-3">
      <img src="../foto/<?= $_GET['foto'] ?>" class="rounded" style="width:100%;">
    </div>
    <div class=" col-6">

  <div class="mb-3">
    <label for="nisn" class="form-label">Nisn</label>
    <input type="text"value="<?= $_GET['nisn'] ?>" class="form-control">
    <div id="nama" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" value="<?= $_GET['nama'] ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">kelas</label>
    <input type="text" value="<?= $_GET['kelas'] ?>" class="form-control">
  </div>

  <div class="mb-3">
    <label for="alamat" class="form-label">alamat</label>
    <input type="text" value="<?= $_GET['alamat'] ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" value="<?= $_GET['gender'] ?>" class="form-control">
  </div>
  
  </div>
  </div>
</form>
    <a href="edit.php" class="btn btn-warning">simpan</a>
    <a href="data-siswa.php" class="btn btn-warning">kembali</a>
  </div>
     </div>
    </div> 
    </div>
  </div>
</div>
</body>
</html>