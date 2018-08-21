<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700);
	* {
	  margin: 0;
	  padding: 0;
	  font-family: Open Sans, sans-serif!important;
	}

	body {
	  min-width: 550px;
	  width: 100%;
	}

	/*SOP Sejarah*/
	#profile {
	  z-index: 4;
	  position: relative; 
	  margin-top: 50px; 
	  margin-bottom: 30px;
	}

	#profile .info {
	  background: white;
	  margin-bottom: 40px;
	  color: #19364F;
	}

	#profile .info > p {
	  text-align: center;
	  font-size: 25px;
	  letter-spacing: 1.5px;
	  text-transform: uppercase;
	  font-weight: 500;
	  position: relative;
	}
	
	#profile .info > p:before {
	  width: 90px;
	  height: 3px;
	  position: absolute;
	  content: '';
	  left: 0;
	  right: 0;
	  bottom: -13px;
	  margin: auto;
	  background: #257596;
	}

	#profile .info h5{
	  font-size: 13px;
	  text-align: center;
	  margin-left: auto;
	  margin-right: auto;
	  line-height: 18px;
	  width: 70%;
	  margin-top: 35px;
    }


	*,
	*:before,
	*:after {
	  color: #333;
	  box-sizing: border-box;
	}

	.wrapper {
	  position: relative;
	  margin-top: 60px;
	  padding: 30px 40px;
	  box-shadow: 0 0 30px rgba(0, 0, 0, 0.15);
	  border-radius: 6px;
	  width: 900px;
	  background: #fff;
	  margin-left: auto;
	  margin-right: auto;
	  margin-bottom: 60px;
	}

	.wrapper:before {
	  content: "";
	  position: absolute;
	  bottom: -12px;
	  width: 97%;
	  height: 30px;
	  background: #fff;
	  z-index: -1;
	}

	@media (min-width: 831px) {
	  .wrapper a:not(:last-of-type) {
	    border-right: 1px solid #eee;
	    padding-right: 20px;
	    margin-right: 20px;
	  }
	}
	@media (max-width: 830px) {
	  .wrapper a:not(:last-of-type) {
	    margin-bottom: 40px;
	  }
	}

	.info {
	  font-weight: 500;
	  text-align: center;
	  line-height: 18px;
	}

	#visi,#misi-tujuan{
		background-color: #F2EBD8;
		font-size: 15px;
		text-align: center;
		display: block;
	    margin-left: auto;
	    margin-right: auto;
	    color: #19364F;
	}

	#profile img{
		width: 60px;
		height: 60px;
		margin-top: 20px;
		opacity: 0.7;
	}

	#profile span{
		font-size: 25px;
		vertical-align: middle;
	}

	#misi-tujuan{
		background-color: #F2EBD8;
		font-size: 13px;		
	}

	ol{
		text-align: left;
		line-height: 25px;
	}

	#tujuan{
		padding-left: 55px;
	}




	.kotak{
	  width: 360px;
	  background: white;
	  display: inline-table;
	  top: 0;
	}

	.kotak:not(:last-child){
	  margin-right: 20px;
	}

	.header{
	  color: rgb(255, 255, 255);
	  background-color: #F2EBD8;
	}

	.name{
	  width: 100%;
	  font-size: 15px;
	  font-weight: 600;
	  display: block;
	  text-align: center;
	  padding: 30px;
	  color: #19364F;
	}
	.list{
	  list-style: none;
	  text-align: center;
	  color: #19364F;
	  margin: 0;
	  padding: 0;
	  margin-bottom: 40px;
	}
	.list li{
	  margin: 0 35px;
	  padding: 5px 5px;
	  width: 280px;
	  font-size: 12px;
	}

	
	.list li:not(:last-child){
	  border: 1px solid rgb(242, 242, 242);
	  border-top: 0;
	  border-left: 0;
	  border-right: 0;
	}

	#bagan{
    width: 1100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
	}

	#judul-fasilitas{
		margin-bottom: 40px;
		margin-top: 100px;
	}

	#bawah{
		margin-bottom: 100px;
	}

</style>


<!DOCTYPE html>
<html>
	<head>
		<title>Profile UPT PUSKOM UNP</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  	<?php include 'navbar.php';?>
	</head>

	<body>
		<div class ="row">
	    	<div id="profile">
	    		<section class="info">
	      			<p>Sejarah Singkat UPT Puskom</p>
	    		</section>
    		</div>
	      	<div class="wrapper">
	        	<p class="info">Pusat Komputer Universitas Negeri Padang (Puskom - UNP) pada awal berdirinya merupakan sebuah lembaga pengolahan data akademik. <br><br>
	        	Pada tahun 1989, sebagai salah satu upaya untuk peningkatan kualitas dan layanan kepada civitas akademika UNP (d.h IKIP Padang) didirikan Komputer Akademik. Pada awal berdirinya, Komputer Akademik hanya melayani proses akademik seperti pengolahan mata kuliah, jadual, dan pengolahan nilai. <br><br>
	        	Sejalan dengan perkembangan, maka pada tahun 1995 dibentuk UPT. Pusat Komputer sebagai lembaga pengganti Kompak IKIP Padang.<br><br>
	        	Saat ini, UPT. Puskom UNP melayani hampir semua aspek yang terkait dengan teknologi informasi dan pemanfaatannya.</p>
	    	</div>
		</div>

		<div class ="row">
	    	<div id="profile">
	    		<section class="info">
	      			<p>Visi, Misi, & Tujuan</p>
	    		</section>
	    		<div  class="row" id = "visi">
    				<img src="https://cdn0.iconfinder.com/data/icons/bubbly-icons/512/Idea_Electricity_Bulb_Innovation_Innovative_Lightbulb1-512.png">
    				<h3><b> VISI</b></h3>	    			
    				<p> "Menyediakan data dan informasi yang relevan, akurat, terpercaya, aman, fleksibel dan tersedia setiap saat"</p>
	    		</div>
	    		<div class="row" id = "misi-tujuan">
	    			<div class="container">
	    				<div class="col-sm-6" id = "misi">
		    				<img src="https://sportgait.com/wp-content/uploads/2017/08/Vision-icon.png">
		    				<h3><b> MISI </b></h3>	    			
		    				<ol>
			    				<li> Menyediakan aplikasi database sehingga memudahkan dalam memasukkan, mencari dan menyimpan data serta informasi</li>
			    				<li>Menyediakan infrastruktur jaringan (LAN, WAN dan internet) sebagai tulang punggung aliran data</li>
			    				<li>Memonitor dan mengevaluasi system kebutuhan pengguna, termasuk pemeliharaan dan perbaikan</li>
								<li>Mengembangkan Teknologi Informasi berbasis pelayanan yang berkualitas, profesional dan transparansi untuk mendukung kemajuan universitas dalam persaingan global</li>
								<li>Mengembangkan dan meningkatkan fasilitas terkait teknologi informasi sejalan dengan kebutuhan dan perkembangan teknologi</li>
								<li>Menyediakan dan menjamin ketersediaan informasi/data bagi semua unit kerja berbasis jaringan</li>
							</ol>
		    			</div>
		    			<div class="col-sm-6" id = "tujuan">
		    				<img src="https://cdn2.iconfinder.com/data/icons/business-office-icons/256/Business_Goals-512.png">
		    				<h3><b> TUJUAN </b></h3>	    			
		    				<ol>
		    					<li>Menyediakan data yang reliabel, terintegrasi, fleksibel dan aman</li>
		    					<li>Menjadi pusat pengolahan data berbasis teknologi modern</li>
		    					<li>Menjadi pusat pengembangan sumber daya manusia dalam bidang teknologi informasi</li>
		    					<li>Memiliki manajemen dan organisasi yang solid dan sehat</li>
		    					<li>Memiliki tenaga profesional bidang teknologi informasi yang mampu menganalisa dan mengembangkan teknologi informasi</li>
		    				</ol>
		    			</div>
		    		</div>
	    		</div>
    		</div>
    	</div>

    	<div class="row" >
    		<div id="profile" id = "struktur-organisasi">
	    		<section class="info">
	      			<p>Struktur Organisasi</p>
	      			<h5> Pengembangan Teknologi Informasi Komunikasi UNP sebagai salah satu Unit Pelaksana Teknis (UPT) di Universitas Negeri Padang bertanggung jawab langsung kepada Wakil Rektor IV (Bidang Kerjasama dan Sistem Informasi). <br><br>
	      			Struktur Lengkap UPT. PTIK UNP adalah sebagai berikut :</h5>
	    		</section>
    		</div>
    		<img id="bagan" src="struktur_organisasi.png">
    	</div>

    	<div class="row">
    		<div id="profile">
	    		<section class="info">
	      			<p id = "judul-fasilitas">Fasilitas</p>
	      			<h5>Universitas Negeri Padang telah memiliki backbone jaringan fiber optik. Secara umum, 90 persen unit kerja telah terkoneksi ke dalam jaringan universitas. <br>
	      			Aplikasi SMARTcampus dan fasilitas internet ditempatkan di Ruang Server Universitas negeri Padang, tepatnya Rektorat Lantai I (Eks. BAAK). Hampir semua Server tersebut merupakan Dedicated Built-Up yang khusus dirancang untuk keperluan server sehingga dapat difungsikan sepanjang waktu, 24 jam sehari, 7 hari seminggu.</h5>
	    		</section>
	    	</div>
	    	<div id="fasilitas" class="container">
	    		<div class="row">
	    			<div class="kotak fasilitas1">
					    <div class="header">
					      <span class="name">Koneksi Jaringan</span>
					    </div>
					    <ul class="list">
					      <li>Rektorat - Pusat Komputer</li>
					      <li>Rektorat - Fakultas Teknik</li>
					      <li>Rektorat - Fakultas Ilmu Sosial</li>
					      <li>Rektorat - Fakultas Ilmu Pendidikan</li>
					      <li>Rektorat - Fakultas Ekonomi</li>
					      <li>Rektorat -Program Pasca Sarjana</li>
					      <li>Rektorat - Fakultas Ekonomi</li>
					      <li>Rektorat - Unit Perlengkapan</li>
					      <li>Rektorat - Fakultas Bahasa Sastra dan Seni</li>
					      <li>Rektorat - Fakultas Matematika dan Ilmu Pengetahuan Alam</li>
					      <li>Rektorat - Perpustakaan Pusat</li>
					      <li>Rektorat - Fakultas Ilmu Keolahragaan</li>
					    </ul>
					</div>
					    
					<div class="kotak fasilitas2">
					    <div class="header">
					      <span class="name">Wireless (Base-On Omni Directional)</span>
					    </div>
					    <ul class="list">
					      <li>Perpustakaan Pusat - Lembaga Penelitian</li>
					      <li>Perpustakaan Pusat - UPT. Balai Bahasa</li>
					      <li>Perpustakaan Pusat - Fakultas Bahasa Sastra dan Seni</li>
					      <li>Perpustakaan Pusat - Laboratorium Fakultas Ilmu Keolahragaan</li>
					    </ul>
					</div>
					
					<div class="kotak fasilitas3">
					    <div class="header">
					      <span class="name">Server - Server</span>
					    </div>
					    <ul class="list">
					      <li> Web Server</li>
					      <li> Mail Server</li>
					      <li> Proxy Server</li>
					      <li> Online SPP</li>
					      <li> Database Server (Internet)</li>
					      <li> Database Server (Intranet)</li>
					      <li> Smartcampus Server (Internet)</li>
					      <li> Smartcampus Server (Intranet)</li>
					      <li> Mikrotik Router</li>
					      <li> Video Conference Server</li>
					    </ul>
					</div>
	    		</div>
			  
	    		<div class="row" id ="bawah">
	    			<div class="kotak fasilitas4">
					    <div class="header">
					      <span class="name">Wireless Devices</span>
					    </div>
					    <ul class="list">
					      <li> 1 buah Omni directional antena 15 dbi</li>
					      <li> 4 wireless radio client</li>
					      <li> 4 wireless access point</li>
					      <li> 15 stick triangle tower</li>
					    </ul>
					</div>

					<div class="kotak fasilitas5">
					    <div class="header">
					      <span class="name">Komputer Akademik</span>
					    </div>
					    <ul class="list">
					      <li>Novel Netware 4.0</li>
					      <li>Optical Mark Reader (Alat Baca Optik)</li>
					      <li>Komputer Client</li>
					    </ul>
					</div>

					<div class="kotak fasilitas6">
					    <div class="header">
					      <span class="name">Video Conference</span>
					    </div>
					    <ul class="list">
					      <li>Ruangan representatif, terletak di lantai 5 Perpustakaan Pusat UNP</li>
					      <li>Full AC dan kedap suara</li>
					      <li>Kapasitas tempat duduk 60 orang</li>
					    </ul> 
					</div>
	    		</div>
			</div>
    	</div>


  		<?php include 'footer.php';?>
  		
	</body>
</html>