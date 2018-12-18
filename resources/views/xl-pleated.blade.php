
@include('templates.head')

<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/productos/xl-pleated/slider-1.jpg')">
        <div class="carousel-caption">
            <h3>Xl pleated</h3>
            <p>This is a description for the imagen de galeria.</p>
        </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/xl-pleated/slider-2.jpg')">
        <div class="carousel-caption">
            <h3>Xl pleated</h3>
            <p>This is a description for the second slide.</p>
        </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/xl-pleated/slider-3.jpg')">
        <div class="carousel-caption">
            <h3>Xl pleated</h3>
            <p>This is a description for the third slide.</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="fila1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" ">
                <div class="text-center mt-5">
                    <img src="img/productos/xl-pleated/xl-pleated-descripcion.webp" alt="Cortina sheer vertesse descripcion" >
                </div>
                <h1>Xl pleated</h1>
                <p class="mb-4">Encuentra nuestras persianas XL Pleated en una colección única y vibrante de telas plisadas de 5cm que filtran el paso de luz de manera armoniosa. El exclusivo cabezal Maxirise destaca por su diseño moderno y minimalista. Con este cabezal puedes cubrir ventanas hasta de 4.60 metros de ancho x 5.00 metros de altura; Aún en esas dimensiones la manipulación del producto es suave.
                <br><br>
                Si quieres un control único de la privacidad, solícitalas en el sistema único Top Down Botton Up que te permite un gran paso de luz arriba y abajo, mientras proteges tu intimidad en la parte central de la ventana.</p>
                <div class="text-center mb-5">
                    <a href="" class="button button2">Materiales</a>
                    <a href="" class="button button2">Video</a>
                    <a href="#fm-modal" data-toggle="modal" class="button button2">Cotizar producto</a>
                </div>
            </div>
            <div class="col-md-6 imagenFila1-xl-pleated">
            </div>
        </div>
    </div>
</section>

<section class="fila2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 imagenFila2-xl-pleated">
            </div>
            <div class="col-md-6 mt-4">
                <h1>Características <i class="fal fa-book-open"></i></h1>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="card">
                                <button class="btn collapsed-color" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <h3>Sistemas <i class="fal fa-angle-double-down"></i></h3>
                                </button>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Aparte del sistema Maxirise el cual puede puede hacerse manual o motorizado, nuestras persianas XL Pleated se pueden fabricar en el sistema Top Down Botton Up que permite manejar la privacidad de una manera única, gracias a que la cortina se abre tanto de arriba hacia abajo, como de abajo hacia arriba, dejando un espacio libre en la zona superior que ayuda a una mayor entrada de luz.</p>
                            </div>
                        </div>
                    </div>

                    

    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="destacados-fondo" >
    <div class="container destacados">
        <div class="row">
            <div class="col">
                <h1>Destacados <i class="fal fa-check-circle"></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>Gracias a la escalerilla, el tamaño de las celdas se mantiene siempre igual, desde arriba hasta abajo.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>La colección de telas de nuestras persianas XL Pleated fue cuidadosamente seleccionada para crear espacios con un sello de sofisticación.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>Las finas líneas del cabezal Maxirise destacan como el mayor signo de exclusividad de nuestras persianas XL Pleated.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center my-5">
                    <a href="#fm-modal" data-toggle="modal" class="button button2">Cotizar producto</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--galeria-->
<section class="galeria">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Galeria <i class="fal fa-images"></i></h1>
            </div>
        </div>
    </div>
    <!--galeria movil-->
    <div id="carousel3" class="carousel slide galeria d-md-none" data-ride="false">
        <ol class="carousel-indicators">
            <li data-target="#carousel3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel3" data-slide-to="1"></li>
            <li data-target="#carousel3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-item2 active">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col">
                            <img class="d-block w-100" src="img/enrrollables.jpg" alt="imagen de galeria">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--galeria movil-->
    
    <!--galeria escritorio-->
    <div id="carouselExampleIndicators" class="carousel slide galeria d-md-block d-none" data-ride="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner gallery-block grid-gallery">
            <div class="carousel-item carousel-item2 active">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a> 
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item2">
                <div class="container carousel-item2 d-flex">
                    <div class="row align-items-center">
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                        <div class="col-md-4 item">
                            <a class="lightbox" href="img/enrrollables.jpg">
                                <img class="d-block w-100 img-fluid image scale-on-hover" src="img/enrrollables.jpg" alt="imagen de galeria">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--Modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Galeria-->

@include('templates.formulario-cotizacion')
@include('templates.footer')