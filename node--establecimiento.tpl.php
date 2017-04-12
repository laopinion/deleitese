<!--SLIDE FOTOS-->
    <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/jssor.js"></script>
    <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/deleitese/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
<style>
    .jssora21l, .jssora21r {display: block;position: absolute;width: 55px;height: 55px;cursor: pointer;overflow: hidden;}
    .jssora21l {top: 10px; left: -1px; background: url(http://www.deleitese.co/sites/default/themes/deleitese/images/btn_slide_izq.svg) 0px 0px/60px auto no-repeat; }
    .jssora21r {top: 10px; right: 2px; background: url(http://www.deleitese.co/sites/default/themes/deleitese/images/btn_slide_der.svg) 0px 0px/60px auto no-repeat; }
    .jssora21l:hover { opacity: 0.8; }
    .jssora21r:hover {  opacity: 0.8;}
    .jssora21l.jssora21ldn { background-position: -243px -33px; }
    .jssora21r.jssora21rdn { background-position: -303px -33px; }
</style>
<div class=llamar><div class=icono></div></div>
<!-- FIN Script numero -->

<div id="establecimiento">
    <div id="slider1_container" style="position: relative; margin: 0 auto;top: 0px; left: 0px; width: 1400px; height: 500px; overflow: hidden;">
        <!-- Slides -->
        <div u="slides" class="slideImg"  style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px; height: 500px; overflow: hidden;">
        <?php 
        if (!empty($node->field_fachada)) {   
          $i=0;
          foreach($node->field_fachada['und'] as $imagen) {           
            $foto = substr($content['field_fachada'][$i]['#item']['uri'],8);
            print "<div>";
            print "
                <img u=image src='".base_path()."sites/default/files".$foto."' alt='".render($content['field_fachada'][$i]['#item']['alt'])."' width='100%; height='auto'/>
              </div>";
                $i++;
                }   
            }    
        ?> 
      </div>
      <span u="arrowleft" class="jssora21l"></span>
      <span u="arrowright" class="jssora21r"></span>
    </div>
    
    <div class="contenido">
        
        <div class="izq">
          <h1 class="titulo"><?php print $title;?></h1>
          <?php
          if (!empty($content['field_especialidad'])){ 
            print "<div class=especialidad>".render($content['field_especialidad'])."</div>";
            }
          ?>
          <div class="texto"><?php print render($content['body']);?></div>   
        </div>
        <div class="der">
            <div class="up">
                <div class="logo"><?php print render($content['field_logo']);?></div>
                
                <div class="valoracion">
                  <div class="estrellas"></div>
                  <div class="fivestar-basic"><?php print render($content['field_valoracion']); ?></div>
                  <span>Calificación</span>
                </div>
                
            </div>
            <div class="down">
                <div class="direccion"><?php print render($content['field_direccion']);?></div>
                <div class="telefono"><?php print render($content['field_llamar']);?></div>
                <div class="horarios"><?php print render($content['field_horarios']);?></div>
                <div class="web"><?php print render($content['field_web']);?></div>
                <!--<div class="facebook"><?php // print render($content['field_facebook']);?></div>-->
                <div class="facebook"><?php print render($content['field_facebook_']);?></div>
                <div class="instagram"><?php print render($content['field_instagram']);?></div>
                <div class="pago"><span>Medios de pago:</span> <?php print render($content['field_medios_de_pago']);?></div>
            </div>
            <!--Mapa--><div class="mapa"><?php print render($content['field_mapa']);?></div><!--FIN Mapa-->
        </div>
        <?php
          if (!empty($content['field_menu'])){ 
            print "<div class=menur><div class=titulo><div class=icon></div><div class=txt></div></div></div>";
            }
          ?>
          <script>
            jQuery(document).ready(function ($) {
                var options = {
                    $AutoPlay: true,
                    $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false
                    $ArrowKeyNavigation: true,                          //Allows arrow key to navigate or not
                    $SlideWidth: 484,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                    //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                    $SlideSpacing: 0,                                   //Space between each slide in pixels
                    $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 100,                                //The offset position to park slide (this options applys only when slideshow disabled).
                    $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };
                var jssor_slider2 = new $JssorSlider$("slider2_container", options);
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                    if (parentWidth)
                        jssor_slider2.$ScaleWidth(Math.min(parentWidth, 800));
                    else
                        window.setTimeout(ScaleSlider, 30);
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>
        <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 100%;height: 650px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 100%; height: 650px;overflow: hidden;">
            <?php 
            if (!empty($node->field_menu)) {   
              $i=0;
              foreach($node->field_menu['und'] as $imagen) {           
                $item = substr($content['field_menu'][$i]['#item']['uri'],8);
                print "<div>";
                print "
                    <img u=image src='".base_path()."sites/default/files".$item."' alt='".render($content['field_menu'][$i]['#item']['alt'])."'/>
                    
                  </div>";
                    $i++;
                    }   
                }    
            ?> 
        </div>
        <style>
            .jssora13l, .jssora13r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 50px;
                cursor: pointer;
                background: url(../img/a13.png) no-repeat;
                overflow: hidden;
            }
            .jssora13l { background-position: -10px -35px; }
            .jssora13r { background-position: -70px -35px; }
            .jssora13l:hover { background-position: -130px -35px; }
            .jssora13r:hover { background-position: -190px -35px; }
            .jssora13l.jssora13ldn { background-position: -250px -35px; }
            .jssora13r.jssora13rdn { background-position: -310px -35px; }
        </style>
        <span u="arrowleft" class="jssora13l" style="top: 123px; left: 30px;"></span>
        <span u="arrowright" class="jssora13r" style="top: 123px; right: 30px;"></span>
    </div>

    </div>  
      
      <!--MOVIL-->
      <!--
        <h1 class="titulo"><?php // print $title;?></h1>
        <div class="resumen"><?php // $view = views_get_view('detalle'); print $view->preview('block_5'); ?></div>
        <div class="logo"><?php // print render($content['field_logo']);?></div>
        <div class="numero"><?php // print render($content['field_llamar']);?></div>
        <div class="tel"></div>
        <div class="valoracion"><div class="estrellas"></div><span>Valoración</span></div>
        <div class="texto"><?php // print render($content['body']);?></div> 
        <div class="mapa"><h2>Ubicación</h2><?php // print render($content['field_mapa']);?></div>
        <div class="comentarios">
          <div class="bloque"><?php // include("disqus.tpl.php"); ?></div>
        </div>
        <?php  // include("compartir.tpl.php"); ?>
      </div>
        -->
      <!--FIN MOVIL-->
</div>