<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
  <article id="movil">
    <section class="hamburLogo">
      <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div id="logo">
        <h1><a class="logo" href="<?php print base_path(); ?>"></a></h1>
      </div>
    </section>
    <div class="menu">
      <div class="item_menu noticias"><a href="<?php print base_path(); ?>lo-nuestro">Noticias</a></div>
      <div class="item_menu personajes"><a href="<?php print base_path(); ?>personajes">Personajes</a></div>
      <div class="item_menu recetas"><a href="<?php print base_path(); ?>recetas">Recetas</a></div>
      <div class="item_menu restaurantes"><a href="<?php print base_path(); ?>restaurantes">Restaurantes</a></div>
      <div class="item_menu promociones"><a href="<?php print base_path(); ?>promociones">Recomendados</a></div>
      <!-- <div class="item_menu foodies"><a href="<?php //print base_path(); ?>foodies">Foodies</a></div> -->
      <div class="item_menu contactos"><a href="<?php print base_path(); ?>contactos">Contacto</a></div>
      <div class="btnSeguir">
        <div class="fb-like" data-href="https://www.facebook.com/deleitese.co" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        <i class="icono"><a href="#formUnete"></a></i>
      </div>
    </div>  
  </article>
  
  <div class="buscador">
    <div class="container buscar">
      <i class="icono"></i>
      <?php $buscar_bloque = module_invoke('search', 'block_view', 'search'); print render($buscar_bloque); ?>
      <!--
      <form action="">
        <input type="text" placeholder="Escriba su busqueda">
        <div class="select">
          <select name="" id="">
            <option value="">Option1</option>
            <option value="">Option3</option>
            <option value="">Option2</option>
          </select>
        </div>
        <button id="btnBuscar"></button>
      </form>
      -->
    </div>
  </div>
</header>