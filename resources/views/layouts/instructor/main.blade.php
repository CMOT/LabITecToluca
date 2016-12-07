<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" > 
        <title>Instructor</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!--		<link rel="stylesheet" href="../../Archivo/css/bootstrap.css">
                        <link rel="stylesheet" href="../../Archivo/css/estilos.css">
                        <link rel="stylesheet" href="../../css/estilo.css">
                        <link rel="stylesheet" type="text/css" href="../../fonts/style.css">
                        <link rel="stylesheet" type="text/css" href="../../fonts/font1/style.css">
                        <script src="../../Archivo/js/jquery.js"></script>
                        <script src="../../Archivo/js/bootstrap.js"></script>-->
        {!!Html::style('css/bootstrap.css')!!}
        {!!Html::style('css/estilos.css')!!}
        {!!Html::style('css/estilo.css')!!}
        {!!Html::style('fonts/style.css')!!}
        {!!Html::style('fonts/font1/style.css')!!}
        {!!Html::script('js/jquery.js')!!}
        {!!Html::script('js/bootstrap.js')!!}
        {!!Html::style('js/datatables/media/css/jquery.dataTables.css')!!}
        {!!Html::script('js/datatables/media/js/jquery.dataTables.js')!!}

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

    </head>

    <body>
        <!--=========================================================================================
                                                                                                HEADER 
        ========================================================================================= -->
        <header>
            <div class="container">
                <div id="subheader">
                    <div class="row">
                        <ul id="menu1">

                            <li><a href="/logout"><span class="icon-enter"></span> Cerrar sesi&oacute;n </a></li>
                            <li><a href=""> <span class="icon-user3"></span> {!!Auth::user()->name!!} </a></li>

                        </ul>

                    </div>
                    <div class="row">
                        <h1>Laboratorio virtual y remoto</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-12" id="miMenu">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
                                        <span class="sr-only">Navegación</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a href="/instructor" class="navbar-brand"><span class="icon-home2"></span> Inicio</a>
                                </div>

                                <div class="collapse navbar-collapse" >
                                    <ul class="nav navbar-nav">

                                        <li class="divider-vertical"></li>
                                        <li><a href="../perfil.php?tipo=admin"><span class="icon-user3"></span> Perfil</a></li>
                                        <li class="divider-vertical"></li>
                                        <li><a href="#"><span class="icon-tools"></span>Configuraci&oacute;n</a></li>
                                        <li class="divider-vertical"></li>
                                        <li><a href="#"><span class="icon-calendar2"></span>Calendario</a></li>
                                        <li class="divider-vertical"></li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=========================================================================================
                                                                                        END HEADER 
        ========================================================================================= -->
        <!--=========================================================================================
                                                                                        MENU 
        ========================================================================================= -->
        <div class="container">
            @yield('content')
        </div>
        <!--=========================================================================================
                                                                                        END MENU 
        ========================================================================================= -->
        <div class="pie">
            <center> <h4>Derechos reservados &reg;</h4>
                <div>Icon made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
            </center>
        </div>
    </body>
</html>