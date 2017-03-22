<div id="articulo">
  <div class="foto">
    <?php print render($content['field_image']);
    /*
    if(render($content['field_image'][0]['#item']['alt'])){
      print "<div class=pie>";
      print "<div class=descripcion>".render($content['field_image'][0]['#item']['title'])."</div>";
      print "<div class=credito><span>  /  Foto:   </span>".render($content['field_image'][0]['#item']['alt'])."</div></div>";
    }
    */
    ?>
  </div>
    <div class="contenido">
      <div class="seccion"><?php print render($content['field_seccion']);?></div>
      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas>".render($content['field_tags'])."</div>";
        }
      ?>  
      <h1 class="titulo"><?php print $title;?></h1>
      <div class="texto"><?php print render($content['body']);?></div> 
      <div class="fecha"><?php print render($content['field_fecha']);?></div> 
      <div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div></div>
      <div class="comentarios">
        <div class="bloque"><?php // include("disqus.tpl.php"); ?></div>
      </div>
    </div>
    <div class="mas"><span></span></div>
    <div class="otro_contenido"></div>
</div>

<script type="text/javascript">stLight.options({publisher: "3bc465bf-5f69-4b49-b9c4-5b431bd44662", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>
<script type="text/javascript">
  $node = node_load($nid);
  $.extend({
  getValues: function(term, nodeExclude) {
    var result = [];
    $.ajax({
        url: "/scroll/"+term+"/"+nodeExclude,
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
        result = data;
      }
    });
    return result;
    }
  });
  var array = $.getValues(2,336799);
</script>
<script type="text/javascript">
  var counter = 0;
  var handler = function() {
    var height = $(".footer").height();
    if ((counter < array.length) && ($(window).scrollTop() >= $(document).height() - $(window).height() - height)) {
      ajax_cargar_articulo(array[counter],counter);
      counter++;
      }
  };
  $(window).bind( "scroll", handler );
  function ajax_cargar_articulo(nodeid,index){
    $(window).unbind( "scroll", handler );
    datos="nodeid="+nodeid+"&node_count="+counter;
    $.ajax({
    //context: document.body,
    url:"/node/"+nodeid,
    type:"GET",
    data:datos,
    async:false,
    dataType:"html",
    //cache:false,
    beforeSend: function(){
      $(".before").show();
    },
    success:function(data){
      $(".before").hide();
      var temp = $(data);
      $(".otro_contenido").append("<div class='node_id_"+nodeid+"'></div>");
      $('.node_id_'+nodeid).empty().append(temp);
      cargar_galeria_articulo();
      //update_arr_data_notas();
      },
    })
    $(window).bind( "scroll", handler );
  }
</script>
<script>
  setInterval(function(){
    update_arr_data_notas();
  }, 1000);
  var arr_data_notas=Array();
  var height_pantalla;
  function update_arr_data_notas(){
  i=1;
  height_anterior=0;
  $("#page").find(".contenido").each(function(e, a){
    obj=$(this);
    height=(obj.height()+height_anterior);
    offsetTop=obj.offset().top;
    path=obj.find(".path").html();
    titulo=obj.find(".titulo").text();
    typeArticle=obj.find(".typeArticle").text();
  if (typeArticle == "reportaje") {
    seguirleyendo = false;
  }else{
    seguirleyendo = true;
  }
  arr_data_notas[i]={
  "num" : i,
  "height": height,
  "offsetTop" : offsetTop,
  "uri" : path,
  "titulo" : titulo,
  "email" : email,
  "seguirleyendo" : seguirleyendo,
  }
  height_anterior=height;
  //console.log(arr_data_notas[i]);
  i++;
  });
}
  var child=1;
  var child_old;
  $(window).on('scroll', function() {
    scrollTop=$(window).scrollTop();
    entro=null;
  for (var i = 1; i < arr_data_notas.length; i++) {
    if (child!=i) {
    $("#block-articulos-recomendados-articulos-recomendados ul li:nth-child("+i+") .llenado").css("width", "0%");
    $("#block-articulos-recomendados-articulos-recomendados ul li.views-row-"+(child-1)+" .llenado").removeClass("active");
    // $("#progress-bar .progress").removeClass(".progress-"+(child-1));
  }
  if (entro==null) {
  if (scrollTop <= arr_data_notas[i]["height"]) {
    child=i;
    entro=true;
  if (i!=1) {
    porc=((scrollTop-arr_data_notas[(child-1)]["height"]) *100)/ (arr_data_notas[i]["height"]-arr_data_notas[(i-1)]["height"]);
  } else{
    porc=(scrollTop *100)/arr_data_notas[i]["height"];
  }
  uri=arr_data_notas[i]["uri"];
  titulo=arr_data_notas[i]["titulo"];
  puntos = "";
  if (titulo.length > 60) {
    puntos = "...";
  }
  correo_reporte=arr_data_notas[i]["email"];
  //console.log();
  //console.log(arr_data_notas[i]["seguirleyendo"]);
  if (arr_data_notas[i]["seguirleyendo"] == false) {
    $("#block-articulos-recomendados-articulos-recomendados").addClass("active");
    }else{
    $("#block-articulos-recomendados-articulos-recomendados").removeClass("active")
    }
  }
}
} //F for
if (child!=child_old) {
child_old=child;
//console.log(" ------------------- Cambio de nota");
window.history.pushState("", "Titulo", uri);
$("#articulo .contenido .titulo").html(titulo.substr(0,60)+puntos);
document.title = titulo+" | El Heraldo";
}
stButtons.locateElements();
$("#progress-bar .progress").addClass(".progress-"+(child-1));
$("#block-articulos-recomendados-articulos-recomendados ul li.views-row-"+(child-1)+" .llenado, #progress-bar .progress").css("width", porc+"%");
$("#block-articulos-recomendados-articulos-recomendados ul li.views-row-"+(child-1)+" .llenado").addClass("active");
var height = $(".footer").height();
if ($(window).scrollTop() >= $("#page").height() - 527) {
$("#block-articulos-recomendados-articulos-recomendados").hide();
}else{
$(".view-recomendados").show();
}
});
</script>
