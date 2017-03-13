<!-- Script numero -->
<script>
jQuery (function($){
  $(document).ready(function(){
    var numero = $(".contenido .movil .numero .field-name-field-llamar .field-item").html();
    var llamada = "<a href=tel:" + numero + " onClick=
if((navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null){return true}else{window.location.assign('http://www.google.com');}
>+Llamenos</a>";
    $('.contenido .movil .tel').append(llamada);
    
  });
});
</script>
<div class=llamar><div class=icono></div></div>
<!-- FIN Script numero -->

<div id="establecimiento">
  <div class="foto"><?php print render($content['field_image']);?></div>
    <div class="contenido">
      <?php
      if (!empty($content['field_especialidad'])){ 
        print "<div class=especialidad><div class=icon></div><div class=triangulo></div><span>".render($content['field_especialidad'])."</span></div>";
        }
      ?>  
      <div class="izq">
          <!--Recomendados--><?php $view = views_get_view('detalle'); print $view->preview('block_3'); ?><!--FIN Recomendados-->
          <!--FIN Chef-->
        <?php include("compartir.tpl.php"); ?>
        <!--Promociones--><?php  $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
        <div class="pauta_movil p320x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',13); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                <!--<div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',8); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>-->
        <div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',9); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
      </div>
      <div class="der">
        <h1 class="titulo"><?php print $title;?></h1>
        <div class="resumen"><?php $view = views_get_view('detalle'); print $view->preview('block_5'); ?></div>
        <div class="logo"><?php print render($content['field_logo']);?></div>
        <div class="valoracion">
          <div class="estrellas"></div>
          <span>Valoración</span>
          <div class="fivestar-basic"><?php print render($content['field_valoracion']); ?></div>
        </div>
        <div class="texto"><?php print render($content['body']);?></div> 
      </div>  
      <!--MOVIL-->
      <div class="movil">
        <h1 class="titulo"><?php print $title;?></h1>
        <div class="resumen"><?php $view = views_get_view('detalle'); print $view->preview('block_5'); ?></div>
        <div class="logo"><?php print render($content['field_logo']);?></div>
        <div class="numero"><?php print render($content['field_llamar']);?></div>
        <div class="tel"></div>
        <div class="valoracion"><div class="estrellas"></div><span>Valoración</span></div>
        <div class="texto"><?php print render($content['body']);?></div> 
        <!--Mapa--> <div class="mapa"><h2>Ubicación</h2><?php print render($content['field_mapa']);?></div><!--FIN Mapa-->
        <div class="comentarios">
          <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
        </div>
        <?php include("compartir.tpl.php"); ?>
        <!--Recomendados--><?php $view = views_get_view('detalle'); print $view->preview('block_3'); ?><!--FIN Recomendados-->
      </div>
      <!--FIN MOVIL-->


      <div class="abajo">
        <!--Mapa--> <div class="mapa"><h2>Ubicación</h2><?php print render($content['field_mapa']);?></div><!--FIN Mapa-->
        <!--Mas establecimientos--><?php $view = views_get_view('mas'); print $view->preview('block_3'); ?><!--FIN Mas establecimientos-->
      </div>  
    </div>
</div>