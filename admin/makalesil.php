<?php
include "../baglan.php";
include "../fonksiyonlar.php";
$id=$_GET["id"];
//$sorgu=mysql_query("delete from makale where id='$id'",$db); <<-- silme işlemi
$sorgu=mysql_query("update makale set onay='6' where id='$id'",$db);
yol("makalelistele.php");
?>