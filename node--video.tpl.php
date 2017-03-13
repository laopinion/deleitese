<!-- Script player -->
<script>
jQuery (function($){
  $(document).ready(function(){
    var id = $(".contenido .video .field-name-field-video .field-item").html();
    var videoplayer = "<iframe id=frame-video width=1024 height=500 src=http://www.youtube.com/embed/" + id + "?hl=es&fs=1&rel=0&showinfo=0 frameborder=0 allowfullscreen></iframe>";
    $('.video-player').append(videoplayer);
  });
});
</script>
<!-- FIN Script player -->

<div id="video">
    <div class="contenido">
      <div class="video"> <?php print render($content['field_video']); ?></div>
      <div class="video-player"></div>
      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas><div class=icon></div><div class=triangulo></div>".render($content['field_tags'])."</div>";
        }
      ?>  
      <div class="izq">
          <!--Ingredientes-->
          <?php
          if (!empty($content['field_ingredientes'])){ 
            print "<div class=ingredientes><h2>Ingredientes</h2>".render($content['field_ingredientes'])."</div>";
            }
          ?>  
          <!--FIN Ingredientes-->
          <!--Tiempo-->
          <?php
            if (!empty($content['field_tiempo'])){ 
              print "<div class=tiempo><div class=icono></div><span>".render($content['field_tiempo'])."</span></div>";
              }
          ?>  
          <!--FIN Tiempo-->
          <!--Chef-->
          <?php
            if (!empty($content['field_chef'])){ 
              print "<div class=chef><div class=icono></div><span>".render($content['field_chef'])."</span></div>";
              }
          ?>  
          <!--FIN Chef-->
        <?php include("compartir.tpl.php"); ?>
        <!--Promociones--><?php  $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
        <div class="pauta_movil p320x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',13); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
        <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',8); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
        <div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',9); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
      </div>  
      <div class="der">
        <h1 class="titulo"><?php print $title;?></h1>
        <div class="texto"><?php print render($content['body']);?></div> 
        <div class="comentarios">
          <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
        </div>
      </div>
      <!--MOVIL-->
      <div class="movil">
        <h1 class="titulo"><?php print $title;?></h1>
        <!--Ingredientes-->
        <?php
          if (!empty($content['field_ingredientes'])){ 
            print "<div class=ingredientes><h2>Ingredientes</h2>".render($content['field_ingredientes'])."</div>";
          }
        ?>  
        <!--FIN Ingredientes-->
        <!--Tiempo-->
        <?php
          if (!empty($content['field_tiempo'])){ 
            print "<div class=tiempo><div class=icono></div><span>".render($content['field_tiempo'])."</span></div>";
          }
        ?>  
        <!--FIN Tiempo-->
        <!--Chef-->
        <?php
          if (!empty($content['field_chef'])){ 
            print "<div class=chef><div class=icono></div><span>".render($content['field_chef'])."</span></div>";
            }
        ?>  
        <!--FIN Chef-->
        <div class="texto"><?php print render($content['body']);?></div> 
        <?php include("compartir.tpl.php"); ?>
        <div class="comentarios">
          <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
        </div>
      </div> 
      <!--FIN MOVIL-->
      <div class="abajo">
        <!--Mas videos--><?php $view = views_get_view('mas'); print $view->preview('block_1'); ?><!--FIN Mas videos-->
      </div>  
    </div>
</div>