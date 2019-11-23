$(document).ready(function() {
	$('#fullpage').fullpage({
		//options here
		autoScrolling:true,
		scrollHorizontally: true,
        navigation: true,
		anchors: ['kolekcije', 'salon', 'kontakt'],
		responsiveWidth: 810
	});
	
    $('[data-fancybox="gallery"]').fancybox({
        thumbs: {
            autoStart: true
        }
    });

    $(".fancybox").fancybox({
        helpers: {
            title: {
                type: 'inside',
                position: 'bottom'
            }
        }
    });

});