<?php
// Memamngil file Koneksi.php;
include "..\koneksi.php";
	if(isset($_GET['id_cervelo'])) {
        // Mengambil data untuk di ubah berdasarkan id;
		$query=$dbh->query(" SELECT * FROM tb_cervelo WHERE id_cervelo='$_GET[id_cervelo]'");
		$data=$query->fetch(PDO::FETCH_ASSOC);
	}
    if(isset($_GET['id_cervelo'])) {
		$query=$dbh->query("SELECT * FROM tb_cervelo a JOIN tb_data b ON a.id_data = b.id_data ");
		$data=$query->fetch(PDO::FETCH_ASSOC);
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
                <td>Nama</td>
                <td> 
                    <input type="text" name="nama" value="<?php echo $data['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Sepeda</td>
                <td>
                    <input type="text" name="jenis_sepeda" value="<?php echo $data['jenis_sepeda']?>"readonly>
                </td>
            </tr>
            <tr>
                <td>Harga Sepeda</td>
                <td>
                    <input type="text" name="harga" value="Rp 1.500.000" value="<?php echo $data['harga']?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="number" name="jumlah" value="<?php echo $data['jumlah']?>" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pembelian</td>
                <td>
                    <input type="date" id="date-picker" name="tanggal" value="<?php echo $data['tanggal']?>" required >
                </td>
            </tr>
            <tr>
                <td>Jenis Warna</td>
                <td>
                <select class="choose" name="jenis_warna">
                    <option value="<?php echo $data['jenis_warna']?>"><?php echo $data['jenis_warna']?></option>	
                    <option value="Merah">Merah</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Hijau">Hijau</option>
                    <option value="Biru">Biru</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="update"><i class="fa fa-check-circle"></i>  Ubah Data</button>
                    <a href="lihat.php" class="kembali"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			    </td>
            </tr>   
    </table>
    </form>
    </div>

<?php
	if (isset($_POST['update'])) {
        $id_cervelo         = $_GET['id_cervelo']; 
        $nama               = $_POST['nama'];
        $jenis_sepeda       = $_POST['jenis_sepeda'];
        $harga              = $_POST['harga'];
        $jumlah             = $_POST['jumlah'];
        $tanggal            = $_POST['tanggal'];
        $jenis_warna        = $_POST['jenis_warna'];

        // Mengupdate data dari table berdasrkan fieldnya;
		$myqry="UPDATE tb_cervelo SET nama = '$nama',
		 							 jenis_sepeda = '$jenis_sepeda',
		 							 harga = '$harga',
		 							 jumlah = '$jumlah',
		 							 tanggal = '$tanggal',
		 							 jenis_warna = '$jenis_warna'
		 							 WHERE id_cervelo='$id_cervelo'";

		$dbh->exec($myqry);
			echo "<span class=berhasil>Data Barang Berhasil Di Ubah,<a href=index.php>Lihat Data</a></span>";
	}
?>
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
    border: 1px solid #449d44;
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
