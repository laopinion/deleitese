<article class="autorArticle">
  <div class="photo"><i class="icono"></i><?php print render($content['field_foto']);?></div> 
  <div class="info">
    <div class="name"><?php print $title;?></div>
    <div class="contacto"><?php print render($content['field_contacto']);?></div>
    <div class="summary"><?php print render($content['body']);?></div>   
  </div>
</article>