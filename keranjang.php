<?php
include "koneksi2.php";
$tampung = mysqli_query($conn, "SELECT * FROM `db_keranjang`");



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM `db_keranjang` WHERE id_produk='$id'";
    mysqli_query($conn, $delete);
}



?>
<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>keranjang</title>
    <link rel="stylesheet" href="css/keranjang.css">
</head>

<body>
<div class="navbar">
        <h2 class="logo">Jual<span class="lance">Jasa</span></h2>
        <ul class="printilan">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#menu">Menu</a></li>
            <li><a href="index.php#tentang">Tentang</a></li>
            <li><a href="index.php#contact">Hubungi</a></li>
            <li><a href="index.php#contact" style="color: red;">|</a></li>
            <li><a href="profil.php">profil</a></li>
            <li><a href="logout.php">keluar</a></li>
        </ul>
    </div>
        <main class="table">
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Order <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Deskripsi <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Jumlah <span class="icon-arrow">&UpArrow;</span></th>
                            <th> URL <span class="icon-arrow">&UpArrow;</span></th>
                            <th> File <span class="icon-arrow">&UpArrow;</span></th>
                            <th class="o"> Harga <span class="icon-arrow">&UpArrow;</span></th>
                            <!-- <th> Harga <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Harga <span class="icon-arrow">&UpArrow;</span></th> -->
                        </tr>
                    </thead>
                    <?php
                foreach ($tampung as $data){
                    echo "<tr>";
                    echo "<td>" . $data['id_produk'] . "</td>";
                    echo "<td>" . $data['produk_name'] . "</td>";
                    echo "<td>" . $data['deskripsi'] . "</td>";
                    echo "<td>" . $data['jumlah'] . "</td>";
                    echo "<td>" . $data['url'] . "</td>";
                    echo "<td>" . $data['image'] . "</td>";
                    echo "<td>" . $data['harga'] * $data['jumlah'] . "</td>";
                    echo "<td> <a href='?id=" . $data['id_produk'] . "'>hapus</a> </td>";
                    echo "<td> <a href='card_edit.php?id=" . $data['id_produk'] . "'>edit</a> </td>";
                    echo "</tr>";
                }
                ?>
                </table>
            </section>
        </main>
</body>

</html>