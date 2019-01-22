      @include('templates.head2')
        <div class="hero">
            <div class="contenedor-video">
                <div class="contenido-hero contenedor">
                    <h1> <br>
                    <br> Modernidad y estilo <span> en hogares y oficinas</span> <span><a href="#" class="button nosotrosb">Nosotros</a></span></h1>
                    
                </div>
                <video autoplay loop muted poster="">
                    <source src="video/cortinas.mp4" type="video/mp4">
                    <source src="video/cortinas.mp4" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
                </video>
                <div class="filtro-video"></div>
            </div>
        </div>

        <!--descuento-->
        <section class="descuento" id="cotizar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>cotizanos por nuestra pagina web O contactanos y dinos que vienes de nuestra pagina <br> y obten un <span>10% de descuento!!!</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="mt-0">asesorias y visitas sin compromisos y <span>gratuitas</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="modalForm" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="nombre">Nombre y apellido</label>
                                        <input required type="text" class="form-control" id="nombre" placeholder="Nombre"
                                            name="nombre">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ciudad">Ciudad</label>
                                        <input required type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="barrio">Barrio</label>
                                        <input required type="text" class="form-control" id="barrio" placeholder="Barrio" name="barrio">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="telefono">Telefono</label>
                                        <input required type="number" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Correo electronico</label>
                                        <input required type="email" class="form-control" id="email" placeholder="Correo electronico" name="email">
                                    </div>
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="uso">Uso</label>
                                        <select required id="uso" class="form-control" name="uso" placeholder="">
                                            <option value="Residencial / Hogar">
                                                Residencial / Hogar
                                            </option>
                                            <option value="Comercial / Almacén / Local">
                                                Comercial / Almacén / Local
                                            </option>
                                            <option value="Institucional / Empresarial">
                                                Institucional / Empresarial
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="informacion">¿que desea cotizar?</label>
                                        <textarea type="text" rows="3" class="form-control" id="informacion" placeholder="Que desea cotizar..." name="informacion"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-3 d-none">
                                    <div class="form-check">
                                        <input checked class="form-check-input" type="radio"  name="medidas" value="N/A">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <input required name="enviar" id="enviar" class="button buttonRelleno" value="Cotizar producto">
                    </div>
                    <div class="alert alert-primary" role="alert" id="mensaje">En menos de 24 horas nos pondremos en contacto, gracias.</div>
                </div>
                {{-- <div class="row">
                    <div class="col text-center">
                        <a href="#fm-modal" data-toggle="modal" class="button buttonRelleno">Cotizar producto</a>
                    </div>
                </div> --}}
            </div>
        </section>
        <!--descuento-->

        <section class="nosotros clearfix">
            <h2>Nosotros</h2>
            <div class="contenedor">
                <ul class="nosotros-texto">
                    <li>
                        <div class="quienes-somos">
                            <i class="fal fa-hand-heart"></i>
                            <h3>¿Quienes somos?</h3>
                            <p>Decor promos es una empresa familiar enfocada a proporcionar las mejores y variadas soluciones decorativas para cada estilo, embelleciendo  los espacios de forma funcional e innovadora.</p> 
                        </div>
                    </li>
                        <div class="linea">
                        </div>
                    <li>
                        <div class="que-hacemos">
                            <i class="fal fa-thumbs-up"></i>
                            <h3>¿Que hacemos?</h3>
                            <p>Comercializamos productos de alta calidad y tecnología, con cientos de colores, diseños y texturas de las mejores marcas nacionales.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--productos-->
        <section class="seccion productos" id="productos" >
            <div class="contenedor titulo-productos">
                <h2>productos<i class="fal fa-tags"></i></h2>
                
                <p>Soluciones prácticas e innovadoras con sistemas decorativos contemporáneos para el control de la luz.</p>
            </div>
            <div class="seleccion contenedor">
                <a href="#productos" class="button linkScroll" id="cortinasb">Cortinas y persianas</a>
                <a href="#productos" class="button linkScroll" id="papelb">Papel de colgadura</a>
                <a href="#productos" class="button linkScroll" id="exterioresb">Exteriores</a>
                <a href="#productos" class="button linkScroll" id="otrosb">Otros</a>
            </div>
            <div class="contenedor ">
                <div class=" cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>panel japones</h3>
                        <p>Ofrece versatilidad, elegancia y privacidad, debido a que está compuesta por un sistema de paneles o lienzos
                            verticales
                            en tela que se deslizan a lo largo de canales de un riel de aluminio ofreciendo diferentes opciones de
                            apertura
                            garantizando un óptimo manejo del paso de la luz.</p>
                        <a href="panel-japones" class="button">Ver más...</a>
                    </div>
                    <div class="cortinas panel clearfix">
                    </div>
                    <div class="center">
                        <a href="panel-japones" class="button invisibleb">Ver más...</a>
                    </div>
                </div>
                <div class="cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2>
                            <i class="fal fa-ellipsis-h-alt"></i>
                        </h2>
                        <h3>Enrollables y blackout</h3>
                        <p>La cortina enrollable y el blackout están compuestas por un conjunto de modernos mecanismos de control que
                            permiten
                            enrollar y desenrollar la cortina, asegurándola en cualquier altura y permitiendo su fácil manejo, incluso
                            en grandes
                            superficies.</p>
                        <a href="enrollables" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas enrollable clearfix">
                    </div>
                    <div class="center">
                        <a href="enrollables" class="button invisibleb">Ver más...</a>
                    </div>
                
                </div>
                
                <div class=" cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2>
                            <i class="fal fa-ellipsis-h-alt"></i>
                        </h2>
                        <h3>Romanas</h3>
                        <p>Las cortinas Romanas están compuestas por módulos horizontales plegables y un accionamiento suave y cómodo,
                            creando
                            estilos clásicos con diseño hechos a la medida.
                
                            La colección contemporánea en telas aumenta el interés visual con ricas características de textura que
                            deleitan los
                            sentidos.</p>
                        <a href="romanas" class="button">Ver más...</a>
                    </div>
                    <div class="cortinas romanas clearfix">
                    </div>
                    <div class="center">
                        <a href="romanas" class="button invisibleb">Ver más...</a>
                    </div>
                </div>
                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>sheer elegance</h3>
                        <p>Las cortinas Sheer Elegance están compuestas por telones en tejidos opacos y en velo, que se intercalan horizontalmente
                        y permiten un perfecto control del paso de la luz.
                        Esta innovadora persiana le permite conservar visibilidad o privacidad según lo desee, su diseño vanguardista hace de
                        este producto, una persiana moderna y de fácil manejo.</p>
                            <a href="sheer-elegance" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas sheerElegance clearfix">
                    </div>
                    <div class="center">
                        <a href="sheer-elegance" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>sheer royale</h3>
                        <p>Crea un espacio cargado de elegancia y sofisticación con este producto que consiste en franjas opacas que se extienden
                        de manera horizontal y cuelgan entre dos velos transparentes. Nuestras Sheer Royale® y Sheer Nudesse® están disponibles
                        en franjas de 5cm, 6.5cm y 7.5cm.</p>
                        <a href="sheer-royale" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas sheerRoyale clearfix">
                    </div>
                    <div class="center">
                        <a href="sheer-royale" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>sheer serenity</h3>
                        <p>El tejido opaco se pliega mágicamente creando un diseño con ondas, dejando el velo expuesto y permitiendo un gran paso
                        de luz. Es una combinación ideal entre una la funcionalidad de una enrollable, la calidez de una romana y la elegancia
                        de una Sheer Elegance.</p>
                        <a href="sheer-serenity" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas sheerSerenity clearfix">
                    </div>
                    <div class="center">
                        <a href="sheer-serenity" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>sheer vertesse</h3>
                        <p>Inspiradas en la cortina tradicional, pero con la calidad del velo moderno, estas cortinas crean un look atemporal.</p>
                        <a href="sheer-vertesse" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas sheerVertesse clearfix">
                    </div>
                    <div class="center">
                        <a href="sheer-vertesse" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2>
                            <i class="fal fa-ellipsis-h-alt"></i>
                        </h2>
                        <h3>persianas Verticales</h3>
                        <p>Las lamas giran y se deslizan en el riel, brindándote un control eficiente de la luz y un manejo único de la
                        privacidad. Elige entre más de 800 tejidos traslúcidos, opacos o blackout. Este amplio abanico de texturas, diseños y
                        colores ubica a esta cortina como una opción destacada para el cubrimiento de grandes ventanales.</p>
                        <a href="persianas-verticales" class="button">Ver más...</a>
                    </div>
                    <div class="cortinas persianasVerticales clearfix">
                    </div>
                    <div class="center">
                        <a href="persianas-veritcales" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class="cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2>
                            <i class="fal fa-ellipsis-h-alt"></i>
                        </h2>
                        <h3>Persianas de macromadera
                        </h3>
                        <p>Láminas de madera Basswood de 5cm, componen un producto único que transporta los sentidos a la belleza propia de la naturaleza. Enamórate de las 4 colecciones que tenemos disponibles y elige entre 3 tipos de presentaciones: con escalerilla, cinta de algodón o sin perforación.</p>
                        <a href="persianas-macromadera" class="button">Ver más...</a>
                    </div>
                    <div class="cortinas persianasMadera clearfix">
                    </div>
                    <div class="center">
                        <a href="persianas-macromadera" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class="cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2>
                            <i class="fal fa-ellipsis-h-alt"></i>
                        </h2>
                        <h3>Persianas de aluminio
                        </h3>
                        <p>Nuestras persianas de aluminio te darán un control eficiente de la entrada de luz y le darán un look industrial a tu espacio. Fabricadas con laminillas de aluminio de 5cm, están disponibles en colores planos, perforados.</p>
                        <a href="persianas-aluminio" class="button">Ver más...</a>
                    </div>
                    <div class="cortinas persianasAluminio clearfix">
                    </div>
                    <div class="center">
                        <a href="persianas-aluminio" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class="cortina contenido-cortinas clearfix">
                
                    <div class="contenedor-texto ">
                        <h2>
                            <i class="fal fa-ellipsis-h-alt"></i>
                        </h2>
                        <h3>Persianas viewtex
                        </h3>
                        <p>Viewtex es un producto compuesto por láminas de poliéster de 5cm de ancho. Es un producto único, con características excepcionales resultado del revestimiento antiestático que se aplica a las láminas.</p>
                        <a href="persianas-viewtex" class="button">Ver más...</a>
                    </div>
                    <div class="cortinas persianasViewtex clearfix">
                    </div>
                    <div class="center">
                        <a href="persianas-viewtex" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>XL Pleated</h3>
                        <p>Especialmente diseñadas para cubrir grandes áreas, las XL Pleated generan un efecto grandioso y sublime. La
                            gama de
                            telas incluye diseños únicos con look natural y tejidos en TREVIRA CS.</p>
                        <a href="xl-pleated" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas xlplated clearfix">
                    </div>
                    <div class="center">
                        <a href="xl-pleated" class="button invisibleb">Ver más...</a>
                    </div>
                </div>
                
                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>honeycell</h3>
                        <p>La estructura celular de las telas Honeycell, le otorgan a este producto características únicas como
                            aislante natural
                            de temperatura y de ruido. Las telas están disponibles en celdas de 2.5cm y en diferentes niveles de
                            traslucidez:
                            transparentes, semi-transparentes, opacas y blackout.</p>
                        <a href="honeycell" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas honeycell clearfix">
                    </div>
                    <div class="center">
                        <a href="honeycell" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Motorización</h3>
                        <p>Con una persiana motorizada todo es tan sencillo como oprimir un botón y dejar que el producto haga su recorrido. Arriésgate a disfrutar del confort y de la distinción que genera tener un producto motorizado. Contamos con diferentes soluciones en motores y en dispostivos de accionamiento.</p>
                        <a href="motorizacion" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas motorizacion clearfix">
                    </div>
                    <div class="center">
                        <a href="motorizacion" class="button invisibleb">Ver más...</a>
                    </div>
                </div>


                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Telas</h3>
                        <p>Contamos con el portafolio más amplio y completo de telas en todo América Latina. Nuestro portafolio incluye gran variedad de tejidos de carácter técnico orientados a la protección solar y el confort térmico, así como también amplias colecciones de tejidos decorativos que han sido cuidadosamente seleccionados de acuerdo a las tendencias en decoración de interior.</p>
                        <a href="telas" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas telas clearfix">
                    </div>
                    <div class="center">
                        <a href="telas" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class=" cortina  contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Cortinas personalizadas</h3>
                        <p>Personaliza tus cortinas con impresión de alta resolución. Pon a volar tu imaginación; puedes imprimir una fotografía, una imagen, un logotipo, una publicidad, un texto y un millón de posibilidades.</p>
                        <a href="personalizadas" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas personalizadas clearfix">
                    </div>
                    <div class="center">
                        <a href="personalizadas" class="button invisibleb">Ver más...</a>
                    </div>
                </div>
                
                <div class="papel contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Papel de colgadura</h3>
                        <p></p>
                        <a href="papel-colgadura" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas personalizadas clearfix">
                    </div>
                    <div class="center">
                        <a href="papel-colgadura" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class="papel contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Panel 3D board</h3>
                        <p></p>
                        <a href="panel-3d-board" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas personalizadas clearfix">
                    </div>
                    <div class="center">
                        <a href="panel-3d-board" class="button invisibleb">Ver más...</a>
                    </div>
                </div>
                
                <div class="exterior contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Toldos</h3>
                        <p></p>
                        <a href="toldos" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas personalizadas clearfix">
                    </div>
                    <div class="center">
                        <a href="toldos" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

                <div class="otros contenido-cortinas clearfix">
                    <div class="contenedor-texto">
                        <h2><i class="fal fa-ellipsis-h-alt"></i></h2>
                        <h3>Otros</h3>
                        <p></p>
                        <a href="otros" class="button ">Ver más...</a>
                    </div>
                    <div class="cortinas personalizadas clearfix">
                    </div>
                    <div class="center">
                        <a href="otros" class="button invisibleb">Ver más...</a>
                    </div>
                </div>

            </div>
            
            
            <!--
            <div class="contenedor">
                <ul class="cortinas clearfix">
                        <li>
                            <div class="contenedor-imagen">
                                <img src="img/sheer.jpg" alt="Cortina">
                            </div>
                        </li>
                        <li>
                            <h2>sheer elegance</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatum odit dignissimos placeat possimus exercitationem laudantium temporibus maxime modi ab reiciendis expedita maiores esse amet, cupiditate ullam mollitia fugit quidem.</p>
                        </li>
                </ul>
            </div>
        -->
        </section>
        <!--Trabajos destacados-->
        <section class="trabajosDestacados gallery-block cards-gallery">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Trabajos destacados <i class="fal fa-star"></i></h2>
                        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita deleniti possimus explicabo. Eveniet velit ratione hic voluptatum illo dolor maiores dolorum ipsa. Doloribus ut unde, ipsa voluptatem voluptas corporis?</p>
                        <br><br>
                        <div class="row">
                            @php
                                $tmp = 0;
                            @endphp
                            @foreach ($trabajosDestacados as $trabajoDestacado)
                                @if ($tmp++ < 3)
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
                                @endif
				            @endforeach
                        </div>
                        <div class="text-center mt-4">
                            <a href="trabajos-destacados" class="button buttonRelleno">Ver mas...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--post-ventas-->
        <section id="post-ventas" class="post-ventas seccion parallax">
            <h2>post-ventas<i class="fal fa-badge-check"></i></h2>
            <p class="contenedor">Servicio rápido y oportuno para los sistemas decorativos de nuestros clientes</p>
            <div class="contenedor">
                <ul class="contenido-ventas clearfix">
                    <li class="lavado">
                        <div class="elipse"><i class="fas fa-ellipsis-h-alt"></i></div>
                        <div class="gota"><i class="fal fa-tint"></i></div>
                        <h3>Lavado</h3>
                        <p>Servicio de lavado de antiguos y nuevos sistemas decorativos.</p>
                    </li>
                    
                    <li class="mantenimiento">
                        <div><i class="fal fa-toolbox"></i></div>
                        <h3>Mantenimiento</h3>
                        <p>Mantenimiento y refacción de antiguos y nuevos sistemas decorativos con accesorios de alta calidad.</p>
                    </li>
                    
                    <li class="instalacion">
                        <div><i class="fal fa-screwdriver"></i></i></div>
                        <h3>Instalacion</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque rerum iure animi quidem ea aspernatur? Quas molestiae ad est numquam modi. Deserunt temporibus debitis nihil distinctio earum ea sunt commodi!</p>
                    </li>
                </ul>
            </div>
        </section>
        @include('templates.formulario-cotizacion')
        @include('templates.footer')
