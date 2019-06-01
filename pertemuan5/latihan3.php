<?php 
$mahasiswa=[
			["Adhitya Febhiakbar","181511002","Teknik Informatika","Adit.febhi.tif18@polban.ac.id"],
			["Abdul Hadi Nur","181511001","Teknik Informatika","Abdulhadi.tif18@polban.ac.id"],
			["Bobby Williams K.Hara","181511009","Teknik Informatika","Bobby.Willia.tif18@polban.ac.id"],
			["Andi Fauzy Dewantara","181511007","Teknik Informatika","Andi.fauzy.tif18@polban.ac.id"]	
			];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<li>Nama : <?= $mhs[0]; ?></li>
		<li>NIM : <?= $mhs[1]; ?></li>
		<li>Jurusan : <?= $mhs[2]; ?></li>
		<li>Email : <?= $mhs[3]; ?></li>
		<br>
	<?php endforeach; ?>
	</ul>
</body>
</html>