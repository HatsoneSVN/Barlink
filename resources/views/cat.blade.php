<?php $offset=0?>
	@include('header')
			<!-- works -->
			<div class="works" id="work">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2><h2>Locales con la categoria {{$categoria}}:</h2></h2>
						<!-- paragraph -->
						<p>Estos son los locales que pertenecen a la categoria {{$categoria}}:</p>
					</div>
                <div class="row">
				    @foreach($locales as $local)
					<?php
						$categorias="";
						$precio="";
						foreach ($local->getCategorias() as $key => $value) {
							$categorias= $categorias." $value |";
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
									<p>{{" ".$categorias}}</p>
								</div>
								<div class="precio">
									<p>{{" ".$precio." | "}}
									@for ($i = 0; $i <  $local->getPrecio(); $i++)
											<b>&#8364;</b>
										@endfor</p>
									</p>
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
    @include('footer')