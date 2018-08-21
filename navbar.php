    <style type="text/css">
      
  /*CSS HEADER*/

  header {
    width: 100%;
    height: 90px;
    position: relative;
    background: #F2EBD8;
    z-index: 999;
    color: #19364F;
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
    transition: height .2s   
  }
  header nav #menu a:hover:after {
    height:45px
  }
  header nav #menu a:hover {
    color:#ABB5BF;
  }
  
  a{
     color:  #19364F;
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
  </header>
</html>
