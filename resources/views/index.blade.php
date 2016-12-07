<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        {!!Html::style('css/bootstrap.css')!!}
        {!!Html::style('css/estilos.css')!!}
        {!!Html::style('css/estilo.css')!!}
        {!!Html::style('fonts/style.css')!!}
        {!!Html::style('fonts/font1/style.css')!!}
        {!!Html::script('js/jquery.js')!!}
        {!!Html::script('js/bootstrap.js')!!}

    </head>
    <!--=========================================================================================
                                                                                            HEADER 
    ========================================================================================= -->

    <header >
        <div class="container">
            <div class="row">
                <div id="imagen">
                    <img src="images/logo.jpg" alt="">
                </div>
            </div>
            <div id="subheader">
                <div class="row">
                    <h1>Laboratorio virtual y remoto</h1>
                </div>

                <div class="row">
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
                                <a href="index.php" class="navbar-brand">Laboratorio</a>
                            </div>

                            <div class="collapse navbar-collapse" id="miMenu">
                                <ul class="nav navbar-nav">
                                    <li><a id="nada" class="btn btn-ifno"> Ingresar</a> </li>

                                    <li><a class="btn btn-ifno" data-toggle="modal" data-target="#registro">Registro </a></li>
                                    <li><a href="pages/archi.php">Conócenos</a></li>
                                    <li><a href="#">Servicio</a></li>
                                    <li><a href="#">Contacto</a></li>
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
                                                                                    INICIO DE SESIÓN
    ========================================================================================= -->

    <!-- ========================= regristroooooooooooo ============================-->
    <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- ========================= HEADER ============================-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="ture">&times;</button>
                    <h4>Registro</h4>
                </div>
                <!-- ========================= BODY ============================-->
                <div class="model-body ">
                    <div id="contenedor">
                        <section id="intro">
                            <form method="post" action="php/sql/insertar.php">
                                <table class="table" >			
                                    <tr>
                                        <td> Nombre </td>
                                        <td><input id="" type="text" name="nombre" maxlength="12"/></td>								
                                    </tr>								
                                    <tr>									
                                        <td>Apellido Paterno:</td>
                                        <td><input id="" type="text" name="apellidoP" maxlength="20"></td>
                                    </tr>
                                    <tr>									
                                        <td>Apellido materno:</td>
                                        <td><input id="" type="tex" name="apellidoM" maxlength="20"></td>
                                    </tr>
                                    <tr>									
                                        <td>Contraseña:</td>
                                        <td><input id="" type="password" name="pass1" maxlength="20"></td>
                                    </tr>
                                    <tr>									
                                        <td>Confirmar contraseña:</td>
                                        <td><input id="" type="password" name="pass2" maxlength="20"></td>
                                    </tr>
                                    <tr>									
                                        <td>Correo electrónico:</td>
                                        <td><input id="" type="text" name="correo" maxlength="20"></td>
                                    </tr>
                                    <tr>									
                                        <td>Clave de regsitro:</td>
                                        <td><input id="" type="text" name="clave" maxlength="20"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input id="ingreso" type="submit" value="Ingresar" class="btn btn-primary" /></td>
                                    </tr>
                                </table>
                            </form>
                        </section>
                    </div>
                </div>
                <!-- ========================= FOOTER del registrooooooooooooooo ============================-->
                <div class="modal-footer">

                </div>
            </div>
        </div>	
    </div>

    <!--=========================================================================================
                                                                    END INICIO DE SESIÓN 
    ========================================================================================= -->

    <!--=========================================================================================
                                                                                    SLIDER
    ========================================================================================= -->
    <div class="container">
        <section class="row margin-content">

            <article class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                <!--<center>-->
                    <table class="table table-striped">
                        <tr>
                            @include('alerts.errors')
                            @include('alerts.request')
                        </tr>
                        {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
                        <tr>
                            <td >
                                <!--<div class="form-group">-->
                                {!!Form::label('correo','Correo electrónico:')!!}	
                            </td>
                            <td colspan="3">
                                {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
                            </td>
                            <!--                            </div>-->
                            <!--<div class="form-group">-->
                        </tr>
<!--                                <tr rowspan="2"><td> </td></tr>-->
                        <tr>
                            <td>
                                {!!Form::label('contrasena','Contraseña:')!!}	
                            </td>
                            <td colspan="3">
                                {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
                            </td>
                            
                        </tr>
                        <!--</div>-->
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    {!!Form::submit('Ingresar',['class'=>'btn btn-success'])!!}
                                </td>
                                <td>
                                 <a href="#">Olvidaste tu contraseña?</a>
                                </td>
                            </tr>
                        </tfoot>
                        {!!Form::close()!!}

                    </table>
                <!--</center>-->

            </article>
            <article class="body-content col-xs-12 col-sm-7 col-md-7 col-lg-8">

                <hgroup><h2>Bienvenido a nuestro sitio web</h2></hgroup>
                <p>
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                    cuando un impresor (N. del T. persona que se dedica a la imprenta) 
                    desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
                    <br>
                    No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, 
                    quedando esencialmente igual al original.
                </p>
            </article>
        </section>
        
    </div>
    <!--=========================================================================================
                                                                                    END SLAIDER
    ========================================================================================= -->
    <!--=========================================================================================
                                                                            CONTENT
========================================================================================= -->
    <section id="wrap" class="container">

        <div id="mySlide" class="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mySlide" data-slide-to="0" class="active"></li>
                <li data-target="#mySlide" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/Slider/brazo1.jpg" >
                </div>
                <div class="item">
                    <img src="images/Slider/brazo2.jpg" >
                </div>
            </div>

            <a class="left carousel-control" href="#mySlide" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySlide" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <section id="contenido" class="row margin-content">
            <article>
                <hgroup>
                    <h2 class="titulo">
                        Laboratorios Virtuales y Remotos
                    </h2>
                    <p class="fecha"> 6 de abril de 2015</p>
                    <img class= "thumb" src="images/art.jpg" alt="imagen 1">
                    <p> 
                        Los laboratorios virtuales y remotos hacen las cosas séan mucho más simples para los estudiantes. Es una gran ventaja ya que permite tener acceso sin demora y puedan acceder a todo el material necesario para completar las prácticas aplicadas .
                    </p>
                </hgroup>
            </article>
        </section>
    </section>
    <!--=========================================================================================
                                                                                    END CONTENT
    ========================================================================================= -->

</body>
</html>
