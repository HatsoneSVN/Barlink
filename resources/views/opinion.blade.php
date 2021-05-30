<?php
//Al utilizar post se debe añadir la clase de verificación de token para que no de fallo 419
use App\Http\Middleware\VerifyCsrfToken;
	$nombre = $local->getNombre();
	$direccion = $local->getDireccion();
	$tlf = $local->getTlf();
	$precio = $local->getPrecio();
	$calificacion = $local->getCalificacion();
	$img = $local->getImg();
	$id_loc =$local->getId();
?>
@include("header")
			<div id="content_op">
				<div id="datos_op">
					<div class="datLocOpImg"><img src="{{asset($img)}}" alt="img"></div>
						<div class="datLocOp">
							<h1 class="itemOpDat">{{$nombre}}</h1>
							<p class="itemOpDat">Dirección: {{$direccion}}</p>
							<p class="itemOpDat">Teléfono: {{$tlf}}</p>
							<p class="itemOpDat">Email: {{"email"}}</p>
						</div>
				</div>
				<form action="{{url('/guardarOP')}}" name="form_puntuacion" id="form_puntuacion" method="post">
					<!--el csrf es necesario para aumentar la seguridad y evitar error 419 de laravel-->
					@csrf
					<!-- Equivalent to... -->
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" name="id_loc" value=<?php echo($id_loc) ?> />
					
					<div id="op_puntuacion">
					<span id="fail"></span>
						<h4><label for="clasificacion" id="lab_clasificacion">*Tu Puntuación general:</label></h4>
						<p class="clasificacion">
							<input id="radio1" type="radio" name="estrellas" value="5" required> 
							<label for="radio1" class="estrella">&#9733;</label>
							<input id="radio2" type="radio" name="estrellas" value="4" required>
							<label for="radio2" class="estrella">&#9733;</label>
							<input id="radio3" type="radio" name="estrellas" value="3" required>
							<label for="radio3" class="estrella">&#9733;</label>
							<input id="radio4" type="radio" name="estrellas" value="2" required>
							<label for="radio4" class="estrella">&#9733;</label>
							<input id="radio5" type="radio" name="estrellas" value="1" required>
							<label for="radio5" class="estrella">&#9733;</label>
						</p>
					</div>
					<div id="op_cont_text">
						<div id="cont_titulo_op">
						<h4><label for="titulo_op">*Título de tu opinión:</label></h4>	
							<input type="text" name="titulo_op" id="titulo_op" maxlength="50" minlength="5" required>
						</div>
						<div id="cont_opinion">
						<h4><label for="opinion">*Tu opinión:</label></h4>
							<textarea name="opinion" id="opinion" cols="30" rows="10"  minlength="50" required></textarea> 
						</div>
						<div id="cont_op_precio">
						<h4><label for="op_precio">¿Que tal está de precio este restaurante?</label></h4>
						<select name="op_precio" id="op_precio">
							<option value="1">Muy asequible</option>
							<option value="2">Asequible</option>
							<option value="3">Exclusivo</option>
						</select>
						<div id="icono_precio"></div>
					</div>
					<input type="submit" value="Guardar opinión" id="guardar_opinion">
				</form>
			</div>
			<script src="{{ asset('js/validaciones.js') }}"></script>
    </body>
</html>