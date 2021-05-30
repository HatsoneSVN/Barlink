<?php 
use Illuminate\Support\Facades\Auth;
	$id = $local->getId();
	$nombre = $local->getNombre();
	$direccion = $local->getDireccion();
	$tlf = $local->getTlf();
	$precio = $local->getPrecio();
	$calificacion = $local->getCalificacion();
	$img = $local->getImg();
	$categorias = $local->getCategorias();
?>
	@include('header')
		<div id="content">
				<div id="titulo">
					<h1>{{$nombre}}</h1>
				</div>
				<div id="imagen"><img src="{{asset($img)}}" alt="img"></div>
				<div id="datos">
					<div class="informacion">
					<h3>Contacto:</h3>
						<div class="cont_info">					
							<b>Dirección: {{$direccion}}</b><br><br>
							<b>Teléfono: +34 {{$tlf}}</b><br><br>
							<b>Correo: </b>
						</div>
					</div>	
					<div class="informacion_central">
					<h3>Categorias:</h3>
						<div class="cont_info">
							@foreach($categorias as $categoria)
								<b>{{$categoria}}</b><br><br>
							@endforeach
						</div>
					</div>
					<div class="informacion">
					<h3>Puntuación: </h3>
							@for($i = 0 ; $i < $calificacion ; $i++) <span class="ico_puntuacion">&#9733;</span>@endfor
						<div class="cont_info">
							<div class="tit_puntuaciones">
								Puntuaciones usuarios:<b> {{$opinionesTotal}}</b>
							</div>
							<div class="item_puntuacion">
								<b><img class='ico_puntuacion' src="{{asset('img/iconos/muyRecomendado.png')}}" alt='icono_puntuacion'> {{"$muyRecomendado"}} | Muy recomendable | Superior a 3 &#9733; </b>
							</div>
							<div class="item_puntuacion">
								<b><img class='ico_puntuacion' src="{{asset('img/iconos/recomendado.png')}}" alt='icono_puntuacion'> {{"$recomendado"}} | Recomendable | Hasta 3 &#9733;</b>
							</div>
							<div class="item_puntuacion">
								<b><img class='ico_puntuacion' src="{{asset('img/iconos/noRecomendado.png')}}" alt='icono_puntuacion'> {{"$noRecomendado"}} | No recomendable | Inferior a 3 &#9733;</b>
							</div>
							<div id="bot_op">
								<a href="{{url('/opinion' , ['id' => $id])}}" id="opinar"><b>Deja tu opinión</b></a>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<div id="opiniones">
				<h2>Opiniones:</h2><br>
				@if($opinionesTotal == 0)
					<div id="notOpinion">
						<h3>Todavía no existen opiniones de {{$nombre}} , se el primero en dar la tuya!!</h3>
					</div>
				@else
				@foreach($opiniones as $opinion)
				<div class='opinion'>
					<div class="titulo_op"> 
						<div class="Us">
							{{" | ".ucfirst($opinion->nombreUs)}}
						</div>
						<h3>{{ucfirst($opinion->titulo)}}</h3>
					</div>
					<div class="puntuacion_op">
						@if( $opinion->calificaciones == 0)
							<h4>No puntuado</h4>
						@else
							@for ($i = 0; $i < $opinion->calificaciones; $i++)
								<span class="ico_puntuacion">&#9733;</span> 
							@endfor
								<span class="ico_puntuacion"> | </span>
							@for ($i = 0; $i < $opinion->precio; $i++)
								<span class="ico_puntuacion">&#8364;</span> 
							@endfor
						@endif
					</div>
					<div class="cont_op">
						{{$opinion->opinion}}
					</div>
					@if($opinion->id_us == Auth::id())
					<div class="elimOp">
						<a href="{{ url('/eliminarOp' , ['id_op' => $opinion->id_op , 'id_loc'=>$local->getId()]) }}">Eliminar</a>
					</div>
					@endif
				</div>
				@endforeach
				@endif
				@if($anterior == true)
				<a href="{{ url('/locales' , ['id' => $local->getId() ,'offset'=>0]) }}" class="itemMax">&#171;</a><a href="{{ url('/locales' , ['id' => $local->getId() ,'offset'=>$offset - 5]) }}" id="siguiente" class="itemPaginado">Anterior</a>
				@endif
					<span id="pg">{{$pg}}</span>
				@if($siguiente == true)
					<a href="{{ url('/locales' , ['id' => $local->getId() ,'offset'=>$offset + 5]) }}" id="anterior" class="itemPaginado">Siguiente</a><a href="{{ url('/locales' , ['id' => $local->getId() ,'offset'=>$opinionesTotal-1]) }}"  class="itemMax">&#187;</a>
				@endif
			</div>
		</div>
	<script src="{{ asset('js/validaciones.js') }}"></script>
	@include('footer')
