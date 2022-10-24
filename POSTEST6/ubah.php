<?php
// Memamngil file Koneksi.php;
include "koneksi.php";
	if(isset($_GET['id'])) {
        // Mengambil data untuk di ubah berdasarkan id;
		$query=$dbh->query(" SELECT * FROM tb_user WHERE id='$_GET[id]'");
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
    <title>Form Ubah Data</title>
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
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?php echo $data['username']?>"readonly>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password"  value="<?php echo $data['password']?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="text" name="status" value="<?php echo $data['status']?>" required>
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file"  name="gambar" value="<?php echo $data['gambar']?>" required >
                </td>
            </tr>
                <td colspan="2">
                    <button type="submit" name="update"><i class="fa fa-check-circle"></i>  Ubah Data</button>
                    <a href="about.php" class="kembali"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			    </td>
            </tr>   
    </table>
    </form>
    </div>

<?php
	if (isset($_POST['update'])) {
        $id                  = $_GET['id']; 
        $nama               = $_POST['nama'];
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        $status             = $_POST['status'];
        $gambar             = $_POST['gambar'];

        // Mengupdate data dari table berdasrkan fieldnya;
		$myqry="UPDATE tb_user SET nama = '$nama',
		 							 username = '$username',
		 							 password = '$password',
		 							 status = '$status',
		 							 gambar = '$gambar'
		 							 WHERE id='$id'";

		$dbh->exec($myqry);
			echo "<span class=berhasil>Data Barang Berhasil Di Ubah,<a href=about.php>Lihat Data</a></span>";
	}
?>
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
