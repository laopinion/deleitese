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
  <section class="detailContent">
    	<div id="home">
    		<div class="slide">
    		<!--slide--><?php // $view = views_get_view('home'); print $view->preview('block'); ?><!--FIN slide-->
	    		<div id="logo_home">
					<h1><a class="logo" href="<?php print base_path(); ?>"></a></h1>
				</div>
    		</div>
    		<div class="lonuestro">
            <!--Lo nuestro--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--FIN Lo nuestro-->
            </div>
            <div class="buena_mesa">
            <!--Buena mesa--><?php $view = views_get_view('home'); print $view->preview('block_2'); ?><!--FIN Buena mesa-->
                <div class="pautas">
                    <div class="pauta p728x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',4); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                    <div class="pauta_movil p320x50"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',19); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                </div>
            </div>
            <div class="personajes">
            <!--Personaje--><?php $view = views_get_view('home'); print $view->preview('block_1'); ?><!--FIN Personaje-->
            </div>
            <div class="recetas">
            <!--Recetas--><?php $view = views_get_view('home'); print $view->preview('block_4'); ?><!--FIN recetas-->
            </div>
            <div class="foodies">
            <!--foodies--><?php $view = views_get_view('home'); print $view->preview('block_9'); ?><!--FIN foodies-->
            </div>
            <div class="establecimientos">
            <!--Establecimientos--><?php $view = views_get_view('home'); print $view->preview('block_5'); ?><!--FIN Establecimientos-->
            </div>
            <div class="cronograma">
                <div class="content">
                <!--Pautas-->
                    <div class="pautas">
                        <div class="pauta_movil p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',20); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                        <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',1); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                        <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',2); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                    </div>
                <!--FIN Pautas-->
                <!--Cronograma--><?php $view = views_get_view('home'); print $view->preview('block_6'); ?><!--FIN Cronograma-->
                </div>
            </div>
            <div class="mundo">
            <!--Cocinas del mundo--><?php $view = views_get_view('home'); print $view->preview('block_7'); ?><!--FIN Cocinas del mundo-->
            </div>
            <div id="suscripcion">
            <div class="suscripciones" id="suscripcion">
                <div class="content">
                    <div class="formulario">
                        <h2>Suscríbase</h2>
                        <!--denuncia--><?php $block = module_invoke('webform', 'block_view', 'client-block-24');print render($block['content']); ?><!--FIN denuncia-->
                    </div>
                    <div class="pauta_movil p320x50"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',18); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                    <div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',3); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                </div>
            </div>
            <div class="final">
                <div class="content">
                    <div id="instafeed">
                        <h2>Instagram</h2>
                        <div class="text">- Live Feed -</div>
                    </div>
                    <div class="promociones">
                        <!--Promociones--><?php $view = views_get_view('home'); print $view->preview('block_8'); ?><!--FIN Promociones-->
                    </div>
                </div>
            <!--<div class="pauta_movil p320x50"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',17); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>-->
            </div>
    	</div>		
  </section>
</body>
</html>