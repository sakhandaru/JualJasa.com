<?php
	session_start();
    include 'koneksi2.php';
	if ($_SESSION['status_login'] != true){
		header("location: login.php");
	}
    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleprofil.css">
    <title>profil</title>
</head>

<body>
    <div class="navbar">
        <h2 class="logo">Free<span class="lance">Lance</span></h2>
        <ul class="printilan">
            <li><a href="index.php">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#contact">Hubungi</a></li>
        </ul>
        <h6 class="btn"><a href="logout.php">keluar</a></h6>
    </div>
    <H3>Profil</H3>
    <div class="box">
        <form action="" method="post">
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $d-> admin_name ?>" required>
            <input type="text" name="user" placeholder="Username" value="<?php echo $d-> username ?>"required>
            <input type="text" name="hp" placeholder="No. Hp" value="<?php echo $d-> admin_telp ?>"required>
            <input type="email" name="email" placeholder="Email" value="<?php echo $d-> admin_email ?>"required>
            <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $d-> admin_address ?>"required>
            <input type="submit" name="submit" placeholder="kirim" value="Ubah Profil">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $nama   = ucwords($_POST['nama']) ;
                $user   = $_POST['user'];
                $hp     = $_POST['hp'];
                $email  = $_POST['email'];
                $alamat = ucwords($_POST['alamat']) ;

                // $update = mysqli_query($conn, "UPDATE tb_admin SET
                //                     admin_name = '".$nama."',
                //                     username = '".$user."',
                //                     admin_telp = '".$hp."',
                //                     admin_email = '".$email."',
                //                     admin_address = '".$alamat."'
                //                     WHERE admin_id = '".$d->admin_id."' ");

                $update = "UPDATE tb_admin SET admin_name = '$nama',
                                               username = '$user',
                                               admin_telp = '$hp',
                                               admin_email = '$email',
                                               admin_address = '$alamat'
                                             WHERE admin_id = '1'";
                if (mysqli_query($conn, $update)){
                    echo 'berhasil diperbarui';
                }else {
                    echo 'gagal diperbarui' .mysqli_error($conn);
                    echo '<script>alert("Ubah data berhasil")</script>';
                    echo '<script>window.location="profil.php"</script>';
                }
            }
        ?>
    </div>


    <H3>ubah pass</H3>
    <div class="box">
        <form action="" method="post">
            <input type="password" name="pass1" placeholder="Password Baru" required>
            <input type="password" name="pass2" placeholder="Konfirmasi Password" required>
            <input type="submit" name="submitpass" placeholder="kirim" value="Ubah Password">
        </form>
        <?php
            if(isset($_POST['submitpass'])){
                
                $pass1   = $_POST['pass1'];
                $pass2  = $_POST['pass2'];
                
                if ($pass1 != $pass2){
                    echo '<script>alert("konfirmasi Password tidak sesuai")</script>';
                } else {
                    $u_pass = mysqli_query($conn, "UPDATE tb_admin SET
                                    password = '".$pass1."'
                                    WHERE admin_id = '".$d->admin_id."' ");
                    if ($u_pass){
                        echo '<script>alert("Ubah passwor berhasil")</script>';
                        echo 'window.location="profil.php"</script>';
                    }
                }

            }
        ?>
    </div>

</body>

</html>