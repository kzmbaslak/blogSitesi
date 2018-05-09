<?php
include "tema/ust.php";
?>
<?php
if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		
		//burası son adımlar-->>
		if(isset($_POST["guncelle"]))
	{
		$baslik=$_POST["baslik"];
		$keywords=$_POST["keywords"];
		$icerik=$_POST["icerik"];
		$description=$_POST["description"];
		$katid=$_POST["katid"];
		if($baslik!="" && $keywords!="" && $icerik!="" && $description!="" && $katid!="")
		{
		 	$sonuc=mysql_query("update makale set baslik='$baslik', keywords='$keywords' , icerik='$icerik', description='$description' ,katId='$katid' , onay='5' where id='$id' ",$db);
		}
	}
	elseif(isset($_POST["iptal"]))
	{
		 yol("makalelistele.php");
	}
	//<<--burası son adımlar
	
		$sorgu=mysql_query("select * from makale where id='$id'",$db);
		$sonuc=mysql_fetch_array($sorgu);
	?>
    <form action="#" method="post">
    	
        <div class="element">
			<label for="name">Makale Başlık</label>
			<input id="baslik" name="baslik" class="text err" value="<?= $sonuc["baslik"] ?>" />
		</div>
        <div class="element">
			<label for="name">Anahtar Kelimeler</label>
			<input id="keywords" name="keywords" class="text err" value="<?= $sonuc["keywords"] ?>" />
		</div>
        <div class="element">
			<label for="content">İçerik</label>
			<textarea name="icerik" class="ckeditor" rows="10"><?= $sonuc["icerik"] ?></textarea>
		</div>
        <div class="element">
			<label for="content">description</label>
			<textarea name="description" class="textarea" rows="10"><?= $sonuc["description"] ?></textarea>
		</div>
        <div class="element">
			<label for="name">Kategori No</label>
            <select name="katid">
            <?php
			$sorgukat=mysql_query("select * from kategoriler",$db);
			while($sonuckat=mysql_fetch_array($sorgukat))
			{
				if($sonuckat["id"]==$sonuc["katId"])
				{
					echo "<option selected='selected' value='".$sonuckat["id"]."'>".$sonuckat["katAdi"]."</option>";
				}
				else
				{
				echo "<option value='".$sonuckat["id"]."'>".$sonuckat["katAdi"]."</option>";	
				}
			}
			?>
           
            </select>
		</div>
        <div class="entry">
   		   <button type="submit" name="guncelle" class="add">Güncelle</button>
           <button type="submit" name="iptal">İptal</button>
  		</div>
  
    </form>
    

<?php
	
	
?>

<?php
	}
include "tema/alt.php";
?>