(function() {
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {

        //cortinas y papeles
        var cortinas = document.getElementsByClassName('cortina'),
            papeles = document.getElementsByClassName('papel'),
            exteriores = document.getElementsByClassName('exterior'),
            otros = document.getElementsByClassName('otros');

        //Botones productos
        var cortinasButton = document.getElementById('cortinasb'),
            papelButton = document.getElementById('papelb'),
            exterioresButton = document.getElementById('exterioresb'),
            otrosButton = document.getElementById('otrosb');
        cortinasButton.addEventListener('click', cortina);
        papelButton.addEventListener("click", papel);
        exterioresButton.addEventListener("click", exterior);
        otrosButton.addEventListener("click", otro);

        function cortina() {
            for (var i = 0; i < papeles.length; i++) {
                papeles[i].style.display = 'none';
            }
            for (var i = 0; i < exteriores.length; i++) {
                exteriores[i].style.display = 'none';
            }
            for (var i = 0; i < otros.length; i++) {
                otros[i].style.display = 'none';
            }
            for (var i = 0; i < cortinas.length; i++) {
                cortinas[i].style.display = 'block';
            }
        }

        function papel() {
            for (var i = 0; i < cortinas.length; i++) {
                cortinas[i].style.display = 'none';
            }
            for (var i = 0; i < exteriores.length; i++) {
                exteriores[i].style.display = 'none';
            }
            for (var i = 0; i < otros.length; i++) {
                otros[i].style.display = 'none';
            }
            for (var i = 0; i < papeles.length; i++) {
                papeles[i].style.display = 'block';
            }
        }

        function exterior() {
            for (var i = 0; i < cortinas.length; i++) {
                cortinas[i].style.display = 'none';
            }
            for (var i = 0; i < otros.length; i++) {
                otros[i].style.display = 'none';
            }
            for (var i = 0; i < papeles.length; i++) {
                papeles[i].style.display = 'none';
            }
            for (var i = 0; i < exteriores.length; i++) {
                exteriores[i].style.display = 'block';
            }
        }

        function otro() {
            for (var i = 0; i < cortinas.length; i++) {
                cortinas[i].style.display = 'none';
            }
            for (var i = 0; i < papeles.length; i++) {
                papeles[i].style.display = 'none';
            }
            for (var i = 0; i < exteriores.length; i++) {
                exteriores[i].style.display = 'none';
            }
            for (var i = 0; i < otros.length; i++) {
                otros[i].style.display = 'block';
            }
        }
    });
})();

$(function() {
    'use strict'
    /*
    //envio de formulario ajax
    var envia = document.getElementById('enviar');
    var formulario = document.getElementById('modalForm');
    var action = formulario.getAttribute('action');

    function enviarDatos() {
        var form_datos = new FormData(formulario);
        var xhr = new XMLHttpRequest();
        xhr.open('POST',action, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function () {
            if(xhr.readyState == 4 && xhr.status == 200){
                var mensaje = document.getElementById('mensaje');
                mensaje.classList.add("mensajeVisible");
                //$('#mensaje').addClass('mensajeVisible')
                setTimeout(function() {
                    mensaje.classList.remove("mensajeVisible");
                }, 4000);
                document.getElementById("modalForm").reset();
            }
        }
        xhr.send(form_datos);
    };

    

    envia.addEventListener('click', function (e) {
        e.preventDefault();
        var nombre = document.getElementById('nombre').value,
            ciudad = document.getElementById('ciudad').value,
            barrio = document.getElementById('barrio').value,
            telefono = document.getElementById('telefono').value,
            email = document.getElementById('email').value,
            medidas = document.getElementById('medidas').value,
            uso = document.getElementById('uso').value;

        if (nombre === "" || ciudad === "" || barrio === "" || telefono === "" || email === "" || medidas === "" || uso === ""){
            alert('Todos los campos son obligatorios');
            return false;
        }else{
        enviarDatos();
        return false;
        }
    });
    

   var cerrar = document.getElementById('cerrar');
    cerrar.addEventListener('click', function (e) {
        $('#mensaje').removeClass('mensajeVisible');
        $('#mensaje').addClass('ocultar');
    });*/
    $('#enviar').click(function(e) {
        e.preventDefault();
        var token = $('#token').val();
        var nombre = $("input#nombre").val();
        var ciudad = $("input#ciudad").val();
        var barrio = $("input#barrio").val();
        var telefono = $("input#telefono").val();
        var email = $("input#email").val();
        var opcion = $("input[name=medidas]:checked").val();
        var usos = $("select#uso").val();
        var informacion = $("textarea#informacion").val();

        if (nombre === "" || ciudad === "" || barrio === "" || telefono === "" || email === "" || usos === "" || informacion === "") {
            alert('Todos los campos son obligatorios');
        } else {

            $.ajax({
                headers: { 'X-CSRF-TOKEN': token },
                type: 'POST',
                async: true,
                url: 'recibodatos',
                data: { nombre: nombre, ciudad: ciudad, barrio: barrio, telefono: telefono, email: email, medidas: opcion, uso: usos, informacion: informacion },
                // success: function (response) {
                //     console.log("OK" + response.data.message);
                // },
                // error: function (xhr, textStatus, errorMessage) {
                //     console.log("ERROR" + errorMessage + textStatus + xhr);
                // }
                success: function(response) {
                    var mensaje = document.getElementById('mensaje');
                    mensaje.classList.add("mensajeVisible");
                    // mansaje.classList.add("carga");
                    //$('#mensaje').addClass('mensajeVisible')
                    setTimeout(function() {
                        mensaje.classList.remove("mensajeVisible");
                        // mensaje.classList.remove("carga");
                    }, 4000);
                    document.getElementById("modalForm").reset();
                }
            });
        }
    });

});

$(function() {
    'use strict'
    /*var windowHeight = $(window).height();
    
    */
    var barraAltura = $('.barra').innerHeight();
    var barraAlturaSP = barraAltura - 40;

    $('.sinPadding').css({ 'padding': '0px' });


    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 1) {
            $('.sinPadding').addClass('barraP');
            $('.barra').addClass('reduccionbarra');
            $('nav ul ul').addClass('transparente');
            $('nav ul ul li a').addClass('transparente1');
            $('nav ul ul li a').addClass('transparente2');
            $('.click-producto').css({ 'margin-top': barraAlturaSP + 'px' });
        } else {
            $('.sinPadding').removeClass('barraP');
            $('.barra').removeClass('reduccionbarra');
            $('nav ul ul').removeClass('transparente');
            $('nav ul ul li a').removeClass('transparente1');
            $('nav ul ul li a').removeClass('transparente2');
            $('.click-producto').css({ 'margin-top': '0px' });
        }

    });

    //menu movil displazar

    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();

    });
    /*$('.cortina1').hide();
    
    $(".cortina").click(function () {
        $('.cortina1').show();
        $('.cortina1').animate({ right: '1000px' });
        $('.cortina1').animate({ left: '0px' });
    });
    */
    //animaciones
    $('.cortina, .papel, .que-hacemos p, .quienes-somos p, .lavado, .instalacion, .mantenimiento').css({ 'visibility': 'hidden' });
    $('.contenido-hero h1').css({ 'display': 'none' });
    $('.contenido-cortinas:even').each(function() {
        $(this).addClass('animacionD');
    });
    $('.contenido-cortinas:odd').each(function() {
        $(this).addClass('animacionI');
    });
    $('.contenido-cortinas:even div:first-child').each(function() {
        $(this).addClass('right');
    });
    $('.contenido-cortinas:odd div:first-child').each(function() {
        $(this).addClass('left');
    });
    $('.contenido-cortinas:even div:first-child a').each(function() {
        $(this).addClass('button-left');
    });
    $('.contenido-cortinas:odd div:first-child a').each(function() {
        $(this).addClass('button-right');
    });


    $(window).scroll(function() {
        var topOfWindow = $(window).scrollTop();

        $('.animacionD').each(function() {
            var imagePos = $(this).offset().top;
            if (imagePos < topOfWindow + 700) {
                $(this).addClass("slideRight");
            }
        });
        $('.animacionI').each(function() {
            var imagePos = $(this).offset().top;
            if (imagePos < topOfWindow + 700) {
                $(this).addClass("slideLeft");
            }
        });
        $('.que-hacemos p, .quienes-somos p').each(function() {
            var imagePos = $(this).offset().top;
            if (imagePos < topOfWindow + 800) {
                $(this).addClass('fadeIn');
            }
        });

        $('.lavado').each(function() {
            var imagePos = $(this).offset().top;
            if (imagePos < topOfWindow + 500) {
                $(this).addClass('bigEntrance');
            }
        });
        $('.instalacion').each(function() {
            var imagePos = $(this).offset().top;
            if (imagePos < topOfWindow + 500) {
                $(this).addClass('bigEntrance');
            }
        });
        $('.mantenimiento').each(function() {
            var imagePos = $(this).offset().top;
            if (imagePos < topOfWindow + 500) {
                $(this).addClass('bigEntrance');
            }
        });
    });
    $('.contenido-hero h1').fadeIn(2000);
    //descripcion de productos
    $(document).ready(function() {
        $(".titulo h2").lettering();
    });
    //Cotizar producto
    /*
        $("#fm-modal").on("submit", ".modalForm", function () {
            var parametros = {
                "enviar": $("input#enviar").val(),
                "nombre": $("input#nombre").val(),
                "ciudad": $("input#ciudad").val(),
                "barrio": $("input#barrio").val(),
                "telefono": $("input#telefono").val(),
                "email": $("input#email").val(),
                "medidas": $("input#medidas").val(),
                "uso": $("input#uso").val()
            };
            $.ajax({
                type: "POST",
                url: "agregarModal_validacion.php",
                data: parametros,
                success: function (data) {
                },
                error: function () {
                }
            });
            return false; // Esto para evitar que envíe el formulario.
        });
        */



    $('.linkScroll').click(function() {
        if (location.pathname.replace(/^\//, ") == this.pathname.replace(/^\//,") &&
            location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target ||
                $('[name =' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top + -barraAltura + 10;
                $('html, body').animate({ scrollTop: targetOffset }, 2000);
            }
        }
    });

});