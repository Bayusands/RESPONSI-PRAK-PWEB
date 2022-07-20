<?php
	require 'DB.php';
	if(isset($_POST["submit"]))
	{
		tulis($_POST);
	}
?>
<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RENTAL MOBIL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
  <body>
  	<!--HEADER-->
	<header>
		<div class="container">
			<h1>RENTAL MOBIL</h1>
			<ul>
				<li><a href="Beranda.php">BERANDA</a></li>
				<li><a href="rental.php">RENTAL</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>

    <!--FORM PEMESANAN-->
    <form method="post">
    <table width="58%" border="0" align="center">
    	<tr>
    		<td>Nama Lengkap</td>
    		<td><input name="nama_pemesan" type="text"></td>
    	</tr> 

    	<tr>
    		<td>Alamat</td>
    		<td><input name="alamat" type="text"></td>
    	</tr>

    	<tr>
    		<td>No Telp</td>
    		<td><input name="no_hp" type="text" id="no_hp"></td>
    	</tr>

    	<tr>
    		<td>Mobil</td>
    		<td><select name="mobil" id="mobil">
    			<option>Honda Brio</option>
    			<option>Pajero Sport</option>
    			<option>Alphard</option>
    			<option>Kijang Kapsul</option>
    			<option>Innova</option>
    			</select>
    		</td>
    	</tr>

    	<tr>
    		<td>Tujuan</td>
    		<td><select name="tujuan">
    			<option>Medan</option>
    			<option>Padang</option>
    			<option>Palembang</option>
    			<option>Aceh</option>
    			<option>Lampung</option>
    			</select>
    		</td>
    	</tr>

    	<tr>
    		<td>Tanggal Pinjam</td>
    		<td>
    		<input type="date" name="tanggal_pinjam">
    		</td>
    	</tr>

    	<tr>
    		<td>Tanggal Kembali</td>
    		<td>
    		<input type="date" name="tanggal_kembali">
    		</td>
    	</tr>

    	<tr>
    		<td></td>
    		<td>
    			<input type="submit" name="submit" value="Pesan">
    		</td>
    	</tr>
    </table>
</form>
    <!--FOOTER-->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
				<p>Bahapal, Pasar 3</p>

				<h4>Email</h4>
				<p>bayusands80@gmail.com</p>

				<h4>No. HP</h4>
				<p>0812345678910</p>
			<small>Copyright &copy; 2022 - DOA IBU</small>
		</div>
	</div>
</body>
</html>