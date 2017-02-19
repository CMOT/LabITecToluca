@extends('layouts.student.main')

@section('content')

<section id="lista" class="col-xs-12 col-sm-4 col-md-2">
    <ul class="nav nav-pills nav-stacked">
        <li> <a href="#"><span class="icon-organization"></span>&nbsp;Tareas</a></li>
        <li> <a href="#"><span class="icon-steam" ></span>&nbsp;Pr&aacute;cticas</a></li>
        <li> <a href="#"><span class="icon-books"></span>&nbsp;Materiales</a></li>
        <li> <a href="#"><span class="icon-users"></span>&nbsp;Foros</a></li>

    </ul>
</section>

<div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="columna_izq not col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="titulo_columna" id="fuente1">
                        <h3>Grupos <span  class="icon-organization"></span></h3>
            </div>
            <table class="table table-bordered table-hover">
                <th>Grupo</th>
                <th>Materia</th>
                <th>Instructor</th>  
                <th>Detalle</th>
                @foreach($groups as $group)
                <tr>
                    <td>
                        {{$group->title}}
                    </td>
                    <td>
                        {{$group->subject}}
                    </td>
                    <td>
                        {{$group->name}}
                    </td>
                    <td>
                        {!!link_to_route('student.show', $title='Entrar', $parameters = $group->idgr, $attributes = ['class'=>'btn btn-info'])!!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <hr>
        </div>
        <div class="columna_izq not col-xs-12 col-sm-12 col-md-12 col-lg-12">	

            <div class="titulo_columna">
                <h3>Actividades pendientes</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-1 col-md-1"></div>
    <div class ="columna_der not col-xs-12 col-sm-12 col-md-5 col-lg-5">
        <div class="titulo_columna">
            <h3>Avisos <span class="icon-bullhorn"></span></h3>
        </div>
<!--        <textarea placeholder="Asunto" name="asunto" style="height: 28px; width: 100%; resize: none;"></textarea>
        <textarea title="Crear aviso"  name="mensaje" placeholder="Crear aviso"  style="height: 63px; width: 100%; resize: none;"></textarea>
        <input type="submit"  value="Enviar aviso"/>-->

        <div class="contenido">

            <div class="titulo"><p><strong>Asunto: </strong> </p></div>
            <div class="titulo"><p><strong>Grupo: </strong> </p></div>
            <div class="titulo"><p>Fecha de publicaci&oacute;on </p> </div>

            <div class="titulo tit">

                <p></p>

            </div>

        </div>

    </div>

</div>

@stop

