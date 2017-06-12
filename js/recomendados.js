(function($){
	$(window).load(function(){
		if ($("body").hasClass("node-type-articulo") && !$(".contenido").hasClass("reportaje") ) {
			var top = $('#block-articulos-recomendados-articulos-recomendados').offset().top - parseFloat($('#block-articulos-recomendados-articulos-recomendados').css('marginTop').replace(/auto/, 0)) - 51;
			//console.log(top);
			$(window).scroll(function (event) {
				// what the y position of the scroll is
				var y = $(this).scrollTop();
				// whether that's below the form
				if (y > top) {
				// if so, ad the fixed class
					$('.view-recomendados.view-display-id-block').addClass('fixed');
				} else {
				// otherwise remove it
					$('.view-recomendados.view-display-id-block').removeClass('fixed');
				}
			});	
		}	
	});
})(jQuery);	