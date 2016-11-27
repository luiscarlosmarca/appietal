@extends('layout')
@section('style')
<link rel="stylesheet" href="assets/css/main-.css" />
{!!Html::style('assets/css/main-.css')!!}
@endsection
@section('content')

<!-- Main -->
	<div id="main" class="alt">

		<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">

					</header>
					<h2 id="elements">Datos Personales de: {{Auth::User()->nombre}}</h2>
			<div class="inner">
						<div class="12u 15u$(big)">

							{!!Form::open(['route'=>'datos.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}

								  @include('estudiantes.partials.fieldsDatos')
									<!-- files -->
								

						  {!! Form::close() !!}

						</div>
					</div></div>
			</section>

	</div>
	@endsection
