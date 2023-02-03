<!DOCTYPE html>
<html lang="es">
<!--pagina web de una boda con invitacion-->
  <head>
    <meta charset="utf-8">
    <title>J & G Nuestra boda</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- font awesome css-->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- default skin -->
    <link rel="stylesheet" class="alternate-style" type="text/css" href="css/skins/pink.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Favicon -->
    <link rel="icon" href="./img/favicon.ico">
  </head>

  <body>
    <!-- start header -->
    <header class="header">
      <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
              <a href="index.php">J & G</a>
            </div>
            <!--- navbar -->
            <div class="hamburger-btn">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="nav">
              <ul class="navbar">
                <li><a href="#" data-scroll-nav="0" class="active">Inicio</a></li>
                <li><a href="#" data-scroll-nav="1">Pareja</a></li>
                <li><a href="#" data-scroll-nav="2">Evento</a></li>
                <li><a href="#" data-scroll-nav="3">Fotos</a></li>
                <li><a href="#" data-scroll-nav="4">Mesa de regalos</a></li>
                <li><a href="#" data-scroll-nav="5">Asistencia</a></li>
              </ul>
            </div>
          </div>
      </div>
    </header>
    <!-- end header -->
    <!-- start home -->
    <section class="home-section" data-scroll-index="0">
      <!--- slider -->
      <div class="slide" style="background-image: url('img/slides/slide-1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="home-content">
                <p>¡Nos casamos!</p>
                <h1>Juan Carlos & Georgina</h1>
                <p id="date">11/02/2023</p>
                <!--Agregamos un div con la cuenta regresiva-->
                <div class="countdown" id="cuenta"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--- end slider -->
      <!--Countdown-->
      <script src="js/simplyCountdown.min.js"></script>
      <script src="js/countdown.js"></script>
    </section>
    <!-- end home -->
    <!--Start pareja-->
    <section class="couple-section" data-scroll-index="1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="section-title">
            <h2>Nuestra historia de amor</h2>
          </div>
        </div>
        <div class="row">
          <div class="couple">
            <img src="img/groom.jpg" alt="happy couple">
            <h3>Juan Carlos</h3>
          </div>
          <div class="couple">
            <i class="fa fa-heart"></i>
            <img src="img/bride.jpg" alt="happy couple">
            <h3>Georgina Valdos</h3>
          </div>
        </div>
      </div>
    </section>
    <!--End pareja-->
    <!--Start frase con imagen de slide2-->
    <section class="frase-section">
      <div class="slide" style="background-image: url('img/slides/slide-2.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="frase-content">
              <p>¡Ven a celebrar este día lleno de amor y de dicha junto a nosotros!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End frase con imagen de slide2-->
    <!--Dress section-->
    <section class="dress-section">
      <div class=""container">
        <div class="row justify-content-center">
          <div class="section-title">
            <h2>Dress code</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="dress-content">
            <div class="dress-img">
              <img src="img/dresscode.png" alt="dress code">
              <div class="dress-text">
                <p>Formal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End dress section-->
    <!--Start evento-->
    <section class="event-section" data-scroll-index="2">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Celebra con nosotros</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- Item start-->
          <div class="event-item">
            <div class="event-item-inner">
              <h3>Ceremonia religiosa</h3>
              <span class="date">11 de febrero</span>
              <span class="time">4:30pm</span>
              <p><b>Templo Inmaculado Corazón de María</b></p>
              <p>Los Robles, Nuevo México, Jal., México</p>
              <a href="https://maps.app.goo.gl/fv327Ckddj3PCVpj6?g_st=iw" class="btn"><button class="btn-1">Ver más</button></a>
            </div>
          </div>
          <!-- Item end-->
          <!-- Item start-->
          <div class="event-item">
            <div class="event-item-inner">
              <h3>Recepción</h3>
              <span class="date">11 de febrero</span>
              <span class="time">7:45pm</span>
              <p><b>Casa Regina</b></p>
              <p>C. Industria Eléctrica #41, La Tijera, 45647 Guadalajara, Jal., México</p>
              <a href="https://maps.app.goo.gl/ygX89VhbPVACLSnp7?g_st=iw" ><button class="btn-1">Ver más</button></a>
            </div>
          </div>
          <!-- Item end-->
        </div>
      </div>
    </section>
    <!--End evento-->
    <!--Start fotos-->
    <section  class="gallery-section" data-scroll-index="3">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Nuestras fotos</h2>
          </div>
          <div class="row">
            <!--foto inicia-->
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="img/gallery/thumb/1.jpg" data-large="img/gallery/large/1.jpg" alt="couple gallery">
              </div>
            </div>
            <!--foto termina-->
            <!--foto inicia-->
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="img/gallery/thumb/2.jpg" data-large="img/gallery/large/2.jpg" alt="couple gallery">
              </div>
            </div>
            <!--foto termina-->
            <!--foto inicia-->
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="img/gallery/thumb/3.jpg" data-large="img/gallery/large/3.jpg" alt="couple gallery">
              </div>
            </div>
            <!--foto termina-->
            <!--foto inicia-->
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="img/gallery/thumb/4.jpg" data-large="img/gallery/large/4.jpg" alt="couple gallery">
              </div>
            </div>
            <!--foto termina-->
            <!--foto inicia-->
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="img/gallery/thumb/5.jpg" data-large="img/gallery/large/5.jpg" alt="couple gallery">
              </div>
            </div>
            <!--foto termina-->
            <!--foto inicia-->
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="img/gallery/thumb/6.jpg" data-large="img/gallery/large/6.jpg" alt="couple gallery">
              </div>
            </div>
            <!--foto termina-->
          </div>
      </div>
    </section>
    <!--End fotos-->
    <!--Gallery popup start-->
    <div class="gallery-popup">
        <div class="gp-container">
            <div class="gp-counter"></div>
            <div class="gp-close">&times;</div>
            <img src="img/gallery/large/1.jpg" class="gp-img" alt="gallery img">
            <div class="gp-controls">
                <div class="prev">
                  <i class="fas fa-angle-left"></i>
                </div>
                <div class="next">
                  <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Gallery popup end-->
    <!--Start mesa de regalos-->
    <section class="gift-section" data-scroll-index="4">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Mesa de regalos</h2>
          </div>
          <div class="row">
            <!--mesa inicia-->
            <div class="gift-item">
              <div class="gift-item-inner">
                <img src="img/liverpool.png" data-large="img/liverpool.png" alt="gift">
                <div class="gift-info">
                  <h3>Liverpool</h3>
                  <p>Número de evento: 50601365</p>
                  <a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/50601365"><button class="btn-1">Ver más</button></a>
                </div>
              </div>
            </div>
            <!--mesa termina-->
            <!--mesa inicia-->
            <div class="gift-item">
              <div class="gift-item-inner">
                <img src="img/amazon.jpg" data-large="img/amazon.jpg" alt="gift">
                <div class="gift-info">
                  <h3>Amazon</h3>
                  <p>8O1ZS2OGJ5GC</p>
                  <a href="https://www.amazon.com.mx/wedding/georgina-valdos-juan-carlos-ceballos-guadalajara-october-2022/registry/8O1ZS2OGJ5GC"><button class="btn-1">Ver más</button></a>
                </div>
              </div>
            </div>
            <!--mesa termina-->
            <!--mesa inicia-->
            <div class="gift-item">
              <div class="gift-item-inner">
                <img src="img/tarjeta.jpg" data-large="img/tarjeta.jpg" alt="gift">
                <!--Datos de la tarjeta de debito-->
                <div class="gift-info">
                  <h3>Tarjeta de débito</h3>
                  <span class="hide" id="hideText">
                    <p>Nombre: <span>Georgina Valdos Villaseñor</span></p>
                    <p>Número de tarjeta: <span>4152 3134 2964 1165</span></p>
                    <p>Banco: <span>BBVA</span></p>
                  </span>
                  <button class="btn-1" id="hideText_btn">Ver más</button>
              </div>
            </div>
            <!--mesa termina--> 
          </div>
        </div>
      </div>
    </section>
    <!---End mesa de regalos-->
    <!--asistencia inicio-->
    <section class="rsvp-section" data-scroll-index="5">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Confirmar asistencia</h2>
            <p>
              Favor de confirmar su asistencia antes del <b>15 de diciembre</b><br>
              <b>-No niños-</b>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="rsvp-form">
            <form class="form" name="form" action="registro.php" method="post" id="formulario"><!-- El metodo post es para que no se muestren los datos en la url-->
              <div class="row">
                <div class="input-group w50" id="grupo__nombre">
                  <div class="formulario__grupo" id="grupo__nombre">
                    <label class="formulario__label">Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre y apellido" class="input-control" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i> 
                    <p class="formulario__input-error">Por favor, escribe tu nombre</p>
                  </div>
                </div> 
                <div class="input-group w50" id="grupo__telefono">
                  <div class="formulario__grupo" id="grupo__telefono">
                    <label class="formulario__label">Telefono</label>
                    <input type="number" name="telefono" placeholder="Telefono" class="input-control" id="telefono"required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <p class="formulario__input-error" >El numero debe contener 10 digitos numéricos.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-group">
                  <label class="formulario__label">Confirmar asistencia</label>
                  <select class="input-control" name="asistencia" required>
                    <option value="Asistire">Asistiré</option>
                    <option value="No asistire">No asistiré</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-group">
                  <label class="formulario__label">Parentesco</label>
                  <select class="input-control" name="parentesco" required>
                    <option value="Amigo/Conocido">Amigo/Conocido</option>
                    <option value="Familiar de Gina">Familiar de Gina</option>
                    <option value="Familiar de JC">Familiar de Juan Carlos</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-group">
                  <label class="formulario__label">Agregar detalle</label>
                  <textarea name="mensaje" placeholder="Agregar detalle" class="input-control"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="input-group">
                  <div class="g-recaptcha" data-sitekey="6LfLbkoiAAAAAE6lMk7qYt3Z6KiZYICND-O1tlK5"></div>
                  <br>
                  <?php
                    if(isset($_GET['error'])){
                    echo "<p id='error'>$_GET[error]</p>";
                    }
                    if(isset($_GET['success'])){
                      echo "<p id='success'>$_GET[success]</p>";
                    }
                  ?> 
                </div>
              <div class="row">
                <div class="input-group">
                  <button id="enviarFormulario" type="submit" class="btn-1" value="Enviar" onclick="return enviarFormulario()">Enviar</button>
                  <!-- <input type="submit" value="Enviar" class="btn-1" id="btnEnviar"> -->
                </div>
              </div>
              <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
              </div>  
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--End asistencia-->
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-content">
            <div class="couple-name">
              <h2>Juan Carlos Ceballos
                <span>&</span>
                Georgina Valdos
              </h2>
            </div>
            <div class="section-title">
              <h2>Te esperamos</h2>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End footer-->
    <!--Copyright start-->
    <p class="copyright-text">&copy; Copyright 2022. All Rights Reserved by J&G</p>
    <!--End Copyright-->
    <!--jquery-->
    <script src="js/jquery.min.js"></script>
    <!---Scrollit-->
    <script src="js/scrollIt.min.js"></script>
    <!--js-->
    <script src="js/main.js"></script>
    <script src="./js/formulario.js"></script><!-- Validacion del formulario -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!-- Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>