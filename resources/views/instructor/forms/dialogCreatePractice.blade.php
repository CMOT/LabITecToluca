
<div class="modal fade" id="addPractice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ========================= HEADER ============================-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="ture">&times;</button>
                <h4>Agregar prácticas</h4>
            </div>
            <!-- ========================= BODY ============================-->
            <div class="model-body ">
                <div class="container-fluid">
                    <section class="row">
                            <table class="table table-striped margen-general" >
                                <tr>
                                    <td>
                                            {!!Form::label('Título:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('title', null, ['class'=>'input-sm', 'placeholder'=>'Titulo'])!!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {!!Form::label('Descripción:')!!}
                                    </td>
                                    <td>
                                        {!!Form::text('description', null, ['class'=>'input-sm', 'placeholder'=>'Descripción'])!!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {!!Form::label('Archivo:')!!}
                                    </td>
                                    <td>
                                        {!!Form::file('url')!!}
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                         {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
                                        {!!link_to_route('instructor.practices.index', $title = 'Cancelar', $parameters = [], $attributes = ['class'=>'btn btn-danger']);!!}
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

