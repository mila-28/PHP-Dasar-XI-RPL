<?php 

	   $students = [
  
		          ['0897654','ririn','XI rpl','bandung','perempuan','1.jpg'],
		          ['5673458','asep','XI rpl','surabaya','laki laki','2.jpg'],
		          ['0563897','tika','XI rpl','jakarta','perempuan','3.jpg'],
		          ['0895567','seli','XI rpl','jepang','perempuan','4.jpg']

	             ];


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
      <td><img src="../foto/<?= $student['5']?>"class="rounded"></td>
      <td><?= $student['0'] ?></td>
      <td><?= $student['1'] ?></td>
      <td><?= $student['4'] ?></td>
      <td><?= $student['2'] ?></td>
      <td><?= $student['3'] ?></td>
      <td>
        <a href="edit.php?foto=<?= $student['5']?>
        &nisn=<?=$student ['0'] ?>
          &nama=<?= $student['1'] ?> 
          &kelas=<?= $student['2'] ?> 
          &alamat=<?= $student['3'] ?> 
          &gender=<?= $student['4'] ?>"class="btn btn-success"><i class="bi bi-pencil"></i></a>

        <a href="detail.php?foto=<?= $student['5']?>
        &nisn=<?=$student ['0'] ?>
          &nama=<?= $student['1'] ?> 
          &kelas=<?= $student['2'] ?> 
          &alamat=<?= $student['3'] ?> 
          &gender=<?= $student['4'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
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