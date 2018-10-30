<table class="table table-responsive" id="productos-table">
    <thead>
        <tr>
            <th>Preciocompra</th>
        <th>Precioventa</th>
        <th>Producto Has Bodega Bodega Idbodega</th>
        <th>Proveedor Idproveedor</th>
        <th>Referencia</th>
        <th>Tipo Producto Idtipo Producto</th>
        <th>Year</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{!! $producto->PrecioCompra !!}</td>
            <td>{!! $producto->PrecioVenta !!}</td>
            <td>{!! $producto->producto_has_bodega_bodega_idBodega !!}</td>
            <td>{!! $producto->proveedor_idProveedor !!}</td>
            <td>{!! $producto->Referencia !!}</td>
            <td>{!! $producto->tipo_producto_idTipo_Producto !!}</td>
            <td>{!! $producto->Year !!}</td>
            <td>
                {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productos.show', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productos.edit', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>