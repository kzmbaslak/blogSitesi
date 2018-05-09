<?php
include "tema/ust.php";
?>
<table>
  <thead>
    <tr>
      <th scope="col">İŞLEM</th>
      <th scope="col">BAŞLIK</th>
      <th scope="col">İÇERİK</th>
      <th scope="col">ONAY</th>
      <th scope="col">KATEGORİ</th>
      <th scope="col" style="width: 65px;">OKUNMA S.</th>
    </tr>
  </thead>
  <tbody>			  
    <?php
	
	//$sorgu=mysql_query("select id,baslik,onay,katId,okunmaSayisi,substring(icerik,1,250) as  icerik from makale ",$db);<<-- substring sql de kullanımı
	$sorgu=mysql_query("select m.id,m.baslik,k.katAdi,m.okunmaSayisi,m.icerik,y.text  from makale as m inner join yetkiler as y on y.number=m.onay inner join kategoriler as k on k.id=m.katId where m.onay<>6",$db);
	while($sonuc=mysql_fetch_array($sorgu))
	{
	?>
    <tr>
      <td class="align-center"><a title="düzenle" class="table-icon edit" href="makaleduzenle.php?id=<?= $sonuc["id"]?>"></a><a title="sil" class="table-icon delete" href="makalesil.php?id=<?= $sonuc["id"]?>"></a></td>
      <td><?= $sonuc["baslik"] ?></td>
      <td><?= substr($sonuc["icerik"],0,250) ?></td>
      <td><?= $sonuc["text"] ?></td>
      <td><?= $sonuc["katAdi"] ?></td>
      <td><?= $sonuc["okunmaSayisi"] ?></td>
    </tr>
     
    <?php
	}
	
	?>
    </tbody>
	</table>
	
<?php
		
include "tema/alt.php";
?>