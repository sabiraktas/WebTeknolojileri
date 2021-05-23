<!DOCTYPE html>
<html>
    <head>
        <title>İletişim Sayfası</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/stilim.css">        
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
        <div class="loginyazi">
                <?php   
                $kullaniciadi=$_POST['kullaniciadi'];
                $sifre=$_POST['sifre'];
                if($kullaniciadi=="g191210060@sakarya.edu.tr" && $sifre=="g191210060")
                {
                    echo "Hoş Geldiniz 'g191210060'";
                }
                else{
                    header ("location:login.html");
                }
                ?>
        </div>
        <div class="footer"  >
            <p>Telif Hakkı © 2021 SABIR AKTAŞ - Tüm Hakları Saklıdır.</p>
          </div>
    </body>
</html>