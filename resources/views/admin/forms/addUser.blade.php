<div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre'])!!}
</div>
<div class="form-group">
    {!!Form::label('Apellido Paterno:')!!}
    {!!Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el apellido paterno'])!!}
</div>
<div class="form-group">
    {!!Form::label('Apellido Materno:')!!}
    {!!Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el apellido materno'])!!}
</div>
<div class="form-group">
    {!!Form::label('Contraseña:')!!}
    {!!Form::password('password', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la contraseña'])!!}
</div>
<div class="form-group">
    {!!Form::label('Correo:')!!}
    {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com'])!!}
</div>
<div class='form-group'>
    {!!Form::submit('Guardar', ['class'=>'btn btn-success'])!!}
    {!!link_to_route('users.index', $title = 'Cancelar', $parameters = [], $attributes = ['class'=>'btn btn-danger']);!!}

</div>

