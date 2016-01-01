<?php include './system/head.php'; ?>
<body style="background: #F3F3F3;">
	<?php include './system/header.php'; ?>
	<hr/>
	<div class="wrapper">
		<div class="judul">
			<div class="logo"><h2>LOGO</h2> </div>
			<div class="nama"><br/><h3>Desa Cerme Lor</h3><h3>Kecamatan Cerme</h3><h3>Kabupaten Gresik</h3></div>
			<div class="gambar">
				<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" bgcolor="" direction="left" height="100%" scrollamount="20" scrolldelay="100" transparent="" width="100%">
				<a href="Masukan Link anda disini"><img alt="" height="100%" src="./assets/images/1.jpg"/></a>
				<a href="Masukan Link anda disini"><img alt="" height="100%" src="./assets/images/2.jpg"/></a>
				<a href="Masukan Link anda disini"><img alt="" height="100%" src="./assets/images/3.jpg"/></a>
				<a href="Masukan Link anda disini"><img alt="" height="100%" src="./assets/images/4.jpg"/></a>
				<a href="Masukan Link anda disini"><img alt="" height="100%" src="./assets/images/5.jpg"/></a>
				<a href="Masukan Link anda disini"><img alt="" height="100%" src="./assets/images/6.jpg"/></a>
				</marquee>
			</div>
		</div>
		<div class="content col-xs-12 col-md-8">
			<?php include './artikel.php'; ?>
		</div>
		<div class="sidebar col-xs-6 col-md-4">
			<?php include './sidebar.php'; ?>
		</div>
		<div class="footer col-xs-12 col-md-12">
		</div>
		<hr/>
		<div style="clear:both"></div>
	</div>
</body>