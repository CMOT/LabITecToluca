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

                <li id="listaactual"> <a id="actual" href="/users"><span class="icon-user3"></span>Usuarios</a></li>
                <ul  class="desplegar">
                    <li><a href="/users/create">Alta de instructor</a></li>
                </ul>
                <li> <a href="/groups"><span  class="icon-organization"></span>Grupos</a></li>
                <li> <a href="/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
                <li> <a href="#"><span class="icon-list5"></span>Temarios</a></li>
                <li> <a href="/resources"><span class="icon-books"></span>Materiales</a></li>
                <li> <a href="#"><span class="icon-users"></span>Foros</a></li>

            </ul>
        </section>

        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
            <br> <br> 
            <fieldset>
                @include('alerts.success');

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 >Instructores</h3>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <th>
                                Numero de control:
                            </th>   
                            <th>
                                Nombre:
                            </th>
                            <th>
                                Correo:
                            </th> 
                            <th>
                                Operaciones
                            </th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        {!!link_to_route('users.show', $title = 'Ver detalles', $parameters = $user->id, $attributes = ['class'=>'btn btn-info'])!!}
                                        {!!link_to_route('users.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-warning'])!!}
                                        {!!link_to_route('users.destroy', $title = 'Eliminar', $parameters = $user->id, $attributes = ['class'=>'btn btn-danger'])!!}
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
