<?php require 'app/contador.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Desarrollo Web - UNAD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</head>

<body>
    <div id="wrapper">
        <header>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-1">
                        <img class="img-logo" src="img/logo.png">
                    </div>
                    <div class="col-md-11">
                        <h1 class="title-site">Unidad 1 <i class="fa fa-code"></i>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-static-top navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Unidad 1 <i class="fa fa-code"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Principal</a></li>
                        <li><a href="unidad1.php">Unidad 1</a></li>
                        <li><a href="unidad2.php">Unidad 2</a></li>
                        <li><a href="integrantes.php">Integrantes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="contenido">
                         
                                <h2>Análisis y especificaciones del Software</h2>
                                <img src="img/Esquema_general.png" alt="">
                                <div>
                                    <h3>Objetivo</h3>
                                 
                                    <p>Realizar el análisis y conocer las especificaciones mediante las necesidades o requerimientos del software.</p>
                                </div>
                                <br>
                                <p>
                                    Se debe tener claro cuál es el problema y realizar la búsqueda de información al respecto, para poder definir sus componentes y funciones que lo formaran.
                                
                                    El análisis es fundamental en el desarrollo de software ya que de esto depende el éxito del mismo. Todo el proceso se basa en los requerimientos obtenidos en esta etapa.
   
                                    Es muy importante entender lo que desea el cliente y a su vez manifestarle nuestra visión, de cómo lo interpretamos, para llegar a una idea concreta de lo que se requiere y con quienes va a interactuar el futuro sistema.

                                    Después de este paso se deben presentar a los desarrolladores los requerimientos de la manera más detallada y estructurada posible.

                                    Para el desarrollo de software se debe trabajar sobre un modelo, pero no siempre está ligado a su enfoque, por lo cual se puede adaptar o modificar para un buen proceso.

                                    Existen varios modelos y hay tres paradigmas para los modelos de desarrollo de software.
                                </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="visitor-counter text-center">
                        <p>Visitante #
                            <?= $visitante; ?>
                        </p>
                    </div>
                    <hr>
                    <div class="twitter">
                        <a class="twitter-timeline" data-height="430" href="https://twitter.com/UniversidadUNAD?ref_src=twsrc%5Etfw"></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-globe"></i></a>
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                        </div>
                        <p>
                            <?= date('Y'); ?>Universidad Nacional Abierta y a Distancia – UNAD
                        <br>
                            2018
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>