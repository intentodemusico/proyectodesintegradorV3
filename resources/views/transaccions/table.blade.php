<table class="table table-responsive" id="transaccions-table">
    <thead>
        <tr>
            <th>Cantidad</th>
        <th>Persona Idpersona</th>
        <th>Precio</th>
        <th>Producto Idproducto</th>
        <th>Tipo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transaccions as $transaccion)
        <tr>
            <td>{!! $transaccion->Cantidad !!}</td>
            <td>{!! $transaccion->Persona_idPersona !!}</td>
            <td>{!! $transaccion->Precio !!}</td>
            <td>{!! $transaccion->Producto_idProducto !!}</td>
            <td>{!! $transaccion->Tipo !!}</td>
            <td>
                {!! Form::open(['route' => ['transaccions.destroy', $transaccion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transaccions.show', [$transaccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('transaccions.edit', [$transaccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>