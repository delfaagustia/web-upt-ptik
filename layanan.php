<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700);
	* {
	  margin: 0;
	  padding: 0;
	  font-family: Open Sans, sans-serif!important;
	}

	body {
	  min-width: 550px
	}

	/*SOP Layanan*/
	#layanan {
	  z-index: 4;
	  position: relative; 
	  margin-top: 50px; 
	  margin-bottom: 60px;
	}

	#layanan .info {
	  background: white;
	  margin-bottom: 30px;
	  color: #19364F;
	}

	#layanan .info > p {
	  text-align: center;
	  font-size: 25px;
	  letter-spacing: 1.5px;
	  text-transform: uppercase;
	  font-weight: 500;
	  position: relative;
	}
	
	#layanan .info > p:before {
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

	#layanan .info h5{
	  font-size: 14px;
	  text-align: center;
	  margin-left: auto;
	  margin-right: auto;
	  line-height: 20px;
	  width: 58%;
	  margin-top: 35px;
    }

	a[href$=".pdf"],a[href$=".zip"] {
	  text-decoration: none;
	  position: relative;
	  text-align: left !important;
	  display: flex;
	  align-items: center;
	  width: 430px; 
	}

	a[href$=".pdf"] p,a[href$=".zip"] p{
	  position: relative;
	  font-size: 11px;
	  font-weight: 500;
	}

	a[href$=".pdf"] p span,a[href$=".zip"] p span {
	  text-shadow: none;
	  margin-top: 3px;
	  display: block;
	  color: #BBB;
	  font-weight: 300;
	}


	a[href$=".pdf"]:before,a[href$=".zip"]:before{
	  content: "";
	  line-height: 1.4;
	  text-transform: uppercase;
	  font-weight: 700;
	  font-size: 10px;
	  position: relative;
	  margin-right: 12px;
	  text-decoration: none !important;
	  padding-top: 57px;
	  text-align: center;
	  width: 56px;
	  min-width: 54px;
	  height: 74px;
	  display: inline-block;
	  color: rgba(255, 255, 255, 0.75);
	  border-radius: 4px;
	  box-shadow: inset 0 -22px 0 rgba(0, 0, 0, 0.075);
	  clip-path: polygon(38px 0, 100% 18px, 100% 100%, 0 100%, 0 0);
	  letter-spacing: 1px;
	  white-space: pre;
	  transition: box-shadow 0.32s 0.05s cubic-bezier(0.4, 0, 0.6, 1.3), padding-top 0.3s ease-in-out;
	  overflow: hidden;
	}

	a[href$=".pdf"]:after,a[href$=".zip"]:after{
	  content: "";
	  position: absolute;
	  border-width: 15px 0 0 15px;
	  border-color: transparent transparent transparent rgba(255, 255, 255, 0.65);
	  border-style: solid;
	  left: 37px;
	  top: calc(50% - 34px);
	}

	a[href$=".pdf"]:hover:before,a[href$=".zip"]:hover:before{
	  transition: box-shadow 0.2s ease-in-out, padding-top 0.32s 0.05s cubic-bezier(0.4, 0, 0.5, 1.2);
	  box-shadow: inset 0 -80px 0 rgba(0, 0, 0, 0.1);
	  padding-top: 30px;
	}
	a[href$=".pdf"]:hover p:after,a[href$=".zip"]:hover p:after{
	  opacity: 1;

	}
	a[href$=".pdf"]:before  {
	  content: "pdf\a\25bc";
	  background-color: #e03939;
	}
	a[href$=".zip"]:before {
	  content: "zip\a\25bc";
	  background-color: #39ad22;
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
	  left: 50%;
	  bottom: -12px;
	  transform: translateX(-50%);
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
	  font-weight: 600;
	  text-align: center;

	}

	.files {
	  margin-top: 40px;
	  display: flex;
	}

	@media (max-width: 830px) {
	  .files {
	    flex-direction: column;

	  }
	}


	.proses-layanan {
	  position: relative;
	  font-size: 15px;
	  color: #555;
	  margin-bottom: 60px;
	}

	.process-list {
	  list-style: none;
	  position: relative;
	  top: 5;
	  left: 30%;
	  padding: 0;
	  counter-reset: step;
	}

	.process-list:before {
	  content: "";
	  position: absolute;
	  top: 0px;
	  left: -50px;
	  height: 100%;
	  border-left: 2px solid #1e73be;
	  z-index: -1;
	}

	.process-item {
	  margin-top: 30px;
	  position: relative;
	  z-index: 100;
	}

	.process-item:before {
	  content: counter(step);
	  counter-increment: step;
	  display: block;
	  text-align: center;
	  position: absolute;
	  top: -10px;
	  left: -70px;
	  width: 40px;
	  height: 40px;
	  border-radius: 50%;
	  border: 2px solid #1e73be;
	  margin: 0 auto 0 auto;
	  line-height: 40px;
	  color: #555;
	  z-index: 300;
	  background-color: #fff;
	}

	.proses-layanan p{
		text-align: center;
		text-transform: uppercase;
	    font-size: 18px;
	    letter-spacing: 1.2px;
	    font-weight: 300;
	    position: relative;
	}

	#layananemail{
		margin-top: 20px;
		margin-bottom: 50px;
	}
</style>


<!DOCTYPE html>
<html>
	<head>
		<title>Layanan UPT PUSKOM UNP</title>
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
	    	<div id="layanan">
	    		<section class="info">
	      			<p>SOP Layanan UPT Puskom</p>
	    		</section>
    		</div>
	      	<div class="wrapper">
	        	<p class="info">Untuk menjamin kepastian layanan yang diberikan, berikut diinformasikan beberapa Standar Operation Procedure (SOP) layanan UPT Puskom UNP:</p>
	        	<div class="files">
		            <a href="example.com/myfile.pdf">
		                <p>Extention IP PHONE UNP.pdf<span>Size: 5 mb</span></p>
		            </a>
		            <a href="example.com/myfile.pdf">
		                <p>Pembuatan Email.pdf<span>Size: 2 mb</span></p>
		            </a>
		            <a href="example.com/myfile.pdf">
		                <p>Pembuatan Site Unit Kerja.pdf<span>Size: 1 mb</span></p>
		            </a>
	        	</div>
		        <div class="files" id ="kedua">
		            <a href="example.com/myfile.pdf">
		                <p> Administrasi Akses Jaringan Komputer dan Internet.pdf<span>Size: 5 mb</span></p>
		            </a>
		            <a href="example.com/myfile.pdf">
		                <p> Pemeliharan dan Update Informasi Website.pdf<span>Size: 2 mb</span></p>
		            </a>
		            <a href="example.com/myfile.pdf">
		                <p>Budget spreadsheet<span>Size: 2 mb</span></p>
		            </a>
		        </div>
	    	</div>
		</div>

		<div class = "row">
   			<div id="layanan">
    			<section class="info">
      				<p>Layanan Internet</p>
      				<h5> 2 Cara agar dapat menikmati fasilitas internet gratis, jika sudah terkoneksi ke dalam Local Area Network (LAN) UNP</h5>   
    			</section>
    		</div>

			<div class="proses-layanan">
				<p> 1  Koneksi Kabel</p>
			  <ul class="process-list">
			    <li class="process-item"> Setting IP Address komputer anda sesuai dengan alokasi yang diberikan oleh administrator unit </li>
			    <li class="process-item"> Buka browser, ex. Internet Explorer, Modzila, atau Netscape </li>
			    <li class="process-item"> Pada Browser, klik menu Tools | Internet Options | Connections | LAN Setting </li>
			    <li class="process-item"> Pada LAN Setting, aktifkan pilihan proxy </li>
			    <li class="process-item"> Masukkan ip address atau alamat url proxy dengan 10.1.1.5 atau proxy1.unp.ac.id</li>
			    <li class="process-item"> Masukkan nilai port dengan 6588 </li>
			    <li class="process-item"> Simpan semua hasil konfigurasi </li>
			  </ul>
			</div>

			<div class="proses-layanan">
				<p> 2  Koneksi Wireless / Hotspot</p>
			  <ul class="process-list">
			    <li class="process-item"> Daftarkan MAC Address notebook anda ke administrator unit yang bersangkutan </li>
			    <li class="process-item"> (Opsional) Masukkan passkey untuk koneksi ke access point & anda harus mengetahui passkey tsb</li>
			    <li class="process-item"> Aktifkan wireless devices </li>
			    <li class="process-item"> Pilih salah satu access point & pastikan MAC Address anda terdaftar di access point tsb </li>
			    <li class="process-item"> Pada Browser, klik menu Tools | Internet Options | Connections | LAN Setting</li>
			    <li class="process-item"> Pada LAN Setting, aktifkan pilihan proxy </li>
			    <li class="process-item"> Masukkan ip address atau alamat url proxy dengan 10.1.1.5 atau proxy1.unp.ac.id</li>
			    <li class="process-item"> Masukkan nilai port dengan 6588 </li>
			    <li class="process-item"> Simpan semua hasil konfigurasi </li>
			  </ul>
			</div>
		</div>

		<div class="row" id = "layananemail">
		   <div id="layanan">
		    	<section class="info">
		      		<p>Layanan Email UNP</p>   
		    	</section>
		    </div>
		    
		    <div class="wrapper">
		    	<p class="info">Untuk memperoleh layanan akses internet dan layanan email @unp.ac.id bagi dosen dan staf kependidikan, <br>Silahkan unduh formulir dibawah ini:</p>
		        <div class="files">
		            <a href="example.com/myfile.pdf">
		                <p>Form-user-akses-internet-unp.pdf<span>Size: 5 mb</span></p>
		            </a>
		            <a href="example.com/myfile.pdf">
		                <p>Form_email.pdf<span>Size: 2 mb</span></p>
		            </a>
		            <a href="example.com/myfile.zip">
		                <p>Syarat-Pengajuan-Akun-Portal.zip<span>Size: 1 mb</span></p>
		            </a>
		        </div>
		    </div>
		</div>
  		<?php include 'footer.php';?>
	</body>
</html>