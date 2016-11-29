@extends('layout')
@section('style')
<link rel="stylesheet" href="assets/css/main-.css" />
{!!Html::style('assets/css/main-.css')!!}
@endsection
@section('content')
				<!-- Main -->
					<div id="main" class="alt">
						@if (count($errors) > 0)
								<div class="alert alert-danger">
								<strong>Errores en el formulario</strong> Verifica los datos.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
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
															<table style="width:100%">
															  <tr>
															    <th>Sede</th>
															    <th>Jornada</th>
															    <th>Grados</th>
															  </tr>
															  <tr>
															    <td>Sede principal</td>
															    <td>6 - 11</td>
															    <td>Mañana y tarde</td>
															  </tr>
															  <tr>
															    <td>Escuela la Concordia</td>
															    <td> 0  - 5</td>
															    <td>Jornada: Mañana</td>
															  </tr>



																<tr>
																	<td>	Escuela Cervante</td>
																	<td> 0  - 5</td>
																	<td>JMañana y tarde</td>
																</tr>

																<tr>
																	<td>	Escuela Laureles</td>
																	<td> 0  - 5</td>
																	<td>Mañana </td>
																</tr>


																<tr>
																	<td>	Escuela Gran Colombia</td>
																	<td> 0  - 5</td>
																	<td>Mañana - Tarde </td>
																</tr>


															</table


														</p>
														</div>
													</div>

											</div>
								</section>

					</div>
	@endsection
