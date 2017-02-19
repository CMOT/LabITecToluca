@extends('layouts.admin.main')

@section('content')

<section class="menu row">
    <section id="lista" class="col-xs-12 col-sm-4 col-md-2">
        <ul class="nav nav-pills nav-stacked">
            <li> <a href="users"><span class="icon-user3"></span>Usuarios</a></li>
            <li> <a href="groups"><span  class="icon-organization"></span>Grupos</a></li>
            <li> <a href="practices"><span class="icon-steam"></span>Pr&aacute;cticas</a></li>
            <li> <a href="#"><span class="icon-list5"></span>Temarios</a></li>
            <li> <a href="resources"><span class="icon-books"></span>Materiales</a></li>
            <li> <a href="#"><span class="icon-users"></span>Foros</a></li>

        </ul>
    </section>

    <div id="pantalla" class="col-xs-12 col-sm-8 col-md-10">			

                                <!--<iframe src="https://embed.spotify.com/?uri=spotify:user:spotify:playlist:6AV1SULGwX3OFyYzoZqokN&theme=white" width="300" height="80" frameborder="0" allowtransparency="true"></iframe>-->
        <div class="columna_izq not" >	
            <div class="titulo_columna">
                <h3>Actividad Reciente</h3>
            </div>

<!--                <div class="contenido">

                    <div class="titulo"><p> </p> </div>
                    <div class="titulo"><p></p> </div>

                    <div class="titulo tit">
                        <p></p>
                        <p><a href="#">Ver recu</a></p>
                    </div>

                </div>-->


            <a href="#"><h3>Ver m&aacute;s</h3></a>
        </div>
        <div class ="columna_der not">

            
        </div>
</section>

@stop

