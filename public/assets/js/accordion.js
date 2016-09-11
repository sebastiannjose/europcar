/* 
 * Porto v1.0.0
 *
 * @author: SEBASTIAN A. NJOSE
 * @profile: http://www.freelancer.com/u/njose.html
 *
 **/

$(document).ready(function(){

	var __current;

	var updateIcons = function(id) {

		var icon = id ? 'i.fa:eq(' + (id - 1) + ')' : 'i.fa',
			class_to_add = id ? 'fa-angle-up' : 'fa-angle-down',
			class_to_remove = id ? 'fa-angle-down' : 'fa-angle-up';

		$('.input-group ' + icon).removeClass(class_to_remove);
		$('.input-group ' + icon).addClass(class_to_add);

	};

	/* ---- accordions toggle ---- */
	$('.input-group').on('click', function(){
		
		var id = $(this).data('id');
		var accordion = '.accordion-' + id;

		if (__current && __current != id) {
			// hide previous accordion
			$('.accordion-' + __current).slideToggle('fast', function(){
				// update icons
				updateIcons(null);
				// show clicked accordion
				$(accordion).slideToggle('fast', function(){
					// update icons
					updateIcons(id);
					// scroll to accordion start
					$('html, body').animate({ scrollTop: $('.clearfix').offset().top }, 800);
				});
			});
		} else {
			updateIcons(id);
		}

		// first time click detected
		if (!__current) $(accordion).slideToggle('fast', function(){
			// scroll to accordion start
			$('html, body').animate({ scrollTop: $('.clearfix').offset().top }, 800);
		});

		// track clicked accordion
		__current = id;

	});
	
});