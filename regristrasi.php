<?php  
	$errornim="";
	$errornama="";
	$erroremail="";
if (isset($_POST['regis'])) {
		
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['mail'];

		$n = strlen($nim);
		$m = strlen($nama);
			
		if ($n != 10 || $m>25 || is_null($email)) {
			if ($n != 10 || !is_numeric($nim)) {
				$errornim = "Maaf Nim Harus 10 digit dan mempunyai angka";
			}
			if ($m > 25 || !preg_match('/^[a-z][A-Z]*$/', $nama)) {
				$errornama = "Maaf panjang nama harus kurang dari 25 karakter dan berupa huruf dan angka";
			}
			if (is_null($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$erroremail = "Format email anda salah";
			}
		}else{
			session_start();
			$_SESSION['nim'] =$nim;
			$_SESSION['nama'] =$nama;
			$_SESSION['email'] =$email;
			header("location: prosesregis.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<center>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						NIM
					</td>
					<td>:</td>
					<td>
						<input type="number" name="nim">
					</td>
					<td>
						<span style="color: blue"><?php echo $errornim; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						NAMA
					</td>
					<td>:</td>
					<td>
						<input type="text" name="nama">
					</td>
					<td>
						<span style="color: blue"><?php echo $errornama; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						E-MAIL
					</td>
					<td>:</td>
					<td>
						<input type="email" name="mail">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="regis" value="REGISTRASI">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
