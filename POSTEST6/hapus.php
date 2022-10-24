<?php
// Memamnggil file koneksi.php;
include "koneksi.php";
	if (isset($_GET['id'])) {
		// Mengahapus data berdasarkan id;
		$hapus = "DELETE FROM tb_user WHERE id='$_GET[id]'";
		$dbh->exec($hapus);
	}
?>

<script>
	alert("Data Berhasil Di Hapus");
	location.href="about.php";
</script>