<?php
function onayMesaji($mesaj)
{
echo "<div class='n_ok'><p>$mesaj</p></div>";	
}

function uyariMesaji($mesaj)
{
echo "<div class='n_warning'><p>$mesaj</p></div>";	
}

function hataMesaji($mesaj)
{
echo "<div class='n_error'><p>$mesaj</p></div>";	
}

function yol($yol)
{
	header("Location: $yol");
}
?>