<?php 
	// Lakukan koneksi terhadap FILE FUNCTIONS.
	require 'functions.php';
	$squad=query("SELECT * FROM pemain");
	if(isset($_POST["cari"])){
		$squad=cari($_POST["keyword"]);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="shortcut icon" href="image\fav.png">
	<title>Admin Page | List Squad</title>
</head>
<body>

	<div class="jumbotron jumbotron-fluid" style="background-color: #c0392b; margin: 0;">
		<div class="container">
			<div class="row">
				<div class="col-9">
					<h1 class="display-4" style="color: white;">Welcome, Admin!</h1>
					<p class="lead" style="color: white;">This is a admin page to modify content about Arsenal Football Club Players.</p>
					<hr class="my-4">
					<p style="color: white;">* You can Create, Read, Update and Delete Information about Players Season 2018/2019.</p>
				</div>
				<div class="col-3">
					<img src="image\ARSENAL.png" width="150px " class="mx-auto d-block">
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid" style="background-color: #2c3e50; margin: 0;">
		<div class="container">
			
			<div class="row">
				<div class="col-6">
					<a href="tambah.php"><button type="button" class="btn btn-outline-light" name="submit">Add Other Players</button></a>
				</div>
				<div class="col-5">
					<form action="" method="post" autocomplete="off">
					<input type="text" class="form-control" placeholder="Search by Keyword ..." name="keyword" required>
				</div>
				<div class="col-1">
					<button type="submit" class="btn btn-danger" name="cari">Find</button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<br>
				</div>
			</div>

			<table class="table table-dark table-hover" >
				<th>Pictures</th>
				<th>Action</th>
				<th>Name Player</th>
				<th>Position</th>
				<th>Country</th>
				<th>Number Player</th>

				<?php foreach ($squad as $pemain) : ?>
				<tr>
					<td><img src="image/<?=$pemain["gambar"];?>" width="175px" class="mx-auto d-block"></td>
					<td>
						<a href="ubah.php?id=<?=$pemain['id'];?>"><button type="button" class="btn btn-outline-success" name="submit">Update</button></a>
						 | 
						<a href="hapus.php?id=<?=$pemain['id'];?>" onclick="return confirm('Akan Menghapus Data Pemain?');"><button type="button" class="btn btn-outline-danger" name="submit">Delete</button></a>
					</td>
					<td><?=$pemain["nama"];?></td>
					<td><?=$pemain["posisi"];?></td>
					<td><?=$pemain["asal"];?></td>
					<td><?=$pemain["nomor"];?></td>
				</tr>
				<?php endforeach; ?>

			</table>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid" style="background-color: #c0392b; margin: 0;">
		<div class="container">
			<h5 style="color: white;">Create : Andi Fauzy Dewantara</h5>
			<h5 style="color: white;">Github : Andifauzy7</h5>
		</div>
	</div>

</body>
</html>