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
        	<div class="seccion_bm"></div>
        	<div class="head">
        		<div class="taxonomia">
        			<h2>Buena</h2>
        			<span>- mesa -</span>
        		</div>	
        	</div>
        	<div class="contenido">
            	<!--Buena mesa--><?php $view = views_get_view('secciones'); print $view->preview('block'); ?><!--FIN Buena mesa-->
			</div>
		</div>
      </div>    
    </div>
  </section>
</body>
</html>