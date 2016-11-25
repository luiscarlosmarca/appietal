@extends('layout')
@section('content')
				<!-- Main -->
					<div id="main" class="alt">

							<!-- One -->
								<section id="one">
											<div class="inner">
												<header class="major">

													</header>
													<h2 id="elements">Información Institucional</h2>
													<div class="inner">
														<div class="12u 15u$(big)">

															{!!Form::open(['route'=>'institucions.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}

																	@include('estudiantes.partials.fieldsInstitucion')
															{!! Form::close() !!}

														</div>
													</div>

											</div>
								</section>

					</div>
	@endsection
