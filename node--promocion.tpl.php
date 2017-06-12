<div id="promocion">
  <div class="contenido">
    <div class="izq">
      <div class="foto"><?php print render($content['field_image']);?></div> 
      <h1 class="titulo"><?php print $title;?></h1>
      <div class="texto"><?php print render($content['body']);?></div> 
      <div class="comentarios">
        <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
      </div>
    </div>
    <div class="der">
      <div class="up">
        <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
      </div>
    </div>
  </div>
</div>