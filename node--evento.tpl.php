<div id="promocion">
    <div class="contenido">
      <div class="izq">
        <div class="fecha">
          <div class="icono"></div>
          <div class="dia">
            <label>Fecha de publicación:</label>
            <?php print render($content['field_fecha']);?>
          </div>
        </div>
        <?php include("compartir.tpl.php"); ?>
        <!--Restarurantes--><?php $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
        <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
        <div class="pauta_movil p320x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',13); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                <!--<div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',8); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>-->
        <div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',9); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
      </div>  
      <div class="der">
        <div class="foto"><?php print render($content['field_image']);?></div>
        <h1 class="titulo"><?php print $title;?></h1>
        <div class="texto"><?php print render($content['body']);?></div> 
        <div class="comentarios">
          <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
        </div>
      </div>

      <!--MOVIL-->
      <div class="movil">
        <h1 class="titulo"><?php print $title;?></h1>
        <div class="foto"><?php print render($content['field_image']);?></div>
        <div class="texto"><?php print render($content['body']);?></div> 
        <div class="comentarios">
          <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
        </div>
        <div class="fecha">
          <div class="icono"></div>
          <div class="dia">
            <label>Fecha de publicación:</label>
            <?php print render($content['field_fecha']);?>
          </div>
        </div>
        <?php include("compartir.tpl.php"); ?>
      </div>  
      <!--FIN MOVIL-->  

      <div class="abajo">

      </div>  
    </div>
</div>