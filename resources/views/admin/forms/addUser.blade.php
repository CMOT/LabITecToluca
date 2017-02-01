<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ========================= HEADER ============================-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="ture">&times;</button>
                <h4>Creación de instructores</h4>
            </div>
            <!-- ========================= BODY ============================-->
            <div class="model-body">
                <div class="container-fluid">
                    <section class="row">
                        <table class="table table-striped margen-general" >
                            
                            <tr >
                                <td>
                                        {!!Form::label('Nombre:')!!}
                                </td>
                                <td>
                                    {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre'])!!}
                                </td>
                            </tr>
                            <tr >
                                <td>
                                        {!!Form::label('Apellido Paterno:')!!}
                                </td>
                                <td>
                                    {!!Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el apellido paterno'])!!}
                                </td>
                            </tr>
                            <tr >
                                <td>
                                        {!!Form::label('Apellido Materno:')!!}
                                </td>
                                <td>
                                    {!!Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el apellido materno'])!!}
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    {!!Form::label('Contraseña:')!!}
                                </td>
                                <td>
                                    {!!Form::password('password', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la contraseña'])!!}
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    {!!Form::label('Correo:')!!}
                                </td>
                                <td>
                                    {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com'])!!}
                                </td>
                            </tr>
                            <tr >
                                <td rowspan="2">
                                     {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
                                    {!!link_to_route('users.index', $title = 'Cancelar', $parameters = [], $attributes = ['class'=>'btn btn-danger']);!!}
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

