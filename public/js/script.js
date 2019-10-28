

var GUI = {};

GUI.mMenu = function() {
	if ($(window).width() < 991 && $('.header-menu').length > 0) {
		var btn = $('#menu-btn');
		var nav = $('.header-menu ul.nav');
		var close = $('#close-menu-btn');
		btn.click(function(){
			nav.addClass('active');
		});

		close.click(function(){
			nav.removeClass('active');
		});
		$(window).click(function(e){
			if($(nav).has(e.target).length == 0 && !$(nav).is(e.target) && $(btn).has(e.target).length == 0 && !$(btn).is(e.target)){
				$(nav).removeClass('active');
			}
		});
	}
}
GUI.mSearchForm = function() {
	if ($(window).width() < 991 && $('.search-form-header').length > 0) {
		var form = $('.search-form-header');
		var btn = $('#search-form-btn');
		btn.click(function(){
			form.slideToggle();
			$(btn).find('i').toggleClass('fa-search').toggleClass('fa-times');
		});

		$(window).click(function(e){
			if($(form).has(e.target).length == 0 && !$(form).is(e.target) && $(btn).has(e.target).length == 0 && !$(btn).is(e.target)){
				$(form).slideUp();
				$(btn).find('i').removeClass('fa fa-times').addClass('fa fa-search')
			}
		});
	}

}


GUI.mSearchForm2 = function() {
	if ($(window).width() < 991 && $('.search-form-head').length > 0) {
		var form = $('.search-form-head');
		var btn = $('#search-form-btn');
		btn.click(function(){
			form.slideToggle();
			$(form).find('input').removeClass('hide').addClass('show');
			$(btn).find('i').toggleClass('fa-times').toggleClass('fa-search');

		});

		$(window).click(function(e){
			if($(form).has(e.target).length == 0 && !$(form).is(e.target) && $(btn).has(e.target).length == 0 && !$(btn).is(e.target)){
				$(form).slideUp();
				$(form).find('input').removeClass('hide').addClass('show');
				$(btn).find('i').removeClass('fa fa-times').addClass('fa fa-search');
			}
		});
	}
	if ($(window).width() > 991 && $('.search-form-head').length > 0) {
		var form = $('.search-form-head');
		var btn = $('#search-form-btn');
		btn.click(function(){
			form.slideToggle();
			$(btn).find('i').toggleClass('fa-search').toggleClass('fa-times');
			$(form).find('input').removeClass('show').addClass('hide');
		});

		$(window).click(function(e){
			if($(form).has(e.target).length == 0 && !$(form).is(e.target) && $(btn).has(e.target).length == 0 && !$(btn).is(e.target)){
				$(form).slideUp();
				$(btn).find('i').removeClass('fa fa-times').addClass('fa fa-search');
				$(form).find('input').removeClass('show').addClass('hide');
			}
		});
	}
}

GUI.backToTop = function(){
	if($(".back-to-top").length > 0){
		$(window).scroll(function () {
			var e = $(window).scrollTop();
			if (e > 300) {
				$(".back-to-top").show();
			} else {
				$(".back-to-top").hide();
			}
		});
		$(".back-to-top").click(function () {
			$('body,html').animate({
				scrollTop: 0
			},500)
		});
	} 
}


GUI.init= function (){
	GUI.mMenu();
	GUI.mSearchForm();
	GUI.mSearchForm2();
	GUI.backToTop();
	
}
$(function() {
	GUI.init();
});