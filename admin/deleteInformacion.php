<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_imgInformacion($_GET["id"]);
	if($img!=null){
		delInformacion($img->codigo);
		unlink($img->imagen);
		header("Location: listarInformacion.php");
	}
}
?>