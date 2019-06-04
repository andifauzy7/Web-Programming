<?php 
// Koneksi ke database. (Koneksi Username, Password dan Localhost)
$string_conn=mysqli_connect("localhost","root","","squad");

function query($stringsql){
	global $string_conn;
	// Memberitahu PHP bahwa variabel dibawah ini adalah array u/ menampung setiap RECORD dari DBMS
	$squad = [];
	// Menerima bentuk mentahan. (PACKED SEMUA DATA)
	$result=mysqli_query($string_conn,$stringsql);
	// PROSES MENGURAI 1 PERSATU DATA.
	while($perpemain = mysqli_fetch_assoc($result)){
		$squad[] = $perpemain;
	}
	return $squad;
}

function tambah($data){
	global $string_conn;

	$nama=htmlspecialchars($data["nama"]);
	$posisi=htmlspecialchars($data["posisi"]);
	$asal=htmlspecialchars($data["asal"]);
	$nomor=htmlspecialchars($data["nomor"]);
	$gambar=htmlspecialchars($data["gambar"]);

	mysqli_query($string_conn,"INSERT INTO pemain VALUES (
			'','$nama','$posisi','$asal','$nomor','$gambar');
			");

	return mysqli_affected_rows($string_conn);
}

function hapus($identitas_id){
	global $string_conn;

	mysqli_query($string_conn,"DELETE FROM pemain WHERE id=$identitas_id;");
	return mysqli_affected_rows($string_conn);
}

function ubah($data){
	global $string_conn;
	$id=$data["id"];
	$nama=htmlspecialchars($data["nama"]);
	$posisi=htmlspecialchars($data["posisi"]);
	$asal=htmlspecialchars($data["asal"]);
	$nomor=htmlspecialchars($data["nomor"]);
	$gambar=htmlspecialchars($data["gambar"]);

	mysqli_query($string_conn,"UPDATE pemain SET
		nama='$nama',posisi='$posisi',asal='$asal',nomor='$nomor',gambar='$gambar'
		WHERE id=$id;
		");

	return mysqli_affected_rows($string_conn);
}

function cari($keyword){
	return query("SELECT * FROM pemain WHERE 
		nama LIKE '%$keyword%' OR 
		posisi LIKE '%$keyword%' OR 
		asal LIKE '%$keyword%' OR 
		nomor LIKE '%$keyword%';
		");
}

?>