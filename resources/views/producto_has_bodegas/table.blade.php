<table class="table table-responsive" id="productoHasBodegas-table">
    <thead>
        <tr>
            <th>Bodega Idbodega</th>
        <th>Cantidad</th>
        <th>Producto Proveedor Idproveedor</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productoHasBodegas as $productoHasBodega)
        <tr>
            <td>{!! $productoHasBodega->bodega_idBodega !!}</td>
            <td>{!! $productoHasBodega->Cantidad !!}</td>
            <td>{!! $productoHasBodega->Producto_Proveedor_idProveedor !!}</td>
            <td>
                {!! Form::open(['route' => ['productoHasBodegas.destroy', $productoHasBodega->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productoHasBodegas.show', [$productoHasBodega->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productoHasBodegas.edit', [$productoHasBodega->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>