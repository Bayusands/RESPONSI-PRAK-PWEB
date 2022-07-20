<?php
	session_start();
	include "DB.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>LOGIN</h2>
		<form method="post">
			<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
		</form>
	<?php
		if(isset($_POST['submit']))
		{
			$username = $_POST['user'];
			$password = $_POST['pass'];
			$qry = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$username' AND password = MD5('$password')");
			$cek = mysqli_num_rows($qry);
			if($cek == 1)
			{
				$_SESSION['userweb'] = $username;
				header("location:Beranda.php");
				exit;
			}
			else
			{
				echo '<script>alert("Maaf Username dan Password yang Anda Masukkan Salah!!!")</script>';
			}
		}
	?>
</body>
</html>