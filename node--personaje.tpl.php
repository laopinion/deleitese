<section id="personaje">
  <div class="left">
    <div class="nombre">
      <h2 class="title">Personajes</h2>
      <h1 class="titulo"><?php print $title;?></h1>
      <h2 class="subtitulo"><?php print render($content['field_apellido']);?></h2>
    </div>

    <div class="text">
      <div class="pais"><i class="icono"></i><?php print render($content['field_pais']);?></div>
      <div class="slogan"> <?php $view = views_get_view('detalle'); print $view->preview('block_5'); ?><!--FIN Resumen--></div>
    </div>     
    <div class="texto"><?php print render($content['body']);?></div>
  </div>
  <div class="right">
    <div class="foto"><?php print render($content['field_image']);?></div>
  </div>
  
  <div class="comentarios">
    <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
  </div>
</section>