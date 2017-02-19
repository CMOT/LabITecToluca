@extends('layouts.instructor.main')

@section('content')

<section class="menu row">
    <section id="lista" class="col-xs-12 col-sm-4 col-md-2">
        <ul class="nav nav-pills nav-stacked">

            <li> <a href="/instructor/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
            <li> <a href="#"><span class="icon-checklist"></span>Evaluaciones</a></li>
            <li> <a href="#"><span class="icon-graph"></span>Reportes y estad&iacute;sticas</a></li>
            <li> <a href="#"><span class="icon-users"></span>F&oacute;ros</a></li>


        </ul>
    </section>

    <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
        <div class="columna_izq not col-xs-12 col-sm-12 col-md-5 col-lg-5">	
            <div class="titulo_columna">
                <h3>Actividad Reciente <img src="../../imagenes/acitividad.jpg" width="20px" height="20px"></h3>
            </div>
<!--            <div class="contenido">

                <div class="titulo"><p> </p> </div>
                <div class="titulo"><p></p> </div>

                <div class="titulo tit">

                    <p><a href="#">Ver recurso</a></p>

                </div>

            </div>-->

            <!--<a href="#"><h3>Ver m&aacute;s</h3></a>-->
        </div>
        <div class="col-lg-1 col-md-1"></div>
        <div class ="columna_der not col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="titulo_columna" id="fuente1">
                <h3>Grupos <span  class="icon-organization"></span></h3>
            </div>
            <table class="table table-bordered table-hover">
                <th>Grupo</th>
                <th>Materia</th>
                <th>Curso</th>  
                <th>Cantidad de alumno</th>
                <th>Detalle</th>
                @foreach($groups as $group)
                <tr>
                    <td>{{$group->title}}</td>
                    <td>{{$group->subject}}</td>
                    <td>{{$group->course}}</td>
                    <td>{{$group->quantity}}</td>
                    <td>
                        {!!link_to_route('instructor.show', $title = 'Show details', $parameters = $group->id, $attributes = ['class'=>'btn btn-info'])!!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</section>

@stop

