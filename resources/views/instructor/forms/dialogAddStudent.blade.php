
<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                            {!!Form::label('Email del alumno:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('email', null, ['class'=>'input-sm', 'placeholder'=>'Email del alumno'])!!}
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                        {!!Form::label('Contraseña provicional:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('password', null, ['class'=>'input-sm', 'placeholder'=>'Contraseña provicional'])!!}
                                    </td>
                                </tr>
                                <tr >
                                    <td rowspan="2">
                                         {!!Form::submit('Agregar', ['class'=>'btn btn-success'])!!}
                                        {!!link_to_route('instructor.show', $title = 'Cancelar', $parameters = ['id'=>$group->id], $attributes = ['class'=>'btn btn-danger']);!!}
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

