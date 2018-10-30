<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('productoHasBodegas*') ? 'active' : '' }}">
    <a href="{!! route('productoHasBodegas.index') !!}"><i class="fa fa-edit"></i><span>Producto Has Bodegas</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

<li class="{{ Request::is('proveedors*') ? 'active' : '' }}">
    <a href="{!! route('proveedors.index') !!}"><i class="fa fa-edit"></i><span>Proveedors</span></a>
</li>

<li class="{{ Request::is('transaccions*') ? 'active' : '' }}">
    <a href="{!! route('transaccions.index') !!}"><i class="fa fa-edit"></i><span>Transaccions</span></a>
</li>

