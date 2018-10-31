<table class="table table-responsive" idPersona="personas-table">
    <thead>
        <tr>
            <th>idPersona</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Direccion</th>
        
        <th>Telefono</th>
        <th>Tipo Persona Idtipo Persona</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personas as $persona) 
        <tr>
            <td>{!! $persona->idPersona !!}</td>
            <td>{!! $persona->Nombre !!}</td>
            <td>{!! $persona->Apellido !!}</td>
            <td>{!! $persona->Cedula !!}</td>
            <td>{!! $persona->Direccion !!}</td>
            <td>{!! $persona->Telefono !!}</td>
            <td>{!! $persona->Tipo_Persona_idTipo_Persona !!}</td>
            <td>
                {!! Form::open(['route' => ['personas.destroy', $persona->idPersona], 'method' => 'delete']) !!}        
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->idPersona]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->idPersona]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>