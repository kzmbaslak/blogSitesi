<?php
include_once "tema/ust.php";
(isset($_GET["katId"]))?$katId=$_GET["katId"]:$katId="";
if($katId !="")
{
$sorgu=mysql_query("select * from makale where katId='".$katId."'",$db);	
}
else
{
$sorgu=mysql_query("select * from makale",$db);	
}
while($sonuc=mysql_fetch_array($sorgu))
{
?>
          <a  href='makaleDetay.php?id=<?= $sonuc["id"]?>'><div class="post">
            <h2 class="title"><?= $sonuc["baslik"]?></h2>
            <p class="meta"><span class="date"><?= $sonuc["tarih"]?></span><span class="posted"><?= $sonuc["okunmaSayisi"]?></span></p>
            <div style="clear: both;">&nbsp;</div>
            <div class="entry">
              <p><?= $sonuc["description"]?></p>
            </div>
          </div></a>
          <?php
}
include_once "tema/alt.php";
?>
