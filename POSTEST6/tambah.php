<?php
// Memamnggil file koneksi.php;
include 'koneksi.php';
	
    // Mengambail nilai maximum dari id as = ALiAS maxKode;
    // Membuat id automatis;
	$tampil = "SELECT max(id) as maxKode FROM tb_user";
	$query = $dbh->query($tampil);
	foreach($query as $data){
		$kode = $data['maxKode'];
		$noUrut = (int) substr($kode, 3,3);
		@$noUrut++;
		$char = "ID";
		$kos = $char . sprintf("%03s", $noUrut);
	}



    if(isset($_POST['simpan'])){
        $id                 = $kos; 
        $nama               = $_POST['nama'];
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        $status             = $_POST['status'];
        // $gambar             = $_POST['gambar'];
        
        $gambar = $_FILES['tampilan']['name'];
        // $x = explode( $gambar);
        // $ekstensi = strtolower(end($x));

        $gambar_baru = "$gambar";
        $tmp = $_FILES['tampilan']['tmp_name'];

        if(move_uploaded_file($tmp, 'tampilan/'.$gambar_baru)){
            $query = "INSERT INTO tb_user (id, nama, username, password, status, gambar)
                                  VALUES ('$kos','$nama','$username','$password', '$status', '$gambar_baru')";
            $result = $dbh->query($query);

            if($result){
                header("Location:about.php");
            }else{

                echo "gagal kirim";
            }
        }
        
    if ($query)
        echo "<span class=berhasil>Data Barang Berhasil Di Tambah,<a href=about.php>Lihat Data</a></span>";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>Form Data Akun</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">

</head>
<body>
    <div class="form">  
    <p class="asa" >Wind Store</p>
    <form  method="POST" enctype="multipart/form-data">
        <table border = "0">
            <tr>
                <td>Nama</td>
                <td> 
                    <input type="text" name="nama" placeholder="Nama Anda" required>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" placeholder="Username Anda" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" placeholder="Password Anda" required>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="text" name="status" placeholder="Status Anda?" required>
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file"  name="tampilan" required >
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="simpan"><i class="fa fa-check-circle"></i>  Simpan Data</button>
                    <a href="about.php" class="kembali"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			    </td>
            </tr>   
    </table>
    </form>     
    </div>
</body>
</html>
<style>

.form{
 	width: 1106px;
 	background-color: ;
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