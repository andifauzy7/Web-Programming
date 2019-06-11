<?php 
	require 'functions.php';
	$id=$_GET["id"];
	$player=query("SELECT * FROM pemain WHERE id=$id;")[0];

	if(isset($_POST["submit"])){
		if(ubah($_POST)>0){
			echo '
				<script>
					alert("Data Berhasil Diubah!");
					document.location.href= "index.php";
				</script>
			';
		} else {
			echo '
				<script>
					alert("Data Gagal Diubah!");
					document.location.href= "index.php";
				</script>
			';
		}
	} 
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="shortcut icon" href="image\fav.png">
	<title>Update Player | Admin Page</title>
</head>
<body>

	<div class="jumbotron jumbotron-fluid" style="background-color: #d35400; margin: 0;">
		<div class="container">
			<div class="row">
				<div class="col-9">
					<h1 class="display-4" style="color: white;">Update Player!</h1>
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

	<div class="jumbotron jumbotron-fluid" style="background-color: #ecf0f1; margin: 0;">
		<div class="container">
			<div style="text-align: center;">
				<a href="index.php"><button type="button" class="btn btn-outline-primary" name="submit">Back To List Players</button></a>
			</div>
			<form action="" class="was-validated" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-12">
					<br>
				</div>
			</div>
			<img src="image\<?=$player['gambar'];?>" width="250px" class="mx-auto d-block">
			  <div class="form-group">
			  	<input type="hidden" name="id" value="<?=$player['id'];?>">
			  	<input type="hidden" name="gambar" value="<?=$player['gambar'];?>">
			    <label for="nama">Player Name :</label>
			    <input type="text" class="form-control" id="nama" placeholder="Enter Player" name="nama" value="<?=$player['nama'];?>" required>
			  </div>

			  <div class="form-group">
			    <label for="asal">Country :</label>
			    <input type="text" class="form-control" id="asal" placeholder="Enter Country" name="asal" value="<?=$player['asal'];?>" required>
			  </div>

			  <div class="form-group">
			    <label for="nomor">Number :</label>
			    <input type="text" class="form-control" id="nomor" placeholder="Enter Number" name="nomor" value="<?=$player['nomor'];?>" required>
			  </div>

			  <div class="form-group">
			    <label for="gambar">Pictures :</label>
			    <input type="file" class="form-control" id="gambar" name="gambar">
			  </div>

			  <label >Position :</label>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="posisi" id="Goalkeepers" value="Goalkeepers"
				  <?php if($player["posisi"]=='Goalkeepers'){ echo "checked";}?>>
				  <label class="form-check-label" for="Goalkeepers">Goalkeepers</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="posisi" id="Defenders" value="Defenders"
				  <?php if($player["posisi"]=='Defenders'){ echo "checked";}?>>
				  <label class="form-check-label" for="Defenders">Defenders</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="posisi" id="Midfielders" value="Midfielders"
				  <?php if($player["posisi"]=='Midfielders'){ echo "checked";}?>>
				  <label class="form-check-label" for="Midfielders">Midfielders</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="posisi" id="Forwards" value="Forwards"
				  <?php if($player["posisi"]=='Forwards'){ echo "checked";}?>>
				  <label class="form-check-label" for="Forwards">Forwards</label>
				</div>

				<div class="row">
					<div class="col-12"><br></div>
				</div>
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form> 
		</div>
	</div>

</body>
</html>