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
                @if($message == 'store')
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    El usuario ha sido agregado exitosamente.
                </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 >Planeación del curso <font color="green"> {{$course->title}}</font></h3>
                    </div>
                    <div class="panel-body">

                        <div class="alert alert-info alert-dismissible" role="alert">
                            <h4>Prácticas</h4>
                            <table class="table table-striped">
                            <thead>
                            <th>
                                Titulo:
                            </th>   
                            <th>
                                Descripción:
                            </th>
                            <th>
                                Link:
                            </th>
                            <th>
                                Operaciones
                            </th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                        
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <h4>Tareas</h4>
                            
                            <table class="table table-striped">
                               <thead>
                            <th>
                                Titulo:
                            </th>   
                            <th>
                                Descripción:
                            </th>
                            <th>
                                Link:
                            </th>
                            <th>
                                Operaciones
                            </th>
                            </thead>
                                <tbody>
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

