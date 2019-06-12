<?php
	// Melakukan koneksi thp Functions. 
	require 'functions.php';

	session_start();
	// Jika USER telah melakukan Login.
	if( isset($_COOKIE["login"]) && isset($_COOKIE["keyname"]) ){
		$id = $_COOKIE["login"];
		$key = $_COOKIE["keyname"];
		$result = mysqli_query($string_conn, "SELECT * FROM user WHERE id='$id';");
		$result = mysqli_fetch_assoc($result);

		if($key === hash("sha256", $result["username"]) ){
			$_SESSION["login"] = true;
		}
	}

	if( isset($_SESSION["login"]) ){
		header("Location: index.php");
		exit;
	}
	

	if( isset($_POST["login"]) ){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($string_conn, "SELECT * FROM user WHERE username='$username';");
		// Jika Ditemukan Username yang sama.
		if( mysqli_num_rows($result) > 0 ) {
			$datauser = mysqli_fetch_assoc($result);
			// Cek kebenaran password.
			if( password_verify($password, $datauser["password"]) ) {
				// Membuat SESSION dan COOKIE
				setcookie( "login", $datauser["id"], time()+120 );
				setcookie( "keyname", hash("sha256", $username), time()+120 );
				$_SESSION["login"] = true;
				header("Location: index.php");
				exit;
			}
		}
		$error = true;
		if( isset($error) ){
			echo "
			<script>
			alert('Masukkan Username dan Password yang sesuai!');
			</script>
			";
		}
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="shortcut icon" href="image\fav.png">
		<title>Login Page | Arsenal</title>
		<style type="text/css">
			label {
				color: white;
			}
		</style>
	</head>

	<body class="jumbotron" style="background-color: #16a085;">
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
				    	<br>
				    	<div class="row">
				    		<div class="col-6">
				    			<button type="submit" class="btn btn-primary" name="login">Login</button>
				    		</div>
				    		<div class="col-6">
				    			<div style="text-align: right;">
				    				<a href="registrasi.php"><button type="submit" class="btn btn-warning" name="register">Register</button></a>
				    			</div>
				    		</div>
				    	</div>

					</div>
				</div>
			</form>
		</div>
	</body>

</html>