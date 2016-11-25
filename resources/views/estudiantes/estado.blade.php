@extends('layout')
@section('content')

				<!-- Banner -->
				<section id="banner">
					<div class="inner">

								<h1>Estado Pre-Matricula</h1>
							</header>
							<div class="content">
								  @if(Auth::user()->institucion->aprobado=='Aprobado')
											<p>Bienvenido a la familia IETAL, descargue el certificado para continuar el proceso</p>
											<ul class="actions">
											<li><a href="primerPaso.html" class="button next scrolly">Descargar Certificado</a></li>
											</ul>
									@elseif(Auth::user()->institucion->aprobado=='No Aprobado')
											<p>Su solicitud de pre-matricula, no fue aprobada. :(</p><br>
											<p><b>Observaciones:</b>{{Auth::user()->institucion->observaciones}}</p>
									@else
											Aun estamos verifcando su informacion, vuelve a verificar estado otro día.
									@endif
							</div>
						</div>
					</section>

@endsection
