@extends('layouts.admin.main')

@section('content')

<!--=========================================================================================
                                                                               MENU 
   ========================================================================================= -->
<div class="container">
    <section class="menu row">
        <section id="lista" class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
            <ul class="nav nav-pills nav-stacked">

                <li id="listaactual"> <a id="actual" href="/users"><span class="icon-user3"></span>Usuarios</a></li>
<!--                <ul  class="desplegar">
                    <li><a href="/users/create">Alta de instructor</a></li>
                </ul>-->
                <li> <a href="/groups"><span  class="icon-organization"></span>Grupos</a></li>
                <li> <a href="/practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
                <li> <a href="#"><span class="icon-list5"></span>Temarios</a></li>
                <li> <a href="/resources"><span class="icon-books"></span>Materiales</a></li>
                <li> <a href="#"><span class="icon-users"></span>Foros</a></li>

            </ul>
        </section>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" >
            
        </div>
             @include('alerts.request')
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" >
           {!!Form::open(['route'=>'users.store','method'=>'POST'])!!}
                @include('admin/forms/addUser')
            {!!Form::close()!!}
            <!--<form method="POST" action="../php/sql/insertar.php?tipo=Instructor">-->
            
        </div>
        <div class="col-xs-12 col-sm-3 col-md-5 col-lg-5" >
             @include('alerts.errors')
            
        </div>
    </section>
</div>
@stop

