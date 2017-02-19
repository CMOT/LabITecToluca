@extends('layouts.admin.main')

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
                <li id="listaactual"> <a id="actual" href="/instructor/resources"><span class="icon-books"></span>Materiales</a></li>
                <li> <a href="#"><span class="icon-checklist"></span>Evaluaciones</a></li>
                <li> <a href="#"><span class="icon-graph"></span>Reportes y estad&iacute;sticas</a></li>
                <li> <a href="#"><span class="icon-users"></span>F&oacute;ros</a></li>
            </ul>
        </section>
         {!!Form::open(['route'=>'practices.store','method'=>'POST', 'files'=> true])!!}
            @include('instructor.forms.dialogCreateResource')
        {!!Form::close()!!}
        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
            <br> <br> 
            <fieldset>
                @if($message == 'store')
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    El archivo ha sido agregado exitosamente
                </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 >Recursos y materiales</h3>
                        <a data-toggle="modal" data-target="#addMaterial"><button class="btn btn-info" >Agregar material </button></a>
                    </div>
                    <div class="panel-body">

                        <table id="table-materials" class="table table-striped">
                            <thead>
                            <th>
                                id
                            </th>   
                            <th>
                                Titulo
                            </th>
                            <th>
                                Descripcion:
                            </th>
                            <th>
                                Operaciones
                            </th>
                            </thead>
                            <tbody>
                                @foreach($resources as $resource)
                                <tr>
                                    <td>{{$resource->id}}</td>
                                    <td>{{$resource->title}}</td>
                                    <td>{{$resource->description}}</td>
                                    <td>
                                        <button class="btn btn-primary">Ver detalles</button>
                                        <button class="btn btn-warning">Editar material</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </fieldset>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $('#table-materials').DataTable();
    });
</script>
@stop

