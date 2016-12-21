@extends('layouts.instructor.main')

<?php $message = Session::get('message') ?>

@section('content')

<!--=========================================================================================
                                                                                MENU 
========================================================================================= -->
<div class="container">
    <section class="menu row">

        <div id="pantalla" class="col-xs-12 col-sm-8 col-md-9">			
            <br> 
            <fieldset>
                
                @include('alerts.errors')
                @include('alerts.request')
                @include('alerts.success')
                
                {!!Form::open(['route'=>['course.section.store', 'id'=>$course->id], 'method'=>'POST'])!!}
                    @include('instructor.forms.dialogAddSection')
                {!!Form::close()!!}
                
                <a data-toggle="modal" data-target="#addSection"><button class="btn btn-info" >Agregar sección</button> </a>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 >Planeación del curso: <font color="green"> {{$course->title}}</font></h3>
                    </div>
                    <div class="panel-body">

                        <div class="alert alert-info alert-dismissible" role="alert">
                            <h4>Secciones</h4>
                        <table class="table table-striped">
                            <thead>
                                <th>
                                    Título:
                                </th>   
                                <th>
                                    Descripción:
                                </th>
                                <th>
                                    Duración
                                </th>
                                <th>
                                    Operaciones
                                </th>
                            </thead>
                            <tbody>
                                @foreach($sections as $section)
                                    <tr>
                                        <td>
                                            {{$section->title}}
                                        </td>
                                        <td>
                                            {{$section->description}}
                                        </td>
                                        <td>
                                            {{$section->start_date}} - {{$section->end_date}}
                                        </td>
                                        <td>
                                            <!--<a> Ver Detalle </a>-->
                                            <a   data-toggle="collapse" href="#collapseSection{{$section->id}}" aria-expanded="false" aria-controls="collapseExample">
                                                Detalle..
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="collapse" id="collapseSection{{$section->id}}">
                                                <div class="well">
                                                    <h3>Materiales</h3>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    Material
                                                                </td>
                                                                <td>
                                                                    Descripción
                                                                </td>
                                                                 <td>
                                                                    Liga de descarga
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        @foreach($section->resources as $resource)
                                                        <tr>
                                                            <td>
                                                                {{$resource->title}}
                                                            </td>
                                                            <td>
                                                                {{$resource->description}}
                                                            </td>
                                                            <td>
                                                                <a href="">Link</a>
                                                                {{$resource->url}}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                    <h3>Prácticas</h3>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    Título
                                                                </td>
                                                                <td>
                                                                    Descripción
                                                                </td>
                                                                 <td>
                                                                    Liga de descarga
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        @foreach($section->practices as $practice)
                                                        <tr>
                                                            <td>
                                                                {{$practice->title}}
                                                            </td>
                                                            <td>
                                                                {{$practice->description}}
                                                            </td>
                                                            <td>
                                                                <a href="">Link</a>
                                                                {{$practice->url}}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        
                    </div>
                </div>

            </fieldset>
        </div>
        <div id="pantalla" class="col-xs-12 col-sm-4 col-md-3">
            <br><br>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <h4>
                    Calendario de actividades
                </h4>
                <div>
                    <ul class="dias">
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                    </ul>
                    <br><br>
                    <ul class="dias">
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                        <br>
                        <li>u</li><li>u</li><li>u</li><li>u</li><li>u</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </section>
</div>
@stop

