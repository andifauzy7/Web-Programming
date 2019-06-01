<?php 
	// Belajar penggunaan Array asosiatif dengan kasus pemain Arsenal.
	// Transfer Variabel atau data dengan metode GET.
	$squad=[
		[
			"nama"=>"Bernd Leno",
			"posisi"=>"Goalkeepers",
			"asal"=>"Germany",
			"nomor"=>"19",
			"gambar"=>"19.jpg"
		],
		[
			"nama"=>"Hector Bellerin",
			"posisi"=>"Defenders",
			"asal"=>"Spain",
			"nomor"=>"2",
			"gambar"=>"2.jpg"
		],
		[
			"nama"=>"Laurent Koscielny",
			"posisi"=>"Defenders",
			"asal"=>"France",
			"nomor"=>"6",
			"gambar"=>"6.jpg"
		],
		[
			"nama"=>"Shkodran Mustafi",
			"posisi"=>"Defenders",
			"asal"=>"Germany",
			"nomor"=>"20",
			"gambar"=>"20.jpg"
		],
		[
			"nama"=>"Nacho Monreal",
			"posisi"=>"Defenders",
			"asal"=>"Spain",
			"nomor"=>"18",
			"gambar"=>"18.jpg"
		],
		[
			"nama"=>"Henrikh Mkhitaryan",
			"posisi"=>"Midfielders",
			"asal"=>"Armenia",
			"nomor"=>"7",
			"gambar"=>"7.jpg"
		],
		[
			"nama"=>"Aaron Ramsey",
			"posisi"=>"Midfielders",
			"asal"=>"Wales",
			"nomor"=>"8",
			"gambar"=>"8.jpg"
		],
		[
			"nama"=>"Mesut Ozil",
			"posisi"=>"Midfielders",
			"asal"=>"Germany",
			"nomor"=>"10",
			"gambar"=>"10.jpg"
		],
		[
			"nama"=>"Granit Xhaka",
			"posisi"=>"Midfielders",
			"asal"=>"Switzerland",
			"nomor"=>"34",
			"gambar"=>"34.jpg"
		],
		[
			"nama"=>"Alexandre Lacazette",
			"posisi"=>"Forwards",
			"asal"=>"France",
			"nomor"=>"9",
			"gambar"=>"9.jpg"
		],
		[
			"nama"=>"Pierre-Emerick Aubameyang",
			"posisi"=>"Forwards",
			"asal"=>"Gabon",
			"nomor"=>"14",
			"gambar"=>"14.jpg"
		]
	];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pemain Arsenal</title>
</head>
<body>
	<h2 style="text-align: center;">Kunjungi Profil Pemain</h2>
	<?php foreach ($squad as $pemain) : ?>
			<a href='latihan2.php?
			nama=<?=$pemain["nama"];?>&
			posisi=<?=$pemain["posisi"];?>&
			asal=<?=$pemain["asal"];?>&
			nomor=<?=$pemain["nomor"];?>&
			gambar=<?=$pemain["gambar"];?>
			'>

			<img src="image\<?=$pemain["gambar"];?>" height="150px"></a>

			<!--
			<li>Nama Pemain    : <?= $pemain["nama"]; ?></li>
			<li>Posisi : <?= $pemain["posisi"]; ?></li>
			<li>Asal Negara : <?= $pemain["asal"]; ?></li>
			<li>Nomor Punggung : <?= $pemain["nomor"]; ?></li> -->

	<?php endforeach; ?>
</body>
</html>