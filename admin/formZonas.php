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
                <form action="uploadzonas.php" method="post" enctype="multipart/form-data">
                    <h2>Registro de Zonas</h2>
                    <div class="form-group">
                        <label for="codigo">Còdigo de la zona:</label>
                        <input type="number" class="form-control" id="cod" maxlenght="8" name="codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Nombre de la zona:</label>
                        <input type="text" class="form-control" id="title" name="titulo" maxlenght="60" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Direccion de la zona:</label>
                        <input type="text" class="form-control" id="title" name="direccion" maxlenght="60" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Descripcion:</label>
                        <input type="text" class="form-control" id="title" name="descripcion" maxlenght="60" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="titulo">Ubicacion:</label>
                        <input type="text" class="form-control" id="title" name="ubicacion" maxlenght="60" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Imagen de la zona:</label>
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