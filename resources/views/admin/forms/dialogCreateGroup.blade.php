
<div class="modal fade" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ========================= HEADER ============================-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="ture">&times;</button>
                <h4>Creación de grupos</h4>
            </div>
            <!-- ========================= BODY ============================-->
            <div class="model-body ">
                <div class="container-fluid">
                    <section class="row">
                            <table class="table table-striped margen-general" >
                                <tr >
                                    <td>
                                            {!!Form::label('Nombre de grupo:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('title', null, ['class'=>'input-sm', 'placeholder'=>'Ingrese el nombre'])!!}
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                        {!!Form::label('Asignatura:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('subject', null, ['class'=>'input-sm', 'placeholder'=>'Ingrese el apellido paterno'])!!}
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                        {!!Form::label('Cupo máximo:')!!}
                                    </td>
                                    <td>
                                        {!!Form::email('quantity', null, ['class'=>'input-sm', 'placeholder'=>'example@gmail.com'])!!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {!!Form::label('Seleccione un instructor')!!}
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr >
                                    <td rowspan="2">
                                        {!!Form::text('instructor', null, ['class'=>'input-sm', 'placeholder'=>'Seleccionar instructor'])!!}
                                    </td>
                                    
                                    <td rowspan="2">
                                         {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
                                        {!!link_to_route('groups.index', $title = 'Cancelar', $parameters = [], $attributes = ['class'=>'btn btn-danger']);!!}
                                    </td>
                                </tr>
                            </table>
                    </section>
                </div>
            </div>
            <!-- ========================= FOOTER del registrooooooooooooooo ============================-->
            <div class="modal-footer">

            </div>
        </div>
    </div>	
</div>

