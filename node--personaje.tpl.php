<section id="personaje">
  <div class="left">
    <div class="nombre">
      <h2 class="title">Personajes</h2>
      <h1 class="titulo"><?php print $title;?></h1>
      <h2 class="subtitulo"><?php print render($content['field_apellido']);?></h2>
    </div>

    <div class="text">
      <div class="pais"><i class="icono"></i><?php print render($content['field_pais']);?></div>
      <div class="slogan"> <?php $view = views_get_view('detalle'); print $view->preview('block_5'); ?></div>
    </div> 
    <div class="movil">
      <div class="foto"><?php print render($content['field_image']);?></div>
      <div class="personajes">
        <h2>Personajes</h2>
        <?php $view = views_get_view('detalle'); print $view->preview('block_6'); ?>
      </div>
    </div>    
    <div class="texto"><?php print render($content['body']);?></div>
    <div class="autor"><?php print render($content['field_autor']);?></div>
  </div>
  <div class="right">
    <div class="foto"><?php print render($content['field_image']);?></div>
    <div class="personajes">
      <h2>Personajes</h2>
      <?php $view = views_get_view('detalle'); print $view->preview('block_6'); ?>
    </div>
    <!--PAUTA 300x660-->
    <div class="pauta p300x600">
      <h2 class="anuncio_txt">Publicidad</h2>
      <div class="info">
        <div class="ad">
          <script async type='text/javascript' src='//s.clickiocdn.com/t/common_258.js'></script>
          <div class='__lxGc__'></div>
          <script type='text/javascript'>
          ((__lxGc__=window.__lxGc__||{'s':{},'b':0})['s']['_200905']=__lxGc__['s']['_200905']||{'b':{}})['b']['_583728']={'i':__lxGc__.b++};
          </script>
        </div>
      </div>
    </div>
    <!--FIN PAUTA 300x660-->
  </div>
  
  <div class="comentarios">
    <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
  </div>
</section>