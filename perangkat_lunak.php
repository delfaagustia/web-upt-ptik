
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700);
  * {
    margin: 0;
    padding: 0;
    font-family: Open Sans, sans-serif!important;
  }

  body {
    min-width: 550px;
  }

  /*CSS Perangkat Lunak*/

  #Perangkat-lunak {
    z-index: 4;
    position: relative;  
    margin-top: 30px;
  }

  #Perangkat-lunak .info {
    background: white;
    margin-bottom: 30px;
    color: #19364F;
  }

  #Perangkat-lunak .info > p {
    text-align: center;
    font-size: 28px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 500;
    position: relative;
  }

  #Perangkat-lunak .info > p:before {
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

  #Perangkat-lunak .info h6{
    font-size: 13px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    line-height: 20px;
    width: 58%;
    margin-top: 35px;
  }

  /*CSS list Perangkat Lunak*/

  #judul-tab{
    font-size: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 300;
    position: relative;
  }

  .module {
    width: 530px;
    margin-left: auto;
    margin-right: auto;
    padding: 8px;
    background-color: white;
    font-size: 13px;
  }

  .custom-bullet {
    margin-left: 0;
    list-style: none; 
  }

  .custom-bullet--b > li {
    position: relative;
    margin-bottom: 9px;
    border: 1px solid #f7d8a7;
    padding: 8px;
    border-radius: 3px;
    margin-left: 10px;
  }
  .custom-bullet--b > li:before {
    position: absolute;
    top: -0.75rem;
    padding-left: 0.375rem;
    padding-right: 0.375rem;
    color: #f7d8a7;
    background-color: white;
  }

  .custom-bullet--b > li:last-child {
    margin-bottom: 0;
  }

  #list-perangkat-lunak{
    margin-bottom: 90px;
  }
</style>


<!DOCTYPE html>
<html>
<title>Perangkat Lunak UPT PUSKOM UNP</title>
  <header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include 'navbar.php';?>
  </header>

<body>
  <div id="Perangkat-lunak">
    <section class="info">
      <p>Perangkat Lunak</p>
      <h6> Universitas Negeri Padang melakukan kerjasama dengan Microsoft Corp dalam bentuk Microsoft Campus Aggrement (MCA). MCA ini terdiri dari software-software perkantoran, seperti Microsoft Windows, Microsoft Office, Visual Basic dan lainnya.<br>
      Software tersedia dalam 2 bahasa, yaitu Bahasa Inggris dan Bahasa Jepang.</h6>
    </section>
  </div>

  <div class="container" id ="list-perangkat-lunak">
    <h4 id="judul-tab">Daftar Perangkat Lunak yang tersedia: </h4>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#1-14">1 - 14</a></li>
      <li><a data-toggle="tab" href="#15-28">15 - 28</a></li>
      <li><a data-toggle="tab" href="#29-42">29 - 42</a></li>
      <li><a data-toggle="tab" href="#43-57">43 - 57</a></li>
      <li><a data-toggle="tab" href="#58-71">58 - 71</a></li>
      <li><a data-toggle="tab" href="#72-85">72 - 85</a></li>
      <li><a data-toggle="tab" href="#86-99">86 - 99</a></li>
    </ul>

    <div class="tab-content">
      <div id="1-14" class="tab-pane fade in active">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>
      
      <div id="15-28" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>
      
      <div id="29-42" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>
      
      <div id="43-57" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>

      <div id="58-71" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>

      <div id="72-85" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>

      <div id="86-99" class="tab-pane fade">
        <div class="row">
          <div class="col-sm-6">
            <section class="module">
              <ol class="custom-bullet custom-bullet--b">
                <li>MVSN 2003 Academic Professional (MSDN Library for Visual Studio.Net 2003 Disc 1)</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="module" id = "pertama">
              <ol class="custom-bullet custom-bullet--b">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
              </ol>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>
  </body>
</html>


