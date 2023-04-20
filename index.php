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
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="shortcut icon" href="css/JJ.ico" type="image/x-icon">
</head>

<body>
	<!----iki nduwure---->
	<div class="badan" id="home">
		<div class="navbar">
			<h2 class="logo">Jual<span class="lance">Jasa</span></h2>
			<ul class="printilan">
				<li><a href="#home">Home</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="#tentang">Tentang</a></li>
				<li><a href="#contact">Hubungi</a></li>
				<li><a href="#contact" style="color: red;">|</a></li>
				<li><a href="profil.php">profil</a></li>
				<li><a href="logout.php">keluar</a></li>
			</ul>
			<!-- <div class="pojokkanan">
				<h6 class="btn"><a href="profil.php" >Profil</a></h6>
				<h6 class="keluar"><a href="logout.php" >keluar</a></h6>
			</div> -->
		</div>

		<div class="content">
			<h4>Hello <?php echo $_SESSION['a_global']->admin_name ?>, welcome to </h4>
			<h1>Jual_<span>Jasa</span></h1>
			<h3>Atur Waktu Anda, Nikmati Kreativitas Anda, Dengan Jasa Freelance Terbaik!</h3>
		</div>
		<!-- <button class="home"><a href="#home">home</a></button> -->
	</div>
	<!----ini nko ngisore---->
	<!-- <center> -->
	<div>
		<div class="about">
			<center>
				<div class="about-text" id="tentang">
					<h2>Tentang Kami</h2>
					<h5>freelancer <span>comunity</span></h5>
					<p>Website ini dirancang untuk menampung para freelancer untuk akhirnya bisa menjualkan jasa mereka. Ataupun Website ini juga bisa digunakan bagi para pencari pekerja agar bisa menyelesaikan tugas mereka dengan cepat dan efektif karen dikerjakan oleh ahli di bidangnya masing masing.</p>
				</div>
				<button class="home"><a href="keranjang.php"><p class="home3"><i class="fa-solid fa-cart-plus"></i></p></a></button>
			</center>
		</div>
	</div>
	<!-- </center> -->

	<!-----iki nko isine kotak kotak----------->
	<div class="jasa" id="menu">
		<div class="jasa-jasa">
			<h2>Apa yang kamu mau?</h2>
		</div>

		<div class="box">
			<div class="card">
				<!-- iki desain -->
				<h5>Desain Grafis</h5>
				<?php $produk1 = "Desain Grafis"; ?>
				<div class="pra">
					<p>Desain menarik dari para profesional.</p>
				</div>
				<button class="order"><a href="card.php?produk=<?php echo $produk1 ?>">Order now</a> </button>
			</div>
			<div class="card">
				<!-- iki copy writer -->
				<h5>Copy<br />Writer</h5>
				<?php $produk2 = "Copy Writer"; ?>
				<div class="pra">
					<p>Solusi marketing dari para ahli.</p>
				</div>
				<!-- <button class="order"><a href="card.php">Order now</a></button> -->
				<button class="order"><a href="card.php?produk=<?php echo $produk2 ?>">Order now</a> </button>
			</div>
			<div class="card">
				<!-- iki edit poto -->
				<h5>Restorasi Foto</h5>
				<?php $produk3 = "Restorasi Foto"; ?>
				<div class="pra">
					<p>Foto rusak nggak jadi masalah.</p>
				</div>
				<!-- <button class="order"><a href="card.php">Order now</a></button> -->
				<button class="order"><a href="card.php?produk=<?php echo $produk3 ?>">Order now</a> </button>
			</div>
			<div class="card">
				<!-- iki edit poto -->
				<h5>Jasa Pengetikan</h5>
				<?php $produk4 = "Jasa Pengetikan"; ?>
				<div class="pra">
					<p>Recomended banget bagi para penghemat waktu.</p>
				</div>
				<!-- <button class="order"><a href="card.php">Order now</a></button> -->
				<button class="order"><a href="card.php?produk=<?php echo $produk4 ?>">Order now</a> </button>
			</div>
			<div class="card">
				<!-- iki edit poto -->
				<h5>Desain Portofolio</h5>
				<?php $produk5 = "Desain Portofolio"; ?>
				<div class="pra">
					<p>Untuk pejuang CV. Semangat!</p>
				</div>
				<!-- <button class="order"><a href="card.php">Order now</a></button> -->
				<button class="order"><a href="card.php?produk=<?php echo $produk5 ?>">Order now</a> </button>
			</div>
		</div>
		
		<div class="box">
			<div class="card"><a href="desaingrafis.html">
				<!-- iki desain -->
				<h5>Convert PDF</h5>
				<?php $produk6 = "Convert PDF"; ?>
				<div class="pra">
					<p>Ubah dokumenmu menjadi PDF sesuai kebutuhan.</p>
				</div>
			</a>
			<!-- <button class="order"><a href="card.php">Order now</a></button> -->
			<button class="order"><a href="card.php?produk=<?php echo $produk6 ?>">Order now</a> </button>
		</div>
		<div class="card">
			<!-- iki copy writer -->
			<h5>Layout<br />Majalah</h5>
			<?php $produk7 = "Layout Majalah"; ?>
			<div class="pra">
				<p>Jadikan majalahmu lebih menarik.</p>
			</div>
			<!-- <button class="order"><a href="card.php">Order now</a></button> -->
			<button class="order"><a href="card.php?produk=<?php echo $produk7 ?>">Order now</a> </button>
		</div>
		<div class="card">
			<!-- iki edit poto -->
			<h5>Web <br>Design</h5>
			<?php $produk8 = "Web Design"; ?>
			<div class="pra">
				<p>Miliki website sendiri yang indah dilihat.</p>
			</div>
			<!-- <button class="order"><a href="card.php">Order now</a></button> -->
			<button class="order"><a href="card.php?produk=<?php echo $produk8 ?>">Order now</a> </button>
		</div>
		<div class="card">
			<!-- iki edit poto -->
			<h5>Edit <br>Foto</h5>
			<?php $Produk9 = "Edit Foto"; ?>
			<div class="pra">
				<p>Menjadikan fotomu menjadi lebih hidup.</p>
			</div>
			<!-- <button class="order"><a href="card.php">Order now</a></button> -->
			<button class="order"><a href="card.php?produk=<?php echo $Produk9 ?>">Order now</a> </button>
		</div>
		<div class="card">
			<!-- iki edit poto -->
			<h5>Edit <br>Video</h5>
			<?php $produk10 = "Edit Video"; ?>
			<div class="pra">
				<p>Simple elegan dan sesuai harapan.</p>
			</div>
			<!-- <button class="order"><a href="card.php">Order now</a></button> -->
			<button class="order"><a href="card.php?produk=<?php echo $produk10 ?>">Order now</a> </button>
		</div>
		</div>

		<div>
			<h2>Atau</h2>
			<p class="cv"><a href="#sekarang">Lengkapi CV milikmu dan jadilah bagian dari kami</a></p>

		</div>
	</div>


	<div class="mulai" id="sekarang">
		<p>Mulai kehidupanmu yang lebih mudah.</p>
		<a class="tombol" href="">Masuk Sekarang</a>
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
				<td>Klp. A11.4207</td>
			</tr>
			<tr>
				<td><a href="#tentang">About</a></td>
				<td>LinkedIn</td>
				<td></td>
				<td>Pemprogaman Web Lanjut</td>
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