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
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})

