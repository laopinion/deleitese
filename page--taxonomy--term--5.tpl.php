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
        	<div class="seccion_cm"></div>
        	<div class="head">
        		<div class="taxonomia">
        			<h2>Cocinas</h2>
        			<span>- del mundo -</span>
        		</div>	
        	</div>
        	<div class="contenido">
            	<!--Cocinas del mundo--><?php $view = views_get_view('secciones'); print $view->preview('block'); ?><!--FIN Cocinas del mundo-->
			</div>
		</div>
      </div>    
    </div>
  </section>
</body>
</html>