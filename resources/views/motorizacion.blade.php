
@include('templates.head')

<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/productos/motorizacion/slider-1.jpg')">
        <div class="carousel-caption">
            <h3>motorizacion</h3>
            <p>This is a description for the imagen de galeria.</p>
        </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/motorizacion/slider-2.jpg')">
        <div class="carousel-caption">
            <h3>motorizacion</h3>
            <p>This is a description for the second slide.</p>
        </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/motorizacion/slider-3.jpg')">
        <div class="carousel-caption">
            <h3>motorizacion</h3>
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
            <div class="col-md-6 imagenFila1-motorizacion">
            </div>
            <div class="col-md-6" ">
                <div class="text-center mt-5">
                </div>
                <h1>Motores más eficientes<br> y silenciosos <i class="fal fa-volume-mute"></i></h1>
                <p class="mb-4">Los motores tubulares que manejamos son exclusivamente diseñados para garantizar un bajo nivel de ruido. En algunas lineas el ruido maximo es de tan solo 33 decibeles que puede compararse con el ruido en una biblioteca.
                <br><br>
                Motores de excelente calidad hasta con <span class="garantia">5 años de garantía.</span></p>
                <div class="text-center mb-5">
                    <a href="" class="button button2">Materiales</a>
                    <a href="" class="button button2">Video</a>
                    <a href="#fm-modal" data-toggle="modal" class="button button2">Cotizar producto</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fila2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mt-4">
                <h1>Características <i class="fal fa-book-open"></i></h1>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="card">
                        <button class="btn collapsed-color" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <h3>Dispositivos de radiofrecuencia <i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Podras manejar tus cortinas desde cualquier lugar de tu casa con dispositivos portátiles y lo mejor es que al funcionar con tegnologia de radiofrecuencia no tendras problemas con apuntar a la cortina, ya que no sera necesario.</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            <h3>Temporizadores<i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Selecciona un horarios de apertura y cierre para los dias de la semana y deja que el trabajo se realicé solo.
                            </div>
                        </div>
                    </div>
            
                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            <h3>Libre de cuerdas y cordeles <i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                La mejor solucion para la seguridad de los niños son las cortinas motorizadas, Pues elimina el riesgo de ahorcamiento debido a las cuerdas y cordeles.
                            </div>
                        </div>
                    </div>
            
                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseSix"
                            aria-expanded="false" aria-controls="collapseSix">
                            <h3>Motores ocultos <i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                En nuestras lineas manejamos motores para cortinas los cuales quedan completamente ocultos, adaptandose a los rieles de las cortinas.
                            </div>
                        </div>
                    </div>
            
            
            
            
                </div>
            </div>
            <div class="col-md-6 imagenFila2-motorizacion">
            </div>
            
        </div>
    </div>
</section>
{{-- <section class="destacados-fondo" >
    <div class="container destacados">
        <div class="row">
            <div class="col">
                <h1>Motorización de toldos <i class="fal fa-umbrella"></i></h1>
                <h3 class="text-center">La mejor solucion para proteger nuestros productos es automatizandolos y evitar daños, por eso ofrecemos sensores inteligentes para su cuidado.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="img/productos/Motorizacion/sensor-lluvia.webp" alt="sensor de lluvia toldo" class="mb-3">
                <h3>Sensor de lluvia</h3>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/productos/Motorizacion/sensor-movimiento.webp" alt="sensor de movimiento en toldos" class="mb-3">
                <h3>Sensor de movimiento</h3>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/productos/Motorizacion/sensor-luz.webp" alt="sensor de luz y viento toldos" class="mb-3">
                <h3>Sensor de luz y viento</h3>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/productos/Motorizacion/sensor-luz2.webp" alt="sensor de luz exterior toldos" class="mb-3">
                <h3>Sensor de luz exterior</h3>
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