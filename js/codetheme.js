$(document).ready(function(){

	
	/*-----Check if home post have image-----*/
	$('.home_images').each(function(){
		var $this = $(this);
		if( $this.find('img').length === 0 ){
			$this.addClass('imgless');
		}
	});

	/*---forms---*/
	$('input[type="search"]').addClass('reset_form');
	addplaceholder($('#commentform textarea'), 'Write a response...');
	addplaceholder($('#commentform #author'), 'Name');
	addplaceholder($('#commentform #email'), 'Email');
	addplaceholder($('#commentform #url'), 'Website');


	/*----Slider---*/
	var homeslider=$('.bxslider').bxSlider({
  		auto: true,
		pause: 3000,
		responsive: true
  	});
	
	/*---on/off slider  */
	$('.stopslider').on('click',function(){
		var $this=$(this);
		
		if( $this.hasClass('offslider') ){
			homeslider.startAuto();
			$this.removeClass('offslider');
		}else{
			homeslider.stopAuto();
			$this.addClass('offslider');			
		}
	});

	/*---Loader---*/

	$('.runloader').fadeOut(300, function(){
	    
	    	$('.loader').css({
	    		'-webkit-animation': 'none',
	  			'animation': 'none'
	    	});
		});
	
	$('#page').animate({
		'opacity':1
	}, 500, function(){
		$('.home .presentation header').animate({

			'margin-bottom': 80,
			'opacity':1

		}, 800, 'easeOutCubic');

	});

	/*----Lateral Menu-----*/
	menustuff($('.menu-toggle'));
	menustuff($('.searchbtn'));
	menustuff($('.settings'));

	/*---Font size buttons---*/
	$('#btnincrease').on('click',function(e){
		font_size(event);
	});
	$('#btndecrease').on('click',function(e){
		font_size(event);
	});

	/*-----buttons----*/



	/*------Resize-----------*/
	$( window ).resize(function() {

		
	});
	/*------Scroll-----------*/
	var m_lastScrollTop = 0;
	$( window ).scroll(function() {
		var $m_getscroll=$( window ).scrollTop();

		//Scroll UP & DOWN
	   	var st = $m_getscroll;
	   	if (st > m_lastScrollTop){  //////////////////DOWNNN

	   	} else if($m_getscroll<2){  //////////////////UPPPP

	   	}
	  	m_lastScrollTop = st;
	}); //---scroll


});//---#ready

function menustuff($elem){

	$elem.on('click',function(e){
		
		$('#content').toggleClass('lateral');
		$('.lateralnav').toggleClass('toggled');
		$(this).toggleClass('is-active');
	
	});	
}

function font_size(event){
	var $body=$('body');
	var actsize=parseInt($body.css('font-size'));

	switch(event.target.id){
		case 'btnincrease':
			if(actsize < 18){
				$body.css('font-size', actsize+2 );
			}
			break;
		case 'btndecrease':
			if(actsize > 10){
				$body.css('font-size', actsize-2 );
			}
			break;					 
	}
}
function redirects(link){
	console.log(link);
	window.location.href=link;

}
function addplaceholder($elem, holdername){
	$elem.attr('placeholder', holdername);
}

