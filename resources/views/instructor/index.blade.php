@extends('layouts.instructor.main')

@section('content')

<section class="menu row">
    <section id="lista" class="col-xs-12 col-sm-4 col-md-2">
        <ul class="nav nav-pills nav-stacked">

            <li> <a href="practicas.php"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
            <li> <a href="#"><span class="icon-checklist"></span>Evaluaciones</a></li>
            <li> <a href="#"><span class="icon-graph"></span>Reportes y estad&iacute;sticas</a></li>
            <li> <a href="#"><span class="icon-users"></span>F&oacute;ros</a></li>


        </ul>
    </section>

    <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
        <div class="columna_izq not">	
            <div class="titulo_columna">
                <h3>Actividad Reciente <img src="../../imagenes/acitividad.jpg" width="20px" height="20px"></h3>
            </div>
            <div class="contenido">

                <div class="titulo"><p> </p> </div>
                <div class="titulo"><p></p> </div>

                <div class="titulo tit">

                    <p><a href="#">Ver recurso</a></p>

                </div>

            </div>

            <a href="#"><h3>Ver m&aacute;s</h3></a>
        </div>
        <div class ="columna_der not">
            <div class="titulo_columna" id="fuente1">
                <h3>Grupos <span  class="icon-organization"></span></h3>
            </div>
            <table class="table table-bordered table-hover">
                <th>Nombre</th>
                <th>Curso</th>
                <tr>
                </tr>
            </table>
        </div>

    </div>
</section>
<a href='../../php/crear.php'><button class="botones">Acabar practica</button></a>
<a href="camaraNueva.php">Entrar a la camara</a>
<a href="planTrabajo.php">servidor</a>

@stop

