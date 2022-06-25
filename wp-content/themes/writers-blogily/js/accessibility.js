( function($) {
	$('.toggle-mobile-menu, .iot-menu-left-open').click(function(e) {
			e.preventDefault();  // don't grab focus
			$("#iot-menu-left .iot-menu-left-ul li a").first().focus();
		
		if($('body').hasClass('mobile-menu-active') ) {
			$( document ).on( 'keydown', function ( e ) {
				if ( e.keyCode === 27 ) { 
					$("#accessibility-close-mobile-menu").trigger("focusin");
				}
			});
			
			$("#iot-menu-left .iot-menu-left-ul li a").first().on('keydown focusin', function (e) {
				console.log("wat");
				if((e.keyCode === 9 && e.shiftKey) || e.keyCode === 13) {
					   //shift tab or enter on "menu" close menu
					$('.iot-menu-left-filter, .iot-menu-left-close').trigger("click");
					$( document ).off("keydown");
					setTimeout(function(){
						$('.iot-menu-left-open').focus();
					}, 10);
					$('.iot-menu-left-open').focus();
				}
			});
		}

	});
	$('.iot-menu-left-open').keydown(function(event){ 
		var keyCode = (event.keyCode ? event.keyCode : event.which);   
		if (keyCode == 13) {
			$('.iot-menu-left-open').trigger('click');
		}
	});


	$(document).ready(function(){


		$("#iot-menu-left .iot-menu-left-ul").first().append(
			'<li><a href="#" id="accessibility-close-mobile-menu" style="padding:0;height:0;"></a></li>'
		);

		$("#accessibility-close-mobile-menu").focusin(function(e){
			$('.iot-menu-left-filter, .iot-menu-left-close').click();
			$('#primary a').first().focus();
			$( document ).off("keydown");
		});

	});
	
	
})(jQuery);