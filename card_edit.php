<?php 
    include 'koneksi2.php';
    if(isset($_GET['id'])){
        $produk = $_GET['id'];
    }

    $deskripsi = null;
    $url = null;
    $file = null;
    $jumlah = null;

    $tampung= $conn -> query("SELECT * FROM `db_keranjang` WHERE id_produk='$produk'");
    $data= $tampung -> fetch_assoc();

    if(isset($_POST['submit'])){
        $jumlah = $_POST['jumlah'];
        $deskripsi = $_POST['deskripsi'];
        $harga = 50000;
        $url = $_POST['url'];
        $file = $_POST['file'];
        
        // $tampung = mysqli_query($conn,"INSERT INTO `db_keranjang`(`produk_name`, `deskripsi`, `jumlah`, `url`, `image`, `harga`) 
        //                                                     VALUES ('$produk','$deskripsi','$jumlah','$url','$gambar','$harga')");
        $conn -> query("UPDATE `db_keranjang` SET `deskripsi`='$deskripsi',`jumlah`='$jumlah',`url`='$url',`image`='$file',`harga`='$harga' WHERE id_produk='$produk'");
        header('location:keranjang.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecard.css">
    <title>Order now</title>
</head>

<body>
    <!-- <div class="navbar" style="position: fixed;">
        <h2 class="logo">Jual<span class="lance">Jasa</span></h2>
        <ul class="printilan">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#menu">Menu</a></li>
            <li><a href="index.php#tentang">Tentang</a></li>
            <li><a href="index.php#contact">Hubungi</a></li>
            <li><a href="index.php#contact" style="color: red;">|</a></li>
            <li><a href="profil.php">profil</a></li>
            <li><a href="logout.php">keluar</a></li>
        </ul>
    </div> -->
    <div class="container1">
        <div class="container2">
            <div class="kiri">
                <div class="isikiri">
                    <h2>Jual<span style="color: #12b81b;">Jasa</span></h2>
                    <p style="font-weight: bolder;">Kami membantumu menyelesaikan pekerjaanmu lebih cepat dan juga lebih
                        efisien.</p><br>
                    <p>Dikerjakan oleh para ahlinya dan pakar dibidangnya.</p><br><br><br><br><br>
                    <pre style="font-size: 9px; font-family:Verdana, Geneva, Tahoma, sans-serif">*Keteranga lebih kanjut bisa menghubungi kami</pre>
                    <button class="home">
                        <p class="home3"><a href="https://api.whatsapp.com/send?phone=6281331992823" style="text-decoration: none;color: black; font-weight: bold;">Hubungi</a></p>
                    </button>
                </div>
            </div>
            <div class="kanan">
                <div class="isikanan">
                    <form action=" " class="form" style="color: white;" method="post">

                        <label for="deskripsikan">Deskripsikan Keinginanmu</label><br>
                        <input type="text" id="deskripsikan" name="deskripsi" value="<?= $data['deskripsi']?>" placeholder="Tuliskan keinginanmu"><br><br>

                        <label for="number">Jumlah order</label><br>
                        <input type="number" id="jumlah" name="jumlah" value="<?= $data['jumlah']?>"placeholder="1"><br><br>

                        <label for="filetambah">Cantumkan file</label><br>
                        <input type="file" id="file" name="file" value="<?= $data['image']?>"><br><br>

                        <label for="url">Cantumkan URL</label><br>
                        <input type="url" id="url" name="url" value="<?= $data['url']?>"placeholder="www."><br><br>

                        <label for="promo" name="promo">Kode promo(jika ada)</label><br>
                        <input type="text" id="promo" name="promo" placeholder="XXXXXXXXXXX"><br><br>
                        <p>
                            total harus dibayar
                        </p>
                        <p>
                            Rp. 200,000
                        </p><br>
                        <div class="tombolbawah">
                            <button type="submit" id="submit" name="submit" class="btn">order sekarang</button>
                            <button type="reset" class="btn2" style="width: 120px; color: #f5f5f5;">Reset</button>
                        </div>
                        <center><button class="btn2" style="margin-top: 25px; width: 97%;"><a href="index.php" style="color: white;">Halaman utama</a></button></center>
                        <div>
                            <div id="tanggal" style="margin-top: 45px; text-align: center; font-size: 15px;"></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <label for="home">Atau konsultasi terlebih dahulu</label>
    <script>
        const tanggal = new Date();

        const hari = tanggal.getDay(); // mengambil nomor hari (0-6)
        const bulan = tanggal.getMonth(); // mengambil nomor bulan (0-11)
        const tahun = tanggal.getFullYear(); // mengambil tahun

        // membuat array dengan nama hari dan bulan
        const namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        // menampilkan tanggal hari bulan tahun di elemen dengan id "tanggal"
        document.getElementById('tanggal').innerHTML = `Hari ini adalah ${namaHari[hari]}, ${tanggal.getDate()} ${namaBulan[bulan]} ${tahun}`;
    </script>
    <div class="tampil">
        <div>

        </div>
    </div>
</body>

</html>