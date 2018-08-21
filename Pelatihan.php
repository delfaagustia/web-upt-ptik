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

  #Daftar-pelatihan{
    z-index: 4;
    position: relative; 
    margin-top: 50px; 
    margin-bottom: 60px;
  }

  #Daftar-pelatihan .info {
    background: white;
    margin-bottom: 30px;
    color: #19364F;
  }

  #Daftar-pelatihan .info > p{
    text-align: center;
    font-size: 25px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 500;
    position: relative;
  }

  #Daftar-pelatihan .info > p:before {
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


  .tabelPelatihan {
    width: 1000px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
  }

  .tabelPelatihan tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }

  .tabelPelatihan th {
    display: none;
    font-size: 15px;
    text-align: center;
  }

.tabelPelatihan td {
  display: block;
   font-size: 14px;
}

  .tabelPelatihan td:first-child {
    padding-top: 5px;
  }

  .tabelPelatihan td:last-child {
    padding-bottom: 5px;
  }

  .tabelPelatihan td:before {
    content: attr(data-th) ": ";
    font-weight: bold;
    width: 6.5em;
    display: inline-block;
  }

  @media (min-width: 480px) {
    .tabelPelatihan td:before {
      display: none;
    }
  }
  .tabelPelatihan th, .tabelPelatihan td {
    text-align: s;
  }

  @media (min-width: 480px) {
    .tabelPelatihan th, .tabelPelatihan td {
      display: table-cell;
      padding: .25em .5em;
    }
    .tabelPelatihan th:first-child, .tabelPelatihan td:first-child {
      padding-left: 0;
    }
    .tabelPelatihan th:last-child, .tabelPelatihan td:last-child {
      padding-right: 0;
    }
  }

  .tabelPelatihan {
    background: #34495E;
    color: #fff;
    border-radius: .4em;
    overflow: hidden;
  }

  .tabelPelatihan tr {
    border-color: #46637f;
  }

  .tabelPelatihan th, .tabelPelatihan td {
    margin: .5em 1em;
  }

  @media (min-width: 480px) {
    .tabelPelatihan th, .tabelPelatihan td {
      padding: 1em !important;
    }
  }
  .tabelPelatihan th, .tabelPelatihan td:before {
    color: #dd5;
  }

  /*CSS Pagination*/
  .pagination-container {
    margin-top: 10px;
    text-align: center;
    margin-bottom: 80px;
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

    <?php include 'navbar.php';?>
  </head>


  <body>
    <div id="Daftar-pelatihan">
      <section class="info">
        <p>Daftar Pelatihan</p>
      </section>
    </div>

    <table class="tabelPelatihan">
    <tr>
      <th>Kegiatan</th>
      <th>Tanggal</th>
      <th>Tempat</th>
      <th>Keterangan</th>
    </tr>
    <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
    <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
    <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
      <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
      <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
      <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
      <tr>
      <td data-th="Movie Title">Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</td>
      <td data-th="Genre">17 Agust - 18 Sept 2018</td>
      <td data-th="Year">Auditorium UNP</td>
      <td data-th="Gross">Free & Umum</td>
    </tr>
  </table>
  
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

  <?php include 'footer.php';?>
</body>
</html>
