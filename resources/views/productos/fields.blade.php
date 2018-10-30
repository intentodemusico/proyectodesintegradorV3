<!-- Preciocompra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PrecioCompra', 'Preciocompra:') !!}
    {!! Form::number('PrecioCompra', null, ['class' => 'form-control']) !!}
</div>

<!-- Precioventa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PrecioVenta', 'Precioventa:') !!}
    {!! Form::number('PrecioVenta', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Has Bodega Bodega Idbodega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_has_bodega_bodega_idBodega', 'Producto Has Bodega Bodega Idbodega:') !!}
    {!! Form::number('producto_has_bodega_bodega_idBodega', null, ['class' => 'form-control']) !!}
</div>

<!-- Proveedor Idproveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proveedor_idProveedor', 'Proveedor Idproveedor:') !!}
    {!! Form::number('proveedor_idProveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Referencia', 'Referencia:') !!}
    {!! Form::text('Referencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Producto Idtipo Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_producto_idTipo_Producto', 'Tipo Producto Idtipo Producto:') !!}
    {!! Form::number('tipo_producto_idTipo_Producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Year', 'Year:') !!}
    {!! Form::number('Year', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productos.index') !!}" class="btn btn-default">Cancel</a>
</div>
