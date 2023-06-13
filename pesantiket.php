<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>MatchPass &mdash; Sepak Bola Liga 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Logo -->
		<link rel="shortcut icon" href="images/BRI_Liga_1.png.png">

    <!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/superfish.css">
		<link rel="stylesheet" href="css/style.css">

    <!-- Owl Stylesheets (Slide Konten) -->
    <link rel="stylesheet" href="assets/css/docs.theme.min.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<!-- Awal Bar -->
				<div id="fh5co-header">
					<header id="fh5co-header-section">
						<div class="container">
							<div class="nav-header">
								<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
								<h1 id="fh5co-logo"><a href="index.html">Match<span>Pass</span></a></h1>

								<nav id="fh5co-menu-wrap" role="navigation">
									<ul class="sf-menu" id="fh5co-primary-menu">
										<li>
											<a href="index.html">Home</a>
										</li>
										<li>
											<a class="fh5co-sub-ddown" style="color: white;">League</a>
											<ul class="fh5co-sub-menu">
												<li class="active"><a href="jadwal_pertandingan.html">Jadwal</a></li>
												<li><a href="klub.html">Klub</a></li>
												<li><a href="stadion.html">Stadion</a></li>
											</ul>
										</li>
										<li><a href="aboutus.html">About</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="contactus.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</header>
				</div>
				<!-- Akhir Bar -->
				<!-- Awal Konten Atas -->
				<div class="fh5co-hero fh5co-hero-2">
					<div class="fh5co-overlay"></div>
					<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/konten-tiket.jpg);">
						<div class="desc animate-box">
							<h2>Pemesanan Tiket</h2>
							<span>BRI Liga 1</a></span>
						</div>
					</div>
				</div>
				<!-- Akhir Konten Atas -->
				<!-- Awal Konten -->
				<div class="container" style="margin-bottom: 25px;">
					<form method="POST" action="simpantiket.php">
						<div class="row">
							<div class="col-md-12 text-center heading-section animate-box" style="margin-bottom: 50px;">
								<h3>Order Ticket</h3>
							</div>
							<div class="col-md-6 animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="jadwal_pertandingan" class="col-md-8 col-form-label">Jadwal Pertandingan</label><br>
										<div class="col-md-12">
											<select name="jadwal_pertandingan" class="form-control" id="jadwal_pertandingan">
											<option value="">-- Pilih Jadwal Pertandingan --</option>
											<option value="Persija Jakarta vs PSM Makassar">Persija Jakarta vs PSM Makassar - Stadion Gelora Bung Karno</option>
											<option value="Bali Uinited vs PSS Sleman">Bali Uinited vs PSS Sleman - Stadion Kapten 1 Wayan Dipta</option>
											<option value="Dewa United FC vs Arema FC">Dewa United FC vs Arema FC - Stadion Indomilk Arena</option>
											<option value="Persib Bandung vs Madura United FC">Persib Bandung vs Madura United FC - Stadion Gelora Bandung Lautan Api</option>
											<option value="PS Barito Putera vs Persita">PS Barito Putera vs Persita - Stadion Demang Lehman</option>
											<option value="Rans Nusantara FC vs Persikabo 1973">Rans Nusantara FC vs Persikabo 1973 - Stadion Wibawa Mukti</option>
											<option value="Persik Kediri vs Borneo FC">Persik Kediri vs Borneo FC - Stadion Brawijaya</option>
											<option value="PSIS Semarang vs Bhayangkara FC">PSIS Semarang vs Bhayangkara FC - Stadion Jatidiri</option>
											<option value="Arema FC vs Persib Bandung">Arema FC vs Persib Bandung - Stadion Kapten 1 Iwayan Dipta</option>
											<option value="PSS Sleman vs Persis Solo">PSS Sleman vs Persis Solo - Stadion Maguwarjo</option>
											<option value="Borneo FC vs Bali United FC">Borneo FC vs Bali United FC - Stadion Segiri</option>
											<option value="Persita vs PSIS Semarang">Persita vs PSIS Semarang - Stadion Indomilk Arena</option>
											<option value="Persebaya Surabaya vs PS Barito Putera">Persebaya Surabaya vs PS Barito Putera - Stadion Gelora Bung Tomo</option>
											<option value="PSM Makassar vs Dewa United FC">PSM Makassar vs Dewa United FC - Stadion Gelora B.J. Habibie</option>
											<option value="Madura United FC vs Persik Kediri">Madura United FC vs Persik Kediri - Stadion Gelora Madura Ratu Pamelingan</option>
											<option value="Persikabo 1973 vs Persija Jakarta">Persikabo 1973 vs Persija Jakarta - Stadion Wibawa Mukti</option>
											<option value="Bhayangkara FC vs Rans Nusantara FC">Bhayangkara FC vs Rans Nusantara FC - Stadion Patriot CandraBhaga</option>
											<option value="PS Barito Putera vs PSS Sleman">PS Barito Putera vs PSS Sleman - Stadion Demang Lehman</option>
											<option value="Persikabo 1973 vs PSM Makassar">Persikabo 1973 vs PSM Makassar - Stadion Wibawa Muktio</option>
											<option value="Persib Bandung vs Dewa United FC">Persib Bandung vs Dewa United FC - Stadion Gelora Bandung Lautan Api</option>
											<option value="Persis Solo vs Borneo FC">Persis Solo vs Borneo FC - Stadion Manahan</option>
											<option value="Persik Kediri vs Arema FC">Persik Kediri vs Arema FC - Stadion Brawijaya</option>
											<option value="Bali United FC vs Madura United FC">Bali United FC vs Madura United FC - Stadion Kapten 1 Wayan Dipta</option>
											<option value="Rans Nusantara FC vs Persita">Rans Nusantara FC vs Persita - Stadion Wibawa Mukti</option>
											<option value="PSIS Semarang vs Persebaya Surabaya">PSIS Semarang vs Persebaya Surabaya - Stadion Jatidiri</option>
											<option value="Persija Jakarta vs Bhayangkara FC">Persija Jakarta vs Bhayangkara FC - Stadion Gelora Bung Karno</option>
											<option value="Borneo FC vs PS Barito Putera">Borneo FC vs PS Barito Puter - Stadion Segiri</option>
											<option value="Dewa United FC vs Persik Kediri">Dewa United FC vs Persik Kediri - Stadion Indomilk Arena</option>
											<option value="Arema FC vs Bali United FC">Arema FC vs Bali United FC - Stadion Kapten 1 Wayan Dipta</option>
											<option value="Bhayangkara FC vs Persikabo 1973">Bhayangkara FC vs Persikabo 1973 - Stadion Patriot ChandraBhaga</option>
											<option value="Persita vs Persija Jakarta">Persita vs Persija Jakarta - Stadion Indomilk Arena</option>
											<option value="PSS Sleman vs PSIS Semarang">PSS Sleman vs PSIS Semarang - Stadion Maguwarjo</option>
											<option value="PSM Makassar vs Persib Bandung">PSM Makassar vs Persib Bandung - Stadion Gelora B.J Habibie</option>
											<option value="Madura United FC vs Persis Solo">Madura United FC vs Persis Solo - Stadion Gelora Madura Ratu Pamelingan</option>
											<option value="Persebaya Surabaya vs Rans Nusantara FC">Persebaya Surabaya vs Rans Nusantara FC - Stadion Gelora Bung Tomo</option>
											<option value="PSIS Semarang vs Borneo FC">PSIS Semarang vs Borneo FC - Stadion Jatidiri</option>
											<option value="Persikabo 1973 vs Persita">Persikabo 1973 vs Persita - Stadion Wibawa Mukti</option>
											<option value="Persik Kediri vs Persib Bandung">Persik Kediri vs Persib Bandung - Stadion Brawijaya</option>
											<option value="Bali United FC vs Dewa United FC">Bali United FC vs Dewa United FC - Stadion Kapten 1 Wayan Dipta</option>
											<option value="Bhayangkara FC vs PSM Makassar">Bhayangkara FC vs PSM Makassar - Stadion Patriot ChandraBhaga</option>
											<option value="Rans Nusantara FC vs PSS Sleman">Rans Nusantara FC vs PSS Sleman - Stadion Patriot ChandraBhaga</option>
											<option value="Persija Jakarta vs Persebaya Surabaya">Persija Jakarta vs Persebaya Surabaya - Stadion Gelora Bung Karno</option>
											<option value="Persis Solo vs Arema FC">Persis Solo vs Arema FC - Stadion Manahan</option>
											<option value="PS Barito Putera vs Madura United FC">PS Barito Putera vs Madura United FC - Stadion Demang Lehman</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="tanggal" class="col-md-8 col-form-label">Tanggal Main</label><br>
									<div class="col-md-12">
									<input type="date" name="tanggal" class="form-control" id="tanggal">
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="nama" class="col-md-8 col-form-label">Nama Lengkap</label><br>
									<div class="col-md-12">
									<input type="text" name="nama" class="form-control" id="name" placeholder="Full Name">
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="nik" class="col-md-8 col-form-label">NIK</label><br>
									<div class="col-md-12">
									<input type="text" name="nik" class="form-control" id="nik" placeholder="Nomor NIK">
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="umur" class="col-md-8 col-form-label">Umur</label><br>
									<div class="col-md-12">
									<input type="text" name="umur" class="form-control" id="umur" placeholder="Age : 19">
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email" class="col-md-8 col-form-label">Email</label><br>
									<div class="col-md-12">
									<input type="text" name="email" class="form-control" id="email" placeholder="Email Pribadi">
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="nomor_hp" class="col-md-8 col-form-label">Nomor HP</label><br>
									<div class="col-md-12">
									<input type="text" name="nomor_hp" class="form-control" id="nomor_hp" placeholder="Nomor Handphone">
									</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="harga" class="col-md-8 col-form-label">Harga Tiket</label><br>
									<div class="col-md-12">
									<input type="radio" name="harga" value="80000"> 80000 (Category 3)
									<input type="radio" name="harga" value="100000"> 100000 (Category 2)
									<input type="radio" name="harga" value="125000"> 125000 (Category 1)
									<input type="radio" name="harga" value="200000"> 200000 (VIP Barat)
									<input type="radio" name="harga" value="250000"> 250000 (VIP Timur)
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="jumlah" class="col-md-8 col-form-label">Jumlah Tiket</label><br>
									<div class="col-md-12">
									<input type="radio" name="jumlah" value="1"> 1
									<input type="radio" name="jumlah" value="2"> 2
									<input type="radio" name="jumlah" value="3"> 3
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="pembayaran" class="col-md-8 col-form-label">Pembayaran Via?</label><br>
									<div class="col-md-12">
										<select name="pembayaran" class="form-control" id="pembayaran">
											<option value="">-- Pilih Jenis Pembayaran--</option>
											<option value="Bank BCA">Bank BCA</option>
											<option value="Bank BRI">Bank BRI</option>
											<option value="Shopeepay">Shopeepay</option>
											<option value="Dana">Dana</option>
											<option value="Ovo">Ovo</option>
										</select>
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="bukti_transfer" class="col-md-8 col-form-label">Upload Bukti Transfer</label><br>
									<div class="col-md-12">
									<input type="file" name="bukti_transfer" class="form-control" id="bukti_transfer">
									</div>
									</div>
								</div>
								<center>
									<div class="col-md-12">
										<div class="form-group">
										<a href="syarat.html" class="stretched-link">Terms and Conditions</a>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										<input type="submit" value="Pesan" class="btn btn-primary">
										</div>
									</div>
								</center>
							</div>
						</div>
					</form>
				</div>
				<!-- Akhir Konten -->
				<!-- Awal Footer -->
				<footer>
					<div id="footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
									<p class="fh5co-social-icons">
										<a href="https://twitter.com/Liga1Match" target="_blank"><i class="icon-twitter2"></i></a>
										<a href="https://www.facebook.com/Liga1Match" target="_blank"><i class="icon-facebook2"></i></a>
										<a href="https://www.instagram.com/liga1match/" target="_blank"><i class="icon-instagram"></i></a>
										<a href="https://www.youtube.com/channel/UC6eEuoStVRDlpRogMbf2MUw" target="_blank"><i class="icon-youtube"></i></a>
									</p>
									<p>Copyright 2023 <a href="index.html">MatchPass</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by Ilham and Rayhan</a></p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<!-- Akhir Footer -->
			</div>
			<!-- END fh5co-page -->
		</div>
		<!-- END fh5co-wrapper -->

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Stellar -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>

		<!-- Main JS (Jangan dihapus) -->
		<script src="js/main.js"></script>
	</body>
</html>

