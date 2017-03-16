<div id="articulo">
  <div class="foto">
    <?php print render($content['field_image']);
    /*
    if(render($content['field_image'][0]['#item']['alt'])){
      print "<div class=pie>";
      print "<div class=descripcion>".render($content['field_image'][0]['#item']['title'])."</div>";
      print "<div class=credito><span>  /  Foto:   </span>".render($content['field_image'][0]['#item']['alt'])."</div></div>";
    }
    */
    ?>
  </div>
    <div class="contenido">
      <div class="seccion"><?php print render($content['field_seccion']);?></div>
      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas>".render($content['field_tags'])."</div>";
        }
      ?>  
      <h1 class="titulo"><?php print $title;?></h1>
      <div class="texto"><?php print render($content['body']);?></div> 
      <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',21); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
      <div class="comentarios">
        <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
      </div>
      <div class="fecha"><?php print render($content['field_fecha']);?></div>

      <div class="izq">
        <?php include("compartir.tpl.php"); ?>
        <!--Restarurantes--><?php $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
        <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
        <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',8); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
        <div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',9); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
      </div>  

      <!--MOVIL-->
      <div class="movil">
        <div class="pauta_movil p320x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',14); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
        <h1 class="titulo"><?php print $title;?></h1>
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
        <div class="seccion">
          <div class="icono"></div>
          <div class="tax">
            <label>Sección:</label>
            <?php print render($content['field_seccion']);?>
          </div>
        </div>
        <?php include("compartir.tpl.php"); ?>
      <div class="pauta_movil p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',22); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>  
      <!--Restarurantes--><?php $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
      <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
      <div class="pauta_movil p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',13); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>

      </div>  
      <!--FIN MOVIL-->

      <div class="abajo">
        <!--Mas notas--><?php $view = views_get_view('mas'); print $view->preview('block'); ?><!--FIN Mas notas-->
      </div>  
    </div>
</div>