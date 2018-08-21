<style type="text/css">
      
  /*CSS HEADER*/

  header {
    width: 100%;
    height: 100%;
    position: relative;
    background: #F2EBD8;
    z-index: 999;
  }

  header nav {
    height: 90px;
    width: 100%;
    position: fixed;
    overflow: hidden;
    background-color: #F2EBD8;
    z-index: 1000;
  }

  header nav #logo {
    width: 80px;
    height: 100%;
    float: left;
    margin-left: 3%;
  }

  header nav #logo img {
    height: 85px;
  }

  header nav #menu {
    float: right;
    height: 100%;
    text-align: right;
    text-transform: uppercase;
    position:relative;
    right:3%;
    font-size: 16px;
  
  }

  header nav #menu li {
    display: inline-block;
    position: relative;
    margin: 0 20px;
    box-sizing: border-box;
    margin-top: 40px;
    cursor: pointer;
    transition: color .2s
  }

  header nav #menu a:after {
    position:absolute;
    top:-13px;
    right:51%;
    display: block; 
    width:1px; 
    height:0;
    background-color: #ABB5BF;
    content:'';
    transition: height .2s  ; 
    
  }

  header nav #menu a:hover:after {
    height:45px;
    
  }

  header nav #menu a:hover {
    color:#ABB5BF;
    
  }

  header #teks-pembuka {
    position: absolute;
    width: 100%;
    height: 150px;
    top: 50%;
    margin-top: -50px;
  }

  header #teks-pembuka h1 {
    height: 100px;
    font-size: 50px;
    font-weight:100;
    line-height: 100px;
  }

  header #teks-pembuka  p {
    height: 50px;
    line-height: 1;
    font-size: 22px;
  }

  header #teks-pembuka  h1,
  header #teks-pembuka  p {
    margin: 0;
    text-align: center;
    overflow: hidden;
    color:  #19364F;
  }

  a{
     color:  #19364F;
  }


  /*CSS Scroll icon*/

  header #scroll {  
    width: 30px;
    height: 30px;
    position: absolute;
    bottom: 5%;
    left: 0;
    right: 0;
    margin: auto;
    border-right: 2px solid black;
    border-bottom: 2px solid black;
    cursor: pointer;
    -webkit-transform: rotateZ(45deg);
    transform: rotateZ(45deg);
    -webkit-animation: bounce 1.2s infinite ease;
    animation: bounce 1.2s infinite ease;
  }

  @-webkit-keyframes bounce {
    0%, 100% {
      -webkit-transform: translate(0, 0) rotateZ(45deg);
      transform: translate(0, 0) rotateZ(45deg);

    }
    50% {
      -webkit-transform: translate(0, -15px) rotateZ(45deg);
      transform: translate(0, -15px) rotateZ(45deg);
    }
  }

  @keyframes bounce {
    0%, 100% {
      -webkit-transform: translate(0, 0) rotateZ(45deg);
      transform: translate(0, 0) rotateZ(45deg);
    }
    50% {
      -webkit-transform: translate(0, -15px) rotateZ(45deg);
      transform: translate(0, -15px) rotateZ(45deg);
    }
  }
</style>


<!DOCTYPE html>
<html>
  <header>
    <nav>
      <div id="logo"><img src="https://3.bp.blogspot.com/-B1YxHXmH9-w/WiTWO35rZoI/AAAAAAAAFrs/VWj_kv1h4DQRbimb8xB6qP2GCM1AWn4LwCLcBGAs/s1600/unp.png"/></div>
      <ul id="menu">
        <li> <a href="beranda_puskom.php">Beranda</a></li>
        <li> <a href="profile.php">Profil</a></li>
        <li> <a href="layanan.php">Layanan</a></li>
        <li> <a href="perangkat_lunak.php">Perangkat Lunak</a></li>
        <li> <a href="pelatihan.php">Pelatihan</a></li>
      </ul>
    </nav>
    
    <div id="teks-pembuka">
      <h1>UPT. PUSKOM UNP</h1>
      <p>"Menyediakan data dan informasi yang relevan, akurat, terpercaya, aman, fleksibel dan tersedia setiap saat"</p>
    </div>
      
    <div id="scroll"></div>

  </header>
</html>
