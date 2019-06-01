<?php 
	if(isset($_POST["submit"])){
		if($_POST["username"]=="andi" && $_POST["password"]=="123"){
			header("Location: latihan4.php");
		} else {
			echo "Username atau Password salah!";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login Client</title>
</head>
<body>
	<h2>Halaman Login.</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="submit">Kirim</button>
			</li>
		</ul>
	</form>
</body>
</html>