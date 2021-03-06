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

                <li> <a href="/users"><span class="icon-user3"></span>Usuarios</a></li>
                <li> <a href="/groups"><span  class="icon-organization"></span>Grupos</a></li>
                <li> <a href="/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
                <li> <a href="#"><span class="icon-list5"></span>Temarios</a></li>
                <li id="listaactual"> <a id="actual" href="/resources"><span class="icon-books"></span>Materiales</a></li>
                <li> <a href="#"><span class="icon-users"></span>Foros</a></li>

            </ul>
        </section>
         {!!Form::open(['route'=>'resources.store','method'=>'POST', 'files'=> true])!!}
            @include('admin.forms.dialogCreateResource')
        {!!Form::close()!!}
        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
            <br> <br> 
            <fieldset>
                @include('alerts.request')
                @include('alerts.success')
                @include('alerts.errors')

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
                                Link de descarga
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
                                        @if(!empty($resource->url))
                                        <a href="/files/{{$resource->url}}"><button class="btn btn-success">Descargar</button></a>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-warning" disabled="true">Editar </button>
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

