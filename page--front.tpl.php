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
        <div class="grafiLeft"></div>
        <div class="leftOrange"> 
          <div class="left">
            <div class="destacada">
              <h2>Rutas culinarias</h2>
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
              <?php $view = views_get_view('rutas'); print $view->preview('block_2'); ?>
            </div>
            <div class="lateral">
              <?php $view = views_get_view('rutas'); print $view->preview('block_3'); ?>
            </div>
          </div>
        </div>       
        <div class="grafiRight"></div>
      </section>
    </article>
    
  </section>
</body>
</html>