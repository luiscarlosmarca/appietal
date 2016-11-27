@extends('layout')
  @section('style')
    <link rel="stylesheet" href="assets/css/main-.css" />
    {!!Html::style('assets/css/main-.css')!!}
  @endsection
  @section('content')

        <h2> Actulizando acudientes del aspirante: {{$user->nombre}}
        </h2>
      </header>
      <p>
        {!!Form::model($user->profile,['route'=>['admin.datos.update',$user->profile,$user->id],'method'=>'PATCH','enctype'=>'multipart/form-data'])!!}

        
      {!! Form::close() !!}
      </p>
    </div>
  </section>


  @endsection
