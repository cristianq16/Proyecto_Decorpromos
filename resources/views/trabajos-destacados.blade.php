@include('templates.head')

<section class="gallery-block cards-gallery">
	    <div class="container">
	        <div class="heading">
	          <h2>Trabajos destacados <i class="fal fa-star"></i></h2>
	        </div>
	        <div class="row">
				@foreach ($trabajosDestacados as $trabajoDestacado)
					<div class="col-md-6 col-lg-4">
						<div class="card border-0 transform-on-hover">
							<a class="lightbox" href="/proyecto_cortinaL/storage/app/{{$trabajoDestacado->imagen}}">
							<img src="/proyecto_cortinaL/storage/app/{{$trabajoDestacado->imagen}}" alt="Card Image" class="card-img-top">
							</a>
							<div class="card-body">
								<h6><a href="#">{{$trabajoDestacado->titulo}}</a></h6>
								<p class="text-muted card-text">{{$trabajoDestacado->descripcion}}</p>
							</div>
						</div>
					</div>
				@endforeach
	            {{-- <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/image2.jpg">
		                	<img src="img/image2.jpg" alt="Card Image" class="card-img-top">
		                </a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image3.jpg">
	                		<img src="img/image3.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image4.jpg">
	                		<img src="img/image4.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image5.jpg">
	                		<img src="img/image5.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image6.jpg">
	                		<img src="img/image6.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
                </div>
                <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image6.jpg">
	                		<img src="img/image6.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div> --}}
	        </div>
	    </div>
    </section>

@include('templates.formulario-cotizacion')
@include('templates.footer')