<?php

$conn = mysqli_connect('localhost', 'root', '');
$sql = 'SELECT COUNT(*) AS `exists` FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMATA.SCHEMA_NAME="niagahoster_db"';

// execute the statement
$query = $conn->query($sql);

// extract the value
$row = $query->fetch_object();
$dbExists = (bool) $row->exists;
if($dbExists == 1){
    
}else{
    header('Location: seeder.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="niagahoster,web,hosting,domain">
  <meta name="author" content="Muhammad Khoirul Bakhtiar">

  <title>Web Hosting Indonesia Unlimited & Terbaik - Niagahoster</title>


  <!-- bootstrap.min css -->
<link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
<!-- Icon Font Css -->
<link rel="stylesheet" href="assets/icofont/icofont.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Font Awesome Stylesheet -->

</head>

<body id="top">

<header>
	<div class="header-top-bar pt-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-xs-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"> <img src="assets/images/img-tag-sm.png" alt=""> <span class="px-2">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</span></li>
					</ul>
				</div>
				<div class="col-lg-6 col-xs-6" style="margin-top:10px;">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0" style="display:inline-flex">
						<li class="list-inline-item nav-top-right pr-3">
                            <i class="fas fa-phone-alt"></i> <span class="po">0274-5305505</span>
                        </li>
						<li class="list-inline-item nav-top-right pr-3">
                            <i class="fas fa-comments"></i> <span class="po">Live Chat</span>
                        </li>
						<li class="list-inline-item nav-top-right">
                        <i class="fas fa-user-circle" style="font-size:25px !important;"></i> <span style="display:flex;justify-content:center;align-items:flex-end; padding-left:5px;font-size:15px !important;">Member Area</span>
                        </li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/images/niagahoster-logo-570x320.png" alt="Logo Niagahoster">
            </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Hosting</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Domain</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Server</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Website</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Afiliasi</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Promo</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Pembayaran</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Review</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Kontak</a></li>
			  <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Blog</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>




<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xl-6">
				<div class="block">
					<h1 class="mb-3 mt-3 mx-1">PHP Hosting</h1>
                    <h3 class="mx-1">Cepat, handal, penuh dengan <br> modul PHP yang Anda butuhkan</h3>

					<p class="mb-4 pr-5">
                        <ul class="banner-list mx-2">

                            <li>Solusi PHP untuk performa query yang lebih cepat.</li>
                            <li>Konsumsi memori yang lebih rendah.</li>
                            <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                            <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
                        </ul>
                    </p>
				</div>
			</div>
            <div class="col-lg-6 col-md-6 col-xl-6 img-php">
                <img src="assets/svg/illustration banner PHP hosting-01.svg" alt="PHP Hosting Niagahoster">
            </div>
		</div>
	</div>
</section>


<section class="section tech">
	<div class="container" style="max-width:900px;">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
                <div class="img-tech">
                    <embed src="assets/svg/illustration-banner-PHP-zenguard01.svg">
                </div>
                <div class="text-center f-montLight">PHP Zend Guard Loader</div>
			</div>
			<div class="col-lg-4 col-sm-6">
                <div class="img-tech">
                    <embed src="assets/svg/icon-composer.svg">
                </div>
                <div class="text-center f-montLight">PHP Composer</div>
			</div>
			<div class="col-lg-4 col-sm-6">
            <div class="img-tech">
            <embed src="assets/svg/icon-php-hosting-ioncube.svg">
            </div>
            <div class="text-center f-montLight">PHP IonCube Loader</div>

			</div>

		</div>
	</div>
</section>
<section class="price" style="padding-top:40px; padding-bottom:40px;">
    <div class="container">
        <div class="price-title">
            Paket Hosting Singapura yang Tepat
        </div>
        <div class="price-sub">
            Diskon 40% + Domain dan SSL Gratis untuk Anda
        </div>

        <div class="row" style="text-align:center;">
        <?php
            include 'include/conn.php';
            $q = mysqli_query($conn, "SELECT * from tb_package");
            foreach ($q as $row) :
        ?>
            <div class="col-md-3" style="margin-top:20px;  padding:0px;">
                <?php if($row['best_seller'] == 1){ ?> <img src="assets/images/best-seller.png" style="width:100px;position:absolute;top:0;left:0;margin-top:-10px;margin-left:-9px;transform: rotate(-90deg);" > <?php } ?>
                <div class="price-package-title <?php if($row['best_seller'] == 1){ echo 'bgBest'; } ?>" ><?=$row['package']?></div>
                <div class="head-pp-title <?php if($row['best_seller'] == 1){ echo 'bgBest'; } ?>">
                    <span class="price-disc">Rp. <?=number_format($row['price_disc'],0,',','.')?></span><br>
                    <p><sup class="sup-decimal <?php if($row['best_seller'] == 1){ echo 'bgBest'; } ?>">Rp.</sup><span class="head-num-price <?php if($row['best_seller'] == 1){ echo 'bgBest'; } ?>"><?php $ario = number_format($row['price_month'],0,',','.'); $exp=explode(".",$ario); echo $exp[0];?></span><sup class="sup-decimal <?php if($row['best_seller'] == 1){ echo 'bgBest'; } ?>"><span style="font-family: 'MontserratBold';">.<?=$exp[1]?></span> /bln</sup></p>
                </div>
                <div class="price-desc">
                    <div class="registered-user <?php if($row['best_seller'] == 1){ echo 'bgSubBest'; } ?>"><b><?=number_format($row['registered_user'],0,',','.')?></b> Pengguna Terdaftar</div>
                    <div class="fitur-package <?php if($row['best_seller'] == 1){ echo 'bgSubBestFitur'; } ?>">
                        <ul>
                            <li> <b><?=$row['resource_power']?>X RESOURCE POWER</b> </li>
                            <?php
                                $qs = mysqli_query($conn, "SELECT * from tb_fitur WHERE id_package='".$row['id']."'");
                                foreach ($qs as $rows) :
                            ?>
                                <li> <b><?=$rows['fitur_value']?></b> <?=$rows['fitur_name']?> <?php if($rows['rate'] > 0){ echo "<br>"; for($o=0; $o<$rows['rate']; $o++){ ?> <embed src="assets/svg/star.svg" style="width:15px;"> <?php } } ?> </li>

                            <?php endforeach; ?>

                        </ul>
                        <br><br>
                        <button class="btn-def-price <?php if($row['best_seller'] == 1){ echo 'bgBestButton'; } ?>">
                            <b><?=$row['button_value']?></b>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
</section>
<section style="padding-top:40px;">
    <div class="container" style="max-width:900px;">
        <div class="price-sub" style="font-size:30px !important;color:#424242;">
            Powerful dengan Limit PHP yang Lebih Besar
        </div>
        <div class="row">
            <div class="col-md-6 pr-1">
                <ul class="limit-list mx-2">
                    <li>max execution time 300s</li>
                    <li style="background: #f2f2f2;">max execution time 300s</li>
                    <li style="border-bottom-width: 1px !important;">php memory limit 1024 MB</li>
                </ul>
            </div>
            <div class="col-md-6 pl-1">
                <ul class="limit-list mx-2">
                    <li>post max size 128 MB</li>
                    <li style="background: #f2f2f2;">upload max filesize 128 MB</li>
                    <li style="border-bottom-width: 1px !important;">max input vars 2500</li>
                </ul>
            </div>
            <hr style="background:#f2f2f2;margin-top:50px;height:3px;width:100px;">
        </div>
    </div>
</section>

<section style="padding-top:20px;padding-bottom:40px;">
    <div class="container">
        <div class="price-sub" style="font-size:30px !important;color:#424242;margin-bottom:50px;">
            Semua Paket Hosting Sudah Termasuk
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-4 col-lg-4 text-center">
                <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" width="70" class="mb-3">
                <h5 class="f-montBold">PHP Semua Versi</h5>
                <p class="f-robotoReg">Pilih mulai dari versi PHP 5.3 s/d PHP 7. <br> Ubah sesuka Anda!</p>
            </div>

            <div class="col-12 col-md-4 col-lg-4 text-center">
                <img src="assets/svg/icon PHP Hosting_My SQL.svg" width="70" class="mb-3">
                <h5 class="f-montBold">MySQL Versi 5.6</h5>

                <p class="f-robotoReg">Nikmati MySQL terbaru, tercepat dan <br> kaya akan fitur.</p>
            </div>

            <div class="col-12 col-md-4 col-lg-4 text-center">
                <img src="assets/svg/icon PHP Hosting_CPanel.svg" width="70" class="mb-3">
                <h5 class="f-montBold">Panel Hosting cPanel</h5>
                <p class="f-robotoReg">Kelola website dengan pabel canggih yang <br> familiar di hati Anda.</p>
            </div>
        </div>
        <div class="row align-items-center" style="margin-top:50px;">
            <div class="col-12 col-md-4 col-lg-4 text-center">
                <img src="assets/svg/icon PHP Hosting_garansi uptime.svg" width="70" class="mb-3">
                <h5 class="f-montBold">Garansi Uptime 99.9%</h5>
                <p class="f-robotoReg">Data center yang mendukung kelangsungan <br> website anda 24/7</p>
            </div>

            <div class="col-12 col-md-4 col-lg-4 text-center">
                <img src="assets/svg/icon PHP Hosting_InnoDB.svg" width="70" class="mb-3">
                <h5 class="f-montBold">Database InnoDB Unlimited</h5>

                <p class="f-robotoReg">Jumlah dan ukuran databases yang tumbuh <br> sesuai kebutuhan Anda.</p>
            </div>

            <div class="col-12 col-md-4 col-lg-4 text-center">
                <img src="assets/svg/icon PHP Hosting_My SQL remote.svg" width="70" class="mb-3">
                <h5 class="f-montBold">Wildcard Remote MySQL</h5>
                <p class="f-robotoReg ">Mendukung s/d 25 max_user_connections <br> dan 100 max_connections.</p>
            </div>
        </div>
        <hr style="background:#f2f2f2;margin-top:50px;height:3px;width:100px;">
    </div>
</section>
<section class="flara" style="padding-top:20px;padding-bottom:40px;border-bottom:solid 1px #eeeeee;">
    <div class="container">
        <div class="price-sub" style="font-size:30px !important;color:#424242;margin-bottom:50px;">
            Mendukung Penuh Framework Laravel
        </div>
        <div class="row">
			<div class="col-lg-6 col-md-6 col-xl-6">
				<div class="block">
                    <p class="mx-1 f-montLight" style="color:#424242;line-height:27px;">
                        Tak perlu menggunakan dedicated server ataupun VPS <br>
                        yang mahal. Layanan PHP hosting murah kami<br>
                        mendukung penuh framework favorit Anda</p>

					<p class="mb-4 pr-5">
                        <ul class="banner-list mx-2">

                            <li class="f-n">Install Laravel <b class="f-robotoReg">1 klik</b> dengan Softaculous Installer.</li>
                            <li class="f-n">Mendukung extensi <b class="f-robotoReg">PHP MCrypt, phar, mbstring,json,</b> dan <b class="f-robotoReg">fileinfo.</b></li>
                            <li class="f-n">Tersedia <b class="f-robotoReg">Composer</b> dan <b class="f-robotoReg">SSH</b> untuk menginstal packages pilihan Anda.</li>
                        </ul>
                    </p>
                    <p class="f-montLight mx-2" style="font-size:12px;">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                    <button class="btn-def-price-primary mt-3">
                            Pilih Hosting Anda
                        </button>
				</div>
			</div>
            <div class="col-lg-6 col-md-6 col-xl-6 img-php">
                <img src="assets/svg/illustration banner support laravel hosting.svg" alt="PHP Hosting Niagahoster">
            </div>
		</div>
    </div>
</section>

<section class="modul" style="padding-top:70px;padding-bottom:70px;">
    <div class="container" style="max-width:900px;">
        <div class="price-sub" style="font-size:30px !important;color:#424242;margin-bottom:50px;">
            Modul Lengkap untuk Menjalankan Aplikasi PHP Anda
        </div>
        <div class="row">
            <?php
                $qsm = mysqli_query($conn, "SELECT * from tb_modul");
                foreach ($qsm as $rowsm) :
            ?>
            <div class="col-md-3 col-lg-3">
                <p class="f-montLight" style="font-size:16px;margin-bottom: 5px !important;"><?=$rowsm['modul']?></p>
            </div>
            <?php endforeach; ?>
            <div class="col-md-12 text-center mt-5">
                <button class="btn-def-price" style="padding:12px 35px !important;">
                    <b>Selengkapnya</b>
                </button>
            </div>

        </div>
    </div>
</section>
<section class="support" style="padding-top:70px;padding-bottom:40px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xl-6">
				<div class="block">
                    <h3 class="mx-1">Linux Hosting yang Stabil <br>  dengan Teknologi LVE</h3>
                    <p class="mx-1 mt-3 f-montLight" style="color:#424242;font-size:15px;">
                    SuperMicro <b class="f-robotoReg">Intel Xeon 24-Cores</b> server dengan RAM <b class="f-robotoReg">128 GB</b> dan <br>
                    teknologi <b class="f-robotoReg">LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi <br>
                    dengan <b class="f-robotoReg">SSD</b> untuk kecepatan <b class="f-robotoReg">MySQL</b> dan charging, Apache load balancer <br>
                    berbasis LiteSpees Technologies, <b class="f-robotoReg">CageFS</b> security, <b class="f-robotoReg">Raid-10</b> protection<br>
                    dan auto backup untuk keamanan website PHP Anda.</p>
                    <button class="btn-def-price-primary mt-3">
                            Pilih Hosting Anda
                        </button>
				</div>
			</div>
            <div class="col-lg-6 col-md-6 col-xl-6">
                <img src="assets/images/Image support.png" alt="Support Niagahoster" style="width:100%">
            </div>
		</div>
	</div>
</section>
<section class="social" style="padding-top:20px;padding-bottom:20px;background:#F7F7F7">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xl-6 col-xs-12">
                <p class="f-montReg">Bagikan jika anda menyukai halaman ini.</p>
            </div>
			<div class="col-lg-6 col-md-6 col-xl-6 col-xs-12">
                <ul style="display:flex">
                    <li style="list-style:none;display: flex;"><i class="fab fa-facebook-square" style="font-size:35px; color:#28599B;"></i> <span style="margin:2px;border-radius:5px;padding:0px 20px;border:solid 1px #bdbdbf;color:#bdbdbf">80k</span> </li>
                    <li style="list-style:none;display: flex;"><i class="fab fa-twitter-square" style="font-size:35px; color:#4FAEF1;"></i> <span style="margin:2px;border-radius:5px;padding:0px 20px;border:solid 1px #bdbdbf;color:#bdbdbf">450</span> </li>
                    <li style="list-style:none;display: flex;"><i class="fab fa-google-plus-square" style="font-size:35px; color:#EE4936;"></i> <span style="margin:2px;border-radius:5px;padding:0px 20px;border:solid 1px #bdbdbf;color:#bdbdbf">1900</span> </li>
                </ul>
            </div>
        </div>
</section>
<section class="help" style="padding-top:70px;padding-bottom:70px;background:#4BA2F3;color:#ffffff;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-xl-8" style="display:flex; align-items:center">
                <h3 class="f-montLight">Perlu <span class="f-montBold" style="color:#ffffff;">BANTUAN?</span> Hubungi Kami : <span class="f-montBold" style="color:#ffffff;">0274-5305505</span></h3>
            </div>
			<div class="col-lg-4 col-md-4 col-xl-4" style="display:flex; align-items:center; justify-content:center">
                <button class="btn-def-price-primary pt-2 py-2 pr-4 pl-4">
                    <i class="fas fa-comments"></i> <span class="f-montLight"> Live Chat</span>
                </button>
            </div>
        </div>
</section>
<!-- footer Start -->
<footer class="footer section dark-bg">
	<div class="container">
		<div class="row">
            <div class="col-md-3 col-xs-12">
                <h5>HUBUNGI KAMI</h5>
                <ul class="inf-footer">
                    <li><br></li>
                    <li>0274-5305505</li>
                    <li>Senin - Minggu</li>
                    <li>24 Jam Nonstop</li>
                    <li><br></li>
                    <li>Jl. Selokan Mataram Monjali <br>Karangjati MT I/304 <br>Sinduadi, Mlati, Sleman<br> Yogyakarta 55284</li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>LAYANAN</h5>
                <ul class="inf-footer">
                    <li><br></li>
                    <li><a href="#">Domain</a></li>
                    <li><a href="#">Shared Hosting</a></li>
                    <li><a href="#">Cloud VPS Hosting</a></li>
                    <li><a href="#">Manage VPS Hosting</a></li>
                    <li><a href="#">Web Builder</a></li>
                    <li><a href="#">Keamanan SSL / HTTPS</a></li>
                    <li><a href="#">Jasa Pembuatan Website</a></li>
                    <li><a href="#">Program Afiliasi</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>SERVICE HOSTING</h5>
                <ul class="inf-footer">
                    <li><br></li>
                    <li><a href="#">Hosting Murah</a></li>
                    <li><a href="#">Hosting Indonesia</a></li>
                    <li><a href="#">Hosting Singapura SG</a></li>
                    <li><a href="#">Hosting PHP</a></li>
                    <li><a href="#">Hosting Wordpress</a></li>
                    <li><a href="#">Hosting Laravel</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>TUTORIAL</h5>
                <ul class="inf-footer">
                    <li><br></li>
                    <li><a href="#">Knowledgebase</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cara Pembayaran</a></li>
                </ul>
            </div>
		</div>
		<div class="row mt-5">
            <div class="col-md-3 col-xs-12">
                <h5>TENTANG KAMI</h5>
                <ul class="inf-footer">
                    <li><br></li>
                    <li><a href="#">Tim Niagahoster</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Penawaran & Promo Spesial</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>KENAPA PILIH NIAGAHOSTER?</h5>
                <ul class="inf-footer">
                    <li><br></li>
                    <li><a href="#">Support Terbaik</a></li>
                    <li><a href="#">Garansi Harga Termurah</a></li>
                    <li><a href="#">Domain Gratis Selamanya</a></li>
                    <li><a href="#">Datacenter Hosting Terbaik</a></li>
                    <li><a href="#">Review Pelanggan</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>NEWSLETTER</h5>
                <form>
                    <div class="form-group d-flex bc-input">
                        <div class="float-left">
                            <input type="text" name="" placeholder="Email" class="pl-3" autocomplete="off">
                        </div>
                        <div class="float-right mr-1">
                            <button class="btn btn-primary">Berlangganan</button>
                        </div>
                    </div>
                    <p style="color:#B3B3B3; font-family:'RobotoLight'; color:#6C6C6C; font-size:14px;">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
                </form>
            </div>
            <div class="col-md-3 col-xs-12 soc-btn">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
            </div>
		</div>
		<div class="row mt-5">
            <div class="col-md-12 col-xs-12">
                <h5>PEMBAYARAN</h5>
                <ul class="inf-footer-img">
                    <li><br></li>
                    <li>
                        <img src="assets/images/bank/bca.png" class="mt-3 mr-3 br-img-inf-ft" width="90">
                        <img src="assets/images/bank/mandiri.png" class="mt-3 mr-3 br-img-inf-ft" width="100">
                        <img src="assets/images/bank/bni.png" class="mt-3 mr-3 br-img-inf-ft" width="100">
                        <img src="assets/images/bank/visa.png" class="mt-3 mr-3 br-img-inf-ft" width="96">
                        <img src="assets/images/bank/bersama.png" class="mt-3 mr-3 br-img-inf-ft" width="64">
                        <img src="assets/images/bank/master.png" class="mt-3 mr-3 br-img-inf-ft" width="51">
                        <img src="assets/images/bank/alto.png" class="mt-3 mr-3 br-img-inf-ft" width="50">
                        <img src="assets/images/bank/ovo.png" class="mt-3 mr-3 br-img-inf-ft" width="95">
                        <img src="assets/images/bank/gopay.png" class="mt-3 mr-3 br-img-inf-ft" width="95"></li>
                </ul>
                <p style="color:#B3B3B3; font-family:'RobotoLight'; color:#6C6C6C;font-size:14px;">Aktivasi instant dengan e-Payment, Hosting, dan domain langsung aktif!</p>
            </div>
		</div>
		<div class="row mt-2">
            <div class="col-md-12"><hr style="background:#262626;height:0.5px;width:100%;"></div>
            <div class="col-md-8 col-xs-12" style="padding-right:0 !important;">
                <p style="color:#B3B3B3; font-family:'RobotoBold';font-size:12px;">
                Copyright ©2016 by Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta<br>
Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
            </p>
            </div>
            <div class="col-md-4 col-xs-12" style="padding-left:0 !important">
                <ul class="ft-l-b">
                    <li> <a href="#">Syarat dan Ketentuan</a></li>
                    <li> <a href="#">Kebijakan Privasi</a> </li>
                </ul>
            </div>
		</div>
	</div>
</footer>

<!-- Main jQuery -->
<script src="assets/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="assets/css/bootstrap/js/popper.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
