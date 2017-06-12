<footer>
  <section id="footer">
    <div class="left">
      <div class="logo">
        <a href="<?php print base_path(); ?>"></a>
      </div>

      <div class="copy">
        <div class="txt">Copyright © 2001 - 2017 La Opinión S.A. - Todos los derechos reservados; queda prohibida la reproducción, distribución, comunicación pública y utilización total o parcial de los contenidos de esta web, en cualquier forma o modalidad sin previa, expresa y escrita autorización. Incluida en particular su mera reproducción y/o puesta a disposición como resúmenes, reseñas o revistas de prensa con ﬁnes comerciales directa e indirectamente lucrativos, a lo que se maniﬁesta oposición rotunda.</div>
        <div class="red">Red de portales <span>La Opinión</span></div>
      </div>

      <ul class="redes">
        <div class="triLeft"></div>
        <li>Síguenos</li>
        <li class="facebook"><a href="https://www.facebook.com/deleitese.co" target="_blank" style="border:0px;"></a></li>
        <li class="twitter"><a href="https://www.twitter.com/deleitese_co" target="_blank" style="border:0px;"></a></li>
        <li class="instagram"><a href="https://www.instagram.com/deleitese_co" target="_blank" style="border:0px;"></a></li>
        <li class="youtube"><a href="https://www.youtube.com/channel/UCYei2N2nDhHaCgDsnJFR9HQ" target="_blank" style="border:0px;"></a></li>
        <div class="triRight"></div>
      </ul>
    </div>
    <div id="formUnete" class="right">
      <h2>Forma parte de nuestra comunidad</h2>
     <!--formulario--><?php $block = module_invoke('webform', 'block_view', 'unete-551');print render($block['content']); ?><!--FIN formulario-->
    </div>
  </section>
</footer>