<?php
include_once "tema/ust.php";
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sorgu=mysql_query("select * from makale where id=$id",$db);
	$sonuc=mysql_fetch_array($sorgu);
?>
<div class="post">
            <h2 class="title"><?= $sonuc["baslik"]?></h2>
            <p class="meta"><span class="date"><?= $sonuc["tarih"]?></span><span class="posted"><?= $sonuc["okunmaSayisi"]?></span></p>
            <div style="clear: both;">&nbsp;</div>
            <div class="entry">
              <p><?= $sonuc["icerik"]?></p>
            </div>
          </div>



<?php
}
else
{
header("location: index.php");	
}
include_once "tema/alt.php";
?>