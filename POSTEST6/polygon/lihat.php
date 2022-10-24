<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>Data Pembelian</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">
</head>
<body>
    <a href="tambah.php"><button class="tambah" ><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
    <p class="info">Data Sepeda Polygon</p>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Data</th>
            <th>Nama</th>
            <th>Jenis Sepeda</th>
            <th>Harga Sepeda</th>
            <th>Jumlah</th>
            <th>Tanggal Pembelian</th>
            <th>Jenis Warna</th>
            <th>Action</th>
        </tr>
        <?php
        // Memanggil file koneksi.php;
        include "..\koneksi.php";
        // Mengambil data dari table;
        $tampil = "SELECT * FROM tb_polygon a JOIN tb_data b ON a.id_data = b.id_data ";
        $query = $dbh->query($tampil);
        foreach ($query as $data ){
        ?>
        <tr>
            <td><?php echo $data ['id_polygon']?></td>
            <td><?php echo $data ['id_data']. ' | ' .$data['ns_polygon']?></td>
            <td><?php echo $data ['nama']?></td>
            <td><?php echo $data ['jenis_sepeda']?></td>
            <td><?php echo $data ['harga']?></td>
            <td><?php echo $data ['jumlah']?></td>
            <td><?php echo $data ['tanggal']?></td>
            <td><?php echo $data ['jenis_warna']?></td>
            <td colspan='2'>
                <a class="ubah"  href="ubah.php?id_polygon=<?php echo $data ['id_polygon']?>" onclick="return confirm('Ingin Mengubah Data?');" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                </a>    
                <a class="hapus" href="hapus.php?id_polygon=<?php echo $data ['id_polygon']?>" onclick="return confirm('Ingin Mengapus Data?');" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
                </a>
            </td>
        </tr>
        <?php
		}
		?>	
    </table>
        <?php
            // Menampilkan jumlah data;
            $nRows = $dbh->query('select count(*) from tb_polygon')->fetchColumn();
		    echo "<p class=jumlahdata>Jumlah Data Barang : $nRows </p>";
        ?>
</body>
<style>
* {
    margin: 0;
    padding: 0;
}
button{
  background-color: #4CAF50; 
  border: 4px;
  color: white;
  padding: 12px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 35px 69px;
  cursor: pointer;

}

.info{
    color:black;
    font-size:22px;
    padding-left:67px;
    margin-bottom:12px;
}

table {
  border-collapse: collapse;
  width: 90%;
  margin: auto;}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom:1px solid #cad1db;

}

th {
  background-color: #5d78a3;
  color: white;
}

.ubah{
    height:24px;
    width:24px;
    text-decoration: none;
    color:green;
}
.hapus{
    text-decoration: none;
    color:red;
}

.jumlahdata{
    text-align:center;
}
</style>
</html>