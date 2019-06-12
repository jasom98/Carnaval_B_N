<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_imgZonas($_GET["id"]);
	if($img!=null){
		delZonas($img->codigo);
		unlink($img->imagen);
		header("Location: listarZonas.php");
	}
}
?>