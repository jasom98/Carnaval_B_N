<?php
    include "admin/db.php";
    $slides = get_slides();
    $informacion = get_informacion();
    $zonas = get_zonas();
    $carrozas = get_carrozas();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Carnavales</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="w3-top">
        <div class="w3-bar w3-pink w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-center" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="#informacion" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Informacion</a>
            <a href="#zonas" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Zonas de Juego</a>
            <a href="#carrozas" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Carrozas</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contactos</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Mas<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="./admin" target="_blank" class="w3-bar-item w3-button">Edicion</a>
                    <a href="#" class="w3-bar-item w3-button">Extras</a>
                    <a href="#" class="w3-bar-item w3-button">Media</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
        </div>
    </div>


    <div class="mySlides w3-display-container w3-center">
        <?php if(count($slides)>0):?>
        <!-- aqui insertaremos el slider -->
        <div id="carousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicatodores -->
            <ol class="carousel-indicators">
                <?php $cnt=0; foreach($slides as $img):?>
                <li data-target="#carousel1" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
                <?php $cnt++; endforeach; ?>
            </ol>

            <!-- Contenedor de las imagenes -->
            <div class="carousel-inner" role="listbox">
                <?php $cnt=0; foreach($slides as $img):?>
                <div class="item <?php if($cnt==0){ echo 'active'; }?>">
                    <img src="<?php echo 'admin/'.$img->imagen; ?>" alt="Imagen 1">
                    <div class="w3-display-bottomright w3-container w3-black w3-hover-white w3-hide-small" style="bottom:5%;opacity:0.7;width:70%">
                        <h2><b><?php echo $img->titulo; ?><br><?php echo $img->descripcion; ?></b></h2>
                    </div>
                    <div class="carousel-caption"></div>
                </div>
                <?php $cnt++; endforeach; ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>

        </div>
        <?php else:?>
        <h4 class="alert alert-warning">No hay imagenes</h4>
        <?php endif; ?>
    </div>


    <div class="w3-row w3-padding-64" id="informacion">
       <?php $cont=2; foreach($informacion as $img):?>
       
       <?php
            $aleacion = $cont % 2;
            if ($aleacion == 0){?>
       
        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center"><?php echo $img->titulo; ?></h1>
            <h5 class="w3-center"><?php echo $img->descripcion; ?></h5>
            <p class="w3-justify"><?php echo $img->texto; ?>
        </div>
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <center><img src="admin/<?php echo $img->imagen; ?>" class="w3-round w3-image" alt="Table Setting"></center>
        </div>
        
        <?php } else {?>
        
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <center><img src="admin/<?php echo $img->imagen; ?>" class="w3-round w3-image" alt="Table Setting"></center>
        </div>
        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center"><?php echo $img->titulo; ?></h1>
            <h5 class="w3-center"><?php echo $img->descripcion; ?></h5>
            <p class="w3-justify"><?php echo $img->texto; ?>
        </div>
        
        <?php } $cont++; ?>
        <?php endforeach; ?>

    </div>

    <!-- The Tour Section -->
    <div class="w3-purple" id="zonas">
        <div class="w3-container w3-content w3-padding-64" style="max-width:1000px">
            <h2 class="w3-wide w3-center">Zonas de juego</h2>
            <p class="w3-opacity w3-center"><i>Disfruta con tu familia o amigos de esta gran ciudad</i></p><br>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <?php foreach($zonas as $img):?>

                <div class="w3-third w3-margin-bottom">
                    <img src="admin/<?php echo $img->imagen; ?>" alt="imagen" style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b><?php echo $img->titulo; ?></b></p>
                        <p class="w3-opacity"><?php echo $img->direccion; ?></p>
                        <p><?php echo $img->descripcion; ?></p>
                        <button class="w3-button w3-black w3-margin-bottom" onclick="window.location = '<?php echo $img->ubicacion; ?>';">Como Llegar?</button>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Ticket Modal -->
    <div class="w3-display-container w3-center" id="carrozas">



        <?php foreach($carrozas as $img):?>

        <div class="mySlide w3-animate-opacity">
            <img class="w3-image" src="admin/<?php echo $img->imagen; ?>" alt="Image 1" style="min-width:500px" width="1500" height="1000">
            <div class="w3-display-bottomleft w3-container w3-black w3-hover-white w3-hide-small" style="bottom:10%;opacity:0.7;width:70%">
                <h2><b><?php echo $img->titulo; ?><br><?php echo $img->artista; ?></b></h2>
            </div>

        </div>

        <?php endforeach; ?>


        <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
    </div>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64 " style="max-width:1500px" id="contact">
        <h2 class="w3-wide w3-center">Contactanos</h2>
        <p class="w3-opacity w3-center"><i>Escribe tu opinion y/o sugenrencia</i></p>
        <div class="w3-display-container w3-center w3-flat-turquoise">
            <div class="w3-third w3-margin-bottom">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.5995897892603!2d-77.27983236655923!3d1.208944951760199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed49b0d465fef%3A0xf43b9b932967a617!2sInstituci%C3%B3n+Universitaria+CESMAG!5e0!3m2!1ses!2sco!4v1559532283406!5m2!1ses!2sco" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="w3-third w3-margin-bottom w3-flat-turquoise">
                <i class="fa fa-map-marker" style="width:30px"></i>
                <left> Pasto, CO</left><br>
                <i class="fa fa-phone" style="width:30px"></i> Celular: +57 311 653 85 00<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Correo: CESMAG@gmail.com<br>
            </div>
            <div class="w3-third w3-margin-bottom">
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-button w3-pink w3-section w3-right" type="submit">SEND</button>
                </form>
            </div>

        </div>


    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Realizado por Santiago Narvaez</p>
    </footer>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        // Slideshow
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlide");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>


    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>