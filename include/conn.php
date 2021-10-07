<?php
$host = 'localhost';

// Database use name
$user = 'root';

//database user password
$pass = '';

$dbs = 'niagahoster_db';

// check the MySQL connection status
$conn = mysqli_connect($host,$user,$pass, $dbs);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
    // echo "Koneksi Berhasil";
}
?>