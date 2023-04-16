<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: monospace;
        }

        body {
            background-color: rgb(48, 48, 48);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 10px;
            height: 100vh;
            /* margin: 20px 0 50px; */
            padding: 10px;
        }

        .container1 {
            background-color: #12b81b;
            border-radius: 5px;
            box-shadow: 0 14px 28px rgb(0, 0, 0), 0 10px 10px rgb(22, 22, 22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 522px;
            min-width: 370px;
        }

        .container2 {
            display: flex;
        }

        .kiri {
            flex: 1;
            height: 480px;
            background-color: #313131;

        }

        .kanan {
            display: flex;
            flex: 1;
            height: 460px;
            background-color: #12b81b;
            justify-content: center;
            align-items: center;
        }

        .kiri {
            display: flex;
            flex: 1;
            height: 522px;
            justify-content: center;
            align-items: center;
            color: #ffff;
        }

        .kiri p {
            font-size: 0.9rem;

        }

        .isikiri {
            height: 50%;
            width: 80%;
            text-align: right;
            line-height: 22px;

        }

        h2 {
            font-size: 40px;
            font-weight: 800;
            margin-bottom: 4rem;

        }

        .isikanan {
            width: 70%;
            height: 90%;
            text-align: left;
        }

        /* input{
    background-color: rgba(21, 107, 40, 0.219);
    border: none;
    border-radius: 8px;
    padding: 5px 5px;
    font-size: 0.8rem;
    font-family: monospace;
} */

        .btn {
            background-color: #4a584a70;
            margin-right: 17px;
            border-radius: 7px;
            border: none;
            padding: 10px;
            color: rgb(255, 246, 235);
            font-weight: bold;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.322), 0 5px 10px rgba(0, 0, 0, 0.144);
        }

        .btn2 {
            border: none;
            background: rgba(255, 255, 255, 0);
            /* margin-left: 10%; */
            /* margin-top: 6%; */
            border: 1px solid white;
            padding: 10px;
            border-radius: 7px;
            /* box-shadow: 0 5px 30px rgba(0, 0, 0, 0.288), 0 10px 10px rgba(0, 0, 0, 0.397); */
            box-shadow: 0 5px 2px rgba(0, 0, 0, 0.123), 0 10px 10px rgba(0, 0, 0, 0.096);
        }


        .btn2 a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            /* text-shadow: 0 5px 6px #1b1b1d ; */
        }

        .tombolbawah {
            display: flex;
            flex-direction: row;


        }

        ::placeholder {
            color: rgba(255, 255, 255, 0.466);
            opacity: 1;
        }

        input[type=text],
        [type=number],
        [type=file],
        [type=url] {
            width: 100%;
            margin: 1px 0;
            box-sizing: border-box;
            background-color: #12b81b;
            border: 1px solid white;
            border-radius: 7px;
            padding: 5px 15px;
            font-size: 0.8rem;
            font-family: monospace;
            box-shadow: 0 5px 2px rgba(0, 0, 0, 0.123), 0 10px 10px rgba(0, 0, 0, 0.096);
        }

        input[type=number] {
            width: 30%;
        }

        input[type=file] {
            width: 100%;
        }

        .home {
            background-color: #f5f5f5;
            padding: 5px 20px;
            border: none;
            border-radius: 50px;
            color: #1b1b1d;
            /* float: right; */
            /* position:fixed; */
            /* left: 38vw; */
            /* top: 83vh; */
            font-size: 150%;
            margin-top: 10px;
        }

        .home3 {
            color: #101010;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container1">
        <div class="container2">
            <div class="kiri">
                <div class="isikiri">
                    <h2>Free<span style="color: #12b81b;">Lancer</span>.com</h2>
                    <p style="font-weight: bolder;">Kami membantumu menyelesaikan pekerjaanmu lebih cepat dan juga lebih
                        efisien.</p><br>
                    <p>Dikerjakan oleh para ahlinya dan pakar dibidangnya.</p><br><br><br><br><br>
                    <pre
                        style="font-size: 9px; font-family:Verdana, Geneva, Tahoma, sans-serif">*Keteranga lebih kanjut bisa menghubungi kami</pre>
                    <button class="home">
                        <p class="home3"><a href="https://api.whatsapp.com/send?phone=6281331992823"
                                style="text-decoration: none;color: black; font-weight: bold;">Hubungi</a></p>
                    </button>
                </div>
            </div>
            <div class="kanan">
                <div class="isikanan">
                    <form action="simpan.php" class="form" style="color: white;" method="post">

                        <label for="deskripsikan">Deskripsikan Keinginanmu</label><br>
                        <input type="text" id="deskripsikan" name="deskripsikan"
                            placeholder="Tuliskan keinginanmu"><br><br>

                        <label for="number">Jumlah order</label><br>
                        <input type="number" id="jumlah" name="jumlah" placeholder="1"><br><br>

                        <label for="filetambah">Cantumkan file</label><br>
                        <input type="file" id="file" name="file"><br><br>

                        <label for="url">Cantumkan URL</label><br>
                        <input type="url" id="url" name="url" placeholder="www."><br><br>

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
                        <center><button class="btn2" style="margin-top: 25px; width: 97%;"><a href="index.php"
                                    style="color: white;">Halaman utama</a></button></center>
                        <div style="">
                            <div id="tanggal" style="margin-top: 45px; text-align: center; font-size: 15px;"></div>
                        </div>
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
</body>

</html>