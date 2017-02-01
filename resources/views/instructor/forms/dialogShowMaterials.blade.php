<div class="modal fade" id="addMaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ========================= HEADER ============================-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="ture">&times;</button>
            </div>
            <!-- ========================= BODY ============================-->
            <div class="model-body ">
                <div class="container-fluid">
                    <section class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 >Materiales disponibles</h3>

                            </div>
                            <div class="panel-body">

                                <table id="table-groups" class="table table-responsive">
                                    <thead>
                                    <th>
                                        Tìtulo
                                    </th>   
                                    <th>
                                        Descripciòn:
                                    </th>
                                    <th>
                                        Tipo de archivo
                                    </th>
                                    <th>
                                        Operaciones
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($materials as $material)
                                        <tr>
                                            <td>{{$material->title}}</td>
                                            <td>{{$material->description}}</td>
                                            <td>{{$material->type}}</td>
                                            <td>
                                                {!!link_to_route('resource.section.store', $title = 'Agregar', $parameters = ['idmaterial'=>$material->id, 'idsection'=>$section->id, 'idcourse'=>$section->id_course], $attributes = ['class'=>'btn btn-info'])!!}
                                                <!--<button class="btn btn-danger">Eliminar</button>-->
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- ========================= FOOTER del registrooooooooooooooo ============================-->
            <div class="modal-footer">

            </div>
        </div>
    </div>	
</div>

