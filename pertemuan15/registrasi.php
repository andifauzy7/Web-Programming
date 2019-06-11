<?php 
	require 'functions.php';
	
	if(isset($_POST["register"])){
		if(register($_POST)>0){
			echo '
			<script>
			alert("Register Berhasil!");
			document.location.href= "index.php";
			</script>
			';
			die;
		} else {
			echo '
			<script>
			alert("Register Gagal!");
			document.location.href= "sign.php";
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
		<title>Registration Page | Arsenal</title>
		<style type="text/css">
			label {
				color: white;
			}
		</style>
	</head>

	<body class="jumbotron" style="background-color: #c0392b;">
		<div class="container">
			<form action="" class="was-validated" method="post">
				<div class="row">
					<div class="col-4">
						
					</div>
					<div class="col-4">
						<img src="image\ARSENAL.png" width="150px " class="mx-auto d-block">
						<label for="username">Username :</label>
						<input type="text" class="form-control" id="username" placeholder="Username ..." name="username" required autocomplete="off">
						<label for="password">Password :</label>
				    	<input type="password" class="form-control" id="password" placeholder="Password ..." name="password" required autocomplete="off">
				    	<label for="password2">Konfirmasi Password :</label>
				    	<input type="password" class="form-control" id="password2" placeholder="Password ..." name="password2" required autocomplete="off">
				    	<br>
				    	<div class="row">
				    		<div class="col-6">
				    			<button type="submit" class="btn btn-warning" name="register">Register</button>
				    		</div>
				    		<div class="col-6">
				    			<div style="text-align: right;">
				    				<a href="login.php"><button type="submit" class="btn btn-primary" name="login">Login</button></a>
				    			</div>
				    		</div>
				    	</div>

					</div>
				</div>
			</form>
		</div>
	</body>

</html>