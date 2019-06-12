<?php
include "db.php";
$images = get_carrozas();
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
                <h1>Carrozas del evento</h1>
                <a href="./formCarrozas.php" class="btn btn-default">Agregar Carroza</a>
                <br><br>
                <?php if(count($images)>0):?>
                <table class="table table-bordered">
                    <thead>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Artista</th>
                        <th></th>
                    </thead>
                    <?php foreach($images as $img):?>
                    <tr>
                        <td><img src="<?php echo $img->imagen;?>" style="width:240px;"> </td>
                        <td><?php echo $img->titulo; ?></td>
                        <td><?php echo $img->artista; ?></td>
                        <td>
                            <a class="btn btn-success" href="./download.php? id=<?php echo $img->item; ?>">Descargar</a>
                            <a class="btn btn-danger" href="./deleteCarrozas.php? id=<?php echo $img->codigo; ?>">Eliminar</a>
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