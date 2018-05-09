<?php
$db=mysql_connect("localhost","root","") or die ("Veritabanına bağlanılamadı");
mysql_select_db("blog",$db);
mysql_set_charset("utf8");
?>