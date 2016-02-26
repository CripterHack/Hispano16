<?php

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-MX"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-MX"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-MX"> <![endif]-->
<!--[if gt IE 8]><!--> <html id="contacto" class="no-js" lang="es-MX"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Fomentamos, promovemos e investigamos el género del fashion film en México y Latinoamérica así como su impacto dentro de las industrias creativas y el arte. Nos sumamos a la oferta cultural de nuestro país con una propuesta innovadora que celebra la creatividad, la moda, el diseño y el arte bajo un diálogo de fraternidad entre los países hispanoparlantes.">
    <meta name="keywords" content="hispano, fashion, mxfff, films, festival, 2015, 2016" />
    <meta name="author" content="Izigna Mx, Development &amp; Design: Edgar Zorrilla">
    <meta name="copyright" content="HISPANO" />
    <meta name="robots" content="all, follow" />
    <meta name="distribution" content="global"/>
    <link rev="made" href="mailto:izignamx@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Contacto | HISPANO</title>
    <link rel="apple-touch-icon" href="../assets/img/apple.png">
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <link rel="shortcut icon" href="../assets/img/icon-logo.png" type="image/png">
    <link rel="shortcut icon" href="../assets/img/icon-logo.jpg" type="image/jpeg">
    <link rel="shortcut icon" href="../assets/img/icon-logo.gif" type="image/gif">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <noscript>
      <link rel="stylesheet" type="text/css" href="../assets/css/assets/noscript.min.css" />
    </noscript>
    <script src="../assets/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">Estás usando una versión <strong>obsoleta</strong> de tu navegador. Por Favor <a href="http://browsehappy.com/">Actualiza tu navegador</a> Para mejorar tu experiencia en la web.</p>
    <![endif]-->
<!-- Loader -->
    <!--div id="loader-wrapper">
            <div id="loader" class="loader">Loading...</div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div-->
<!-- Header -->
    <header class="cd-header">
        <div class="cd-logo logo">
        <a href="#">
          <img id="logo" src="../assets/img/logo.png" alt="HISPANO | Logotipo">
        </a>
      </div>
      <nav id="slide-menu">
        <ul>
          <li class="text-left"><a href="../index.html">INICIO</a></li>
          <li>
            <a href="../hispano">HISPANO</a>
            <ul class="slide-menu-sub">
              <li><a href="../hispano/edicion-1/">1º EDICIÓN</a></li>
            </ul>
          </li>
          <li>
            <a href="../2016">EDICIÓN 2016</a>
            <ul class="slide-menu-sub">
              <li><a href="../2016/hotel-moda">HOTEL MODA</a></li>
              <li><a href="../2016/luxury-sunset-beach">LUXURY SUNSET BEACH</a></li>
              <li><a href="../2016/creative-lab">CREATIVE LAB</a></li>
              <li><a href="../2016/internacional">INTERNACIONAL</a></li>
            </ul>
          </li>
          <li>
            <a href="../convocatoria">CONVOCATORIA</a>
            <ul class="slide-menu-sub">
              <li class="sep">
                <a class="internal" href="../convocatoria/#secret"><i class="fa fa-lock white"></i>EXCLUSIVE</a>
              </li>
              <li><a href="../convocatoria/#mfff">MFFF</a></li>
            </ul>
          </li>
          <li><a href="../prensa">PRENSA</a></li>
          <li><a href="../aliados">ALIADOS</a></li>
          <li><a class="bread-active" href="#">CONTACTO</a></li>
        </ul>
      </nav>
      <div id="content">
        <div class="menu-trigger">
          <img src="../assets/img/menu-alt.png" alt="Navegación" title="Navegación">
        </div>
      </div>
    </header>
    <!-- CONTENT -->
    <section id="contact" class="col-md-12 both no-margin parallaxBack">
      <div id="head" class="box col-md-4 to-right parallax">
            <form id="formContact" class="col-md-12 col-xs-12 centerGrid" action="../assets/php/index.php" method="post"><br>
            <h2 class="text-left col-md-11 col-xs-11 white no-margin">Contacto</h2>
            <br/><br/>
            <div class="field-wrap col-md-12 col-xs-12 both">
                <label class="form-label white col-md-4 col-xs-4 no-padd">
                    Nombre<span class="req">*</span>
                </label>
                <input class="col-md-8 col-xs-8" id="name" name="name" title="Escriba su nombre" placeholder="Su Nombre" type="text" required />
            </div>
            <br>
            <div class="field-wrap col-md-12 col-xs-12 both">
                <label class="form-label white col-md-8 col-xs-8 no-padd">
                    Correo Electrónico<span class="req">*</span>
                </label>
                <input class="col-md-4 col-xs-4" id="email" name="email" title="E-Mail de contacto" placeholder="name@mail.com" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required />
            </div>
            <br>
            <div class="field-wrap col-md-12 col-xs-12">
                <label class="form-label white col-md-4 col-xs-4 no-padd">
                    Teléfono<span class="req">*</span>
                </label>
                <input class="col-md-8 col-xs-8" id="tel" name="tel" title="Número telefónico 8 a 15 dígitos" maxlength="15" minlength="8" placeholder="Sú número telefónico" type="tel" pattern="[0-9]*" />
            </div>
            <br>
            <div class="field-wrap col-md-12 col-xs-12 both">
                <label class="form-label white col-md-4 col-xs-4 both no-padd">
                    Mensaje
                </label>
                <textarea class="col-md-11 col-xs-11 centerGrid" id="message" name="message" title="Escriba su Mensaje o Comentarios" maxlength="250" minlength="10" placeholder="Su Mensaje..." type="text" required></textarea>
            </div>
            <button id="submit" name="submit" type="submit" class="btn back-dark white both col-md-5 col-xs-5 centerGrid"/>Enviar</button>
        </form>
        <div id="msgSubmit" class="hidden"></div>
        </div>
    </section>
<!-- FOOTER -->
    <footer>
      <div class="col-md-12 both footer-top">
        <a class="cd-top text-center" href="#head"><i class="fa fa-angle-up floating white"></i></a>
      </div>
      <div class="col-md-12 both footer-body">
        <div class="logo center">
            <a href="#">
              <img id="logo" src="../assets/img/logo.png" alt="Logotipo">
            </a>
        </div>
        <div class="footer-social">
          <ul class="inline text-center no-padd no-margin">
            <li>
              <a href="#"><i class="fa fa-facebook-official"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter-square"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-spotify"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer-links">
          <ul class="inline text-center no-padd no-margin">
            <li>
              <a href="../index.html">INICIO</a>
            </li>
            <li>
              <a href="../hispano">HISPANO</a>
            </li>
            <li>
              <a href="../2016">EDICIÓN 2016</a>
            </li>
            <li>
              <a href="../2016/hotel-moda">HOTEL MODA</a>
            </li>
            <li>
              <a href="../2016/luxury-sunset-beach">LUXURY SUNSET BEACH</a>
            </li>
            <li>
              <a href="../2016/creative-lab">CREATIVE LAB</a>
            </li>
            <li>
              <a href="../2016/internacional">INTERNACIONAL</a>
            </li>
            <li>
              <a href="../convocatoria">CONVOCATORIA</a>
            </li>
            <li>
              <a href="../prensa">PRENSA</a>
            </li>
            <li>
              <a href="../aliados">ALIADOS</a>
            </li>
            <li>
              <a class="bread-active" href="#">CONTACTO</a>
            </li>
          </ul>
        </div>
        <div class="col-md-12 footer-bottom both">
            <p class="footer-company-name white">Made by
                <a href="http://izigna.mx/"><img title="Izigna Mx, Full-Stack Developer Edgar Zorrilla" alt="Izigna.mx Agencia Digital" src="../assets/img/izignamx-agencia-digital.png" style="max-height: 20px;margin-top: 0px;" />
                </a>&nbsp;
            </p>
        </div>
      </div>
    </footer>
    <script src="../assets/js/cont/main.cont.js"></script>
    <script type="text/javascript">
    //$('body').addClass('loaded');
    function submitForm(){

        var name = $("#name").val();
        var email = $("#email").val();
        var email = $("#tel").val();
        var message = $("#message").val();
 
        $.ajax({
        type: "POST",
        url: "../assets/php/index.php",
        data: "name=" + name + "&email=" + email + "&telephone=" + tel + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
         }
        });
    }
    function formSuccess(){
        $( "#msgSubmit" ).removeClass( "hidden" );
    }

    $("#formContact").submit(function(event){
        event.preventDefault();
        submitForm();
    });
    </script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="../assets/js/assets/selectivizr-min.js"></script>
    <![endif]--> 
    </body>
</html>