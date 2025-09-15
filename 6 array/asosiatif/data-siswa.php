<?php 

	   $students = [
      [
        "nisn" => "0897654",
      "nama" => "ririn",
      "alamat" => "bandung",
      "kelas" => "xi rpl",
      "gender" => "perempuan",
      "foto" => "1.jpg",
      ], 
      [
      "nisn" => "5673458",
      "nama" => "asep",
      "alamat" => "surabaya",
      "kelas" => "xi rpl",
      "gender" => "laki laki",
      "foto" => "2.jpg",
      ],
      [
      "nisn" => "0563897",
      "nama" => "tika",
      "alamat" => "jakarta",
      "kelas" => "xi rpl",
      "gender" => "perempuan",
      "foto" => "3.jpg",
      ],
      [
      "nisn" => "0895567",
      "nama" => "seli",
      "alamat" => "jepang",
      "kelas" => "xi rpl",
      "gender" => "perempuan",
      "foto" => "4.jpg",
      ],

   ]

	 ?>
   <?php $no=1 ?>

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
    data siswa
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">foto</th>
      <th scope="col">nisn</th>
      <th scope="col">nama</th>
      <th scope="col">kelas</th>
      <th scope="col">alamat</th>
      <th scope="col">gender</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($students as $student): ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><img src="../foto/<?= $student['foto']?>"class="rounded"></td>
      <td><?= $student['nisn'] ?></td>
      <td><?= $student['nama'] ?></td>
      <td><?= $student['kelas'] ?></td>
      <td><?= $student['alamat'] ?></td>
      <td><?= $student['gender'] ?></td>
      <td>
        <a href="edit.php?foto=<?= $student['foto']?>
        &nisn=<?=$student ['nisn'] ?>
          &nama=<?= $student['nama'] ?> 
          &kelas=<?= $student['kelas'] ?> 
          &alamat=<?= $student['alamat'] ?> 
          &gender=<?= $student['gender'] ?>"class="btn btn-success"><i class="bi bi-pencil"></i></a>

        <a href="detail.php?foto=<?= $student['foto']?>
        &nisn=<?=$student ['nisn'] ?>
          &nama=<?= $student['nama'] ?> 
          &kelas=<?= $student['kelas'] ?> 
          &alamat=<?= $student['alamat'] ?> 
          &gender=<?= $student['gender'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
      </td>
    </tr>
    <?php $no++ ?>
  <?php endforeach ?>
  </tbody>
  </table>
      <button class="btn btn-success">coba</button>
    </div>
  </div>
</div>
</body>
</html>