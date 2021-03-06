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

                <li > <a  href="/users"><span class="icon-user3"></span>Usuarios</a></li>
                <li id="listaactual"> <a id="actual" href="/groups"><span  class="icon-organization"></span>Grupos</a></li>
                <li> <a href="/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
                <li> <a href="#"><span class="icon-list5"></span>Temarios</a></li>
                <li> <a href="/resources"><span class="icon-books"></span>Materiales</a></li>
                <li> <a href="#"><span class="icon-users"></span>Foros</a></li>

            </ul>
        </section>
        {!!Form::open(['route'=>'groups.store','method'=>'POST'])!!}
            @include('admin.forms.dialogCreateGroup')
        {!!Form::close()!!}
        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
            @include('alerts.breadcomb')
            <br> <br>
            <fieldset>
                
               @include('alerts.success')
               @include('alerts.errors')
               @include('alerts.request')
               
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h3 >Grupos</h3>
                        <a data-toggle="modal" data-target="#addGroup"><button class="btn btn-info" >Crear grupo </button></a>
                        
                    </div>
                    <div class="panel-body">

                        <table id="table-groups" class="table table-striped">
                            <thead>
                            <th>
                                Matricula del grupo:
                            </th>   
                            <th>
                                Materia:
                            </th>
                            <th>
                                Instructor:
                            </th>
                            <th>
                                Cantidad de alumnos:
                            </th>

                            <th>
                                Operaciones
                            </th>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                <tr>
                                    <td>{{$group->title}}</td>
                                    <td>{{$group->subject}}</td>
                                    <td>{{$group->name}} {{$group->first_name}} </td>
                                    <td>{{$group->quantity}}</td>
                                    <td>
                                        <button class="btn btn-primary">Ver detalles</button>
                                        {!!link_to_route('groups.show', $title = 'Editar', $parameters = $group->id, $attributes = ['class'=>'btn btn-warning'])!!}
                                        <!--<button class="btn btn-danger">Eliminar</button>-->
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
        $('#table-groups').DataTable();
    });
</script>
@stop

