<?php 
	session_start();
	// Jika USER telah melakukan Login.
	if( !isset($_SESSION["login"]) ){
		header("Location: login.php");
		exit;
	}
	
	require 'functions.php';
	$identity_hapus=$_GET["id"];
	if(hapus($identity_hapus)>0){
		echo '
				<script>
					alert("Data Berhasil Dihapus!");
					document.location.href= "index.php";
				</script>
			';
	} else {
		echo '
				<script>
					alert("Data Gagal Dihapus!");
					document.location.href= "index.php";
				</script>
			';

	}
 ?>