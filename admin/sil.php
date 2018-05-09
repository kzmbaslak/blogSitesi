<?php
include "../baglan.php";
include "../fonksiyonlar.php";
$id=$_GET["id"];

/*
Veritabanından kayıt silmek için kullanılır.

mysql_query("delete from kullanicilar1 where id='$id'",$db);
*/

$sorgu=mysql_query("select durum from kullanicilar1 where id='$id'",$db);
$sonuc=mysql_fetch_array($sorgu);
if($sonuc["durum"]==0)
{
	$up="durum='2'";
}
elseif($sonuc["durum"]==2)
{
	$up="durum='0'";
}
mysql_query("update kullanicilar1 set $up where id='$id'",$db);
yol("kullanicisil.php");
?>