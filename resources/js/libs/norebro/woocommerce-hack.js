jQuery(function($){
	"use strict";

	// Quantities - plus, minus
	$("body").on("click", ".woo-quantity .plus", function(){
		var input = $(this).parent().find("input");

		if(input.attr("max") != input.attr("value")){
			input.attr("value", parseInt(input.attr("value")) + 1);
		}

		input.change();
	});

	$("body").on("click", ".woo-quantity .minus", function(){
		var input = $(this).parent().find("input");
		if(input.attr("min") != input.attr("value") && parseInt(input.attr("value")) > 1 ){
			input.attr("value", parseInt(input.attr("value")) - 1);
		}

		input.change();
	});

	// Fixed wishlist button in single page
	if($('.summary .yith-wcwl-add-to-wishlist').length) {
		$('.single_add_to_cart_button').after($('.summary .yith-wcwl-add-to-wishlist').clone());
		$('.summary .yith-wcwl-add-to-wishlist').eq(1).remove();
	}

	var checkoutFormRight = function(){
		var order = $("#order_review"), customer = $('#customer_details');

		if( order && customer){
			var cHeight = customer.outerHeight();
			var oHeight = order.outerHeight();

			$(".wc-checkout-wrap").css("min-height", ((cHeight > oHeight) ? cHeight : oHeight) + 100 + "px");
		}
	};

	// Reviews link
	$("a.woo-review-link").on("click", function(){
		var reviewTab = $('#accordion-reviews');

		if ( reviewTab.length ) {
			reviewTab.closest('.accordion-box')[0].accordionToggle( reviewTab.closest('.item').index() );

			$('.woo-summary-content').animate({
				scrollTop: $(".accordion-box").offset().top - 170
			}, 800);
		}
	});

	// Shop product gallery
	$('[data-product-item] .slider').each(function(){
		if($(this).find('img').length > 1) {
			var slider = $(this);

			slider.owlCarousel({
				items: 1,
				slideBy: 1,
				nav: false,
				dots: true,
				loop: true,
				autoHeight: true,
				autoplay: true,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				autoplaySpeed: 1000,
			});
		}
	});

	$('.norebro-slider .woo-products').removeClass('norebro-masonry');


	// Single product price
	var fixedPrice = function(price){
		var ins = price.find('ins');
		var del = price.find('del');

		if( price.length && ins.length == 1 && del.length && price.find('.price-percent').length == 0 ) {
			var regular = parseInt(del.text().match(/(\d|\.)+/g)[0]);
			var sale = parseInt(ins.text().match(/(\d|\.)+/g)[0]);
			var percent = $(document.createElement('div'));

			if ( price.find('.amount').length == 2 ) {
				var saleText = 'SALE';
				if( price.attr('data-sale-text') ) {
					saleText = price.attr('data-sale-text');
				}
				percent.addClass('price-percent').html( '-' + parseInt( 100 - sale * 100 / regular ) + '% ' + saleText );
				price.append(percent);
			}

			del.insertAfter(ins);
		}
	};

	// Single product slider
	var handleSingleProduct = function(){
		var images = $('.product .images');

		if ( images.length ) {
			if ( $(window).width() > 767 ) {
				images.css( 'left', '0');
				images.css( 'left', -(images.offset().left - $('#page').offset().left) + 'px' );
				images.css('width', $('#page').width()/2 + 'px');
			} else {
				images.css({
					'left': '',
					'width': ''
				});
			}
		}

		// Resize images for single product slider
		$('[data-wc-slider] img').each(function(){
			$(this).parent().removeClass('true');
			if( $(this).outerHeight() < $(window).height() ){
				$(this).parent().addClass('true');
			}
		});
	};

	if($('[data-wc-slider] img').length > 1) {	
		$('[data-wc-slider]').owlCarousel({
			items: 		1,
			slideBy: 	1,
			nav: 		false,
			dots: 		true,
			loop: 		false,
			autoHeight: false,
			autoplay: 	false,
			mouseDrag: 	true,
			touchDrag: 	true
		}).on('changed.owl.carousel', function(obj){
			var currentItem = obj.item.index;
			$('#product-thumbnails .image').removeClass('selected');
			$($('#product-thumbnails .image')[currentItem]).addClass('selected');
		});

		$('[data-wc-toggle-image]').on('click', function(){
			$('[data-wc-slider]').trigger('to.owl.carousel', [parseInt($(this).attr('data-wc-toggle-image')), 0, true]);
		});
	} else {
		$('[data-wc-slider]').addClass('empty');
	}



	var handleWooSwatches = function(){
		var makealloptions = function(){
			$('.variations_form select').each(function(index, element) {
				var curr_select = $(this).attr('id');
				if($('#'+curr_select+'_buttons').length){
					if(!$('#'+curr_select+'_buttons').find('.selected').length){
						$('#'+curr_select+'_buttons').html('');
						$('#'+curr_select+'_descriptions .variation_description').stop(true,true).slideUp("fast");
					} else {
						$('#'+curr_select+'_buttons .unselected').hide();
					}
				} else {
					$( '<div class="variation_buttons_wrapper"><div id="'+curr_select+'_buttons" class="variation_buttons"></div></div><div class="variation_descriptions_wrapper"><div id="'+curr_select+'_descriptions" class="variation_descriptions"></div></div>' ).insertBefore( $(this) );
				}
				$('#'+$(this).attr('id')+' option').each(function(index, element) {
					if($(this).val()!=''){
						// Get Image
						var image = $('#'+curr_select+'_'+$(this).val()+'_description .image img');
						
						if($('#'+$(this).val()).length){
							$('#'+$(this).val()).show();
						} else {
							
							$( "#"+curr_select+'_buttons' ).append( '<a href="javascript:void(0);" class="static variation_button'+(($('#'+curr_select).val()==$(this).val())?' selected':' unselected')+'" id="'+$(this).val()+'" title="'+$(this).text()+'" rel="'+curr_select+'">'+$('.'+$(this).val()+'_image').html()+'</a>' );
							
							if($('#'+curr_select).val()==$(this).val()){
								$('#'+curr_select+'_'+$(this).val()+'_description .var-notice').stop(true,true).hide();
								$('#'+curr_select+'_'+$(this).val()+'_description').stop(true,true).slideDown("fast")
							}
						}
					} else {
						if(  $('#'+curr_select+' option').length == 1 && $('#'+curr_select+' option[value=""]').length){
							 $( "#"+curr_select+'_buttons' ).append( 'Combination Not Avalable <a href="javascript:void(0);" class="variation_reset">Reset</a>' );
						}
					}
				});
			});
			if($('.single_variation .price .amount').is(':visible') || $('.single_add_to_cart_button').is(':visible')){
				$('p.lead-time').show();
				$('p.price-prompt').hide();
				if($('.single_variation .price .amount').is(':visible')){
					//$('div [itemprop="offers"] .price').hide();
				} else {
					$('div [itemprop="offers"] .price').clone().appendTo( $( ".single_variation" ) );
				}
			}
			$('form.variations_form').fadeIn();
			$('.product_meta').fadeIn();
		}

			
		if($('.variations_form').length) {
			makealloptions();
		}
		
		$(document).on('click','.reset_variations',function(){
			$('.selected').each(function(){
				$(this).removeClass('unselected');  
			});
		});

		$(document).on( 'click', '.variation_button', function(){
			if( $('#'+$(this).attr('rel')).val() == $(this).attr('id') ){
				$('#'+$(this).attr('rel')).val('');
				$(this).removeClass('selected').addClass('unselected');
			} else {
				$('#'+$(this).attr('rel')).val($(this).attr('id'));
				$('#'+$(this).attr('rel')+'_buttons .variation_button').removeClass('selected').addClass('unselected');
				$(this).removeClass('unselected').addClass('selected');
				//if($(this).attr('rel')!='pa_frame'){
					$('#variation_'+$(this).attr('rel')+' .var-notice').stop(true,true).hide();
					var notTarget = $(this).attr('rel')+'_'+$(this).attr('id')+'_description';
					$('#'+$(this).attr('rel')+'_descriptions .variation_description').each(function(){
						if($(this).attr('id')!=notTarget){
							$(this).hide();
						}
					});
				//}
			}
			$('#'+$(this).attr('rel')).change();
		});
		
		$('.variation_descriptions_wrapper:first-child').append('');
		$(document).on('change','.variations_form select',function(){
			makealloptions();
		});

		window.goToFrames = function(){
			$('<div class="current_selection_prompt">Current selection</div>').insertBefore('.entry-summary h1');
			$('.variations .variation').each(function(index, element) {
				$(this).stop(true,true).slideUp( "fast");
			});
			var current_selections;
			$('#current_selections').html();
			
			$('.variation_button.selected').each(function(){
				
				$('#current_selections').html($('#current_selections').html()+'<span>'+$('#variation_'+$(this).attr('rel')+' .variation_name_value').html()+':</span> '+$(this).attr('title')+'  &nbsp; ');
				
			});
			
			$('.variation_descriptions_wrapper img').attr('data-parent','.variation_descriptions_wrapper');
			
		}
	}

	function refreshWooCategory(){
		$('li.product-category').each(function(){
			var info = $(this).find('.info-wrap'),
				contentCenter = $(this).find('.content-center');

			$(this).find('>.wrap').css('height','0');

			var ratio = $(this).width() / this.imgWidth;
			var padding = info.innerHeight() - info.height();
			var height = this.imgHeight * ratio;

			$(this).find('>.wrap').css({
				'height': height + 'px',
				'min-height': (contentCenter.outerHeight() + padding ) + 'px'
			});
		});
	}


	$(window).on('load', function(){

		$('.woocommerce .images .slider, .woo-products .slider').addClass('visible');

		handleSingleProduct();
		fixedPrice( $('.product .summary p.price').eq(0) );

		// Change single product variations price
		$('.variations select').on('change', function(){
			setTimeout(function(){
				fixedPrice( $('.woo-variation-price') );
				handleSingleProduct();
			}, 10);
		});

		// If variation changed main image
		var mainImage = $('[data-wc-slider]').find('img').eq(0);
		var oldSrc = mainImage.attr('src');
		mainImage.on('load', function(){
			if( oldSrc != mainImage.attr('src') ){
				$('[data-wc-slider]').trigger('to.owl.carousel', [0, 0, true]);
				handleSingleProduct();
			}
		});

		fixedPrice( $('.woo-variation-price') );
		checkoutFormRight();

		handleWooSwatches();

		// Magic woo category list
		$('li.product-category').each(function(){
			var img = $(this).find('img'),
				wrap = $(this).find('>.wrap');


			wrap.css({
				'background-image': 'url("' + img[0].src + '")',
				'height': wrap.height() + 'px'
			});

			this.imgWidth = img.width();
			this.imgHeight = img.height();

			img.remove();
		});
		refreshWooCategory();
	});

	$(window).on('resize', function(){
		handleSingleProduct();
		checkoutFormRight();
		setTimeout( refreshWooCategory, 100 );
	});

	refreshWooCategory();
});