@extends('layouts.student.main')

@section('content')

<div id="pantalla" class="col-xs-12 col-sm-12 col-md-12">			
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">	
        <div class="columna_izq titulo_columna">
            <h3>Plan del curso</h3>
        </div>
        @foreach($sections as $section)
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 alert alert-info" role="alert">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>
                            Etapa
                        </td>
                        <td>
                            Descripción
                        </td>
                        <td>
                            Duración
                        </td>
                    </tr>
                </thead>
                <tbody>
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
                    </tr>
                </tbody>
            </table>
            <h3>Recursos disponibles</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>
                            Título
                        </td>
                        <td>
                            Descripción
                        </td>
                        <td>
                            Link de descarga
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($section->resources as $resource)
                    <tr class="alert alert-warning">
                        <td>
                             {{$resource->title}}
                        </td>
                        <td>
                            {{$resource->description}}
                        </td>
                        <td>
                            <a>Liga</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h3>Prácticas asignadas</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>
                            Título de la práctica
                        </td>
                        <td>
                            Descripción
                        </td>
                        <td>
                            Fecha y hora programada
                        </td>
                        <td>
                            Estatus
                        </td>
                        <td>
                            Detalles
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($section->practices as $practice)
                        @if($practice->estatus!='P')
                            <tr class="alert alert-success">
                        @else
                            <tr class="alert alert-danger">
                        @endif
                        
                            <td>
                                {{$practice->title}}
                            </td>
                            <td>
                                {{$practice->description}}
                            </td>
                            <td>
                                {{$practice->init_date}} a {{$practice->end_date}}
                            </td>
                            <td>
                                 @if($practice->estatus!='P')
                                    Terminada
                                @else
                                    Pendiente
                                @endif
                            </td>
                            <td>
                                @if($practice->estatus!='P')
                                    <button class="btn btn-primary">Ver detalle</button>
                                @else
                                    <button class="btn btn-primary">Realizar práctica</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
    <div class ="columna_der not col-xs-12 col-sm-12 col-md-3 col-lg-3">
        
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

