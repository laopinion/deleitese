<!-- Script player -->
<script>
jQuery (function($){
  $(document).ready(function(){
    var id = $(".video .field-name-field-video .field-item").html();
    var videoplayer = "<iframe id=frame-video width=100% height=550 src=http://www.youtube.com/embed/" + id + "?hl=es&fs=1&rel=0&showinfo=0 frameborder=0 allowfullscreen></iframe>";
    $('.video-player').append(videoplayer);
  });
});
</script>
<!-- FIN Script player -->

<div id="video">
  
  <div class="video"> <?php print render($content['field_video']); ?></div>
  <div class="video-player"></div>
  <div class="contenido">
    <div class="izq">
      <div class="tipo"><?php print render($content['field_tipo_de_video']); ?></div>
      <?php if (!empty($content['field_tags'])){ print "<div class=etiquetas>".render($content['field_tags'])."</div>";}?>  
      <h1 class="titulo"><?php print $title;?></h1>
      <div class="movil">
        <div class="up">
          <!--Ingredientes--><?php if (!empty($content['field_ingredientes'])){ print "<div class=ingredientes><h2>Ingredientes</h2>".render($content['field_ingredientes'])."</div>";}?>
          <!--Tiempo--><?php if (!empty($content['field_tiempo'])){ print "<div class=tiempo><div class=icono></div><span>".render($content['field_tiempo'])."</span></div>";}?>  
          <!--Chef--><?php if (!empty($content['field_chef'])){ print "<div class=chef><div class=icono></div><span>".render($content['field_chef'])."</span></div>";}?>  
        </div>
      </div>
      <div class="texto"><?php print render($content['body']);?></div>
      <div class="autor"><?php print render($content['field_autor']);?></div>
      <div class="comentarios">
        <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
      </div>
      <div class="movil">
        <div class="masVideos">
          <h3>Más videos</h3>
          <?php $view = views_get_view('mas'); print $view->preview('block_1'); ?>
        </div>
      </div>
    </div>
    <div class="der">
      <aside id="typeVideo" style="display: none;"><?php print render($content['field_tipo_de_video']); ?> </aside>
      <div class="up">
        <!--Ingredientes--><?php if (!empty($content['field_ingredientes'])){ print "<div class=ingredientes><h2>Ingredientes</h2>".render($content['field_ingredientes'])."</div>";}?>
        <!--Tiempo--><?php if (!empty($content['field_tiempo'])){ print "<div class=tiempo><div class=icono></div><span>".render($content['field_tiempo'])."</span></div>";}?>  
        <!--Chef--><?php if (!empty($content['field_chef'])){ print "<div class=chef><div class=icono></div><span>".render($content['field_chef'])."</span></div>";}?>  
      </div>
      <div class="masVideos">
        <h3>Más videos</h3>
        <?php $view = views_get_view('mas'); print $view->preview('block_1'); ?>
      </div>
    </div>
  </div>
</div>