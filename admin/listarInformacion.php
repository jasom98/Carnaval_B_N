<?php
include "db.php";
$images = get_informacion();
?>
<html>

<head>
    <title>Carnaval de Blancos y Negros</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

</head>

<body>

    <?php include("navbar.php");?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Informacion de Pagina</h1>
                <a href="./formInformacion.php" class="btn btn-default">Agregar Informacion</a>
                <br><br>
                <?php if(count($images)>0):?>
                <table class="table table-bordered">
                    <thead>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Texto</th>
                        <th></th>
                    </thead>
                    <?php foreach($images as $img):?>
                    <tr>
                        <td><img src="<?php echo $img->imagen;?>" style="width:240px;"> </td>
                        <td><?php echo $img->titulo; ?></td>
                        <td><?php echo $img->descripcion; ?></td>
                        <td><?php echo $img->texto; ?></td>
                        <td>
                            <a class="btn btn-success" href="./download.php? id=<?php echo $img->item; ?>">Descargar</a>
                            <a class="btn btn-danger" href="./deleteInformacion.php? id=<?php echo $img->codigo; ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php else:?>

                <h4 class="alert alert-warning">No hay imagenes!</h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>