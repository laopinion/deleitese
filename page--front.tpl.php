<!DOCTYPE html>
<html>
<head>
  <title>Deléitese</title>
    <script type="text/javascript">
        var feed = new Instafeed({
            get: 'tagged',
            tagName: 'Deléitese',
            clientId: '2bf85d7bc7294bda99da17e58dcc1b3a',
            limit: '9'
        });
        feed.run();
    </script>
    <?php include("js/pautas_home.js"); ?>
</head>
<body>
  <section id="home">
    <div class="buscador">
      <div class="container buscar">
        <i class="icono"></i>
        <form action="">
          <input type="text" placeholder="Escriba su busqueda">
          <div class="select">
            <select name="" id="">
              <option value="">Option1</option>
              <option value="">Option3</option>
              <option value="">Option2</option>
            </select>
          </div>
          <button id="btnBuscar"></button>
        </form>
      </div>
    </div>

    <div class="slides">
      <ul class="rslides">
        <li><img src="<?php print base_path(); ?>sites/default/themes/deleitese/images/slide/queremosComer.jpg" alt="queremosComer"></li>
        <li><img src="<?php print base_path(); ?>sites/default/themes/deleitese/images/slide/queremosComer.jpg" alt="queremosComer"></li>
        <li><img src="<?php print base_path(); ?>sites/default/themes/deleitese/images/slide/queremosComer.jpg" alt="queremosComer"></li>
      </ul>
    </div>

    <article id="rutas">
      <section class="notas">
        <div class="leftOrange"> 
          <div class="grafiLeft"></div>
          <div class="left">
            <div class="destacada">
              <div class="title">
                <i class="icono"></i>
                <h2>Rutas culinarias</h2>
              </div>
              <?php $view = views_get_view('rutas'); print $view->preview('block'); ?>
            </div>
            <div class="lateral">
              <?php $view = views_get_view('rutas'); print $view->preview('block_1'); ?>
            </div>
          </div>
        </div>
        <div class="rightNegro"> 
          <div class="right">
            <div class="destacada">
              <div class="title">
                <h2>El mejor plato de</h2>
                <i class="icono"></i>
              </div>
              <?php $view = views_get_view('rutas'); print $view->preview('block_2'); ?>
            </div>
            <div class="lateral">
              <?php $view = views_get_view('rutas'); print $view->preview('block_3'); ?>
            </div>
          </div>
          <div class="grafiRight"></div>
        </div>
      </section>
    </article>

    <article id="noticias">
      <?php $view = views_get_view('home'); print $view->preview('block_2'); ?>
      <div class="verMas" data-activo='0'>
        <h2>Ver más</h2>
        <span></span>
        <div class="tri"></div>
      </div>
    </article>

    <article id="modulo1">
      <div class="notas">
        <aside class="flechaIzq"></aside>
        <!-- Tener en cuenta el tipo de contenido el campo direccion-->
        <?php $view = views_get_view('home'); print $view->preview('block_8'); ?>
        <aside class="flechaDer"></aside>
      </div>
      <div class="newsletter">
        <h3></h3>
        <!--formulario--><?php $block = module_invoke('webform', 'block_view', 'newsletter-470');print render($block['content']); ?><!--FIN formulario-->
      </div>
      <div class="personajes">
        <?php $view = views_get_view('home'); print $view->preview('block_1'); ?>
        <div class="verMas" data-activo='0'>
          <h2>Ver más</h2>
          <span></span>
          <div class="tri"></div>
        </div>
      </div>
    </article>
    
    <article id="modulo2">
      <div id="videos">
        <?php $view = views_get_view('home'); print $view->preview('block_4'); ?>
        <div class="verMas" data-activo='0'>
          <h2>Ver más</h2>
          <span></span>
          <div class="tri"></div>
        </div>
      </div>
    </article>

    <article id="modulo3">
      <h3>Hola mundo</h3>
    </article>
  </section>
</body>
</html>