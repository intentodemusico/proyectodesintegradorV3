<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Cantidad', 'Cantidad:') !!}
    {!! Form::number('Cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Persona Idpersona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Persona_idPersona', 'Persona Idpersona:') !!}
    {!! Form::number('Persona_idPersona', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Precio', 'Precio:') !!}
    {!! Form::number('Precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Producto_idProducto', 'Producto Idproducto:') !!}
    {!! Form::number('Producto_idProducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo', 'Tipo:') !!}
    {!! Form::text('Tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('transaccions.index') !!}" class="btn btn-default">Cancel</a>
</div>
