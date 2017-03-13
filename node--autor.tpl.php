<div id="autor">
    <div class="contenido">
      <div class="left">
        <div class="photo"><?php print render($content['field_foto']);?></div> 
      </div>  
      <div class="right">
        <div class="name"><?php print $title;?></div>
        <div class="summary"><?php print render($content['body']);?></div>   
      </div>
      <div class="abajo">
         <div class="column"><?php print render($content['field_nombre_de_la_columna']);?></div>
         <?php $view = views_get_view('detalle'); print $view->preview('block_4'); ?>
         
      </div>
      <!--MOVIL-->
      <div class="movil">
        <div class="photo"><?php print render($content['field_foto']);?></div>
        <h1 class="name"><?php print $title;?></h1>
        <div class="summary"><?php print render($content['body']);?></div>
        <div class="column"><?php print render($content['field_nombre_de_la_columna']);?></div>
        <?php $view = views_get_view('detalle'); print $view->preview('block_4'); ?>
      </div>  
      <!--FIN MOVIL-->
    </div>
</div>