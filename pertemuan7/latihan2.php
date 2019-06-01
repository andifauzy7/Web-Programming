<?php 
	// Kondisi apabila user melakukan akses langsung terhadap latihan2, ia akan dikembalikan karena GET kosong.
	  if(   !isset($_GET["nama"]) || !isset($_GET["posisi"]) || 
			!isset($_GET["asal"]) || !isset($_GET["nomor"])  || 
			!isset($_GET["gambar"]) ): ?>
	<?php 
		header("Location:latihan1.php");
	 ?>
<?php endif; ?>

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
		<li><a href="latihan1.php">Kembali</a></li>
	</ul>
</body>
</html>