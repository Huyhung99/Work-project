$(document).ready(function() {
	
	if($("#more").hasClass("load-post")) {
	$(window).scroll(function(){
		var bottomOffset = 3000;
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
			$.ajax({
				url:ajaxurl,
				data:data,
				type:'POST',
				beforeSend: function( xhr){
					$('body').addClass('loading');
				},
				success:function(data){
					if( data ) { 
						$('#true_loadmore').before(data);
						$('body').removeClass('loading');
						current_page++;
					}
				}
			});
		}
	});
	}
	
	
	$(".add-cart").submit(function(e) {
	   e.preventDefault();
	   var urlFormSend = $(this).attr('action');
	   var msg   = new FormData(this);
	   var TTF   = $(this);
			$.ajax({
				type: 'POST',
				url: urlFormSend,
				data: msg,
				cache:false,
				processData: false,
                contentType: false,
				success: function(data) {
					if(data == 'err') {
					   alert('Error');
					} else if(data == 'no') {
					   alert('Not available');
					} else {
					   var sumCart = parseInt($('.cart-count').text()) + parseInt(TTF.find('#product-quantity').val());
					   $('.cart-count').text(sumCart);
					   var numForm = TTF.data('form');
					   /* if(!$('div').hasClass("template2")) { TTF.parent().remove(); } */
					   $(TTF).html('<a href="'+ $(TTF).data('url-cart') +'" class="button">Added to cart</a>');
					   $('.template2.add-to-cart' + numForm + '').html('<span class="input-spin"><p class="noots"><strong><a href="'+ $(TTF).data('url-cart') +'" class="btn btn--lighter">Item added to cart</a></strong></p></span>');
					   
					}
				},
				error:  function(xhr, str){
					alert('Error: ' + xhr.responseCode);
				}
			});
	   });


});

$(document).ready(function(){
    $('.go_to').click( function(){
	var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) { 
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); 
        }
	    return false;
    });
});
