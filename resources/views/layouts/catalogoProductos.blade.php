<div class="container">
    <div class="row">
		<div class="col-md-10">
			@foreach($granos as $grano)
				<div class="col-md-4 img-portfolio">
					<a href="portfolio-item.html">
						<img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
					</a>
					<h3>
						<a href="portfolio-item.html">{{$grano->variedad}}</a>
					</h3>
					<p>{{$grano->descripcion}}</p>
					<div class="col-md-6" align="right">
                    @if(Auth::guest())
                        @include('layouts.modalLoginGrano')   
                    @else
                        {!! link_to_route('inicioRenta', $title = ' Agregar al carrito', $parameters = [$grano->id], $attributes = ['class'=> 'btn btn-primary fa fa-shopping-cart'])!!}
                    @endif
                    </div>
                    <div class="col-md-4"  align="left">
                    	{!! link_to_route('productoPdf', $title = ' Detalles', $parameters = [$grano->especie, $grano->variedad], $attributes = ['class'=>'btn btn-primary fa fa-list'])!!}
                    </div>
				</div>
			@endforeach
		</div>
	</div>
</div>