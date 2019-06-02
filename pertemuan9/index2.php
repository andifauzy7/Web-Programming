<?php 
// Koneksi ke database. (Koneksi Username, Password dan Localhost)
$string_conn=mysqli_connect("localhost","root","","squad");

// Setelah terkoneksi, langkah berikutnya adalah mengambil data dari table.
$result=mysqli_query($string_conn,"SELECT * FROM pemain");

// Umumnya Query akan mengembalikan nilai boolean, apabila gagal akan mengembalikan false, sdangkan apabila benar akan mengembalikan nilai sebaliknya.
// var_dump($result);

// Analogi, baru membawa bungkus dari isi table tersebut.
// mysqli_fetch_row Mengembalikan array numerik.
// assoc array asosiatif.
// array keduanya
// object seperti pointer ->

// $pemain=mysqli_fetch_assoc($result);
// //var_dump($pemain);
// while ($pemain=mysqli_fetch_assoc($result)) {
// 	var_dump($pemain);
// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Admin Page | List Squad</title>
</head>
<body>

	<div class="jumbotron jumbotron-fluid" style="background-color: #c0392b;">
		<div class="container">
			<div class="row">
				<div class="col-9">
					<h1 class="display-4" style="color: white;">Welcome, Admin!</h1>
					<p class="lead" style="color: white;">This is a admin page to modify content about Arsenal Football Club Players.</p>
					<hr class="my-4">
					<p style="color: white;">* You can Create, Read, Update and Delete Information about Players Season 2018/2019.</p>
				</div>
				<div class="col-3">
					<img src="image\ARSENAL.png" width="150px "class="mx-auto d-block">
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid" style="background-color: #2c3e50;">
		<div class="container">
			<table class="table table-dark table-hover" >
				<th>Pictures</th>
				<th>Action</th>
				<th>Name Player</th>
				<th>Position</th>
				<th>Country</th>
				<th>Number Player</th>

				<?php while ($pemain=mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><img src="image/<?=$pemain["gambar"];?>" width="175px" class="mx-auto d-block"></td>
					<td><a href="">Update</a> | <a href="">Delete</a>
					</td>
					<td><?=$pemain["nama"];?></td>
					<td><?=$pemain["posisi"];?></td>
					<td><?=$pemain["asal"];?></td>
					<td><?=$pemain["nomor"];?></td>
				</tr>
				<?php endwhile; ?>

			</table>
		</div>
	</div>
</body>
</html>