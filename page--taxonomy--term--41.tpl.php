<!DOCTYPE html>
<html>
<head>
  <title>Deléitese</title>
</head>
<body>
  <section class="centerContent">
    <div class="detailContent">
      <div id="page">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <div id="seccion">
          <div class="seccion_fo"></div>
          <div class="head">
            <div class="taxonomia">
              <h2>Foodies</h2>
            </div>  
          </div>
          <div class="contenido">
              <!--Foodies--><?php $view = views_get_view('secciones'); print $view->preview('block_4'); ?><!--FIN Foodies-->
      </div>
    </div>
      </div>    
    </div>
  </section>
</body>
</html>