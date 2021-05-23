<!DOCTYPE html>
<html>
    <head>
        <title>İletişim Sayfası</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/stilim.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">        
    </head>
    <body >
        <div class="header">
            <h1>WEB TEKNOLOJİLERİ PROJESİ</h1>
        </div>
        <div class="buton">  
            <a href="index.html">HAKKIMDA</a>
            <a href="ozgecmis.html">ÖZGEÇMİŞİM</a>
            <a href="ilgialanlarim.html">İLGİ ALANLARIM</a>
            <a href="sehrim.html">ŞEHRİM</a>
            <a href="mirasimiz.html">MİRASIMIZ</a>
            <a href="iletisim.html">İLETİŞİM</a>
            <a href="login.html">KULLANICI GİRİŞİ</a>
        </div>
        <div class="section">
            <form action="iletisim.php" method="POST">
                <div class="row">
                    <div>
                        <label>ADI SOYADI:</label>
                        <?php if(isset($_POST["adsoyad"])) 
                                echo $_POST["adsoyad"]; 
                                ?>
                    </div>
                </div>
                <div class="row">
                    <div class="label">
                        <label>EPOSTA ADRESİ:</label>
                       <?php if(isset($_POST["email"])) 
                                echo $_POST["email"]; 
                                ?> 
                    </div>
                </div>
                <div class="row">
                    <div class="label">
                        <label>TELEFON:</label>
                        <?php if(isset($_POST["tel"])) 
                                echo $_POST["tel"]; 
                        ?>
                    </div> 
                </div>
                <div class="row">
                    <div class="label">
                        <label>CİNSİYET:</label>
                        <?php if(isset($_POST["cinsiyet"])) 
                                if($_POST["cinsiyet"]=="ERKEK") echo "ERKEK";
                                else echo "KADIN";
                        ?>
                    </div>
                    <div class="row">
                        <div class="label">
                            <label>DOĞUM TARİHİ:</label>
                            <?php if(isset($_POST["dogumgunu"])) 
                                    echo $_POST["dogumgunu"]; 
                            ?>
                        </div>
                </div>
                <div class="row">
                    <div class="label">
                        <label>YAŞADIĞINIZ İL:</label>
                        <?php if(isset($_POST["il"])) 
                                echo $_POST["il"]; 
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="label">
                        <label>GERİ BİLDİRİMİNİZ:</label>
                        <?php if(isset($_POST["textarea"])) 
                                echo $_POST["textarea"]; 
                        ?>
                    </div>
                </div>        
                </form>
        </div><br><br>
        <div class="footer">
            <p>Telif Hakkı © 2021 SABIR AKTAŞ - Tüm Hakları Saklıdır.</p>
          </div>
    </body>
</html>