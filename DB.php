<?php
	$conn = mysqli_connect("localhost", "root", "", "login");

	function tulis($data)
	{
		$nama_pemesan = $data['nama_pemesan'];
		$alamat = $data['alamat'];
		$no_hp = $data['no_hp'];
		$mobil = $data['mobil'];
		$tujuan = $data['tujuan'];
		$tanggal_pinjam = $data['tanggal_pinjam'];
		$tanggal_kembali = $data['tanggal_kembali'];
		$fp = fopen("Rental.txt", "a+");
		fputs($fp, "$nama_pemesan|$alamat|$no_hp|$mobil|$tujuan|$tanggal_pinjam|$tanggal_kembali|");
		fclose($fp);
	}
?>