@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trainer
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($trainer, ['route' => ['trainers.update', $trainer->id], 'method' => 'patch']) !!}

                        @include('trainers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection