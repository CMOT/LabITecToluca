@extends('layouts.student.main')

@section('content')

<section id="lista" class="col-xs-12 col-sm-4 col-md-2">
    <ul class="nav nav-pills nav-stacked">
        <li> <a href="grupos.php"><span class="icon-organization"></span>&nbsp;Grupos</a></li>
        <li> <a href="practicas.php"><span class="icon-steam" ></span>&nbsp;Pr&aacute;cticas</a></li>
        <li> <a href="recursos.php"><span class="icon-books"></span>&nbsp;Materiales</a></li>
        <li> <a href="#"><span class="icon-users"></span>&nbsp;Foros</a></li>

    </ul>
</section>

<div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			
    <div class="columna_izq not">	
        <div class="titulo_columna">
            <h3>Actividades pendientes</h3>
        </div>
    </div>
    <div class ="columna_der not">
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

