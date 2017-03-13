<div id="columna">
    <div class="contenido">
      <div class="foto"><?php print render($content['field_imagen']);?></div>
      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas><div class=icon></div><div class=triangulo></div>".render($content['field_tags'])."</div>";
        }
      ?>  
      <div class="izq">
        <div class="fecha">
          <div class="icono"></div>
          <div class="dia">
            <label>Fecha de publicación:</label>
            <?php print render($content['field_fecha']);?>
          </div>
        </div>
        <div class="autor">
          <!--Autor--><?php // $view = views_get_view('detalle'); print $view->preview('block_2'); ?><!--FIN Autor-->
          <?php //print render($content['field_autor']);?>
                <?php 
                //Nombre y foto columnista
                $sql_autor=db_query("SELECT a.nid, a.title AS autor, x.source, x.alias AS url, e.uri
                FROM url_alias AS x, node AS a, field_data_field_foto d, file_managed e
                WHERE a.nid=d.entity_id
                AND d.field_foto_fid=e.fid
                AND a.nid=substr(x.source, 6)
                AND a.nid in (select field_autor_nid from field_data_field_autor b, node c where b.entity_id=".$node->nid." and c.nid=b.entity_id)")->fetchObject();

                $autor = $sql_autor->autor;
                $id_autor = $sql_autor->nid;
                $url_autor = $sql_autor->url;
                $foto = substr($sql_autor->uri,8);
                $ruta=base_path().$url_autor;

                If($foto!=""){
                   print "<div class='foto'><a href=".$ruta."><img src='".base_path()."sites/default/files".$foto."' width='110' height='120' /></a></div>";   
                }   
                ?>
                <?php If($id_autor!=""){ ?>
                   <div class="autor"><span>Por:</span><a href="<?php print base_path().$url_autor; ?>"><?php print $autor; ?></a></div>
                <?php } ?>
        </div>
        <?php include("compartir.tpl.php"); ?>
        <!--Restarurantes--><?php $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
        <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
        <div class="pauta_movil p320x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',13); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>
                <!--<div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php // $block =block_load('block',8); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div>-->
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
        <div class="autor">
                <?php 
                //Nombre y foto columnista
                $sql_autor=db_query("SELECT a.nid, a.title AS autor, e.uri
                FROM node AS a, field_data_field_foto d, file_managed e
                WHERE a.nid=d.entity_id
                AND d.field_foto_fid=e.fid
                AND a.nid in (select field_autor_nid from field_data_field_autor b, node c where b.entity_id=".$node->nid." and c.nid=b.entity_id)")->fetchObject();

                $autor = $sql_autor->autor;
                $id_autor = $sql_autor->nid;
                $foto = substr($sql_autor->uri,8);

                If($foto!=""){
                   print "<div class='foto'><img src='".base_path()."sites/default/files".$foto."' width='110' height='120' /></div>";   
                }   
                ?>
                <?php If($id_autor!=""){ ?>
                   <div class="autor"><span>Por:</span> <?php print $autor; ?></div>
                <?php } ?>
        </div>
        <div class="seccion">
          <div class="icono"></div>
          <div class="tax">
            <label>Sección:</label>
            <?php print render($content['field_seccion']);?>
          </div>
        </div>
        <?php include("compartir.tpl.php"); ?>
      <!--Restarurantes--><?php $view = views_get_view('detalle'); print $view->preview('block'); ?><!--FIN Restarurantes-->
      <!--Promociones--><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?><!--FIN Promociones-->
      </div>  
      <!--FIN MOVIL-->

      <div class="abajo">
        <!--Mas notas--><?php $view = views_get_view('mas'); print $view->preview('block'); ?><!--FIN Mas notas-->
      </div>  
    </div>
</div>