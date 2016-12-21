
<div class="modal fade" id="addSection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ========================= HEADER ============================-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="ture">&times;</button>
                <h4>Creación del curso</h4>
            </div>
            <!-- ========================= BODY ============================-->
            <div class="model-body ">
                <div class="container-fluid">
                    <section class="row">
                            <table class="table table-striped margen-general" >
                                <tr >
                                    <td>
                                            {!!Form::label('Título de la sección:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('title', null, ['class'=>'input-sm', 'placeholder'=>'Título'])!!}
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                        {!!Form::label('Descripción:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('description', null, ['class'=>'input-sm', 'placeholder'=>'Descripción'])!!}
                                    </td>
                                </tr>
                                 <tr >
                                    <td>
                                        {!!Form::label('Fecha de inicio:')!!}
                                    </td>
                                    <td>
                                        {!!Form::date('start_date', null, ['class'=>'input-sm'])!!}
                                    </td>
                                </tr>
                                
                                 <tr >
                                    <td>
                                        {!!Form::label('Fecha de terminación:')!!}
                                    </td>
                                    <td>
                                        {!!Form::date('end_date', null, ['class'=>'input-sm'])!!}
                                    </td>
                                </tr>
                                
                                <tr >
                                    <td rowspan="2">
                                         {!!Form::submit('Agregar', ['class'=>'btn btn-success'])!!}
                                        {!!link_to_route('instructor.course.show', $title = 'Cancelar', $parameters = ['id'=>$course->id], $attributes = ['class'=>'btn btn-danger']);!!}
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

