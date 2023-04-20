<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header("location: login2.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>JualJasa.com</title>
    <link rel="stylesheet" type="text/css" href="css/styleindex.css">
</head>

<body>
    <!----iki nduwure---->
    <div class="badan" id="home">
        <div class="navbar">
            <h2 class="logo">Free<span class="lance">Lance</span></h2>
            <ul class="printilan">
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#contact">Hubungi</a></li>
            </ul>
            <div class="pojokkanan">
                <h6 class="btn"><a href="profil.php">Profil</a></h6>
                <h6 class="keluar"><a href="logout.php">keluar</a></h6>
            </div>
        </div>

        <!------ngisor poll--------->
        <div class="footer" id="contact">
        </div>
        <div class="last">
            <div class="logobawah">
                <h4>Product From</h4>
                <h1>Free<span>Lancer</span></h1>
            </div>


            <table>
                <tr>
                    <th style="width: 100px;">Links</th>
                    <th style="width: 100px;">Contact</th>
                    <th style="width: 100px;">Other</th>
                    <th style="width: 200px;">Identity</th>
                </tr>
                <tr>
                    <td><a href="#menu">Menu</a></td>
                    <td><a href="https://api.whatsapp.com/send?phone=6281331992823">WhatsApp</a></td>
                    <td>Complete CV</td>
                    <td>Rifqis Sakha Hilmi Aziz</td>
                </tr>
                <tr>
                    <td><a href="#tutorial">Tutorial</a></td>
                    <td><a href="https://www.instagram.com/">Instagram</a></td>
                    <td>Service</td>
                    <td>NIM: A11.2022.14254</td>
                </tr>
                <tr>
                    <td><a href="#sekarang">Mulai</a></td>
                    <td>Gmail</td>
                    <td>Other</td>
                    <td>Klp. A11.4107</td>
                </tr>
                <tr>
                    <td><a href="#tentang">About</a></td>
                    <td>LinkedIn</td>
                    <td></td>
                    <td>Pemprogaman Berbasis Web</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="font-size: 9.8px;">(Bpk. Noor Ageng Setiyanto, M. Kom.)</td>
                </tr>
            </table>
        </div>
</body>

</html>