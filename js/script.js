$(document).ready(function(){
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
  if(ruta == 'http://localhost/deleitese/' || ruta == 'http://localhost/deleitese/lo-nuestro'){
    // var styles = {
    //   background : "url(../images/btn_noticias.svg) no-repeat",
    //   backgroundPosition: "25px 28px"
    // };
    clearClass();   
    $('#header .menu .noticias').addClass('active-noticias');
  }else if(ruta == 'http://localhost/deleitese/personajes'){
    clearClass();
    $('#header .menu .personajes').addClass('active-personajes');
  }else if(ruta == 'http://localhost/deleitese/lo-recetas'){
    clearClass();
    $('#header .menu .recetas').addClass('active-recetas');
  }else if(ruta == 'http://localhost/deleitese/restaurantes'){
    clearClass();
    $('#header .menu .restaurantes').addClass('active-restaurantes');
  }else if(ruta == 'http://localhost/deleitese/promociones'){
    clearClass();
    $('#header .menu .promociones').addClass('active-promociones');
  }else if(ruta == 'http://localhost/deleitese/foodies'){
    clearClass();
    $('#header .menu .foodies').addClass('active-foodies');
  }else if(ruta == 'http://localhost/deleitese/contactos'){
    clearClass();
    $('#header .menu .contactos').addClass('active-contactos');
  }

  $(function() {
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


}); 