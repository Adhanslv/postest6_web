<?php
// Memamnggil file koneksi.php;
include "..\koneksi.php";
	if (isset($_GET['id_polygon'])) {
		// Mengahapus data berdasarkan id;
		$hapus = "DELETE FROM tb_polygon WHERE id_polygon='$_GET[id_polygon]'";
		$dbh->exec($hapus);
	}
?>

<script>
	alert("Data Berhasil Di Hapus");
	location.href="lihat.php";
</script>