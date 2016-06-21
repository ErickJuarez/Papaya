<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Proyecto Papaya</title>
        <link rel="stylesheet" href="../css/docsupport/prism.css">
        <link rel="stylesheet" href="../css/chosen.css">
        <link href="../css/simple-sidebar2.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap-select.css">
        <link rel="stylesheet" href="../css/style2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap-select.js"></script>
        <script src="../js/jquery.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Bienvenido Erick
                        </a>
                    </li>
                    <li>
                        <a href="#">Mi Perfil</a>
                    </li>
                    <li>
                        <a href="#">Itinerario</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <spasn class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="#">Trivago</a></li>
                            <li><a href="#">Uber</a></li>
                            <li><a href="#">Otro</a></li>
                            <li><a href="#">Otro</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    <li>
                        <a href="#">Acerca de</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container" id="select">
                            <img src="../fonts/menu.png" id="imagenMenu">
                            <h1 align="center">Xiinbal</h1>
                              <div style="position:absolute; top:10px; right:10px; ">
                                  <img src="../fonts/g+.png" id="imagenLoc">
                                  <img src="../fonts/fb.png" id="imagenLoc">
                                  <img src="../fonts/tw.png" id="imagenLoc">
                                  <img src="../fonts/avatar.png" id="imagenLoc"> 
                                  
                                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" > idioma <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li><a href="#">espanol</a></li>
                            <li><a href="#">ingles</a></li>
                            <li><a href="#">frances</a></li>
                            <li><a href="#">Otro</a></li>
                        </ul>
                    </li>  
                                  </div>
                            <div class="container" id="select">
                                <div id="info">
                                    <font color="white" face="Comic Sans MS, Arial, MS Sans Serif" size="+3"><i><?php echo $_POST["selector"] ?></i></font>
                                    <p></p>
                                    <font color="white" face="Comic Sans MS, Arial, MS Sans Serif" size="+.5"><i><?php echo $_POST["selector"] ?> es un estado con X pueblos y Y puntos turisticos.</i></font>
                                </div>
                                <div id="cuadros" class="form-group">
                                    <iframe src="frame.php"></iframe>
                                </div>
                                <div id="mapa" class="col-lg-10">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5759.514955843664!2d-101.19724496386394!3d19.703456735569727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0ba2b29da7e3%3A0x04016978679c8620!2sMorel ia%2C+Mich.!5e0!3m2!1ses!2smx!4v1466144907279" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div id="boton">
                                    <img src="../fonts/boton.png" id="imagenBoton">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Menu Toggle Script -->
        <script>
            $("#wrapper").toggleClass("toggled");
            $("#imagenMenu").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>