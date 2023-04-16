<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
</style>
    <title>Login | JualJasa</title>
</head>
<body id = "bg-login">
    <div class="box_login">
        <h2>Log In</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" placeholder="Login" class="btn">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'koneksi2.php';
                $user = $_POST['user'];
                $vpass = $_POST['pass'];

                $cek = mysqli_query($conn,"SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".$vpass."'");
                if(mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d -> admin_id;
                    echo '<script>window.location="index.php"</script>';
                }else {
                    echo '<script>alert("Username atau password yang anda gunakan salah")</script>';
                }
            }
        ?>
    </div>
</body>
</html>