@extends('layouts.instructor.main')

@section('content')
<section class="menu row">
    <section id="lista" class="col-xs-12 col-sm-4 col-md-9">
        <ul>
            <li id="agregar">
                boton agregar usuario
            </li >

            <li id="agregar">
                Ver curso boton
            </li>

        </ul>
        <br> <br> 
        <fieldset>
            <div class="tablas">
                <h3>Alumnos <img src="../../imagenes/alumno.jpg" width="20px" height="20px"> </h3>
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>Nombre del alumno</th>
                    <th>Correo electr&oacute;nico</th>
                    <th>Detalles</th>
                    </thead>
                    <h1> No hay alumnos en el grupo</h1>
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

