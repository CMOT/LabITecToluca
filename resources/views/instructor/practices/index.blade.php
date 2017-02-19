@extends('layouts.instructor.main')

<?php $message = Session::get('message') ?>

@section('content')

<!--=========================================================================================
                                                                           MENU 
========================================================================================= -->
<div class="container">
    <section class="menu row">
        <section id="lista" class="col-xs-12 col-sm-4 col-md-2">
            <ul class="nav nav-pills nav-stacked">

            <li id="listaactual"> <a id="actual" href="/instructor/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
            <li> <a href="#"><span class="icon-checklist"></span>Evaluaciones</a></li>
            <li> <a href="#"><span class="icon-graph"></span>Reportes y estad&iacute;sticas</a></li>
            <li> <a href="#"><span class="icon-users"></span>F&oacute;ros</a></li>

            </ul>
        </section>
        {!!Form::open(['route'=>'instructor.practices.store','method'=>'POST', 'files'=> true])!!}
            @include('instructor.forms.dialogCreatePractice')
        {!!Form::close()!!}
        
        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
            <br><br> 
            <fieldset>
                @include('alerts.request')
                @include('alerts.success')
                @include('alerts.errors')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Prácticas</h3>
                        <a data-toggle="modal" data-target="#addPractice"><button class="btn btn-info" >Agregar práctica </button></a>
                        
                    </div>
                    <div class="panel-body">

                        <table id="table-practices" class="table table-striped">
                            <thead>
                            <th>
                                Título:
                            </th>
                            <th>
                                Descripción:
                            </th>
                            <th>
                                Link de descarga:
                            </th>
                            <th>
                                Operaciones
                            </th>
                            </thead>
                            <tbody>
                                @foreach($practices as $practice)
                                <tr>
                                    <td>{{$practice->title}}</td>
                                    <td>{{$practice->description}}</td>
                                    <td>
                                        @if(!empty($practice->url))
                                        <a href="/files/{{$practice->url}}" ><button class="btn btn-success">Descargar</button></a>
                                        @endif
                                    </td>
                                    <td>
                                        {!!link_to_route('practices.edit', $title = 'Editar', $parameters = $practice->id, $attributes = ['disabled'=>true ,'class'=>'btn btn-warning'])!!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </fieldset>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $('#table-practices').DataTable();
    });
</script>
@stop

