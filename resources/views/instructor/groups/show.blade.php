@extends('layouts.instructor.main')

@section('content')
    @include('alerts.breadcomb')
<section class="menu row">
    
    <section id="lista" class="col-xs-12 col-sm-4 col-md-9">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>
                        <h4>
                        Nombre del curso
                        </h4>
                    </td>
                    <td>
                        <h4>
                        Descripción del curso
                        </h4>
                    </td>
                    <td>
                        <h4>
                        Detalle
                        </h4>
                    </td>
                </tr>
            </thead>
        @foreach($courses as $course)
        <tr>
            <td>
                   {{$course->title}}
            </td>
            <td>
                    {{$course->description}}
            </td>
            <td>
                    {!!link_to_route('instructor.course.show', $title = 'Ver detalle', $parameters = $course->id, $attributes = ['class'=>'btn btn-warning'])!!}
            </td>
        </tr>
        @endforeach
        </table>
        <br> <br> 
        <fieldset>
            <div class="tablas">
                <h3>Alumnos del grupo <img src="../../imagenes/alumno.jpg" width="20px" height="20px"> </h3>
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>Nombre del alumno</th>
                    <th>Correo electr&oacute;nico</th>
                    <th>Detalles</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                    <!--<h1> No hay alumnos en el grupo</h1>-->
                </table>
            </div>
        </fieldset>
    </section>
    <section id="pantalla" class="col-xs-12 col-sm-8 col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <div class ="columna_der avisos">
                <div class="titulo_columna">
                    <h3>Avisos <img src="../../imagenes/aviso.png" width="20px" height="20px"></img></h3>
                </div>
                <textarea placeholder="Asunto" name="asunto" style="height: 28px; width: 100%; resize: none; border-radius:6px;"></textarea>
                <textarea title="Crear aviso"  name="mensaje" placeholder="Crear aviso"  style="height: 63px; width: 100%; resize: none; border-radius:6px;"></textarea>
                <input type="submit"  value="Enviar aviso"/>
                <div class="contenido">

                    <div class="titulo"><p></p> <a class="opcion" href=""><img src="../../imagenes/bote.jpg" width="18px" height="18px"></a></div>
                    <div class="titulo"><p></p> </div>

                    <div class="titulo tit">

                        <p></p>
                        <p><a href="#">Ver recurso</a></p>

                    </div>
                </div>
            </div>
        </ul>
    </section>
</section>
@stop

