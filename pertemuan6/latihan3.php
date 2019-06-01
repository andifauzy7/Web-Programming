<!-- Array Assosiatif
keynya adalah string yang kita buat sendiri
Contoh $mahasiswa = ["nama" => "Andi Fauzy"];
 -->
<?php 
$mahasiswa=[
		[
			"nama"=>"Andi Fauzy Dewantara",
			"NIM"=>"181511007",
			"email"=>"andifauzy00@gmail.com",
			"jurusan"=>"Teknik Informatika"
		],
		[
			"nama"=>"Adhitya Febhiakbar",
			"NIM"=>"181511002",
			"email"=>"adhitya.febhiakbar@gmail.com",
			"jurusan"=>"Akuntansi",
			"tugas" => [90, 80, 100]
		]
	];

	echo $mahasiswa[1]["tugas"][1];
	 ?>
	<?php foreach ($mahasiswa as $mhs) :?>
 		<ul>
 				<li>Nama :<?= $mhs["nama"]; ?></li>
 				<li>NIM : <?= $mhs["NIM"]; ?></li>
 				<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
 		</ul>
 	<?php endforeach; ?>
