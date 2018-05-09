<?php
include "../fonksiyonlar.php";

session_start();
if(!isset($_SESSION["id"]))
{
yol("login.php");	
}


include "../baglan.php";



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>SimpleAdmin</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>

<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Merhaba, <strong><?= $_SESSION["adi"] ?></strong> [ <a href="cikis.php">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<p>Last login: <strong><?= date("d/m/Y")?></strong></p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="content">
		<?php
		include "kategori.php";
		?>
		<div id="main">
        <div class="full_w">