
@include('templates.head')

<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/productos/honeycell/slider-1.jpg')">
        <div class="carousel-caption">
            <h3>Honeycell</h3>
            <p>This is a description for the imagen de galeria.</p>
        </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/honeycell/slider-2.jpg')">
        <div class="carousel-caption">
            <h3>Honeycell</h3>
            <p>This is a description for the second slide.</p>
        </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/honeycell/slider-3.jpg')">
        <div class="carousel-caption">
            <h3>Honeycell</h3>
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
                    <img src="img/productos/honeycell/honeycell-descripcion.webp" alt="Cortina sheer vertesse descripcion" >
                </div>
                <h1>Honeycell</h1>
                <p class="mb-4">Las persianas Honeycell de Pentagrama deben su eficiencia energética al diseño celular; el aire queda atrapado dentro de los bolsillos o recámaras, lo cual es una forma natural de aislar la temperatura y el ruido.
                <br><br>
                Nuestro sistema Omnirise, con cabezal de lujo y cadena continua, garantizan un accionamiento suave del producto. Los enrolladores tienen un diseño único que evita que el cordel se entorche. Esto garantiza que la cortina suba y baje de manera uniforme.</p>
                <div class="text-center mb-5">
                    <a href="" class="button button2">Materiales</a>
                    <a href="" class="button button2">Video</a>
                    <a href="#fm-modal" data-toggle="modal" class="button button2">Cotizar producto</a>
                </div>
            </div>
            <div class="col-md-6 imagenFila1-honeycell">
            </div>
        </div>
    </div>
</section>

<section class="fila2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 imagenFila2-honeycell">
            </div>
            <div class="col-md-6 mt-4">
                <h1>Características <i class="fal fa-book-open"></i></h1>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="card">
                                <button class="btn collapsed-color" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <h3>Propiedades de la tela <i class="fal fa-angle-double-down"></i></h3>
                                </button>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Gracias a su estructura celular, las persianas Honeycell ayudan a aislar el ruido y la temperatura. La celda crea una cámara de aire que retiene la energía en su interior. En la tela blackout el efecto se potencializa gracias al recubrimiento de aluminio de la cara interna.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            <h3>Sistemas<i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Hay dos importantes características de nuestro sistema de persianas Honeycell:
                                1) Llevan mecanismo de cadena o con cordel continuo. Esta cadena o cordel no se alargan, por
                                lo cual no queda estorbando ni llega al piso.
                                2) Los enrolladores tienen un diseño patentado que evita que el cordel se atasque. Este sistema fue diseñado en Holanda por ingenieros expertos en el producto.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            <h3>Presentaciones <i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                Aparte del sistema estándar, nuestras persianas Honeycell se pueden fabricar en el sistema Top Down Botton Up que permite manejar la privacidad de una manera única, gracias a que la cortina se abre tanto de arriba hacia abajo, como de abajo hacia arriba, dejando un espacio libre en la zona superior que ayuda a una mayor entrada de luz. También podemos fabricarlas en sistema Día y Noche.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseSix"
                            aria-expanded="false" aria-controls="collapseSix">
                            <h3>Perfil y cabezal <i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                Tanto el cabezal como el perfil le aportan valor estético al producto. Una gran ventaja de este producto es el poco espacio que requiere de instalación (sólo 3.5cm) y que la tela llega hasta el borde del cabezal, por lo cual es ideal para instalarse por dentro del marco ya que deja muy poca luz lateral.
                            </div>
                        </div>
                    </div>

                    

    
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="destacados-fondo" >
    <div class="container destacados">
        <div class="row">
            <div class="col">
                <h1>Destacados <i class="fal fa-check-circle"></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>La cámara de aire que conforman las celdas, sirve de aislante natural del ruido y la temperatura. La celdas miden 25mm de ancho.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>Nuestro novedoso Sistema Día y Noche es un cabezal doble compuesto por una tela trasluz y una tela blackout, que tan sólo requiere 6.5cm de espacio para instalar.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>El portafolio incluye telas con diferentes grados de traslucidez: semi-transparentes, opacas y blackout.</p>
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
</section> --}}
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