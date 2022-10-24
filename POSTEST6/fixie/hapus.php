<?php
// Memamnggil file koneksi.php;
include "..\koneksi.php";
	if (isset($_GET['id_fixie'])) {
		// Mengahapus data berdasarkan id;
		$hapus = "DELETE FROM tb_fixie WHERE id_fixie='$_GET[id_fixie]'";
		$dbh->exec($hapus);
	}
?>

<script>
	alert("Data Berhasil Di Hapus");
	location.href="lihat.php";
</script>