<?php 
$mahasiswa=[
	["Andi Fauzy","181511007","andifauzy00@gmail.com","T. Informatika"],
	["Ahmad Reza","181531007","ahmadreza@gmail.com","Akuntansi"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<?php foreach ($mahasiswa as $mhs) :?>
 		<ul>
 				<li>Nama :<?= $mhs[0]; ?></li>
 				<li>NIM : <?= $mhs[1]; ?></li>
 				<li>Jurusan : <?= $mhs[2]; ?></li>
 		</ul>
 	<?php endforeach; ?>
 </body>
 </html>