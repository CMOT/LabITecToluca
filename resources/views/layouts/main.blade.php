<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" > 
        <title>Administrador</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
         {!!Html::style('css/bootstrap.css')!!}
        {!!Html::style('css/estilos.css')!!}
        {!!Html::style('css/estilo.css')!!}
        {!!Html::style('fonts/style.css')!!}
        {!!Html::style('fonts/font1/style.css')!!}
        {!!Html::script('js/jquery.js')!!}
        {!!Html::script('js/bootstrap.js')!!}
        
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

                            <li><a href="php/cerrarSesion.php"><span class="icon-enter"></span> Cerrar sesi&oacute;n </a></li>
                            <li><a href="perfil.php?tipo=admin">  <span class="icon-user3"></span> </a></li>

                        </ul>

                    </div>
                    <div class="row">
                        <h1>Laboratorio virtual y remoto</h1>
                    </div>

                    <div class="row" id="miMenu">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
                                        <span class="sr-only">Navegación</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a href="../../index.php" class="navbar-brand"><span class="icon-home2"></span>Inicio</a>
                                </div>

                                <div class="collapse navbar-collapse" >
                                    <ul class="nav navbar-nav">

                                        <li class="divider-vertical"></li>
                                        <li><a href="../perfil.php?tipo=admin"><span class="icon-user3"></span>Perfil</a></li>
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
    </body>
</html>