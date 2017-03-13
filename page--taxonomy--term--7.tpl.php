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
        	<div class="seccion_re"></div>
        	<div class="head">
        		<div class="taxonomia">
        			<h2>Recetas</h2>
        		</div>	
        	</div>
        	<div class="contenido">
            	<!--Recetas--><?php $view = views_get_view('secciones'); print $view->preview('block_1'); ?><!--FIN Recetas-->
			</div>
		</div>
      </div>    
    </div>
  </section>
</body>
</html>