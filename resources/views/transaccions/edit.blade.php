@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transaccion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transaccion, ['route' => ['transaccions.update', $transaccion->id], 'method' => 'patch']) !!}

                        @include('transaccions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection