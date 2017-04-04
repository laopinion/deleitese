<script>
jQuery (function($){
  $(document).ready(function(){
    var pais = $("#personaje .contenido .izq .pais .field-name-field-pais .field-items .field-item").html();  
    if(pais == 'Colombia' || pais == 'Colombia '){
      var icono = 'Colombia-05';
      var urlWeb = "({'background' : 'url(deleitese/sites/default/themes/deleitese/images/banderas/"+ icono + ".svg) 0px 0px/50px auto no-repeat'});";
      $("#personaje .contenido .izq .pais .icono").css({background:(urlWeb)});
    }else if(pais == 'Argentina'){
      var icono = 'Argentina-05';
      var urlWeb = "({'background' : 'url(deleitese/sites/default/themes/deleitese/images/banderas/"+ icono + ".svg) 0px 0px/50px auto no-repeat'});";
      $("#personaje .contenido .izq .pais .icono").css({background:(urlWeb)});
    }
  });
});
</script>

<div id="personaje">
    <div class="contenido">
      <?php if (!empty($content['field_tags'])){ print "<div class=etiquetas><div class=icon></div><div class=triangulo></div>".render($content['field_tags'])."</div>";}?>  
      <div class="izq">
        <div class="nombre">
          <h1 class="titulo"><?php print $title;?></h1>
          <h2 class="subtitulo"><?php print render($content['field_apellido']);?></h2>
        </div>         
        <div class="pais"><div class="icon"></div><?php print render($content['field_pais']);?></div>
        <div class="slogan"><?php print $title;?></div>
        <div class="texto"><?php print render($content['body']);?></div> 
      </div>  
      <div class="der">
        <div class="up">
          <div class="foto"><?php print render($content['field_image']);?></div>    
        </div>
        <div class="comentarios">
          <div class="bloque"><?php include("disqus.tpl.php"); ?></div>
        </div>
      </div>
    </div>
</div>