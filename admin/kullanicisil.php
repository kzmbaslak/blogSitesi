<?php
include "tema/ust.php";
?>
<div class="h_title">Kullanıcı Engelle</div>
<div class="entry">
  <div class="sep"></div>
</div>
<table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Adı Soyadı</th>
      <th scope="col">Mail</th>
      <th scope="col">Yetki</th>
      <th scope="col" style="width: 65px;">Sil</th>
    </tr>
  </thead>
  <tbody>
    <?php
		  $sorgu=mysql_query("select k.id,k.kisiAdi,k.durum,y.text,k.mail from kullanicilar1 as k inner join yetkiler as y on k.durum=y.number order by id",$db);
		  while($sonuc=mysql_fetch_array($sorgu))
		  {
			  ?>
    <tr>
      <td class="align-center"><?= $sonuc["id"] ?></td>
      <td><?= $sonuc["kisiAdi"] ?></td>
      <td><?= $sonuc["mail"] ?></td>
      <td><?= $sonuc["text"] ?></td>
      <td><?php
			  $class="";
			  $classDuzenle="";
			  if($sonuc["durum"]==0)
			  {
	$class="table-icon delete";
	$classDuzenle="table-icon edit";
			  }
			  elseif($sonuc["durum"]==2)
			 {
			$class="table-icon add";	 
			$classDuzenle="table-icon edit";
			 }
			  ?>
        <a href="sil.php?id=<?= $sonuc["id"] ?>" class="<?= $class ?>" title="Engelle"></a> <a href="kullanicisil.php?kId=<?= $sonuc["id"] ?>" class="<?= $classDuzenle ?>" title="Düzenle"></a></td>
    </tr>
    <?php
		  }
			?>
  </tbody>
</table>
<div class="entry"> </div>
<?php
        if(isset($_GET["kId"]))
		{
			$kId=$_GET["kId"];
			$sorgu=mysql_query("select * from kullanicilar1 where id='$kId'",$db);
			$sonuc=mysql_fetch_array($sorgu);
			?>
<form action="" method="post">
  <div class="element">
    <label>Adı Soyadı <span class="red">(Boş Geçilemez)</span></label>
    <input name="name" class="text err" value="<?= $sonuc["kisiAdi"] ?>" />
  </div>
  <div class="element">
    <label>Kullanıcı Adı <span class="red">(Boş Geçilemez)</span></label>
    <input name="uname" class="text err" value="<?= $sonuc["kulAdi"] ?>" />
  </div>
  <div class="element">
    <label>Mail <span class="red">(Boş Geçilemez)</span></label>
    <input name="mail" value="<?= $sonuc["mail"]?>" type="text" class="text err" />
  </div>
  <div class="entry">
    <button type="submit" name="guncelle" class="add">Güncelle</button>
    <button type="submit" name="sifreDegistir" class="add">Şifre Değiştir</button>
  </div>
</form>
<?php
			if($_POST)
			{
			$mail="";
			$adi=$_POST["name"];
			$kadi=$_POST["uname"];
			$mail=$_POST["mail"];
			if(isset($_POST["guncelle"]))
			{
				
				if($mail!="" && $kadi!="" && $adi!="")
				{
				mysql_query("update kullanicilar1 set kulAdi='$kadi', kisiAdi='$adi', mail='$mail' where id='$kId'",$db);
				onayMesaji("Güncelleme İşlemi Tamamlandı.");
				}
				else
				{
					hataMesaji("Lütfen Tüm Alanları Doldurunuz.");	
				}
			}
			
			if(isset($_POST["sifreDegistir"]))
			{
				$sifre=chr(rand(65,90)) . rand(0,9). chr(rand(65,90)). rand(0,9).chr(rand(65,90)).rand(0,9);	
				mysql_query("update kullanicilar1 set sifre='$sifre' where id='$kId'",$db);
				include "../class.phpmailer.php";
				$mailSend= new PHPMailer;
				$mailSend->IsSMTP();
				$mailSend->SMTPAuth=true;
				$mailSend->Host="webmail.publicistan.com";
				$mailSend->Port=587;
				$mailSend->Username="deneme@publicistan.com";
				$mailSend->Password="AB123456";
				$mailSend->SetFrom($mailSend->Username,"Gökhan GÜRLEYEN");
				$mailSend->AddAddress($mail,"Gökhan GÜRLEYEN");
				$mailSend->CharSet="UTF-8";
				$mailSend->Subject="Şifre Sıfırlandı";
				$mailSend->Body="Yeni Şifeniz $sifre";
				if($mailSend->Send())
				{
					onayMesaji("Şifreniz Değiştirildi ve Mail Gönderildi.");	
				}
				else
				{
				uyariMesaji($mailSend->ErrorInfo);	
				}
			}
			}
		}
include "tema/alt.php";
?>
