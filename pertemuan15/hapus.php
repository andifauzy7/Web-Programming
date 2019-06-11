<?php 
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