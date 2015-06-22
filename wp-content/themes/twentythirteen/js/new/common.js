var loading = false;
jQuery(document).ready(function($) {
	
	$('#top').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
	});
	var body = $("html");		
	$(window).scroll(function() {
	if($.browser.mozilla)
	{
		var top = $('html').scrollTop(); 
	}
	else
	{
		var top = $('body').scrollTop(); 
	}
	if(top > 100){
	  $('#top').fadeIn(1000);
	}else{$('#top').fadeOut(1000);}
	})

	var _content = $('#content .box-product');
	$('#continue a').click(function(){
		var url = $(this).attr('href'); 
		
		if(!url) return;
			
		load_product(_content, url);

		return false;
	})
	$('#tab li a').click(function(){
		_content.html('');
		$('#tab li').find('a').removeClass('active');
		var _t = $(this);
		_t.addClass('active');
		load_product(_content, _t.attr('href'));
		
		return false;
	})
	/* Search */
	$('.button-search').bind('click', function() {
		url = $('base').attr('href') + 'index.php?route=product/search';
				 
		var filter_name = $('input[name=\'filter_name\']').attr('value');
		
		if (filter_name) {
			url += '&filter_name=' + encodeURIComponent(filter_name);
		}
		
		location = url;
	});
	
	$('#header input[name=\'filter_name\']').bind('keydown', function(e) {
		if (e.keyCode == 13) {
			url = $('base').attr('href') + 'index.php?route=product/search';
			 
			var filter_name = $('input[name=\'filter_name\']').attr('value');
			
			if (filter_name) {
				url += '&filter_name=' + encodeURIComponent(filter_name);
			}
			
			location = url;
		}
	});
	
	/* Ajax Cart */
	$('#cart > .heading a').live('click', function() {
		$('#cart').addClass('active');
		
		$('#cart').load('index.php?route=module/cart #cart > *');
		
		$('#cart').live('mouseleave', function() {
			$(this).removeClass('active');
		});
	});
	
	/* Mega Menu */
	$('#menu ul > li > a + div').each(function(index, element) {
		// IE6 & IE7 Fixes
		if ($.browser.msie && ($.browser.version == 7 || $.browser.version == 6)) {
			var category = $(element).find('a');
			var columns = $(element).find('ul').length;
			
			$(element).css('width', (columns * 143) + 'px');
			$(element).find('ul').css('float', 'left');
		}		
		
		var menu = $('#menu').offset();
		var dropdown = $(this).parent().offset();
		
		i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());
		
		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 5) + 'px');
		}
	});

	// IE6 & IE7 Fixes
	if ($.browser.msie) {
		if ($.browser.version <= 6) {
			$('#column-left + #column-right + #content, #column-left + #content').css('margin-left', '195px');
			
			$('#column-right + #content').css('margin-right', '195px');
		
			$('.box-category ul li a.active + ul').css('display', 'block');	
		}
		
		if ($.browser.version <= 7) {
			$('#menu > ul > li').bind('mouseover', function() {
				$(this).addClass('active');
			});
				
			$('#menu > ul > li').bind('mouseout', function() {
				$(this).removeClass('active');
			});	
		}
	}
	
	$('.success img, .warning img, .attention img, .information img').live('click', function() {
		$(this).parent().fadeOut('slow', function() {
			$(this).remove();
		});
	});	
});

function getURLVar(urlVarName) {
	var urlHalves = String(document.location).toLowerCase().split('?');
	var urlVarValue = '';
	
	if (urlHalves[1]) {
		var urlVars = urlHalves[1].split('&');

		for (var i = 0; i <= (urlVars.length); i++) {
			if (urlVars[i]) {
				var urlVarPair = urlVars[i].split('=');
				
				if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	
	return urlVarValue;
} 

function addToCart(product_id, quantity) {
	quantity = typeof(quantity) != 'undefined' ? quantity : 1;

	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: 'product_id=' + product_id + '&quantity=' + quantity,
		dataType: 'json',
		success: function(json) {
			
			
			if (json['redirect']) {
				location = json['redirect'];
			}
			
			if (json['success']) {
				window.location = 'index.php?route=checkout/cart' ;
				
			}	
		}
	});
}



function load_product(content, url)
{	
	var url_cur = $('#tab li a.active').attr('href');

	if(url_cur!=window.location.href){
        window.history.pushState({path:url_cur},'',url_cur);
     }
	
	if(loading == true){
		return;
	}
	loading = true;
	content.append('<p class="loading" style="text-align:center;margin-top:30px;"><img src="image/loading1.gif"><p>');
	$('#continue').css('display', 'none');
	$.get(url, function(data){
		if(data) {
			content.append(data.html);
			if(data.end == false) {
				$('#continue').css('display', 'block');
				url_cur += data.page;
				$('#continue a').attr('href', url_cur);
			}
			content.find('.loading').remove();
			loading = false;
		}
		}, 'json'
	);
}