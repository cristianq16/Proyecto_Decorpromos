
@include('templates.head')

<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/productos/panel-japones/slider-1.jpg')">
        <div class="carousel-caption ">
            <h3>panel japones</h3>
            <p>This is a description for the imagen de galeria.</p>
        </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/panel-japones/slider-2.jpg')">
        <div class="carousel-caption ">
            <h3>panel japones</h3>
            <p>This is a description for the second slide.</p>
        </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/productos/panel-japones/slider-3.jpg')">
        <div class="carousel-caption ">
            <h3>panel japones</h3>
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
                    <img src="img/productos/panel-japones/panel_japones_descripcion.webp" alt="Cortina panel japones descripcion" >
                </div>
                <h1>Panel japones</h1>
                <p class="mb-4">Si algo hay que destacar de nuestros panel Japonés es el riel que manejamos, el cual
                    tiene un diseño único que ha sido
                    patentado y es reconocido por su apariencia moderna y su manejo suave.
                    <br><br>
                    Estéticamente llaman la atención sus finas líneas y el poco espacio que ocupa en la instalación lo cual
                    se traduce en
                    un producto de un alto nivel decorativo.
                    <br><br>
                    El riel sumado al amplio portafolio de telas que manejamos, dan como resultado un producto exclusivo y
                    funcional.</p>
                <div class="text-center mb-5">
                    <a href="" class="button button2">Materiales</a>
                    <a href="" class="button button2">Video</a>
                    <a href="#fm-modal" data-toggle="modal" class="button button2">Cotizar producto</a>
                </div>
            </div>
            <div class="col-md-6 imagenFila1-panelJapones">
            </div>
        </div>
    </div>
</section>

<section class="fila2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 imagenFila2-panelJapones">
            </div>
            <div class="col-md-6 mt-4">
                <h1>Características <i class="fal fa-book-open"></i></h1>
                <div class="accordion mb-5" id="accordionExample">
                    <div class="card">
                                <button class="btn collapsed-color" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <h3>Tejidos <i class="fal fa-angle-double-down"></i></h3>
                                </button>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>En Pentagrama tenemos el portafolio más completo de telas, las cuales agrupamos así: Tejidos técnicos (screen y
                                membranas bioclimáticas), tejidos decorativos y blackout. Cabe resaltar que cuando se fabrica un panel japonés en
                                blackout no se puede garantizar oscuridad completa, pues la luz puede pasar por entre los telos.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                                <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <h3>Cenefas <i class="fal fa-angle-double-down"></i></h3> 
                                </button>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Te ofrecemos diferentes tipos de cenefas para cubrir el riel del panel japonés: Cenefas de aluminio a la vista o
                                cenefas forradas en tela. Sin embargo, ten en cuenta que la cenefa es un accesorio opcional ya que no es necesaria pues
                                el riel tiene un diseño moderno que le aporta valor a la decoración.
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                                <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <h3>Tipos de recogida <i class="fal fa-angle-double-down"></i></h3> 
                                </button>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Los paneles japoneses se pueden fabricar de cuatro maneras de acuerdo a tus necesidades:
                                <img src="img/recogida_panel.png" alt="Como se recoge un panel japones">
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                                <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <h3>Tamaños de los telos <i class="fal fa-angle-double-down"></i></h3>
                                </button>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                El tamaño recomendado del telo es entre 60cm y 90cm, ya que por fuera de estas medidas los telos pueden presentar
                                curvaturas en los bordes. Adicionalmente, ten en cuenta que el traslape entre telos siempre es de 8cm.
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                                <button class="btn collapsed collapsed-color" type="button" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                <h3>Accionamiento <i class="fal fa-angle-double-down"></i></h3> 
                                </button>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Nuestro riel se puede fabricar con accionamiento manual o motorizado, éste último cuenta con un motor único y muy
                                pequeño que quedará oculto detrás del riel para mejorar la apariencia del producto.
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
                <p>Como parte del diseño y estilo del producto, el traslape entre los telos del panel japonés es de 8cm, dándole a tu cortina y tus espacios un toque decorativo.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>Contamos con rieles de 2 a 6 vías, los cuales se pueden instalar seguidos para cubrir grandes ventanas con una cobertura de hasta de 11.5 metros con dos rieles.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/prieza.jpg" alt="Riel" class="mb-3">
                <p>Nuestro riel tiene un diseño moderno y sobrio. Ocupa muy poco espacio en la instalación y es reconocido por ser suave al manejo.</p>
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