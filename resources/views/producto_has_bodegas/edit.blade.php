@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Producto Has Bodega
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productoHasBodega, ['route' => ['productoHasBodegas.update', $productoHasBodega->id], 'method' => 'patch']) !!}

                        @include('producto_has_bodegas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection