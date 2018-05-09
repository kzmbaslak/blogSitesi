<?php
include "../baglan.php";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>SimpleAdmin</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="#" method="post">
					<label for="login">Username:</label>
					<input id="login" name="login" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="pass" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" class="ok">Login</button>
				</form>
                <?php
				if($_POST)
				{
				 $kadi=$_POST["login"];
				 $sifre=$_POST["pass"];
				 if($kadi!="" && $sifre!="")
				 {
					$sorgu=mysql_query("select * from kullanicilar1 where kulAdi='$kadi' and sifre='$sifre' and durum<>2",$db);
					$sonuc=mysql_fetch_array($sorgu);
					if($sonuc)
					{
						$_SESSION["id"]=$sonuc["id"];
						$_SESSION["kadi"]=$sonuc["kulAdi"];
						$_SESSION["durum"]=$sonuc["durum"];
						$_SESSION["adi"]=$sonuc["kisiAdi"];
						$_SESSION["mail"]=$sonuc["mail"];
						header("location: index.php");
					}
				 }
				 else
				 {
					echo "Lütfen Kullanıcı Adınızı ya da Şifrenizi Giriniz...";	 
				 }
				}
				?>
			</div>
			<div class="footer">&raquo; <a href="#">Gökhan GÜRLEYEN</a> | Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
