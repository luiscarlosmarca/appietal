
@extends('layout')
@section('content')

<!-- Main -->
 <section id="banner">
  <div class="inner">

      <h1>Hola, {{Auth::User()->nombre}}</h1>
      </header>
      <div class="content">
        @if(Auth::user()->prematriculado)

            <p>Hemos recibido su información exitosamente, Verifique su estado</p>
            @else
            <p>Gracias por utilizar nuestro sistema de Pre-Matricual IETAL</p>

        @endif

        <ul class="actions">
          @if(Auth::user()->prematriculado )

          <li><a href="{{url('verificar-estado')}}" class="button next scrolly">Verficar Estado </a></li>
          @else
          <li><a href="{{route('datos.create')}}" class="button next scrolly">Pre-matricularme</a></li>

         @endif

        </ul>
      </div>
    </div>
  </section>
@endsection
