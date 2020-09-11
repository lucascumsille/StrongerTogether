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
    var openString = 'Show all Filters';
    var closeString = 'Hide filters';
    var visibleFilterHeight = $('.sf-field-post-meta-suitable_for').outerHeight();
    var totalHiddenHeight = $('.searchandfilter').outerHeight();

    // Calculate the height of the first and visible filter
    $('.hidden-height').css({'max-height': visibleFilterHeight});

    // Change the text on the filter button
    $(".filter-button-text").text(openString);

    $('#hideshow').click(function() {
        //This Checks the total height 
        $(".hidden-height").toggleClass('open-filter');

        if($('.hidden-height').hasClass('open-filter')){ 
            $('.hidden-height').css({'max-height': totalHiddenHeight});
        } else {
            $('.hidden-height').css({'max-height': visibleFilterHeight});
        } // End if

        $(".filter-button-text").fadeOut( 150,function () {
            $(".filter-button-text").text(($(".filter-button-text").text() == openString) ? closeString : openString).fadeIn(150);
        })
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

/*

$('document').ready(function() {


    if( $('#wpadminbar').length )         // Check if the WP navbar exist
    {
        wpAdminHeight= $('#wpadminbar').outerHeight();// it exists
    } else {
        wpAdminHeight= 0;
    }


    var filterTopPosition= $('.hero-wrapper').outerHeight() + $('header').outerHeight()+ wpAdminHeight + ($('#filter-top-container').outerHeight() - $('#filter-top-container').height())/2 ;


    $('.sf-field-post-meta-suitable_for').css({'top': filterTopPosition});

    console.log(filterTopPosition);

});

*/

// * Adding bootstrap to select items

$(function() {
    //$('#placestovisit_category-taxonomy-2').addClass('selectpicker');
   //$('select').selectpicker();
  });

// * Places to Visit

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

// Palces to visit component on homePage: Links leads you to an url and activate filter

var categoryPlaces = getUrlParameter('category');

window.addEventListener('DOMContentLoaded', function() {
    window.setTimeout(function(){
        if (categoryPlaces !== null)  {
            $('#placestovisit_category-taxonomy-2').val(categoryPlaces).change();
        }
    }, 300)
})

// * Move the search button inside another div

// function moveEventsSearchBar() {
//     if (parseInt($(window).width()) < 768) {
//         $('.tribe-events-c-search.tribe-events-c-events-bar__search-form').prependTo($("#tribe_events_filters_wrapper"));
//     }
// }

function addToggleSearchBarEvent() {

    $('#event-filter-controller').off('click').click(function(e){    
        $('#tribe_events_filters_wrapper').slideToggle('slow', function(){

        });
    });
}

$(document).ready(function() {
	moveEventsSearchBar();
    });

    $("body").on('DOMSubtreeModified', ".tribe-events-c-events-bar__search-button", function() {
        window.setTimeout(moveEventsSearchBar, 50);
        window.setTimeout(addToggleSearchBarEvent, 50);
});


// * Move Show and Hide Filter inside the header



// function moveFilterButton() {
//     if (parseInt($(window).width()) > 767) {
//         $('#event-filter-controller').appendTo($(".tribe-events-header"));
//     }
// }


// $(document).ready(function() {
// 	moveFilterButton();
//     });

//     $("body").on('DOMSubtreeModified', "#event-filter-controller", function() {
//         window.setTimeout(moveFilterButton, 50);
// });



// Hide and show filter on desktop

function moveEventsSearchBar() {
    $('.tribe-events-c-search.tribe-events-c-events-bar__search-form').prependTo($("#tribe_events_filters_wrapper"));
}

$(document).ready(function() {
    $('#event-filter-controller').click(function(e){    
        $('#tribe_events_filters_wrapper').slideToggle('slow', function(){

        });
    });
    // $('#event-filter-controller').click(function(e){
    //     $('.tribe-js-filters-toggle').trigger('click');
    // });
});


// Move the Export button in single calendars and Move Suitable For in events to the bottom

function moveEventsExport() {
    $('.tribe-events-cal-links').appendTo($(".tribe-events-content"));
}

$(document).ready(function() {

    if (parseInt($(window).width()) < 768) {
        $('.tribe-events-meta-group.tribe-events-meta-group-other').appendTo($(".tribe-events-single-event-description.tribe-events-content"));
    }
	moveEventsExport();

});



// Facebook event to div with the rest of the meta

$(document).ready(function() {
	$('#facebook-event').appendTo($(".tribe-events-meta-group-venue"));
});




 $(document).ready(function() {
	$('.tribe-meta-value').html(function(_, oldHTML) {
        return '<p class="single-info-item tick-icon">' + oldHTML.split(',').join('</p><p class="single-info-item tick-icon">') + '</p>';
     });
});
