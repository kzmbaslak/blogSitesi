<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #content -->
<div id="sidebar">
  <div id="logo">
    <h1><a href="index.php">Bloğum </a></h1>
    <p>Design by <a href="#" rel="nofollow">Gökhan GÜRLEYEN</a></p>
  </div>
  <div id="menu">
    <ul>
    <li><a href="index.php">Tümü</a></li>
    <?php
	$sorgu=mysql_query("select * from kategoriler",$db);
	while($sonuc=mysql_fetch_array($sorgu))
	{
		echo "<li><a href='index.php?katId=".$sonuc["id"]."'>".$sonuc["katAdi"]."</a></li>";
	}
	?> 
    </ul>
  </div>
  <ul>
    <li>
      <h2>Hakkımızda</h2>
      <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
    </li>
  </ul>
</div>
<!-- end #sidebar -->
<div style="clear: both;">&nbsp;</div>
</div>
</div>
</div>
<!-- end #page -->
</div>
<div id="footer">
  <p>&copy; Sitename.com. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>. Background by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body></html>