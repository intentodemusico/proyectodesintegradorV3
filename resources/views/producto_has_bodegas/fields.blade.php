<!-- Bodega Idbodega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bodega_idBodega', 'Bodega Idbodega:') !!}
    {!! Form::number('bodega_idBodega', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Cantidad', 'Cantidad:') !!}
    {!! Form::number('Cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Proveedor Idproveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Producto_Proveedor_idProveedor', 'Producto Proveedor Idproveedor:') !!}
    {!! Form::number('Producto_Proveedor_idProveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productoHasBodegas.index') !!}" class="btn btn-default">Cancel</a>
</div>
