<div class="emergentes">
  <div class="content">
    <!--Rutas--><?php $view = views_get_view('detalle'); print $view->preview('block_7'); ?><!--FIN Rutas-->
    <div class="pauta p300x250"><div class="info">
      <script async type='text/javascript' src='//s.clickiocdn.com/t/common_258.js'></script>
      <div class='__lxGc__'></div>
      <script type='text/javascript'>
      ((__lxGc__=window.__lxGc__||{'s':{},'b':0})['s']['_200905']=__lxGc__['s']['_200905']||{'b':{}})['b']['_583726']={'i':__lxGc__.b++};
      </script>
      </div>
    </div>
    <!--Donde--><?php // $view = views_get_view('detalle'); print $view->preview('block_7'); ?><!--FIN Donde-->
  </div>
</div>




<div id="articulo" class="url-principal" data-urlp="">
  <div class="foto"><?php print render($content['field_image']);?></div> 
    <div class="contenido">
      <div class="seccion"><?php print render($content['field_seccion']);?></div>
      <?php if (!empty($content['field_tags'])){  print "<div class=etiquetas>".render($content['field_tags'])."</div>"; } ?>
      <h1 class="titulo"><?php print $title;?></h1>
      <div class="texto"><?php print render($content['body']);?></div> 
      <div class="fecha"><?php print render($content['field_fecha']);?></div>
      <div class="autor"><?php print render($content['field_autor']);?></div>
      <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div></div>
      <meta content="{{dato.ruta}}">
      <div class="url_original"></div>
    </div>
  <div class="mas"><span></span></div>
  
  <section ng-app="app" id="scroll-infinito">
    <div ng-controller="controlador">
      <div infinite-scroll='article.nextPage()' infinite-scroll-disabled='article.busy' infinite-scroll-distance='1'>
        <article  ng-controller="contrUrl" class="angular-article">
          <div ng-repeat='dato in article.items' class="li">
            <div id="articulo" in-view="changeUrl(dato.ruta, $index, $inview)">
              <div class="foto" ng-bind-html="dato.field_foto"></div>
              <div class="contenido" in-view="changeUrl(dato.ruta, $index, $inview)">
                <div class="seccion" ng-bind-html="dato.seccion" class="seccion"></div>
                <div class="etiquetasScroll" ng-bind-html="dato.temas"></div>
                <h1 class="titulo" ng-bind-html="dato.title" class="titulo"></h1>  
                <div ng-bind-html="dato.field_body" class="texto"></div>
                <div class="fecha" ng-bind-html="dato.fecha" class="fecha"></div>
                <meta content="{{dato.ruta}}">
              </div>
              <div class="mas"><span></span></div>
            </div>
          </div>
        </article>
        <div ng-show='article.busy' class="load">Cargando nota...</div>
      </div>
    </div>
  </section>
</div>

