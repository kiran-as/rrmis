


// Skills Bar
    var maxWidth = 240;
    $('.skill-level').each(function () {
        animateSkill($(this));
    });
    function animateSkill(skillLevelContainer) {
        var level = parseInt(skillLevelContainer.attr('data-value'));
        var w = maxWidth * level / 100;
        skillLevelContainer.animate({ width: w }, {
            duration: 3000,
            step: function (currentWidth) {
                var percent = parseInt(currentWidth / maxWidth * 100);
                if (isNaN(percent))
                    percent = 0;
                $(this).parent().find('.skill-percent').html(percent + '%');
            }
        });
    }
    var bars = $('.bars')
    $('#skills li').click(function () {
        var previousSection = $($('#skills .selected a').attr('href'));
        $('#skills li').removeClass('selected');
        $(this).addClass('selected');
        previousSection.hide();
        var currentSection = $($(this).find('a').attr('href')).show();
        currentSection.find('.skill-level').css('width', '0px').each(function () {
            animateSkill($(this));
        });
        return false;
    });
	
// Sliders
	$('.main-slider').flexslider({
        animation: 'fade',
        slideshow: true,
        animationLoop: true,
        controlNav: false,
        animationLoop: true,
      });
	
      $('.recent-works, .recent-posts, .recent-videos, .clients, .testimonials, .slider-post').flexslider({
        animation: 'fade',
        slideshow: false,
        animationLoop: false,
        controlNav: false,
		prevText: "",
		nextText: "",
      });
	  
// Quote
	$(function () {
		$("#getaquote").selectbox();
	});
	
// Menu
	"use strict";
        $('#nav > li').hover(function () {
            $(this).children('ul').slideDown(200);
        }, function () {
            $(this).children('ul').slideUp(20);
        }
		);

        "use strict";
        $('#nav > li > ul > li').hover(function () {
            $(this).children('ul').slideDown(20);
        }, function () {
            $(this).children('ul').slideUp(20);
        }
	);
	
// Tooltip
    $('.social, .cart, .sitemap, #portfolio-filter').tooltip({
      selector: "a[data-toggle=tooltip]"
    })

    $('.social, .cart, .sitemap, #portfolio-filter').tooltip()
	
// Search
	new UISearch( document.getElementById( 'search' ) );
	
//pretty photo
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
	
// wdttop
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 1) {
			jQuery('.wdttop').css({bottom:"25px"});
		} else {
			jQuery('.wdttop').css({bottom:"-100px"});
		}
	});
	jQuery('.wdttop').click(function(){
		jQuery('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});


	
	new UISearch( document.getElementById( '404' ) );

