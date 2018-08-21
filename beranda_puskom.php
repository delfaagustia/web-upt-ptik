
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

  /*CSS Berita Terbaru*/
  #BeritaTerbaru {
    z-index: 4;
    position: relative;
    margin-bottom: 100px;
  
  }

  #BeritaTerbaru .info {
    background: white;
    padding: 60px 0 75px 0;
    color: #19364F;
  }

  #BeritaTerbaru .info > p {
    text-align: center;
    font-size: 28px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 500;
    position: relative;
  }
  #BeritaTerbaru .info > p:before {
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
 
  /*CSS Kotak-kotak berita*/
  .post-module {
    margin: auto auto;
    position: relative;
    z-index: 1;
    display: block;
    background: #FFFFFF;
    min-width: 150px;
    height: 390px;
    width: 360px;
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
    -webkit-transition: all 0.3s linear 0s;
    -moz-transition: all 0.3s linear 0s;
    -ms-transition: all 0.3s linear 0s;
    -o-transition: all 0.3s linear 0s;
    transition: all 0.3s linear 0s;
  }

  .post-module:hover,
  .hover {
    -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  }

  .post-module:hover .thumbnail img,
  .hover .thumbnail img {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1);
    opacity: .6;
  }

  .post-module .thumbnail {
    background: #000000;
    height: 390px;
    overflow: hidden;
  }

  .post-module .thumbnail .date {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 1;
    background: #FFC914;
    width: 53px;
    height: 53px;
    padding: 12.5px 0;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    color: #FFFFFF;
    font-weight: 700;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  .post-module .thumbnail .date .day {
    font-size: 11px;
  }

  .post-module .thumbnail .date .month {
    font-size: 10px;
    text-transform: uppercase;
  }

  .post-module .thumbnail img {
    display: block;
    width: 120%;   
    -webkit-transition: all 0.3s linear 0s;
    -moz-transition: all 0.3s linear 0s;
    -ms-transition: all 0.3s linear 0s;
    -o-transition: all 0.3s linear 0s;
    transition: all 0.3s linear 0s;
  }

  .post-module .post-content {
    position: absolute;
    bottom: 0; 
    background: #FFFFFF;
    width: 100%;
    padding-top: 5px;
    padding-right :10px;
    padding-left: 20px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  }

  .post-module .post-content .title {
    margin-bottom: 10;
    color: #19364F;
    font-size: 13px;
    font-weight: 700;
  }

  .post-module .post-content .isi {
    color: #77797E;
    font-size: 11px;
    font-weight: 400;
  }

  .container {
    max-width: 800px;
    min-width: 600px;
    margin: 0 auto;
  }

  .container:before,
  .container:after {
    content: '';
    display: block;
    clear: both;
  }

  .container .column {
    width: 50%;
    padding: 0 25px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    padding-bottom: 45px;
  }
 
  /*CSS Button read more*/
  #button {
    outline: none;
    height: 27px;
    text-align: center;
    width: 80px;
    border-radius: 40px;
    background: #fff;
    border: 2px solid #FFC914;
    color: #FFC914;
    font-size: 10px;
    cursor: pointer;
    transition: all 0.25s ease;
    margin-bottom: 10px;
    margin-left: 240px;
  }

  #button:hover {
    color: white;
    background: #FFC914;
  }
 
  /*CSS Pagination*/
  .pagination-container {
    margin-top: 80px auto;
    text-align: center;
  }

  .pagination a {
    position: relative;
    color: #C89077;
    font-size: 13px;
    text-decoration: none;
    padding: 6px 11px 8px;
  }

  .pagination a:before {
    z-index: -1;
    position: absolute;
    height: 100%;
    width: 100%;
    content: "";
    top: 0;
    left: 0;
    background-color: #19364F;
    border-radius: 24px;
    -webkit-transform: scale(0);
            transform: scale(0);
    transition: all 0.2s;
  }
  .pagination a:hover,
  .pagination a .pagination-active {
    color: #fff;
  }
  .pagination a:hover:before,
  .pagination a .pagination-active:before {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  .pagination .pagination-active {
    color: #fff;
  }
  .pagination .pagination-active:before {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  .pagination-newer {
    margin-right: 50px;
  }
  .pagination-older {
    margin-left: 50px;
  }

  @media only screen and (max-width: 1000px) {
    .row {
      height:1500px!important;
    }
    .photo-item{
      width:100%!important;
    }
    .photo-item > img {
      max-width:100%!important;
      width:100%!important;
    }
  }
</style>


<!DOCTYPE html>
<html>
  <header>
    <title>Beranda UPT PUSKOM UNP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include 'header.php';?>
  </header>

  <body>
    <div id="BeritaTerbaru">
      <section class="info">
        <p>Berita Terbaru</p>
      </section>

      <div class="container">
        <!-- Kotak berita-->
        <div class="column">
          <div class="post-module">
            <!-- Thumbnail gambar-->
            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
            </div>
            <!-- konten berita-->
            <div class="post-content">
              <h1 class="title">UNP Terapkan Registrasi dan KRS Online</h1>
              <h2 class="isi">Mulai tahun 2008, Universitas Negeri Padang menerapkan proses pendaftaran mahasiswa baru secara online. Ini sejalan dengan keinginan lembaga yang ingin memberikan kemudahan kepada semua pihak yang terlibat dalam pelaksanaan kegiatan ini. Di samping itu diharapkan data yang diperoleh lebih akurat karena semua proses dilakukan oleh mahasiswa yang bersangkutan.</h2>
              <button id="button">Read more..</button>
            </div>
          </div>
        </div>

        <!--  kotak berita-->
        <div class="column">  
          <div class="post-module">
            <!-- Thumbnail gambar-->
            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
            </div>
            <!-- konten berita-->
            <div class="post-content">
              <h1 class="title">UNP Terapkan Registrasi dan KRS Online</h1>
              <h2 class="isi">Sekarang anda dapat menggunakan fasilitas terbaru layanan Webmail Universitas Negeri Padang.
                              Webmail terbaru ini merupakan wujud tanggung jawab dan kreatifitas Tim ICT UNP yang memiliki beberapa fitur utama.
                              Fitur yang dapat anda nikmati dari webmail terbaru ini antara lain: 1. Akses lebih cepat, 2. Kapasitas 50 MB, 3. Tampilan grafik yang lebih menarik,</h2>
              <button id="button">Read more..</button>
            </div>
          </div>
        </div>

        <!-- kotak berita-->
        <div class="column">
          <div class="post-module">
            <!-- Thumbnail gambar-->
            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
            </div>
            <!-- konten berita-->
            <div class="post-content">
              <h1 class="title">Backbone Jaringan Telkom Putus, Website UNP Sempat Terganggu</h1>
              <h2 class="isi">Website Universitas Negeri Padang beberapa hari yang lalu sempat mengalami gangguan akibat terputusnya jaringan Telkom. Akibatnya semua layanan online UNP seperti website, mail server, online SPP, dan beberapa server lainnya tidak bisa diakses dari luar.Namun, terhitung tanggal 1 Maret 2008 jam 11.00 WIB semua layanan UNP Online sudah berfungsi kembali secara normal.Mohon maaf atas ketidaknyaman ini.</h2>
              <button id="button">Read more..</button>
            </div>
          </div>
        </div>

        <!-- kotak berita-->
        <div class="column">
          <div class="post-module">
            <!-- Thumbnail gambar-->
            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
            </div>
            <!-- konten berita-->
            <div class="post-content">
              <h1 class="title">UNP Terapkan Registrasi dan KRS Online</h1>
              <h2 class="isi">Mulai tahun 2008, Universitas Negeri Padang menerapkan proses pendaftaran mahasiswa baru secara online. Ini sejalan dengan keinginan lembaga yang ingin memberikan kemudahan kepada semua pihak yang terlibat dalam pelaksanaan kegiatan ini. Di samping itu diharapkan data yang diperoleh lebih akurat karena semua proses dilakukan oleh mahasiswa yang bersangkutan.</h2>
              <button id="button">Read more..</button>
            </div>
          </div>
        </div>

        <!-- kotak berita-->
        <div class="column">
          <!-- Post-->
          <div class="post-module">
            <!-- Thumbnail gambar-->
            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
            </div>
            <!-- konten berita-->
            <div class="post-content">
              <h1 class="title">UNP Terapkan Registrasi dan KRS Online</h1>
              <h2 class="isi">Mulai tahun 2008, Universitas Negeri Padang menerapkan proses pendaftaran mahasiswa baru secara online. Ini sejalan dengan keinginan lembaga yang ingin memberikan kemudahan kepada semua pihak yang terlibat dalam pelaksanaan kegiatan ini. Di samping itu diharapkan data yang diperoleh lebih akurat karena semua proses dilakukan oleh mahasiswa yang bersangkutan.</h2>
              <button id="button">Read more..</button>
            </div>
          </div>
        </div>

        <!-- kotak gambar-->
        <div class="column">
          <div class="post-module">
            <!-- Thumbnail gambar-->
            <div class="thumbnail">
              <div class="date">
                <div class="day">27</div>
                <div class="month">Mar</div>
              </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
            </div>
            <!-- konten berita-->
            <div class="post-content">
              <h1 class="title">UNP Terapkan Registrasi dan KRS Online</h1>
              <h2 class="isi">Mulai tahun 2008, Universitas Negeri Padang menerapkan proses pendaftaran mahasiswa baru secara online. Ini sejalan dengan keinginan lembaga yang ingin memberikan kemudahan kepada semua pihak yang terlibat dalam pelaksanaan kegiatan ini. Di samping itu diharapkan data yang diperoleh lebih akurat karena semua proses dilakukan oleh mahasiswa yang bersangkutan.</h2>
              <button id="button">Read more..</button>
            </div>
          </div>
        </div>
        
        <!-- Pagination-->
        <nav class="pagination-container">
          <div class="pagination">
            <a class="pagination-newer" href="#">PREV</a>
            <span class="pagination-inner">
              <a class="pagination-active" href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
            </span>
            <a class="pagination-older" href="#">NEXT</a>
          </div>
        </nav>
      </div>
    </div>

    <?php include 'footer.php';?>    
  </body>
</html>