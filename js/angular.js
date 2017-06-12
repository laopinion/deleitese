'use strict';
var app = angular.module('app', ['infinite-scroll', 'ngSanitize', 'ui.router', 'angular-inview', 'angular-google-adsense']);//ngSanitize formatear texto a html

app.config(function($locationProvider){
  $locationProvider.html5Mode(true);
});
/*
$locationProvider.html5Mode({
  enabled: true,
  requireBase: false
});
*/
app.value('THROTTLE_MILLISECONDS', 250);

app.controller('controlador', function ($scope, Article){
  $scope.article = new Article();
});

// Article constructor function to encapsulate HTTP and pagination logic

app.factory('Article', function ($http){

  var Article = function() {
    this.items = [];
    this.busy = false;
    this.page = 0;
  };

  Article.prototype.nextPage = function(){
    //this.items = ['1', '2', '3', '4'];
    if(this.busy) return;
    this.busy = true;

    var seccion = $('#articulo .contenido .seccion .field-item a').html().toLowerCase();
    // function omitirAcentos(text) {
    //   var acentos = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
    //   var original = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
    //   for (var i=0; i<acentos.length; i++) {
    //       text = text.replace(acentos.charAt(i), original.charAt(i));
    //   }
    //   return text;
    // }
    // seccion = omitirAcentos(seccion);
    // console.log(seccion);

    // var url = 'http://localhost/OPNEWSITE/api/v1/views/articlesrest?display_id=services_1&page='+this.page;
    var url = 'http://www.deleitese.co/api/v1/views/articlesrest?callback=JSON_CALLBACK&display_id=services_1&field_seccion_tid='+seccion+'&page='+this.page;
    // var url = 'http://localhost/deleitese/api/v1/views/articlesrest?callback=JSON_CALLBACK&display_id=services_1&field_seccion_tid='+seccion+'&page='+this.page;
    $http.jsonp(url)
      .success(function(data){
        // console.log('ok'+data);
        // rutas.push(data.field_ruta);
        // console.log('Rutas ->'+rutas);
        for (var i = 0; i < data.length; i++){
          this.items.push(data[i]);
        }

        this.page++;
        this.busy = false;

      }.bind(this));
  };

  return Article;
});


app.controller('contrUrl', function ($scope, $rootScope, $location){
  $scope.currentIndex = 0;
  var c = 0;
  $scope.changeUrl = function (url, $index, $inview){
    // console.log('Ruta -->'+url);
    // console.log('Index -->'+$index);
    // console.log('inview -->'+$inview);
    // $scope.currentIndex = $index;
    var rutaPrincipal = $("#articulo").data("urlp");//Esta es la ruta de la primera nota
    // console.log(rutaPrincipal)
    if($inview){
      $location.path(url).replace();//Cambio de la url 
      var titulo = $(this).find('.contenido .h1').html();
      var url = $(this).find('.contenido .ruta').html();
      var resumen = $(this).find('.contenido .resumen').html();
      var foto = $(this).find('.contenido .foto').html();
      $('meta[property="og:title"]').attr('content',"$titulo" );
      $('meta[property="og:url"]').attr('content',"$url" );
      $('meta[property="og:description"]').attr('content',"$resumen" );  
      $('meta[property="og:image"]').attr('content',"$foto" );
          
      // console.log("Ruta principal "+rutaPrincipal);

      $('#scroll-infinito .li').each(function(){
        // var des = $(this).find('.contenido .foto .descripcion').html();
        // if(des == ''){
        //   var descripcion = $(this).find('.contenido .foto img').attr('title');
        //   var alt = $(this).find('.contenido .foto img').attr('alt');
        //   $(this).find('.contenido .foto .descripcion').html(descripcion);
        //   $(this).find('.contenido .foto .credito').append(alt);

        //   $(this).find('.contenido .barra.desktop .etiquetas aside a').attr('target', '_blank');
        //   $(this).find('.contenido .barra.table .etiquetas aside a').attr('target', '_blank');
        // }
        //Tener cuidado con este if <--|
        if(rutaPrincipal == $(this).find('.contenido meta').attr('content') && c == 0){//toca tener en cuenta este metodo si funciona correctamente
          $(this).css("display", "none");//escondemos la nota si es la misma que la primera
          // console.log('Se disparo');
          c++;
        }
      });

    }
  }
});


// function fileScroll($scope, $http){
//   $scope.items = [];//array para guardar moreData
//   $scope.loading = true;   
//   $scope.page = 0;//contador para moreData

//   var seccion = $('#nota .izq .menu_seccion h3').html().toLowerCase();
  
//   $scope.moreData = function(){
//     // var url = 'http://localhost/OPNEWSITE/api/v1/views/articlesrest?display_id=services_1';
//     var url = 'http://localhost/OPNEWSITE/api/v1/views/articlesrest?display_id=services_1&field_seccion_tid='+seccion+'&page='+this.page;

//     $http.get(url).success(function(data){
//       //console.log(data);
//       for (var i = 0; i < data.length; i++){
//         $scope.items.push(data[i]);
//       }

//       $scope.page++;
//       // $scope.loading = false;
//       console.log("pagina -->"+$scope.page);

//     });
//   }
//   console.log('Ejecutando');
//   fileScroll.$inject = ['$scope', '$http'];
//   //hacemos global moreData
//   $scope.moreData();
// }

// app.directive('whenScrolled', function() {
//   return function(scope, elm, attr){
//     var raw = elm[0];

//     elm.bind('scroll', function() {
//         if (raw.scrollTop + raw.offsetHeight >= raw.scrollHeight) {
//             scope.$apply(attr.whenScrolled);
//         }
//     });
//   }
// });

