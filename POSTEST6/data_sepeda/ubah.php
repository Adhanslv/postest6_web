<?php
// Memamngil file Koneksi.php;
include "..\koneksi.php";
	if(isset($_GET['id_data'])) {
        // Mengambil data untuk di ubah berdasarkan id;
		$query=$dbh->query(" SELECT * FROM tb_data WHERE id_data='$_GET[id_data]'");
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
                <td>NS Polygon</td>
                <td> 
                    <input type="text" name="ns_polygon" value="<?php echo $data['ns_polygon']?>" autocomplete="off" readonly>
                </td>
            </tr>
            <tr>
                <td>NS Cervelo</td>
                <td>
                    <input type="text" name="ns_cervelo" value="<?php echo $data['ns_cervelo']?>" autocomplete="off" readonly>
                </td>
            </tr>
            <tr>
                <td>NS Fixied-Gear</td>
                <td>
                    <input type="text" name="ns_fixie"  value="<?php echo $data['ns_fixie']?>" autocomplete="off" readonly>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pembuatan</td>
                <td>
                    <input type="date" name="tanggal_buat" value="<?php echo $data['tanggal_buat']?>" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Launching</td>
                <td>
                    <input type="date" id="date-picker" name="tanggal_launch" value="<?php echo $data['tanggal_launch']?>" required >
                </td>
            </tr>
            <tr>
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

        $id_data      = $_GET['id_data'];
        $ns_polygon   = $_POST['ns_polygon']; 
        $ns_cervelo   = $_POST['ns_cervelo']; 
        $ns_fixie     = $_POST['ns_fixie']; 
        $buat         = $_POST['tanggal_buat'];
        $launch       = $_POST['tanggal_launch'];

        // Mengupdate data dari table berdasrkan fieldnya;
		$myqry="UPDATE tb_data SET  ns_polygon = '$ns_polygon',
		 							ns_cervelo = '$ns_cervelo',
		 							ns_fixie = '$ns_fixie',
		 							tanggal_buat = '$buat',
		 							tanggal_launch = '$launch'
		 							 WHERE id_data='$id_data'";

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
