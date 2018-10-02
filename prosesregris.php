<?php 
include('connect.php');
	session_start();
	$nim = $_SESSION['nim'];
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$sql = "INSERT INTO users(Nim,Nama,email) VALUES('$nim','$nama','$email')";
			if(mysqli_query($conn,$sql)) {
				echo "<center>SELAMAT ANDA TERDAFTAR</center>";
			}else{
				echo "Error: ".$sql."<br>".$conn->error;
			}
			$conn->close();
	
?>
