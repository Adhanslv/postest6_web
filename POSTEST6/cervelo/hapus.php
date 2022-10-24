<?php
// Memamnggil file koneksi.php
include "..\koneksi.php";
	if (isset($_GET['id_cervelo'])) {
		// Mengahapus data berdasarkan id;
		$hapus = "DELETE FROM tb_cervelo WHERE id_cervelo='$_GET[id_cervelo]'";
		$dbh->exec($hapus);
	}
?>

<script>
	alert("Data Berhasil Di Hapus");
	location.href="lihat.php";
</script>