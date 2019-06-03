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

	$nama=$data["nama"];
	$posisi=$data["posisi"];
	$asal=$data["asal"];
	$nomor=$data["nomor"];
	$gambar=$data["gambar"];

	mysqli_query($string_conn,"INSERT INTO pemain VALUES (
			'','$nama','$posisi','$asal','$nomor','$gambar');
			");

	return mysqli_affected_rows($string_conn);
}
?>