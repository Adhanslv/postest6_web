<?php
// Memamnggil file koneksi.php;
include "..\koneksi.php";
	if (isset($_GET['id_data'])) {
		// Mengahapus data berdasarkan id;
		$hapus = "DELETE FROM tb_data WHERE id_data='$_GET[id_data]'";
		$dbh->exec($hapus);
	}
?>

<script>
	alert("Data Berhasil Di Hapus");
	location.href="lihat.php";
</script>