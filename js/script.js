$(document).ready(function(){

  $("header #hamburger").click(function (){
    $(this).toggleClass('open');
    $(".menu").toggleClass("desplegar");
    // $(".fondo").toggle();
  });
  
  $(".search-form").remove();
  $("header .buscador .buscar form#search-block-form .form-item-search-block-form input").attr("placeholder", "¿Qué te gustaría comer hoy?");

  //NOTAS SCROLL
  //Cambiar la url cuando estamos en scroll infinito solo para la primera nota
  var pathname = window.location.pathname;
  $("#articulo").data("urlp", pathname);
  // console.log(pathname);
  // var elementoArticle = $(".url-principal");
  // var elementoArticle = $("#articulo .titulo");
  var elementoArticle = $(".url-principal .url_original");
  // console.log(elementoArticle.offset().top / 2)
  if(elementoArticle.length){
    $(window).scroll(function(){
      var windowTop = $(document).scrollTop();
      if(windowTop <= elementoArticle.offset().top / 2){
        var ruta = $("#articulo").data("urlp");
        history.pushState(null, "", ruta);
      }
    });
  }

  //Location menu options;
  var ruta = window.location;
  function clearClass() {
     $('#header .menu').each(function(){
      if($(this).hasClass('active-noticias') || $(this).hasClass('active-personajes') || $(this).hasClass('active-recetas') || $(this).hasClass('active-restaurantes') || $(this).hasClass('active-promociones') || $(this).hasClass('active-foodies') || $(this).hasClass('active-contactos')){
        $(this).removeClass();
        // $(this).removeClass('active-personajes');
      }
    });
  }
  //Cambiar la ruta por la de producción
  if(ruta == 'http:www.deleitese.co/' || ruta == 'http:www.deleitese.co/lo-nuestro'){
    // var styles = {
    //   background : "url(../images/btn_noticias.svg) no-repeat",
    //   backgroundPosition: "25px 28px"
    // };
    clearClass();   
    $('#header .menu .noticias').addClass('active-noticias');
  }else if(ruta == 'http://www.deleitese.co/personajes'){
    clearClass();
    $('#header .menu .personajes').addClass('active-personajes');
  }else if(ruta == 'http://www.deleitese.co/recetas'){
    clearClass();
    $('#header .menu .recetas').addClass('active-recetas');
  }else if(ruta == 'http://www.deleitese.co/restaurantes'){
    clearClass();
    $('#header .menu .restaurantes').addClass('active-restaurantes');
  }else if(ruta == 'http://www.deleitese.co/promociones'){
    clearClass();
    $('#header .menu .promociones').addClass('active-promociones');
  }else if(ruta == 'http://www.deleitese.co/foodies'){
    clearClass();
    $('#header .menu .foodies').addClass('active-foodies');
  }else if(ruta == 'http://www.deleitese.co/contacto'){
    clearClass();
    $('#header .menu .contactos').addClass('active-contactos');
  }

  $.get("http://www.deleitese.co/api/v1/views/home?display_id=services_2", function( data ) {
    // console.log(data);
    for(x in data){
      $('#home .slides .rslides').append('<li>'+data[x].imagen+'</li>');      
    }

    $("#home .slides .rslides").responsiveSlides({
      auto: true, // Boolean: Animate automatically, true or false
      speed: 500, // Integer: Speed of the        transition, in milliseconds
      timeout: 4000, // Integer: Time between slide transitions, in milliseconds
      pager: false, // Boolean: Show pager, true or false
      nav: true, // Boolean: Show navigation, true or false
      random: false, // Boolean: Randomize the order of the slides, true or false
      pause: false, // Boolean: Pause on hover, true or false
      pauseControls: true, // Boolean: Pause when hovering controls, true or false
      prevText: "", // String: Text for the "previous" button
      nextText: "", // String: Text for the "next" button
      maxwidth: "", // Integer: Max-width of the slideshow, in pixels
      navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "", // Selector: Declare custom pager navigation
      namespace: "rslides", // String: Change the default namespace used
      before: function(){}, // Function: Before callback
      after: function(){} // Function: After callback
    });
    
  });

  $('#home #noticias .verMas').click(function(){
    var activo = $(this).data('activo')
    if(activo == 0){
      var style = {
        height: 'auto'
      }
      $('#home #noticias').css(style);
      $('#home #noticias .views-row-7, #home #noticias .views-row-8, #home #noticias .views-row-9, #home #noticias .views-row-10, #home #noticias .views-row-11, #home #noticias .views-row-12').slideDown("slow");
      $(this).data('activo', 1);
      $('#home #noticias .verMas h2').text('Ver menos');
    }else{
      //934px
      var style = {
        height: 'auto'
      }
      $('#home #noticias').css(style);
      $('#home #noticias .views-row-7, #home #noticias .views-row-8, #home #noticias .views-row-9, #home #noticias .views-row-10, #home #noticias .views-row-11, #home #noticias .views-row-12').slideUp("slow");
      $(this).data('activo', 0);
      $('#home #noticias .verMas h2').text('Ver más');
    }
  });

  $('#home #modulo1 .personajes .verMas').click(function(){
    var activo = $(this).data('activo')
    if(activo == 0){
      var style = {
        height: 'auto'
      }
      $('#home #modulo1 .personajes').css(style);
      $('#home #modulo1 .personajes .views-row-4, #home #modulo1 .personajes .views-row-5, #home #modulo1 .personajes .views-row-6').slideDown("slow");
      $(this).data('activo', 1);
      $('#home #modulo1 .personajes .verMas h2').text('Ver menos');
    }else{
      var style = {
        height: 'auto'
      }
      $('#home #modulo1 .personajes').css(style);
      $('#home #modulo1 .personajes .views-row-4, #home #modulo1 .personajes .views-row-5, #home #modulo1 .personajes .views-row-6').slideUp("slow");
      $(this).data('activo', 0);
      $('#home #modulo1 .personajes .verMas h2').text('Ver más');
    }
  });

  $('#home #modulo1 .notas .verMas').click(function(){
    var activo = $(this).data('activo')
    if(activo == 0){
      var style = {
        height: 'auto'
      }
      $('#home #modulo1 .notas').css(style);
      $('#home #modulo1 .notas .views-row-4, #home #modulo1 .notas .views-row-5, #home #modulo1 .notas .views-row-6').slideDown("slow");
      $(this).data('activo', 1);
      $('#home #modulo1 .notas .verMas h2').text('Ver menos');
    }else{
      var style = {
        height: 'auto'
      }
      $('#home #modulo1 .notas').css(style);      
      $('#home #modulo1 .notas .views-row-4, #home #modulo1 .notas .views-row-5, #home #modulo1 .notas .views-row-6').slideUp("slow");
      $(this).data('activo', 0);
      $('#home #modulo1 .notas .verMas h2').text('Ver más');
    }
  });

  $('#home #modulo2 #videos .verMas').click(function(){
    var activo = $(this).data('activo');
    if(activo == 0){
      var style = {
        height: 'auto'
      }
      $('#home #modulo2 #videos').css(style);
      $('#home #modulo2 #videos .views-row-7, #home #modulo2 #videos .views-row-8, #home #modulo2 #videos .views-row-9').slideDown("slow");
      $(this).data('activo', 1);
      $('#home #modulo2 #videos .verMas h2').text('Ver menos');
    }else{
      var style = {
        height: 'auto'
      }
      $('#home #modulo2 #videos').css(style);
      $('#home #modulo2 #videos .views-row-7, #home #modulo2 #videos .views-row-8, #home #modulo2 #videos .views-row-9').slideUp("slow");
      $(this).data('activo', 0);
      $('#home #modulo2 #videos .verMas h2').text('Ver más');
    }
  });

  $('#home #modulo1 .notas .flechaDer').click(function(){
    //left: -87%;
    // left: -1285px;
    // left: -81vw;
    var style = {
      left: '-81vw'
    }
    $('#home #modulo1 .notas .view-display-id-block_8 .view-content').css(style);
  });

  $('#home #modulo1 .notas .flechaIzq').click(function(){
    var style = {
      left: '0'
    }
    $('#home #modulo1 .notas .view-display-id-block_8 .view-content').css(style);
  });

  //TENER EN CUENTA LA RUTA DE LAS IMAGENES CUANDO ESTE EN PRODUCCIÓN
  function paisPersonaje(name){
    var style = {
      background: 'url("http://www.deleitese.co/sites/default/themes/deleitese/images/banderas/'+name+'.svg") no-repeat'
    }
    return style;
  }

  $('#home #modulo1 .personajes .view-display-id-block_1 .view-content .views-row').each(function(){
    var pais = $(this).find('.personaje #pais').html();

    if(pais == 'Colombia' || pais == 'Colombia '){
      // background: url(../images/banderas/Colombia-05.svg) no-repeat;
      var style = paisPersonaje('Colombia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Alemania'){
      var style = paisPersonaje('Alemania-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Arabia Saudita'){
      var style = paisPersonaje('Arabia-Saudita');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Argentina'){
      var style = paisPersonaje('Argentina-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Eslovenia '){
      var style = paisPersonaje('Slovenia-03');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Belgica'){
      var style = paisPersonaje('Belgica-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Bolivia'){
      var style = paisPersonaje('Bolivia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Brasil'){
      var style = paisPersonaje('Brasil-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Canada'){
      var style = paisPersonaje('Canada-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Chile'){
      var style = paisPersonaje('Chile-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'China'){
      var style = paisPersonaje('China-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Corea del Sur'){
      var style = paisPersonaje('Corea-del-Sur-05');      
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Costa Rica'){
      var style = paisPersonaje('Costa-Rica-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Croacia'){
      var style = paisPersonaje('Croacia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Cuba'){
      var style = paisPersonaje('Cuba-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Ecuador'){
      var style = paisPersonaje('Ecuador-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Egipto'){
      var style = paisPersonaje('Egipto-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'España'){
      var style = paisPersonaje('Espanna-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Filipinas'){
      var style = paisPersonaje('Filipinas-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Francia'){
      var style = paisPersonaje('Francia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Grecia'){
      var style = paisPersonaje('Grecia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Holanda'){
      var style = paisPersonaje('Holanda-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'India'){
      var style = paisPersonaje('India-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Inglatera'){
      var style = paisPersonaje('Inglatera-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Iran'){
      var style = paisPersonaje('Iran-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Isarael'){
      var style = paisPersonaje('Isarael-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Italy'){
      var style = paisPersonaje('Italy-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Japon'){
      var style = paisPersonaje('Japon-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Libano'){
      var style = paisPersonaje('Libano-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Libia'){
      var style = paisPersonaje('Libia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Marruecos'){
      var style = paisPersonaje('Marruecos-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Mexico'){
      var style = paisPersonaje('Mexico-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Panama'){
      var style = paisPersonaje('Panama-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Paraguay'){
      var style = paisPersonaje('Paraguay-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Peru'){
      var style = paisPersonaje('Peru-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Polonia'){
      var style = paisPersonaje('Polonia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Portugal'){
      var style = paisPersonaje('Portugal-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Puerto Rico'){
      var style = paisPersonaje('Puerto-Rico-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Republica Dominicana'){
      var style = paisPersonaje('Republica-Dominicana-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Rusia'){
      var style = paisPersonaje('Rusia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Salvador'){
      var style = paisPersonaje('Salvador-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Suiza'){
      var style = paisPersonaje('Suiza-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Syria-05'){
      var style = paisPersonaje('Syria-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Turquia'){
      var style = paisPersonaje('Turquia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Uruguay'){
      var style = paisPersonaje('Uruguay-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Usa'){
      var style = paisPersonaje('USA-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Venezuela'){
      var style = paisPersonaje('Venezuela-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Vietnan'){
      var style = paisPersonaje('Vietnan-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }
  });

  $('#personajes article .view-display-id-block_2 .view-content .views-row').each(function(){
    var pais = $(this).find('.personaje #pais').html();

    if(pais == 'Colombia' || pais == 'Colombia '){
      // background: url(../images/banderas/Colombia-05.svg) no-repeat;
      var style = paisPersonaje('Colombia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Alemania'){
      var style = paisPersonaje('Alemania-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Arabia Saudita'){
      var style = paisPersonaje('Arabia-Saudita');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Argentina'){
      var style = paisPersonaje('Argentina-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Eslovenia '){
      var style = paisPersonaje('Slovenia-03');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Belgica'){
      var style = paisPersonaje('Belgica-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Bolivia'){
      var style = paisPersonaje('Bolivia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Brasil'){
      var style = paisPersonaje('Brasil-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Canada'){
      var style = paisPersonaje('Canada-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Chile'){
      var style = paisPersonaje('Chile-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'China'){
      var style = paisPersonaje('China-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Corea del Sur'){
      var style = paisPersonaje('Corea-del-Sur-05');      
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Costa Rica'){
      var style = paisPersonaje('Costa-Rica-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Croacia'){
      var style = paisPersonaje('Croacia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Cuba'){
      var style = paisPersonaje('Cuba-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Ecuador'){
      var style = paisPersonaje('Ecuador-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Egipto'){
      var style = paisPersonaje('Egipto-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'España'){
      var style = paisPersonaje('Espanna-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Filipinas'){
      var style = paisPersonaje('Filipinas-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Francia'){
      var style = paisPersonaje('Francia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Grecia'){
      var style = paisPersonaje('Grecia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Holanda'){
      var style = paisPersonaje('Holanda-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'India'){
      var style = paisPersonaje('India-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Inglatera'){
      var style = paisPersonaje('Inglatera-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Iran'){
      var style = paisPersonaje('Iran-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Isarael'){
      var style = paisPersonaje('Isarael-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Italy'){
      var style = paisPersonaje('Italy-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Japon'){
      var style = paisPersonaje('Japon-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Libano'){
      var style = paisPersonaje('Libano-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Libia'){
      var style = paisPersonaje('Libia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Marruecos'){
      var style = paisPersonaje('Marruecos-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Mexico'){
      var style = paisPersonaje('Mexico-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Panama'){
      var style = paisPersonaje('Panama-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Paraguay'){
      var style = paisPersonaje('Paraguay-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Peru'){
      var style = paisPersonaje('Peru-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Polonia'){
      var style = paisPersonaje('Polonia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Portugal'){
      var style = paisPersonaje('Portugal-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Puerto Rico'){
      var style = paisPersonaje('Puerto-Rico-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Republica Dominicana'){
      var style = paisPersonaje('Republica-Dominicana-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Rusia'){
      var style = paisPersonaje('Rusia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Salvador'){
      var style = paisPersonaje('Salvador-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Suiza'){
      var style = paisPersonaje('Suiza-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Syria-05'){
      var style = paisPersonaje('Syria-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Turquia'){
      var style = paisPersonaje('Turquia-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Uruguay'){
      var style = paisPersonaje('Uruguay-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Usa'){
      var style = paisPersonaje('USA-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Venezuela'){
      var style = paisPersonaje('Venezuela-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }else if(pais == 'Vietnan'){
      var style = paisPersonaje('Vietnan-05');
      $(this).find('.personaje .info .titulo .icono').css(style);

    }
  });

  function notaPersonaje(){
    var pais = $('#personaje .left .text .pais .field').find('.even').html();
    var $this = $('#personaje .left .text .pais');
    if(pais == 'Colombia' || pais == 'Colombia '){
      // background: url(../images/banderas/Colombia-05.svg) no-repeat;
      var style = paisPersonaje('Colombia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Alemania'){
      var style = paisPersonaje('Alemania-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Arabia Saudita'){
      var style = paisPersonaje('Arabia-Saudita');
      $($this).find('.icono').css(style);

    }else if(pais == 'Argentina'){
      var style = paisPersonaje('Argentina-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Eslovenia '){
      var style = paisPersonaje('Slovenia-03');
      $($this).find('.icono').css(style);

    }else if(pais == 'Belgica'){
      var style = paisPersonaje('Belgica-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Bolivia'){
      var style = paisPersonaje('Bolivia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Brasil'){
      var style = paisPersonaje('Brasil-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Canada'){
      var style = paisPersonaje('Canada-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Chile'){
      var style = paisPersonaje('Chile-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'China'){
      var style = paisPersonaje('China-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Corea del Sur'){
      var style = paisPersonaje('Corea-del-Sur-05');      
      $($this).find('.icono').css(style);

    }else if(pais == 'Costa Rica'){
      var style = paisPersonaje('Costa-Rica-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Croacia'){
      var style = paisPersonaje('Croacia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Cuba'){
      var style = paisPersonaje('Cuba-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Ecuador'){
      var style = paisPersonaje('Ecuador-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Egipto'){
      var style = paisPersonaje('Egipto-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'España'){
      var style = paisPersonaje('Espanna-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Filipinas'){
      var style = paisPersonaje('Filipinas-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Francia'){
      var style = paisPersonaje('Francia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Grecia'){
      var style = paisPersonaje('Grecia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Holanda'){
      var style = paisPersonaje('Holanda-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'India'){
      var style = paisPersonaje('India-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Inglatera'){
      var style = paisPersonaje('Inglatera-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Iran'){
      var style = paisPersonaje('Iran-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Isarael'){
      var style = paisPersonaje('Isarael-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Italy'){
      var style = paisPersonaje('Italy-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Japon'){
      var style = paisPersonaje('Japon-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Libano'){
      var style = paisPersonaje('Libano-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Libia'){
      var style = paisPersonaje('Libia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Marruecos'){
      var style = paisPersonaje('Marruecos-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Mexico'){
      var style = paisPersonaje('Mexico-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Panama'){
      var style = paisPersonaje('Panama-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Paraguay'){
      var style = paisPersonaje('Paraguay-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Peru'){
      var style = paisPersonaje('Peru-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Polonia'){
      var style = paisPersonaje('Polonia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Portugal'){
      var style = paisPersonaje('Portugal-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Puerto Rico'){
      var style = paisPersonaje('Puerto-Rico-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Republica Dominicana'){
      var style = paisPersonaje('Republica-Dominicana-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Rusia'){
      var style = paisPersonaje('Rusia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Salvador'){
      var style = paisPersonaje('Salvador-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Suiza'){
      var style = paisPersonaje('Suiza-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Syria-05'){
      var style = paisPersonaje('Syria-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Turquia'){
      var style = paisPersonaje('Turquia-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Uruguay'){
      var style = paisPersonaje('Uruguay-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Usa'){
      var style = paisPersonaje('USA-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Venezuela'){
      var style = paisPersonaje('Venezuela-05');
      $($this).find('.icono').css(style);

    }else if(pais == 'Vietnan'){
      var style = paisPersonaje('Vietnan-05');
      $($this).find('.icono').css(style);

    }
  }//Fin nota personaje

  notaPersonaje();

  //Home noticias
  $('#home #noticias .view-content .views-row').each(function(){
    var seccion = $(this).find('.nota .seccion').html();
    
    if(seccion == 'Buena mesa'){
      var style = {
        background: 'url("http://www.deleitese.co/sites/default/themes/deleitese/images/mesa.svg") no-repeat'
      }
      $(this).find('.nota .iconSeccion span').html('Buena mesa');
      $(this).find('.nota .iconSeccion .icono').css(style);
    }else if(seccion == 'Cocinas del mundo'){
      $(this).find('.nota .iconSeccion span').html('Cocinas del mundo');
    }else if(seccion == 'Lo nuestro'){
      var style = {
        background: 'url("http://www.deleitese.co/sites/default/themes/deleitese/images/corazon.svg") no-repeat'
      }
      $(this).find('.nota .iconSeccion span').html('Lo nuestro');
      $(this).find('.nota .iconSeccion .icono').css(style);
    }
  });

  //SECCION NOTAS
  $('#seccionNotas .view-content .views-row').each(function(){
    var seccion = $(this).find('.nota .seccion').html();
    
    if(seccion == 'Buena mesa'){
      var style = {
        background: 'url("http://www.deleitese.co/sites/default/themes/deleitese/images/mesa.svg") no-repeat'
      }
      $(this).find('.nota .iconSeccion span').html('Buena mesa');
      $(this).find('.nota .iconSeccion .icono').css(style);
    }else if(seccion == 'Cocinas del mundo'){
      $(this).find('.nota .iconSeccion span').html('Cocinas del mundo');
    }else if(seccion == 'Lo nuestro'){
      var style = {
        background: 'url("http://www.deleitese.co/sites/default/themes/deleitese/images/corazon.svg") no-repeat'
      }
      $(this).find('.nota .iconSeccion span').html('Lo nuestro');
      $(this).find('.nota .iconSeccion .icono').css(style);
    }
  });
  


  //MODULO DE VIDEOS
  var contador = 0;
  var valAutoPlay = 0;
  var principal = 0;
  var fila = "#home .view-display-id-block_4 .views-row-";
  $("#home .view-display-id-block_4 .views-row").each(function(){
    // var plataforma = $(this).find(".plataforma").html();
    var plataforma = 'YouTube';
    if(principal == 0){
      if(plataforma == "YouTube"){ 
        var idYoutube = $(this).find(".id").html();
        var youtubeplayer = "<iframe class=iframeyoutube width=685 height=500px src=http://www.youtube.com/embed/" + idYoutube + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe>";
        $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
        $(".view-display-id-block_4 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Facebook"){
        var idfacebook = $(this).find(".id").html();
        var facebookplayer = "<div class=fb-video data-href=https://www.facebook.com/" + idfacebook + "/ data-width=685 data-show-text=false><blockquote cite=https://www.facebook.com/" + idfacebook + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + idfacebook + "/></a></blockquote></div>";
        $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
        $(".view-display-id-block_4 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Vine"){
        var idvine = $(this).find(".id").html();
        var vineplayer = "<div class=vineplayer> <iframe class=iframevine src=https://vine.co/v/" + idvine + "/embed/simple width=1006 height=500 frameborder=0></iframe></div>";
        $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
        $(".view-display-id-block_4 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Instagram"){
        var idinstagram = $(this).find(".id").html();
        var instagramplayer = "<div class=instagramplayer><iframe class=instagram-media allowtransparency=true frameborder=0 height=710 scrolling=no src=//instagram.com/p/"+idinstagram+"/embed/ width=612></div>";        $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
        $(".view-display-id-block_4 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Twitter"){
        var idtwitter = $(this).find(".id").html();
        var twitterplayer = "<div class=twitterplayer> <iframe class=iframetwitter frameborder=0 width=680 height=450px src=https://twitter.com/i/cards/tfw/v1/" + idtwitter + "></iframe></div>";
        $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);
        $(".view-display-id-block_4 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }
    }

    if(plataforma == "YouTube"){ 
      contador++;
      var id = $(this).find(".id").html();
      var youtubeplayer = "<div class=youtubeplayer> <iframe class=iframeyoutube width=685 height=500px src=http://www.youtube.com/embed/" + id + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe></div>";
      $(".view-display-id-block_4 .views-row-"+contador).append(youtubeplayer);
    }else if(plataforma == "Facebook"){
      contador++;
      var id = $(this).find(".id").html();
      var facebookplayer = "<div class=fbplayer> <div class=fb-video data-href=https://www.facebook.com/" + id + "/ data-width=685 data-show-text=false><blockquote cite=https://www.facebook.com/" + id + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + id + "/></a></blockquote></div>";
      $(".view-display-id-block_4 .views-row-"+contador).append(facebookplayer); 
    }else if(plataforma == "Vine"){
      contador++;
      var idvine = $(this).find(".id").html();
      var vineplayer = "<div class=vineplayer> <iframe class=iframevine src=https://vine.co/v/" + idvine + "/embed/simple width=1006 height=500 frameborder=0></iframe></div>";
      $(".view-display-id-block_4 .views-row-"+contador).append(vineplayer);
    }else if(plataforma == "Instagram"){
      contador++;
      var idinstagram = $(this).find(".id").html();
      var instagramplayer = "<div class=instagramplayer><iframe class=instagram-media allowtransparency=true frameborder=0 height=710 scrolling=no src=//instagram.com/p/"+idinstagram+"/embed/ width=612></div>";
      $(".view-display-id-block_4 .views-row-"+contador).append(instagramplayer);
    }else if(plataforma == "Twitter"){
      contador++;
      var idtwitter = $(this).find(".id").html();
      var twitterplayer = "<div class=twitterplayer> <iframe class=iframetwitter frameborder=0 margin-top: 20px margin-left: 15px  width=680 height=450px src=https://twitter.com/i/cards/tfw/v1/" + idtwitter + "></iframe></div>";
      $(".view-display-id-block_4 .views-row-"+contador).append(twitterplayer);
    }
  });

  function limpiarClassHome(){
    $('#home .view-display-id-block_4 .view-content .views-row').each(function(){
      var $selector = $(this).find('.sombra');
      if($($selector).hasClass('active')){
        $($selector).removeClass('active');
      }
    });
  }

  $(fila + "1").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html(); 
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();

    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });
  $(fila + "2").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });
  $(fila + "3").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });
  $(fila + "4").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });

  $(fila + "5").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });

  $(fila + "6").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });

  $(fila + "7").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });

  $(fila + "8").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });

  $(fila + "9").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_4 .view-header .summary p").html(text);
    $(".view-display-id-block_4 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_4 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassHome();
    $($selector).addClass('active');
  });
  //FIN MODULO VIDEO

  //SECCION RECETAS VIDEOS
  var contador = 0;
  var valAutoPlay = 0;
  var principal = 0;
  var filaRecetas = "#recetas #videos .view-display-id-block_1 .views-row-";
  $("#recetas #videos .view-display-id-block_1 .views-row").each(function(){
    // var plataforma = $(this).find(".plataforma").html();
    var plataforma = 'YouTube';
    if(principal == 0){
      if(plataforma == "YouTube"){ 
        var idYoutube = $(this).find(".id").html();
        var youtubeplayer = "<iframe class=iframeyoutube width=685 height=500px src=http://www.youtube.com/embed/" + idYoutube + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe>";
        $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
        $(".view-display-id-block_1 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Facebook"){
        var idfacebook = $(this).find(".id").html();
        var facebookplayer = "<div class=fb-video data-href=https://www.facebook.com/" + idfacebook + "/ data-width=685 data-show-text=false><blockquote cite=https://www.facebook.com/" + idfacebook + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + idfacebook + "/></a></blockquote></div>";
        $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
        $(".view-display-id-block_1 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Vine"){
        var idvine = $(this).find(".id").html();
        var vineplayer = "<div class=vineplayer> <iframe class=iframevine src=https://vine.co/v/" + idvine + "/embed/simple width=1006 height=500 frameborder=0></iframe></div>";
        $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
        $(".view-display-id-block_1 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Instagram"){
        var idinstagram = $(this).find(".id").html();
        var instagramplayer = "<div class=instagramplayer><iframe class=instagram-media allowtransparency=true frameborder=0 height=710 scrolling=no src=//instagram.com/p/"+idinstagram+"/embed/ width=612></div>";        $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
        $(".view-display-id-block_1 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }else if(plataforma == "Twitter"){
        var idtwitter = $(this).find(".id").html();
        var twitterplayer = "<div class=twitterplayer> <iframe class=iframetwitter frameborder=0 width=680 height=450px src=https://twitter.com/i/cards/tfw/v1/" + idtwitter + "></iframe></div>";
        $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);
        $(".view-display-id-block_1 .view-content .views-row-"+"1").find('.sombra').addClass('active');
        principal++;
      }
    }

    if(plataforma == "YouTube"){ 
      contador++;
      var id = $(this).find(".id").html();
      var youtubeplayer = "<div class=youtubeplayer> <iframe class=iframeyoutube width=685 height=500px src=http://www.youtube.com/embed/" + id + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe></div>";
      $(".view-display-id-block_1 .views-row-"+contador).append(youtubeplayer);
    }else if(plataforma == "Facebook"){
      contador++;
      var id = $(this).find(".id").html();
      var facebookplayer = "<div class=fbplayer> <div class=fb-video data-href=https://www.facebook.com/" + id + "/ data-width=685 data-show-text=false><blockquote cite=https://www.facebook.com/" + id + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + id + "/></a></blockquote></div>";
      $(".view-display-id-block_1 .views-row-"+contador).append(facebookplayer); 
    }else if(plataforma == "Vine"){
      contador++;
      var idvine = $(this).find(".id").html();
      var vineplayer = "<div class=vineplayer> <iframe class=iframevine src=https://vine.co/v/" + idvine + "/embed/simple width=1006 height=500 frameborder=0></iframe></div>";
      $(".view-display-id-block_1 .views-row-"+contador).append(vineplayer);
    }else if(plataforma == "Instagram"){
      contador++;
      var idinstagram = $(this).find(".id").html();
      var instagramplayer = "<div class=instagramplayer><iframe class=instagram-media allowtransparency=true frameborder=0 height=710 scrolling=no src=//instagram.com/p/"+idinstagram+"/embed/ width=612></div>";
      $(".view-display-id-block_1 .views-row-"+contador).append(instagramplayer);
    }else if(plataforma == "Twitter"){
      contador++;
      var idtwitter = $(this).find(".id").html();
      var twitterplayer = "<div class=twitterplayer> <iframe class=iframetwitter frameborder=0 margin-top: 20px margin-left: 15px  width=680 height=450px src=https://twitter.com/i/cards/tfw/v1/" + idtwitter + "></iframe></div>";
      $(".view-display-id-block_1 .views-row-"+contador).append(twitterplayer);
    }
  });

  function limpiarClassRcetas(){
    $('#recetas #videos .view-display-id-block_1 .view-content .views-row').each(function(){
      var $selector = $(this).find('.sombra');
      if($($selector).hasClass('active')){
        $($selector).removeClass('active');
      }
    });
  }

  $(filaRecetas + "1").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html(); 
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();

    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });
  $(filaRecetas + "2").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });
  $(filaRecetas + "3").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });
  $(filaRecetas + "4").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });

  $(filaRecetas + "5").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });

  $(filaRecetas + "6").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });

  $(filaRecetas + "7").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });

  $(filaRecetas + "8").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });

  $(filaRecetas + "9").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    var text = $(this).find(".summary p").html();
    $(".view-display-id-block_1 .view-header .summary p").html(text);
    $(".view-display-id-block_1 .view-header .frameVideo").html(youtubeplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(facebookplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(vineplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(instagramplayer);
    $(".view-display-id-block_1 .view-header .frameVideo").html(twitterplayer);

    var $selector = $(this).find('.sombra');
    limpiarClassRcetas();
    $($selector).addClass('active');
  });
  //FIN RECETAS VIDEOS

  setTimeout(function (argument) {
    var style = {
      top: '210px'
    }
    $('#contacto #info .direccion .icono').css(style);
  }, 1000);

  //https://api.instagram.com/v1/users/search?q=jandrey15&access_token=639755700.68a3d18.199aad0141594dda94252767a6ae31d0
  //username = 'deleitese_co'
  var token = '2226104334.e8ca006.188ff5246bd9428babbaec16d50aa2a0',
      username = 'deleitese_co',
      num_photos = 8;

  $.ajax({
    url: 'https://api.instagram.com/v1/users/search',
    data: {q: username, access_token: token},
    dataType: 'jsonp',
    success: function(data){
      // console.log(data);
      $.ajax({
        url: 'https://api.instagram.com/v1/users/' + data.data[0].id + '/media/recent',
        dataType: 'jsonp',
        data: {access_token: token, count: num_photos},
        success: function(data2){
          // console.log(data2);
          for(x in data2.data){
            $('#galeriaInstagram').append('<li class="row'+x+'"><a href="'+data2.data[x].link+'" target=_blank></a> <img src="'+data2.data[x].images.standard_resolution.url+'"> <div class=data> <i class=icono></i><aside class=likes>'+data2.data[x].likes.count+' me gusta</aside> </div> </li>');

          }
        },
        error: function(data2){
          console.log(data2);
        }
      });
    },
    error: function(data){
      console.log(data);
    }
  });

  $('#home #modulo3 .verMas').click(function(){
    var activo = $(this).data('activo');
    if(activo == 0){
      var style = {
        height: 'auto'
      }
      $('#home #modulo3 #galeriaInstagram .row4, #home #modulo3 #galeriaInstagram .row5, #home #modulo3 #galeriaInstagram .row6, #home #modulo3 #galeriaInstagram .row7').slideDown("slow");
      $(this).data('activo', 1);
      $('#home #modulo3 .verMas h2').text('Ver menos');
    }else{
      var style = {
        height: 'auto'
      }
      $('#home #modulo3 #galeriaInstagram .row4, #home #modulo3 #galeriaInstagram .row5, #home #modulo3 #galeriaInstagram .row6, #home #modulo3 #galeriaInstagram .row7').slideUp("slow");
      $(this).data('activo', 0);
      $('#home #modulo3 .verMas h2').text('Ver más');
    }
  });
                    
   $(window).scroll(function() {
   var scrolled = $(window).scrollTop();           
    $('.slide').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.buena_mesa').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.cronograma').css({'background-position' : '50% '+ (-(scrolled / 30)) + 'px'});
    $('.seccion_bm').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_pe').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_ln').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_re').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_di').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_cm').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('#personaje .branding img').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    
    if(scrolled >= "50"){
      $("#logo_home").css({opacity:"0"});
      $("#seccion .head").css({opacity:"0"});
    }else{
      $("#logo_home").css({opacity:"1"});
      $("#seccion .head").css({opacity:"1"});
    }
   }); // window scroll Ends

  $('header #header .center .btnSeguir .icono a').on('click',function (e) {
    e.preventDefault();

    var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 120
    }, 1000, 'swing');
  });

  $('header #movil .menu .btnSeguir .icono a').on('click',function (e) {
    e.preventDefault();

    var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 120
    }, 1000, 'swing');
  });

    //MENU MOVIL
    swmenu = 0;
    $(".icon_menu").click(function(){
    swmenu = 1;
        $(".menu").css({left:"0px"});
        $(".icon_close").css({display:"block"});
        $(".icon_menu").css({display:"none"});
    });

    $(".icon_close").click(function(){
    swmenu = 0;
        $(".menu").css({left:"-100%"});
        $(".icon_menu").css({display:"block"});
        $(".icon_close").css({display:"none"});
    });
    //FIN MENU MOVIL


    //RECETAS
    var varContentR = ".view-home.view-display-id-block_4 .views-row";
    $(varContentR).mouseover(function(){
        $(this).find(".info").css({opacity:"1", top:"0px", left:"0px"}); 
        $(this).find(".icon").css({opacity:"0", display:"none"}); 
    });    
    
    $(varContentR).mouseleave(function(){
        $(this).find(".info").css({opacity:"0", top:"0px", left:"0px"}); 
        $(this).find(".icon").css({opacity:"1", display:"block"}); 
    });

    //ESTABLECIMIENTOS
    var varContentR = ".view-home.view-display-id-block_5 .views-row";
    $(varContentR).mouseover(function(){
        $(this).find(".info").css({display:"block", opacity:"1", top:"0px", left:"150px"}); 
    });        
    $(varContentR).mouseleave(function(){
        $(this).find(".info").css({display:"none", opacity:"0", top:"0px", left:"0px"}); 
    });

    //DIRECTORIO
    var varContentR = ".view-secciones.view-display-id-block_3 .views-row";
    $(varContentR).mouseover(function(){
        $(this).find(".info").css({display:"block", opacity:"1", left:"-350px"}); 
    });        
    $(varContentR).mouseleave(function(){
        $(this).find(".info").css({display:"none", opacity:"0", left:"0px"}); 
    });



    /*
    $("#home .establecimientos .view-id-home.view-display-id-block_5 .logo").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
    */
    /*
    $(".recetas .view-id-home.view-display-id-block_4 .views-row").mouseover(function(){
        $(this).find(".info").css({opacity:"1", top:"0px", left:"0px"});
    });
    $(".recetas .view-id-home.view-display-id-block_4").mouseleave(function(){
        $(this).find(".info").css({opacity:"0", top:"0px", left:"0px"}); 
    });
    */
    //FIN RECETAS

    //ESTABLECIMIENTOS
    $('#establecimiento .der .down .pago').each(function(){
      var tipodepago = $(this).find('.field-item').html();

      if(tipodepago == 'Todas las tarjetas'){
        var style = todas('todos');
        $(this).find('#establecimiento .der .down .pago').css(style);

      }else if(tipodepago == 'Efectivo'){
        var style = todas('efectivo');
        $(this).find('#establecimiento .der .down .pago').css(style);
      }
    });
    //FIN ESTABLECIMIENTOS



    //Scroll EFECTO PARALLAX
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();           
        $('#articulo .foto img').css({'background-position' : '50% '+ (-(scrolled / 2)) + 'px'});
    }); // window scroll Ends

}); 