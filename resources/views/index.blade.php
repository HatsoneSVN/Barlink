	@include('header')
	<?php $offset = 5; ?>
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<!-- heading -->
					<h2>Aquí podrás encontrar los principales locales hosteleros de Ponferrada</h2>
					<!-- sub heading -->
					<h3>Te invitamos a enriquecer nuestra web con tu opinión</h3>
				</div>
			</div>
			<!-- banner end -->
			<!-- works -->
			<div class="works" id="work">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Restaurantes más destacados</h2>
						<!-- paragraph -->
						<p>Estos son los restaurantes con las mejores puntuaciones:</p>
					</div>
					<div class="row">
						@foreach($locales_destacados as $local)
							<?php
							$categorias="";
							$precio="";
							$icono_precio="";
							foreach ($local->getCategorias() as $key => $value) {
								$categorias= $categorias."| $value ";
							}
							if($local->getPrecio() == 3)
							{
								$precio = "Exclusivo";
							}
							if($local->getPrecio() == 2)
							{
								$precio = "Económico";
							}
							if($local->getPrecio() == 1)
							{
								$precio = "Muy económico";								
							}
							?>
							<div class="col-md-3">
								<!-- team member -->
								<div class="member">
									<!-- team member image -->
									<img class="img-responsive" src="{{asset($local->getImg())}}" alt="imagen" />
									<!-- member details / heading -->
									<h4><a href="{{ url('/locales' , ['id' => $local->getId() ,'offset'=>$offset]) }}">{{$local->getNombre()}}</a></h4>
									<!-- paragraph -->
									<div class="categorias">
										<p>Categoria:{{" ".$categorias}}</p>
									</div>
									<div class="precio">
										<p>{{" ".$precio." | "}}
										@for ($i = 0; $i <  $local->getPrecio(); $i++)
											<b>&#8364;</b>
										@endfor</p>
									</div>
									<div class="puntuacion">
										@for ($i = 0; $i <  $local->getCalificacion(); $i++)
											&#9733;
										@endfor
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div>
      			</div>
			<!-- team -->
			<div class="work" id="team">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Bares más destacados</h2>
						<!-- paragraph -->
						<p>Estos son los bares con las mejores puntuaciones:</p>
					</div>
					<div class="row">
					@foreach($bares_destacados as $bar)
					<?php
							$categorias="";
							$precio="";
							foreach ($bar->getCategorias() as $key => $value) {
								$categorias= $categorias."| $value ";
							}
							if($bar->getPrecio() == 3)
							{
								$precio = "Exclusivo";
							}
							if($bar->getPrecio() == 2)
							{
								$precio = "Económico";
							}
							if($bar->getPrecio() == 1)
							{
								$precio = "Muy económico";
							}
						?>
						<div class="col-md-3">
							<!-- team member -->
							<div class="member">
								<!-- team member image -->
								<img class="img-responsive" src="{{asset($bar->getImg())}}" alt="imagen" />
								<!-- member details / heading -->
								<h4><a href="{{ url('/locales' , ['id' => $bar->getId() ,'offset'=>$offset]) }}">{{$bar->getNombre()}}</a></h4>
								<!-- paragraph -->
								<div class="categorias">
									<p>Categorias: {{" ".$categorias}}</p>
								</div>
								<div class="precio">
									<p>{{" ".$precio}}
										@for ($i = 0; $i <  $local->getPrecio(); $i++)
											<b>&#8364;</b>
										@endfor</p>
									</p>
								</div>
								<div class="puntuacion">
									@for ($i = 0; $i <  $bar->getCalificacion(); $i++)
										&#9733;
									@endfor
								</div>
							</div>
						</div>
					@endforeach
					</div>
				<div>
			</div>
	@include('footer')		