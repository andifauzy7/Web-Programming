<?php 
	// Pengulangan pada Array
	// for / foreach
$angka=[3,2,15,20,11,77,89,8];
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Latihan 2</title>
		<style>
			div {
				width: 50px;
				height: 50px;
				background-color: salmon;
				text-align: center;
				line-height: 50px;
				margin: 3px;
				float: left;
			}
		</style>
	</head>
	<body>
		<?php for($i=0;$i<count($angka);$i++) : ?>
			<div><?= $angka[$i]; ?></div>
		<?php endfor; ?>
		<?php foreach ($angka as $a) :?>
			<div><?= $a; ?></div>
		<?php endforeach; ?>
	</body>
	</html>
