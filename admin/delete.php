<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_imgSlide($_GET["id"]);
	if($img!=null){
		del($img->codigo);
		unlink($img->imagen);
		header("Location: index.php");
	}
}
?>