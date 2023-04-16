<?php
$deskripsikan = $_POST['deskripsikan'];
$jumlah = $_POST['jumlah'];
$file = $_POST['file'];
$url = $_POST['url'];
$promo = $_POST['promo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <style>
        .container1{
            background-color: #12b81b;
            border-radius: 5px;
            box-shadow: 0 14px 28px rgb(0, 0, 0), 0 10px 10px rgb(22, 22, 22);
            /* position: relative; */
            /* overflow: hidden; */
            width: 300px;
            max-width: 100%;
            min-height: 522px;
            min-width: 370px;
        }

        *{
            box-sizing: border-box;
            margin: 0;
            font-family: monospace;
        }

        body{
            background-color: rgb(48, 48, 48);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            /* font-size: 10px; */
            height: 100vh;
            /* margin: 20px 0 50px; */
            padding: 10px;
        }

        .heading{
            font-size: 150%;
            justify-content: center;
            align-items: center;
            margin: 30px;
            text-align: center;
            margin-bottom: 50px;
        }

        .info{
            justify-content: center;
            align-items: center;
            font-weight: 200px;
            margin-bottom: 100px;
            text-align: left;
            margin-left: 30px;
        }

        .btn{
            background-color: #4a584a70;
            margin-right: 17px;
            border-radius: 7px;
            border: none;
            padding: 10px;
            color: rgb(255, 246, 235);
            font-weight: bold;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.322), 0 5px 10px rgba(0, 0, 0, 0.144); 
        }

        .btn a{
            text-decoration: none;
            color: white;
        }



    </style>
</head>
<body>
    <div class="container1">

        <div class="heading">
            <h3>Konfirmasi pembayaran</h3><br>
            <p>Mohon untuk Konfirmasi keterangan order anda</p>
        </div>

        <center>
            <div class="info">
                <h4>Yang kamu inginkan: <?php echo $deskripsikan ?></h4><br>
                <h4>Jumlah order: <?php echo $jumlah ?></h4><br>
                <h4>File yang dicantumkan: <?php echo $file ?></h4><br>
                <h4>Tautan url: <?php echo $url ?></h4><br>
            </div>
            <button class="btn"><a href="index.php">Kembali ke awal</a></button><br><br>
            <h6>Menunggu pesanan diproses oleh bersangkutan.</h6>
        </center>

    </div>

    <script>
        var lanjutkan = prompt("Konfimasi pesanan. Ketik "y"  untuk melanjutkan.);
        if (lanjutkan == "lanjut"){
            document.write("");
        } else {
            document.write("");
        }
    </script>
    
</body>
</html>