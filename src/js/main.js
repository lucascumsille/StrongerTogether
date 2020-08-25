$(document).ready(function() {
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('.page-title').addClass("sticky");
		}
		else{
			$('.page-title').removeClass("sticky");
		}
    });
    
    $(function() {
        $(".dropdown-menu").addClass("dropdown-menu-right");
      });


});


// Filter button

$(document).ready(function() {
    $('#hideshow').click(function() {
        $(".hidden-height").toggleClass('open');
    });
});



// Owl Carousel

$('.owl-post').owlCarousel({
    loop:true,
    
	margin:10,
	dots:true,
	navigation: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        },
        1200:{
            items:3,
            nav:true,
            loop:false
        }
    }
})



$('document').ready(function() {
    var filterTopPosition= $('.hero-wrapper').outerHeight() + $('header').outerHeight()+60;

    $('.sf-field-post-meta-suitable_for').css({'top': filterTopPosition});
    console.log(filterTopPosition);
});