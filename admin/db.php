<?php

/**
* Conexion a la base de datos y funciones
* Autor: evilnapsis
**/

function con(){
	return new mysqli("localhost","root","","carnavales");
}

function insert_img($codigo, $titulo, $descripcion, $ruta){
	$con = con();
	$con->query("insert into slides (codigo, titulo, descripcion,imagen) value (\"$codigo\",\"$titulo\",\"$descripcion\",\"$ruta\")");
}

function get_slides(){
	$images = array();
	$con = con();
	$query=$con->query("select * from slides");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgSlide($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from slides where codigo=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function get_zonas(){
	$images = array();
	$con = con();
	$query=$con->query("select * from zonasj");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgZonas($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from zonasj where codigo=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function get_carrozas(){
	$images = array();
	$con = con();
	$query=$con->query("select * from carrozas");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgCarrozas($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from carrozas where codigo=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function get_informacion(){
	$images = array();
	$con = con();
	$query=$con->query("select * from infomacion");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgInformacion($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from infomacion where codigo=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}



function del($codigo){
	$con = con();
	$con->query("delete from slides where codigo=$codigo");
}

function delZonas($codigo){
	$con = con();
	$con->query("delete from zonasj where codigo=$codigo");
}

function delCarrozas($codigo){
	$con = con();
	$con->query("delete from carrozas where codigo=$codigo");
}

function delInformacion($codigo){
	$con = con();
	$con->query("delete from infomacion where codigo=$codigo");
}

?>