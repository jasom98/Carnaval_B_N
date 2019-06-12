<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_imgCarrozas($_GET["id"]);
	if($img!=null){
		delCarrozas($img->codigo);
		unlink($img->imagen);
		header("Location: listarCarrozas.php");
	}
}
?>