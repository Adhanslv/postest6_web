<?php
// Memamnggil file koneksi.php;
include '..\koneksi.php';
	
    // Mengambail nilai maximum dari id as = ALiAS maxKode;
    // Membuat id automatis;
	$tampil = "SELECT max(id_cervelo) as maxKode FROM tb_cervelo";
	$query = $dbh->query($tampil);
	foreach($query as $data){
		$kode = $data['maxKode'];
		$noUrut = (int) substr($kode, 3,3);
		@$noUrut++;
		$char = "CV";
		$kos = $char . sprintf("%03s", $noUrut);
	}


 if(isset($_POST['simpan'])){
    $id_cervelo         = $kos; 
    $id_data            = $_POST['id_data'];
    $nama               = $_POST['nama'];
    $jenis_sepeda       = $_POST['jenis_sepeda'];
    $harga              = $_POST['harga'];
    $jumlah             = $_POST['jumlah'];
    $tanggal            = $_POST['tanggal'];
    $jenis_warna        = $_POST['jenis_warna'];

    // Menambahkan data INTO nama_table VALUES nama fieldnya;
 	$query = "INSERT INTO tb_cervelo VALUES ('$id_cervelo','$id_data', '$nama', ' $jenis_sepeda',
                                            '$harga', '$jumlah', '$tanggal', 
                                            '$jenis_warna')";
 	$dbh->exec($query);

 if ($query)
 	 echo "<span class=berhasil>Data Barang Berhasil Di Tambah,<a href=index.php>Lihat Data</a></span>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>Form Pembelian</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">

</head>
<body>
    <div class="form">  
    <p class="asa" >Wind Store</p>
    <form  method="POST">
        <table border = "0">
        <tr>
        <td>NS Cervelo</td>
        <td>
            <select name="id_data">
                <option value="">* Pilih Nomor Seri *</option>
                <?php
                    $tampil = "SELECT * FROM tb_data";
                    $query = $dbh->query($tampil);
                    foreach($query as $data){
                ?>
                <option value="<?php echo $data['id_data'];?>"><?php echo $data['id_data'];?> | <?php echo $data['ns_cervelo'];?></option>
                <?php } ?>
            </select>
        </td>
		</tr>
            <tr>
                <td>Nama</td>
                <td> 
                    <input type="text" name="nama" placeholder="Nama Anda" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Sepeda</td>
                <td>
                    <input type="text" name="jenis_sepeda" value="Cervelo" readonly>
                </td>
            </tr>
            <tr>
                <td>Harga Sepeda</td>
                <td>
                    <input type="text" name="harga" value="Rp 1.600.000" readonly>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="number" name="jumlah" placeholder="jumlah" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pembelian</td>
                <td>
                    <input type="date" id="date-picker" name="tanggal" required >
                </td>
            </tr>
            <tr>
                <td>Jenis Warna</td>
                <td>
                <select class="choose" name="jenis_warna">
                    <option value="Merah">Merah</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Hijau">Hijau</option>
                    <option value="Biru">Biru</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="simpan"><i class="fa fa-check-circle"></i>  Simpan Data</button>
                    <a href="lihat.php" class="kembali"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			    </td>
            </tr>   
    </table>
    </form>
    </div>
    <script>
        var date = new Date();
        var year = date.getFullYear();
        var month = String(date.getMonth()+1).padStart(2,'0');
        var todayDate = String(date.getDate()).padStart(2,'0');
        var datePattern = year + '-' + month + '-' + todayDate;
        document.getElementById("date-picker").value = datePattern;
    </script>
</body>
</html>
<style>

.form{
 	width: 1106px;
 	background-color: #fff;
 	position: fixed;
 	margin-left: 142px;
	text-align: center;
	top: 122px;
	color: #25476a;
}


.asa{
    color: black;
    font-weight: 700;
	text-align: center;
    margin-top: 14px;
    font-size: 22px;

}

table{
    border-collapse : collapse;
    margin-left: 20px;
    margin-top: 20px;
    font-size: 14px;
    width: 759px;
    margin: 2% auto;
}
table td{
    padding: 5px 5px;
}

input, select, textarea{
    width: 500px;
    padding: 10px 15px;
    border: 1px solid #ddd;
    outline:none;
    color: #25476a;
    border-radius: 2px;
}
select{
	width: 533px;
	padding: 12px 15px;
}
input:focus,textarea:focus{
    border: 1px solid #43c3ef;
    box-shadow: 0 0 5px #43c3ef;
    transition: 0.6s;
}
.berhasil{
    text-decoration:none;
    background: #5cb85c;
    padding: 10px 20px;
    color: #fff;
    margin-top: 45px;
    font-weight: bold;
    position: absolute;
    margin-left: 581px;
    font-size: 12px;
    border-radius: 2px;
}
button{
	outline: none;
	border: 1px solid #25476a;
	padding: 10px 20px;
	background: #25476a;
	color: #fff;
	border-radius: 2px;
	cursor: pointer;
	margin-right: 15px;
}
button:hover{
	background: #3a5f86;
}
.kembali{
	background: #f9924d;
	color: #fff;
	border-radius: 2px;
	cursor: pointer;
	border: 1px solid #f9924d;
	padding: 9px 20px;
	text-decoration: none;
}
.kembali:hover{
	background: red;
}
</style>