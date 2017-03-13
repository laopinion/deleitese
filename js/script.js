$(document).ready(function(){
                    
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