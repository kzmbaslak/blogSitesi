<?php
  include "tema/ust.php";
  ?>
<div class="h_title">Bilgileri Güncelle</div>
<form action="" method="post">
  <div class="element">
    <label>Adı Soyadı <span class="red">(Boş Geçilemez)</span></label>
    <input name="name" class="text err" value="<?= $_SESSION["adi"] ?>" />
  </div>
  <div class="element">
    <label>Kullanıcı Adı <span class="red">(Boş Geçilemez)</span></label>
    <input name="uname" class="text err" value="<?= $_SESSION["kadi"] ?>" />
  </div>
  <div class="element">
    <label>Şifre <span class="red">(Boş Geçilemez)</span></label>
    <input name="sifre" type="text" class="text err" />
  </div>
  
  <div class="element">
    <label>Mail <span class="red">(Boş Geçilemez)</span></label>
    <input name="mail" value="<?= $_SESSION["mail"]?>" type="text" class="text err" />
  </div>
  
  <div class="entry">
    <button type="submit" class="add">Güncelle</button>
  </div>
</form>
<?php
	if($_POST)
	{
		if($_POST["name"]!="" && $_POST["uname"] !="" && $_POST["sifre"]!="" && $_POST["mail"]!="")
		{
		  $sql="update kullanicilar1 set kisiAdi='".$_POST["name"]."', kulAdi='".$_POST["uname"]."', sifre='".$_POST["sifre"]."', mail='".$_POST["mail"]."' where id='".$_SESSION["id"]."'";
		  $sonuc=mysql_query($sql);
		  echo ($sonuc)?onayMesaji("Güncelleme İşlemi Başarılı. Değişikliklerinizin Aktif Olabilmesi İçin Lütfen Yeniden Giriş Yapınız."):hataMesaji("Güncelleme İşlemi Yapılamadı");
		}
		else
		{
			uyariMesaji("Lütfen Tüm Alanların Doluluğundan Emin Olunuz");	
		}
	}
  include "tema/alt.php";
  ?>
