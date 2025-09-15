<?php 

	   $students = [
  
		          ['0897654','ririn','XI rpl','bandung','perempuan','1.jpg'],
		          ['5673458','asep','XI rpl','surabaya','laki laki','2.jpg'],
		          ['0563897','tika','XI rpl','jakarta','perempuan','3.jpg'],
		          ['0895567','seli','XI rpl','jepang','perempuan','4.jpg']

	             ];


	 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>array multidimensi</title>
</head>
<body>
	<?php foreach ($students as $students) : ?>
	<ul>
		<li><img src="../foto/<?php echo $students['5']?>"></li>
		<li><?php echo $students['0'] ?></li>
		<li><?php echo $students['1'] ?></li>
		<li><?php echo $students['2'] ?></li>
		<li><?php echo $students['3'] ?></li>
		<li><?php echo $students['4'] ?></li>
	</ul>

    <?php endforeach ?>
	

</body>
</html>