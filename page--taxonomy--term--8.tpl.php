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
        	<div class="seccion_di"></div>
        	<div class="head">
        		<div class="taxonomia">
        			<h2>Directorio</h2>
        			<span>- gastronómico -</span>
        		</div>	
        	</div>
        	<div class="contenido">
              <div class="titulo">Restaurantes destacados</div>
            	<div class="tabla">
                <div class="item nombre">Nombre</div><div class="triangulo"></div>
                <div class="triangulo_back"></div><div class="item tipo">Especialidad</div><div class="triangulo_2"></div>
                <div class="triangulo_back_2"></div><div class="item calificacion">Calificación</div><div class="triangulo_3"></div>
              </div>
              <!--Directorio--><?php $view = views_get_view('secciones'); print $view->preview('block_3'); ?><!--FIN Directorio-->
              <div class="titulo">Otros restaurantes</div>
              <div class="tabla_basico">
                <div class="item nombre">Nombre</div><div class="triangulo"></div>
                <div class="triangulo_back"></div><div class="item tipo">Especialidad</div><div class="triangulo_2"></div>
                <div class="triangulo_back_2"></div><div class="item direccion">Dirección</div><div class="triangulo_3"></div>
                <div class="triangulo_back_3"></div><div class="item contacto">Contacto</div><div class="triangulo_4"></div>
              </div>
              <!--Directorio--><?php $view = views_get_view('secciones'); print $view->preview('block_5'); ?><!--FIN Directorio-->
              <div class="abajo">
                <!--Mas personajes--><?php $view = views_get_view('mas'); print $view->preview('block_1'); ?><!--FIN Mas personajes-->
              </div> 
			</div>
		</div>
      </div>    
    </div>
  </section>
</body>
</html>