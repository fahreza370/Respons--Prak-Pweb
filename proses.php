<html>
<head>
<title>Muhammad Fahreza</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="about/css/style.css">
	<link rel="stylesheet" href="gaya.css">
	<link rel="stylesheet" type="text/css" href="css/styles2.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<header>
		<nav class="navbar">
			<div class="navbar__container">
			  <a href="#home" id="navbar__logo"><img src="img/logo.png" alt=""></a>
			  <div class="navbar__toggle" id="mobile-menu">
				<span class="bar"></span> <span class="bar"></span>
				<span class="bar"></span>
			  </div>
			  <ul class="navbar__menu">
				<li class="navbar__item">
				  <a href="index.html" class="navbar__links" id="home-page">Home</a>
				</li>
				<li class="navbar__item">
				  <a href="about.html" class="navbar__links" id="about-page">About</a>
				</li>
				<li class="navbar__item">
				  <a href="#" class="navbar__links" id="services-page">Services</a
				  >
				</li>
				<li class="navbar__btn">
				  <a href="lihat.php" class="button" id="signup">Sign Up</a>
				</li>
			  </ul>
			</div>
		  </nav>
		  <script src="app.js"></script>
	</header>

	<div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="index.html">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="servis.php">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$nama_barang = $_POST['nama_barang'];
if($nama_barang == "Paket 1" ){
$harga = 20000;
}
else if($nama_barang == "Paket 2" ){
$harga = 30000;
}
else if($nama_barang == "Paket 3" ){
$harga = 50000;
};
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];
$kota = $_POST['kota'];

//menghitung subtotal
$subtotal = $harga * $jumlah ;

//menghitung diskon berdasarkan status (pelanggan atau bukan pelanggan).
//Keterangan :
//jika statusnya pelanggan akan mendapat diskon 10%.
//jika statusnya bukan pelanggan maka tidak mendapat diskon. Jadi:

switch ($status){
case "Pelanggan":
$diskon = $subtotal * 0.1;
break;
default:
$diskon = 0;
}

//menghitung ongkos kirim berdasarkan kota tujuan
if($kota == "Jakarta" ){
$ongkos = 20000;
}
else if($kota == "Bandung" ){
$ongkos = 10000;
}
else if($kota == "Surabaya" ){
$ongkos = 30000;
}
//menghitung total keseluruhan
$total = $subtotal - $diskon + $ongkos;
?>
<div align="center" >
<table >
	<tr>
		<h3>RINCIAN TRANSAKSI</h3>
	</tr>
	<tr>
	<td >Nama Barang</td>
	<td >&nbsp;
	<?php echo "$nama_barang"; ?></td>
	</tr>
	<tr>
	<td>Harga</td>
	<td >&nbsp;
	<?php echo "Rp. ".number_format($harga); ?></td>
	</tr>
	<tr>
	<td >Quantity</td>
	<td >&nbsp;
	<?php echo "$jumlah"; ?></td>
	</tr>
	<tr>
	<td >Subtotal</td>
	<td >&nbsp;
	<?php echo "Rp. ".number_format($subtotal); ?></td>
	</tr>
	<tr>
	<td >Status</td>
	<td >&nbsp;
	<?php echo "$status"; ?></td>
	</tr>
	<tr>
	<td >Diskon</td>
	<td >&nbsp;
	<?php echo "Rp. ".number_format($diskon); ?></td>
	</tr>
	<tr>
	<td >Ongkos Kirim</td>
	<td >&nbsp;
	<?php echo "Rp. ".number_format($ongkos)?>
	<?php echo " ( $kota )";?></td>
	</tr>
	<tr>
	<td >
	<strong>Total</strong></td>
	<td>&nbsp;
	<?php echo "Rp. ".number_format($total); ?></td>
	</tr>
</table>

<?php

echo "<head><title>GUEST BOOK</head></title>";
$fp = fopen("bukutamu.txt","a+");
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
if($nama_barang == "Paket 1" ){
	$harga = 20000;
	}
	else if($nama_barang == "Paket 2" ){
	$harga = 10000;
	}
	else if($nama_barang == "Paket 3" ){
	$harga = 30000;
	};
$jumlah= $_POST['jumlah'];
$kota = $_POST['kota'];
$komen = $_POST['komen'];

fputs($fp,"$nama|$nama_barang|$total |$jumlah|$kota|$komen\n");
fclose($fp);
echo " Terima Kasih telah mnggunakan jasa kami<br>";
echo " Total pmbayaran diatas bisa di bayarkan saat kurir kami tiba<br>";
echo "<a class=btn href=index.html> Lihat Profile </a><br> ";
?>
</div>
<div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href=""><h1 class="text-secondary mb-3"><span class="text-white">R</span>Laundry</h1></a>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Temukan Kami</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>173 Street,Sura City,Wakanda</p>
                <p><i class="fa fa-phone-alt mr-2"></i>081898363888</p>
                <p><i class="fa fa-envelope mr-2"></i>rumahlaundry444@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                </div>
            </div>

        </div>
    </div>
    </div>
	
	
		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
	
</body>
</html>