<html>

<head>
    <title>Subir Multiples Imagenes y/o Archivos - By Evilnapsis</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php include("navbar.php");?>

    <div class="container">
        <div class="row">
            <div class="container">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <h2>Registro de Slides</h2>
                    <div class="form-group">
                        <label for="codigo">Còdigo del slide:</label>
                        <input type="number" class="form-control" id="cod" maxlenght="8" name="codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Titulo de Slide:</label>
                        <input type="text" class="form-control" id="title" name="titulo" maxlenght="60" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="mr-sm-2">Descripcion</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="descrp" name="descripcion" required>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="foto">Imagen de producto:</label>
                        <input type="file" name="foto" value="Examinar" accept="image/gif, .jpg, .png">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-secundary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>