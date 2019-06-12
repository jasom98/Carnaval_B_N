<?php

    include "db.php";

    $codigo=$_POST['codigo'];
    $titulo=strtoupper( $_POST['titulo']);
    $descripcion=$_POST['descripcion'];
    $texto=$_POST['texto'];
    $error1 = 0;

    $sql_validation = "SELECT * FROM infomacion WHERE codigo = '$codigo' ";
    $con = con();
	$result=$con->query($sql_validation);
    
    if($result->num_rows == 0){
        if($_FILES["foto"]["error"]){
            $error1 = 1;
            echo "<script language='javascript'>alert('Imagen no cargada o presenta errores')</script>";
            echo "<script language='javascript'>alert('Imagen predeterminada')</script>";
            header("Refresh:0;url=view_create.php");
        }

        $peso = 5000;
        if ($_FILES["foto"]["size"] <= $peso*1024){
            if ($error1==1){
                $direccion = "informacion/default.png";
            } else {
                $name_file = $_FILES["foto"]["name"];

                $extension=explode(".",$_FILES['foto']['name']); 
                $extension=$extension[count($extension)-1];
                $direccion = "informacion/".$codigo.".".$extension;

                if(!file_exists($name_file)){
                    move_uploaded_file($_FILES["foto"]["tmp_name"],"informacion/".$codigo.".".$extension);                        
                }  
            }
            
            //insert_img($codigo, $titulo, $descripcion, $direccion);
            
            $sql="INSERT INTO infomacion (codigo,titulo,descripcion,texto,imagen)VALUES('$codigo','$titulo','$descripcion','$texto','$direccion')";
            $conn = con();
            if ($conn->query($sql)===true) {
            echo "<script languaje='javascript'>alert('Producto registrado con exito')</script>";
            header("Refresh:0;url=listarInformacion.php");   
            } else {
            echo "Error:".$sql."<br>".$conn->error;
            }
        } else {
            echo "<script language='javascript'>alert('El archivo excede el tamaño')</script>";
            header("Refresh:0;url=formInformacion.php");
        }
    } else {
        echo "<script language='javascript'>alert('El producto ya existe')</script>";
        header("Refresh:0;url=formInformacion.php");
    }

?>