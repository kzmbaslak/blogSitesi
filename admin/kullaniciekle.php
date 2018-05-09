<?php
  include "tema/ust.php";
  if($_SESSION["durum"] != "1")
  {
	  uyariMesaji("Bu Sayfaya Erişim İzniniz Bulunmamaktadır.<br />Tekrar Giriş Yapmak İçin <a href='cikis.php'>Burayı</a> Tıklayınız.<br /> Panel'e Dönmek İçin <a href='index.php'>Burayı</a> Tıklayınız");
  }
  else
  {
	  
  ?>
    <div class="h_title">Kullanıcı Ekle</div>
    <form action="" method="post">
      <div class="element">
        <label>Adı Soyadı <span class="red">(Boş Geçilemez)</span></label>
        <input name="name" class="text err" />
      </div>
      <div class="element">
        <label>Kullanıcı Adı <span class="red">(Boş Geçilemez)</span></label>
        <input name="uname" class="text err" />
      </div>
      <div class="element">
        <label>Şifre <span class="red">(Boş Geçilemez)</span></label>
        <input name="sifre" type="text" class="text err" />
      </div>
      
      <div class="element">
        <label>Mail <span class="red">(Boş Geçilemez)</span></label>
        <input name="mail" type="text" class="text err" />
      </div>     
      
      <div class="element">
        <label for="comments">Comments</label>
        <input type="radio" name="comments" value="0" checked="checked" />
        Editör
        <input type="radio" name="comments" value="1" />
        Yönetici </div>
      <div class="entry">
        <button type="submit" class="add">Kaydet</button>
      </div>
    </form>
    <?php
	if($_POST)
	{
		$adi=$_POST["name"];
		$kadi=$_POST["uname"];
		$sifre=$_POST["sifre"];
		$durum=$_POST["comments"];
		$mail=$_POST["mail"];
		if(trim($adi)!="" && trim($kadi)!="" && trim($sifre)!="" && trim($mail)!="")
		{
			$sonuc=mysql_query("insert into kullanicilar1(kisiAdi,kulAdi,sifre,mail,durum)values('$adi','$kadi','$sifre','$mail','$durum')",$db);
			echo ($sonuc)?onayMesaji("Kayıt Başarılı"):hataMesaji("Kayıt İşlemi Yapılamadı");
		}
		else
		{
			echo uyariMesaji("Lütfen Adı Soyadı - Kullanıcı Adı - Şifre - Mail Alanlarını Doldurunuz");
		}
	}
	}
  include "tema/alt.php";
  ?>