
@include('templates.head')

<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/productos/persianas-viewtex/slider-1.webp')">
        <div class="carousel-caption">
            <h3>Persianas viewtex</h3>
            <p>This is a description for the imagen de galeria.</p>
        </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/persianas-viewtex/slider-2.jpg')">
        <div class="carousel-caption">
            <h3>persianas viewtex</h3>
            <p>This is a description for the second slide.</p>
        </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/persianas-viewtex/slider-3.jpg')">
        <div class="carousel-caption">
            <h3>persianas viewtex</h3>
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
                    <img src="img/productos/persianas-viewtex/persianas-viewtex-descripcion.png" alt="Cortina sheer vertesse descripcion" >
                </div>
                <h1>persianas viewtex</h1>
                <p class="mb-4">Encuentra en nuestras persianas Viewtex un material de última generación con características excepcionales.
                <br><br>
                Las láminas de poliéster vienen recubiertas por una capa de nanopartículas que le otorgan una alta resistencia al polvo, al agua y que lo hace resistente a las rayaduras. Es un producto liviano por lo cual es apto para grandes áreas. Además es retardante al fuego.
                <br><br>
                Ten en cuenta que puedes instalar tus persianas Viewtex en baños y en cocinas siempre y cuando los mecanismos estén protegidos.</p>
                <div class="text-center mb-5">
                    <a href="" class="button button2">Materiales</a>
                    <a href="" class="button button2">Video</a>
                    <a href="#fm-modal" data-toggle="modal" class="button button2">Cotizar producto</a>
                </div>
            </div>
            <div class="col-md-6 imagenFila1-persianas-viewtex">
            </div>
        </div>
    </div>
</section>

<section class="fila2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 imagenFila2-persianas-viewtex">
            </div>
            <div class="col-md-6 mt-4">
                <h1>Características <i class="fal fa-book-open"></i></h1>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="card">
                                <button class="btn collapsed-color" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <h3>Material <i class="fal fa-angle-double-down"></i></h3>
                                </button>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Nuestras persianas Viewtex cuentan con un revestimiento de nano partículas que se aplica a las láminas, le da al material la cualidad de repelencia al agua, a la grasa y al polvo. Es un material muy liviano y resistente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            <h3>Tipos de laminas<i class="fal fa-angle-double-down"></i></h3>
                        </button>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Enámorate de las 4 colecciones de persianas viewtex que tenemos para tu espacio: Regulares, Linen, (perladas), y Night. Estas últimas son 90% blackout, te darán un alto grado de osucridad, pero te sugerimos fabricarlas con cinta de algodón para cubrir las perforaciones.
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
                                Fabricamos las persianas Classic 50 de viewtex con dos sistemas: con escalerilla, en el cual la perforación de las laminillas es visible, o con una cinta de algodón decorativa, que oculta esas perforaciones y te ofrece mayor oscuridad.
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
                <p>Nuestras persianas Viewtex se fabrican con cordel continuo. Este cordel no se alarga por lo cual no queda estorbando.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>Las láminas de poliéster de nuestras Viewtex, además de ser resistentes al agua y repelentes al polvo, vienen en colores modernos y llamativos.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>La cenefa es un accesorio opcional para cubrir el cabezal. Es una cenefa en PVC con una lámina interior de 65mm.</p>
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