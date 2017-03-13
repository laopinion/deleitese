<div id="personaje">
  <div class="branding"><?php print render($content['field_branding']);?></div>    
    <div class="contenido">
      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas><div class=icon></div><div class=triangulo></div>".render($content['field_tags'])."</div>";
        }
      ?>  
      <div class="izq">
        <h1 class="titulo"><?php print $title;?></h1>
        <div class="texto"><?php print render($content['body']);?></div> 
        <?php include("compartir.tpl.php"); ?>
        <!--Restarurantes--><?php // $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
        <!--Promociones--><?php // $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
        <div class="pauta_movil p320x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',13); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
        <div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',9); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
      </div>  
      <div class="der">
        <div class="foto"><?php print render($content['field_image']);?></div>    
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
        <?php include("compartir.tpl.php"); ?>
      <!--Restarurantes--><?php $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
      <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
      </div>  
      <!--FIN MOVIL-->

      <div class="abajo">
        <!--Mas personajes--><?php $view = views_get_view('mas'); print $view->preview('block_2'); ?><!--FIN Mas personajes-->
      </div>  
    </div>
</div>