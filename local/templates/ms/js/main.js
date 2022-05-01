function is_mobile() {
	return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
}
$(window).on('load', function() {
	 if (!is_mobile()) {
 			$('.load-bg').each(function(index) {
				var j_this = $(this);
				setInterval(function() {
					j_this.addClass('active');
				}, 450 * index);
			});
			$('.loader-header').addClass('active');
			$('.logo_large-text').addClass('active');
			 setTimeout(function() {
			 	$('.wrapper-loader').fadeOut(200);
			 }, 3500);
			$('#fullpage').fullpage({
				// scrollOverflow: true,
				menu: '#fixed-nav',
				anchors: ['first', 'second', 'third', 'fourth', 'fifth', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve'],
				scrollingSpeed: 1000,
				// scrollBar: true,
				onLeave: function(anchorLink, index){
					$('.ui-header').addClass('is-animation');
					$('.section').addClass('is-animate');
					$('.nav-menu').css('top',110 -(index *50));
				},
				 afterLoad: function(anchorLink, index){
				 	$('.nav-menu').css('top',110 -(index *50));
				 	$('.ui-header').removeClass('is-animation');
				 	$('.section').removeClass('is-animate');
				 	$('.head-menu a').removeClass('active');
					$('.head-menu a[data-id="' + index + '"]').addClass('active');
            if(index == 2 || index == 3 || index == 4 || index == 5 || index == 6 || index == 7 || index == 8 || index == 9 || index == 11 || index == 12){
                $('.ui-header').addClass('is-black');
                $('#fixed-nav').addClass('is-black');
                $('.pendulum').addClass('is-black');
                $('.head_center-column').removeClass('is-visible');
                $('.head_center-column').removeClass('is-hidden');
                $('.head_center-column').removeClass('is-last');
            } else{
            	$('.ui-header').removeClass('is-black');
            	$('#fixed-nav').removeClass('is-black');
              $('.pendulum').removeClass('is-black');
            }
            if(index == 2){
              $('.head-first-title').text('Продукция ограждения');
              $('.head-second-title').text('Продукция козырьки');
            }
            if(index == 3){
              $('.head-first-title').text('Наши работы');
              $('.head-second-title').text('Услуги частным клиентам');
            }
            if(index == 4){
              $('.head-first-title').text('Услуги частным клиентам');
              $('.head-second-title').text('Услуги для компаний');
            }
            if(index == 5){
              $('.head-first-title').text('Услуги для компаний');
              $('.head-second-title').text('о производстве');
            }
            if(index == 6){
              $('.head-first-title').text('о производстве');
              $('.head-second-title').text('о производстве');
            }
            if(index == 7){
              $('.head-first-title').text('о производстве');
              $('.head-second-title').text('параметры продукции');
            }
            if(index == 8){
              $('.head-first-title').text('параметры продукции');
              $('.head-second-title').text('Сертификаты и партнеры');
            }
            if(index == 9){
              $('.head-first-title').text('Сертификаты и партнеры');
              $('.head-second-title').text('Фотографии завода');
            }
            if(index == 10){
              $('.head-first-title').text('Фотографии завода');
              $('.head-second-title').text('отзывы клиентов');
              $('.head_center-column').addClass('is-visible');
              $('.head_center-column').removeClass('is-last');
            }
            if(index == 11){
              $('.head-first-title').text('отзывы клиентов');
              $('.head_center-column').addClass('is-last');
            }
            if(index == 12){
              $('.head_center-column').addClass('is-hidden');
              $('.pendulum').addClass('is-up');
            } else{
            	$('.pendulum').removeClass('is-up');
            }
        },
			});
		}
		if (!is_mobile()) {
		if ($('.advantages-box').length) {
			var show = true;
			$(window).on("scroll load resize", function() {
				if (!show) return false;
				var w_top = $(window).scrollTop();
				var e_top = $('.advantages-box').offset().top;
				if (w_top + $(window).height() > e_top) {
					$('.advantage-item').each(function(index) {
						var jthis = $(this);
						setInterval(function() {
							jthis.removeClass('is-fade');
						}, 400 * index);
					});
					$('.advantage-item_digit').each(function(index) {
						var jthis = $(this);
						jthis.spincrement({
							from: 0,
							decimalPlaces: 0,
							decimalPoint: '.',
							thousandSeparator: ' ',
							duration: 5000,
							leeway: 50,
							easing: 'spincrementEasing',
						});
					});
					show = false;
				}
			});
		}
	}
	
});

jQuery(document).ready(function($) {
	if (is_mobile()) {
		$('.load-bg').each(function(index) {
				var j_this = $(this);
				setInterval(function() {
					j_this.addClass('active');
				}, 100 * index);
			});
			$('.loader-header').addClass('active');
			$('.logo_large-text').addClass('active');
			 setTimeout(function() {
			 	$('.wrapper-loader').fadeOut(200);
			 }, 1500);
		$('body').addClass('is-scroll');
		$('#fixed-nav').addClass('menu-hidden');
		$('.pendulum').addClass('is-hidden');
		var heightHead = $('.ui-header').outerHeight();
		jQuery(window).on("scroll load", function() {
			if ($(window).scrollTop() > heightHead) {
				 $('.ui-header').addClass('fixed-menu');
			} else {
				$('.ui-header').removeClass('fixed-menu');
			}
			if ($(window).scrollTop() > $(window).height()) {
				$('.scroll-to-top').addClass('scroll-to-top-visible');
			} else {
				$('.scroll-to-top').removeClass('scroll-to-top-visible');
			}	
			var $sections = $('.section');
			$sections.each(function(i, el) {
				var top = $(el).offset().top;
				var bottom = top + $(el).height();
				var scroll = $(window).scrollTop();
				var heightHead = $('.ui-header').outerHeight();
				var id = $(el).data('id');
				if (scroll + heightHead > top && scroll < bottom) {
					$('.head-menu a').removeClass('active');
					$('.head-menu a[data-id="' + id + '"]').addClass('active');
				}
			});
		});
	}
	lazyLoad($('body'));
	$('.scroll-to-top').on('click', function() {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	$(".hamburger").on("click", function() {
		$(this).toggleClass('is-active');
		$('.push-menu').toggleClass('is-open');
		$('.bg-overlay').fadeToggle(300);
		if (is_mobile()) {
			$('html').toggleClass('is-hidden');
		} else{
			if($(this).hasClass('is-active')){
	      $.fn.fullpage.setMouseWheelScrolling(false);
	     }else{
	      $.fn.fullpage.setMouseWheelScrolling(true);
	     }
		}
	});
	$('.bg-overlay').on("click", function() {
		$(".hamburger").removeClass('is-active');
		$('.push-menu').removeClass('is-open');
		$(this).fadeOut(300);
		if (!is_mobile()) {
			$.fn.fullpage.setMouseWheelScrolling(true);
		} else{
			$('html').removeClass('is-hidden');
		}
	});
	$('.push-menu_close-btn').on("click", function() {
		$(".hamburger").removeClass('is-active');
		$('.push-menu').removeClass('is-open');
		$('.bg-overlay').fadeOut(300);
		if (!is_mobile()) {
			$.fn.fullpage.setMouseWheelScrolling(true);
		} else{
			$('html').removeClass('is-hidden');
		}
	});
	$('.head-menu>li>a').on("click", function() {
		$(".hamburger").removeClass('is-active');
		$('.push-menu').removeClass('is-open');
		$('.bg-overlay').fadeOut(300);
		$(this).closest('li').siblings().find('a').removeClass('active');
		$(this).addClass('active');
		if (!is_mobile()) {
			$.fn.fullpage.setMouseWheelScrolling(true);
		} else{
			$('html').removeClass('is-hidden');
				event.preventDefault();
				var heightHead = $('.ui-header').outerHeight(),
						id = $(this).data('id'),
						top = $('.section[data-id="' + id + '"]').offset().top;
			$('body,html').animate({
				scrollTop: top -heightHead +20
			}, 1500);
		}
	});
	$(document).on('click', '.js-pendulum', function(){
		if($(this).hasClass('is-up')){
				$.fn.fullpage.moveSectionUp();
			} else{
	      $.fn.fullpage.moveSectionDown();
			}
    });

	$('.main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true
	});
	$('.product-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true
	});
	$('.work-slider').slick({
			variableWidth: true,
			infinity: false,
			slidesToScroll: 1,
	});
	if ($('.wrapper_product-slider').length) {
		$('.wrapper_product-slider').each(function() {
			var number = $(this).find(".product-slider").find('.slick-slide:not(.slick-cloned)').length;
			var currentIndex = $(this).find(".product-slider").find('.slick-active').index();
			$(this).find('.pagination-digit').text(number);
			$(this).find('.pagination-number').text(currentIndex+1);
			$(this).find(".product-slider").on('afterChange', function() {
				var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
				currentIndex = $(this).find('.slick-active').index();
				$(this).closest('.wrapper_product-slider').find('.pagination-digit').text(number);
				$(this).closest('.wrapper_product-slider').find('.pagination-number').text(currentIndex +1);
			});
		});
	}
	if (is_mobile()) {
		$('.advantage-item').removeClass('is-fade');
	}
	$('.certificates-slider').slick({
			variableWidth: true,
			infinity: false,
			slidesToScroll: 1,
	});
	if ($('.certificates-slider').length) {
			var number = $(".certificates-slider").find('.slick-slide:not(.slick-cloned)').length;
			var currentIndex = $(".certificates-slider").find('.slick-active').index();
			$('.certificates-counter').find('.pagination-digit').text(number);
			$('.certificates-counter').find('.pagination-number').text(currentIndex);
			$(".certificates-slider").on('afterChange', function() {
				var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
				currentIndex = $(this).find('.slick-active').index();
				$('.certificates-counter').find('.pagination-digit').text(number);
				$('.certificates-counter').find('.pagination-number').text(currentIndex );
			});
	}
	$('.partners-slider').slick({
			arrows: false,
			dots: true,
			slidesToShow: 6,
			slidesToScroll: 2,
			responsive: [{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 2,
					variableWidth: false,
				}
			}, {
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					variableWidth: false,
				}
			}, ]
	});
	$('.photo-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		appendArrows: $('.photo-arrow'),
	});
	if ($('.photo-slider').length) {
			var number = $(".photo-slider").find('.slick-slide:not(.slick-cloned)').length;
			var currentIndex = $(".photo-slider").find('.slick-active').index();
			$('.photo-counter').find('.pagination-digit').text(number);
			$('.photo-counter').find('.pagination-number').text(currentIndex);
			$(".photo-slider").on('afterChange', function() {
				var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
				currentIndex = $(this).find('.slick-active').index();
				$('.photo-counter').find('.pagination-digit').text(number);
				$('.photo-counter').find('.pagination-number').text(currentIndex );
			});
	}
	$('.reviews-slider').slick({
			variableWidth: true,
			infinity: false,
			slidesToScroll: 1,
			responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					variableWidth: false,
				}
			}, ]
	});
	if ($('.reviews-slider').length) {
			var number = $(".reviews-slider").find('.slick-slide:not(.slick-cloned)').length;
			var currentIndex = $(".reviews-slider").find('.slick-active').index();
			$('.review-counter').find('.pagination-digit').text(number);
			$('.review-counter').find('.pagination-number').text(currentIndex);
			$(".reviews-slider").on('afterChange', function() {
				var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
				currentIndex = $(this).find('.slick-active').index();
				$('.review-counter').find('.pagination-digit').text(number);
				$('.review-counter').find('.pagination-number').text(currentIndex );
			});
	}
		
		$('.tab-container').on('click', '.tab:not(.active)', function() {
			$(this).addClass('active').siblings().removeClass('active')
			$(this).closest('.tab-container').find('.tab-item').removeClass('is-visible').eq($(this).index()).addClass('is-visible');
		});
		$('.form-control').focus(function() {
			$(this).closest('.form-group').addClass('focus');
		});
		$('.form-control').blur(function() {
			if ($(this).val().length == 0) {
				$(this).closest('.form-group').removeClass('focus');
			}
		});
	$(document).find('.slick-cloned a').removeAttr('data-fancybox');
	$(".fancybox").fancybox({
		afterLoad: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').addClass('is-overflow');
				$('.scroll-to-top').addClass('is-hidden');
				$.fn.fullpage.setMouseWheelScrolling(false);
			}
		},
		afterClose: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').removeClass('is-overflow');
				$('.scroll-to-top').removeClass('is-hidden');
				$.fn.fullpage.setMouseWheelScrolling(true);
			}
		},
		backFocus : false,
	});
	if (!is_mobile()) {
		$('.js-modal').on('show.bs.modal', function(event) {
			$('.fixed-menu').addClass('is-overflow');
			$('.scroll-to-top').addClass('is-hidden');
			$.fn.fullpage.setMouseWheelScrolling(false);
		});
		$('.js-modal').on('hidden.bs.modal', function(event) {
			$('.fixed-menu').removeClass('is-overflow');
			$('.scroll-to-top').removeClass('is-hidden');
			$.fn.fullpage.setMouseWheelScrolling(true);
		});
	}
	$('.js_form-submit').on("click", function() {
		var jhis = $(this).closest('form');
		$(jhis).find('.requiredField').removeClass('input-error');
		$(jhis).find('.error').remove();
		var error = 0;
		$(jhis).find('.requiredField').each(function() {
			if ($(this).hasClass('callback-phone')) {
				if ($(this).val().length < 10) {
					$(this).after('<span class="error">Введите номер телефона</span>');
					$(this).addClass('input-error');
					error = 1;
				}
			}  
			else if ($(this).hasClass('callback-name')) {
				if ($(this).val().length < 3) {
					$(this).addClass('input-error');
					$(this).after('<span class="error">Заполните поле имя</span>');
					error = 2;
				}
			} 
		});
		if (error == 0) {
			/**отправка формы**/
		} else {
			return false;
		}
	});
	
	$('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
		"clearIncomplete": true,
		showMaskOnHover: false,
	});
});
function lazyLoad($content) {
		$content.find('img[data-src], source[data-src], audio[data-src], iframe[data-src]').each(function() {
			$(this).attr('src', $(this).data('src'));
			$(this).removeAttr('data-src');
			if ($(this).is('source')) {
				$(this).closest('video').get(0).load();
			}
		});
	}
