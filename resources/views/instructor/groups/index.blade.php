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

                <li > <a  href="/users"><span class="icon-user3"></span>Usuarios</a></li>
                <ul  class="desplegar">
                    <li><a href="/users/create">Alta de instructor</a></li>
                </ul>
                <li id="listaactual"> <a id="actual" href="/groups"><span  class="icon-organization"></span>Grupos</a></li>
                <li> <a href="/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
                <li> <a href="#"><span class="icon-list5"></span>Temarios</a></li>
                <li> <a href="/resources"><span class="icon-books"></span>Materiales</a></li>
                <li> <a href="#"><span class="icon-users"></span>Foros</a></li>

            </ul>
        </section>

        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
            <br> <br> 
            <fieldset>
                @if($message == 'store')
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    El usuario ha sido agregado exitosamente.
                </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 >Grupos</h3>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
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
                                    <td>{{$group->id_instructor}}</td>
                                    <td>{{$group->quantity}}</td>
                                    <td>
                                        <button class="btn btn-primary">Ver detalles</button>
                                        {!!link_to_route('groups.show', $title = 'Show details', $parameters = $group->id, $attributes = ['class'=>'btn btn-warning'])!!}
                                        <button class="btn btn-danger">Eliminar</button>
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
@stop

