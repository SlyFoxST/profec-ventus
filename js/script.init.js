$(document).ready(function(){
	/*var $ = jQuery.noConflict();*/
	$('.lazy').lazy({

	});
	$('#search-product').on('click',function(){
		var key = $('#keywords').val();
		var cat = $('#select-cat option:selected').attr('term_id');
		var term = $('#select-terms option:selected').attr('term_id');
		var price_over = $('.price-over').val();
		var price_to = $('.price-to').val();
		var data = {
			'action': 'search_product',
			'key' : key,
			'term' : term,
			'cat' : cat,
			'price_over' : price_over,
			'price_to' : price_to,
		};

		jQuery.ajax({
			url:my_ajax_object.ajax_url,
			data:data, 
			type:'POST',
			success:function(data){
				
				$('.filters-forms').html(data);

			}
		});
	});

	$('.lang-menu').on('click',function(){
		$(this).toggleClass('show');
		$('.mobile-select-lng').toggleClass('show');
	});
	$('.mobile-log').on('click',function(){
		$(this).toggleClass('show');
		$('.mobile-login').toggleClass('show');
	});
	var btn = $('#button-top');
	$('.search-mobile').on('click',function(){
		$('.mobile-search-section').toggleClass('active');
	});
	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});
	$('.mobile-menu').on("click",function(){
		$(this).toggleClass('active');
		$('.menu-front, .menu-header-front-container,.wrap-mobile-section').toggleClass('show');
	});

	btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '300');
	});
	if ($(window).scrollTop() > 300) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
	$('.close').on('click',function(){
		$('.pop-share').slideUp();
	});

	$('.share-btn-cart').on('click',function(){
		$('.pop-share').slideDown();
	});
	$('.menu-front ul li  ul.sub-menu li  > ul').removeClass('sub-menu').addClass('sub-menu-2');
	if($(window).width() > 760){
		$('.menu-front ul li').hover(function(){
			$(this).find('ul.sub-menu').toggleClass('show');
		}
		);
		
	};

	if($(window).width() <= 760){		
		$('#menu-header-front li, #menu-header-ru li,#menu-header-uk li,#menu-header-du li').each(function(index){
			if($(this).find('ul').hasClass('sub-menu')){
				//console.log(index);
				$(this).addClass('icon-mobile');
			}
			else{
				$(this).addClass('no-icon-mobile');
			}

		});
		$('.menu-front ul li ul.sub-menu li, #menu-header-ru ul li ul.sub-menu li,#menu-header-uk ul li ul.sub-menu li,#menu-header-du ul li ul.sub-menu li').each(function(index){
			if($(this).find('ul').hasClass('sub-menu-2')){
				$(this).addClass('icon-mobile2');
			}
		});
		$('ul.sub-menu li.icon-mobile2').on('click',function(){
			$(this).find('ul.sub-menu-2').toggleClass('show');
		});
		$('.icon-mobile').on('click',function(){
			$(this).toggleClass('active');
			$(this).find('a').toggleClass('active');
			$(this).find('ul.sub-menu').toggleClass('show');
		});
	}
	$('.heaer-search').on('click',function(){
		$('.search-header').toggleClass('show');
	});
	$('.search-header, .form-header').hover(function(){
		$(this).toggleClass('active');
	});
	$('.select-header').on('click',function(){
		$('.form-header').toggleClass('show');
	});

	$('.tab-altern').on('click',function(){
		$(this).addClass('active');
		$('.wrap-alternative').addClass('active');
		$('.wrap-description, .wrap-documents, .tab-descr, .tab-doc').removeClass('active');
	});

	$('.tab-descr').on('click',function(){
		$(this).addClass('active');
		$('.wrap-description').addClass('active');
		$('.tab-altern, .tab-doc, .wrap-alternative, .wrap-documents').removeClass('active');
	});

	$('.tab-doc').on('click',function(){
		$(this).addClass('active');
		$('.wrap-documents').addClass('active');
		$('.tab-altern,.tab-descr, .wrap-alternative, .wrap-description').removeClass('active');
	});



	$('.wrap_wpn_buttons').find('.wpn_buttons').addClass('show');
	$('.nav-previous a').text('last').after('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
	$('.nav-next a').text('next').after('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
	$('.has_gallery').each(function(){
		$(this).hover(function(){
			$(this).siblings().toggleClass('show');
		});
	});
	$('.block_gallery').each(function(){
		$(this).hover(function(){
			$(this).toggleClass('show');
		});
	});
	$('.square-gallery').each(function(){
		var x = $(this);
		var url = '';
		$(this).find('.img-square img').hover(function(){
			var url = $(this).attr('src');
			x.find('.img-square-big').attr('src',url);
		});

	});




	$('.btn-square').on('click',function(){
		$(this).addClass('active');
		$('.btn-line').removeClass('active');
		$('.wraper-line').hide();
		$('.wrap-square').show();
	});
	$('.btn-line').on('click',function(){
		$(this).addClass('active');
		$('.btn-square').removeClass('active');
		$('.wraper-line').show();
		$('.wrap-square').hide();
	});
	$('.btn-default.dropdown-toggle').on('click',function(){
		$('.dropdown-menu').toggleClass('show');
		$('.dropdown-menu2').removeClass('show');
	});
	$('.dropdown-toggle2').on('click',function(){
		$('.dropdown-menu').removeClass('show');
		$('.dropdown-menu2').toggleClass('show');
	})
	$('.read-more').on('click',function(){
		$('.term-content').toggleClass('show');
	});
	$('.select-lng').on('click',function(){
		$('.wrap-current-lng').toggleClass('active');
		$('.select-valute').toggleClass('show');
	});
	$('.mini-cart-icon').hover(function(){
		$('.header_basket_box_wr').toggleClass('show');
	});
	$('.mini-cart-icon').click(function(){
		$('.header_basket_box_wr').toggleClass('show');
	});
	$('.header_basket_box_wr').hover(function(){
		$(this).toggleClass('block');
	})



	$('.btn-price-filters').on('click',function(){
		$('.filter-price').toggleClass('active');
	});

	$('.burger-menu').on('click',function(){
		$('.line-burger').toggleClass('transform');
		$('.mobile-menu').toggleClass('active');
	});
	$('.close').on('click',function(){
		$('.popup-pravila,.popup-dostavka-opl,.popup-svjaz,.popup-cart,.popup-zvonok,.popup-dostavka-moscau,.popup-dostavka-piter,.popup-dostavka-other').slideUp(1000);
	});


	var name = $(".name2");
	var phone = $(".phone2");
	var email = $(".email2");
	var reg = /[0-9 -()+]+$/;
	var regEmail =  /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
	name.change(function(){
		if(name.val() == "" || name.val().length < 3){
			name.addClass('error');
			name.prev('.error').fadeIn(800);
		}
		else{
			name.removeClass('error');
			name.prev('.error').fadeOut(800);
		}
	});
	email.change(function(){
		if($(this).val() != ''){
			if($(this).val().search(regEmail) == 0){
				$(this).removeClass('error');
				$(this).prev('.error').fadeOut(800);

			}else{
				$(this).addClass('error');
				$(this).prev('.error').fadeIn(800);
			}
		}else{
			$(this).addClass('error');
			$(this).prev('.error').fadeIn(800);
		}
	});
	phone.change(function(){
		if($(this).val() != ''){
			if($(this).val().search(reg) == 0){
				$(this).removeClass('error');
				$(this).prev('.error').fadeOut(800);

			}else{
				$(this).addClass('error');
				$(this).prev('.error').fadeIn(800);
			}
		}else{
			$(this).addClass('error');
			$(this).prev('.error').fadeIn(800);
		}
	});




	$('.btn-form2').click(function(e){
		e.preventDefault();
		var name = $(".name2").val();
		var phone = $(".phone2").val();
		var email = $(".email2").val();
		var msg   = $(".msg").val();
		var reg = /[0-9 -()+]+$/;
		var regEmail =  /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;

		if(name == "" || name.length < 3){
			$(".name2").addClass('error');
			$(".name2").prev('.error').fadeIn(800);
		}

		if(phone == '' || phone.search(reg) != 0){
			$(".phone2").addClass('error');
			$(".phone2").prev('.error').fadeIn(800);
		}
		if(email == '' || email.search(regEmail) != 0){
			$(".email2").addClass('error');
			$(".email2").prev('.error').fadeIn(800);
		}
		var data = {
			'action': 'footer_form',
			'name': name,
			'phone': phone,
			'email' : email,
			'msg'   : msg,
		};
		if(name != "" && name.length > 3  && phone != '' && phone.search(reg) == 0)
			jQuery.ajax({
				url:my_ajax_object.ajax_url,
				data:data, 
				type:'POST',
				success:function(data){
					$(".form").trigger('reset');
					$(".form-footer").slideUp(400);
					$('.result').text(data).css({"padding":"20px"});

				}
			});

	});

	$('.slider-front').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		adaptiveHeight: true,
		infinite: true,
		useTransform: true,
		prevArrow:"<div class='slick-prev'><div class='pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></div></div>",
		nextArrow:"<div class='slick-next'><div class=' pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></div></div>",
		speed: 400,
		cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
		responsive: [{
			vertical: false,
			breakpoint: 1000,
			settings: {
				vertical: false,
				slidesToShow: 4,
				slidesToScroll: 2,
			}
		}, {
			breakpoint: 990,
			settings: {
				slidesToShow:3,
				slidesToScroll: 1,
			}
		}, {
			breakpoint: 820,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			},	
		}, {
			breakpoint: 620,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			},	
		}]

	});

	$('.slider-single').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		adaptiveHeight: true,
		infinite: true,
		useTransform: true,
		prevArrow:"<div class='slick-prev'><div class='pull-left'></div></div>",
		nextArrow:"<div class='slick-next'><div class=' pull-right'></div></div>",
		speed: 400,
		cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',

	});

	$('.slider-nav')
	.on('init', function(event, slick) {
		$('.slider-nav .slick-slide.slick-current').addClass('is-active');
	})
	.slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		vertical: false,
		focusOnSelect: false,
		infinite: true,
		arrows: false,
		responsive: [{
			vertical: false,
			breakpoint: 1000,
			settings: {
				vertical: false,
				slidesToShow: 5,
				slidesToScroll: 4,
			}
		}, {
			breakpoint: 640,
			settings: {
				slidesToShow:4,
				slidesToScroll: 4,
			}
		}, {
			breakpoint: 420,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			}
		}]
	});

	$('.slider-single').on('afterChange', function(event, slick, currentSlide) {
		$('.slider-nav').slick('slickGoTo', currentSlide);
		var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
		$('.slider-nav .slick-slide.is-active').removeClass('is-active');
		$(currrentNavSlideElem).addClass('is-active');
	});

	$('.slider-nav').on('click', '.slick-slide', function(event) {
		event.preventDefault();
		var goToSingleSlide = $(this).data('slick-index');

		$('.slider-single').slick('slickGoTo', goToSingleSlide);
	});

	$('.delov-lin-btn').on('click',function(){
		alert('asdf');	
		$('.ifr-del-lin').removeClass('none');
	});


});
