<!DOCTYPE html>
<html>
<head>
	<title>Detail Pemain.</title>
</head>
<body>
	<ul>
		<img src="image\<?=$_GET['gambar'];?>" height="150px">
		<li>Nama Pemain    : <?= $_GET["nama"]; ?></li>
		<li>Posisi : <?= $_GET["posisi"]; ?></li>
		<li>Asal Negara : <?= $_GET["asal"]; ?></li>
		<li>Nomor Punggung : <?= $_GET["nomor"]; ?></li>
	</ul>
</body>
</html>