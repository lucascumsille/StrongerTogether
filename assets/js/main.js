$(document).ready((function(){$(window).scroll((function(){$(this).scrollTop()>1?$(".page-title").addClass("sticky"):$(".page-title").removeClass("sticky")})),$((function(){$(".dropdown-menu").addClass("dropdown-menu-right")}))})),$(document).ready((function(){var e=$(".sf-field-post-meta-suitable_for").outerHeight(),t=$(".searchandfilter").outerHeight();$(".hidden-height").css({"max-height":e}),$(".filter-button-text").text("Show all Filters"),$("#hideshow").click((function(){$(".hidden-height").toggleClass("open-filter"),$(".hidden-height").hasClass("open-filter")?$(".hidden-height").css({"max-height":t}):$(".hidden-height").css({"max-height":e}),$(".filter-button-text").fadeOut(150,(function(){$(".filter-button-text").text("Show all Filters"==$(".filter-button-text").text()?"Hide filters":"Show all Filters").fadeIn(150)}))}))})),$(".owl-post").owlCarousel({loop:!0,margin:10,dots:!0,navigation:!1,responsiveClass:!0,responsive:{0:{items:1,nav:!0},600:{items:2,nav:!1},1e3:{items:2,nav:!0,loop:!1},1200:{items:3,nav:!0,loop:!1}}}),$((function(){}));var getUrlParameter=function(e){var t,n,o=window.location.search.substring(1).split("&");for(n=0;n<o.length;n++)if((t=o[n].split("="))[0]===e)return void 0===t[1]||decodeURIComponent(t[1])},categoryPlaces=getUrlParameter("category");function addToggleSearchBarEvent(){$("#event-filter-controller").off("click").click((function(e){$("#tribe_events_filters_wrapper").slideToggle("slow",(function(){}))}))}function moveEventsSearchBar(){$(".tribe-events-c-search.tribe-events-c-events-bar__search-form").prependTo($("#tribe_events_filters_wrapper"))}function moveEventsExport(){$(".tribe-events-cal-links").appendTo($(".tribe-events-content"))}window.addEventListener("DOMContentLoaded",(function(){window.setTimeout((function(){null!==categoryPlaces&&$("#placestovisit_category-taxonomy-2").val(categoryPlaces).change()}),300)})),$(document).ready((function(){moveEventsSearchBar()})),$("body").on("DOMSubtreeModified",".tribe-events-c-events-bar__search-button",(function(){window.setTimeout(moveEventsSearchBar,50),window.setTimeout(addToggleSearchBarEvent,50)})),$(document).ready((function(){$("#event-filter-controller").click((function(e){$("#tribe_events_filters_wrapper").slideToggle("slow",(function(){}))}))})),$(document).ready((function(){moveEventsExport()}));
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJ3aW5kb3ciLCJzY3JvbGwiLCJ0aGlzIiwic2Nyb2xsVG9wIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsInZpc2libGVGaWx0ZXJIZWlnaHQiLCJvdXRlckhlaWdodCIsInRvdGFsSGlkZGVuSGVpZ2h0IiwiY3NzIiwibWF4LWhlaWdodCIsInRleHQiLCJjbGljayIsInRvZ2dsZUNsYXNzIiwiaGFzQ2xhc3MiLCJmYWRlT3V0IiwiZmFkZUluIiwib3dsQ2Fyb3VzZWwiLCJsb29wIiwibWFyZ2luIiwiZG90cyIsIm5hdmlnYXRpb24iLCJyZXNwb25zaXZlQ2xhc3MiLCJyZXNwb25zaXZlIiwiMCIsIml0ZW1zIiwibmF2IiwiNjAwIiwiMTAwMCIsIjEyMDAiLCJnZXRVcmxQYXJhbWV0ZXIiLCJzUGFyYW0iLCJzUGFyYW1ldGVyTmFtZSIsImkiLCJzVVJMVmFyaWFibGVzIiwibG9jYXRpb24iLCJzZWFyY2giLCJzdWJzdHJpbmciLCJzcGxpdCIsImxlbmd0aCIsInVuZGVmaW5lZCIsImRlY29kZVVSSUNvbXBvbmVudCIsImNhdGVnb3J5UGxhY2VzIiwiYWRkVG9nZ2xlU2VhcmNoQmFyRXZlbnQiLCJvZmYiLCJlIiwic2xpZGVUb2dnbGUiLCJtb3ZlRXZlbnRzU2VhcmNoQmFyIiwicHJlcGVuZFRvIiwibW92ZUV2ZW50c0V4cG9ydCIsImFwcGVuZFRvIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNldFRpbWVvdXQiLCJ2YWwiLCJjaGFuZ2UiLCJvbiJdLCJtYXBwaW5ncyI6IkFBQUFBLEVBQUFDLFVBQUFDLE9BQUEsV0FFQUYsRUFBQUcsUUFBQUMsUUFBQSxXQUNBSixFQUFBSyxNQUFBQyxZQUFBLEVBQ0FOLEVBQUEsZUFBQU8sU0FBQSxVQUdBUCxFQUFBLGVBQUFRLFlBQUEsYUFJQVIsR0FBQSxXQUNBQSxFQUFBLGtCQUFBTyxTQUFBLDZCQVNBUCxFQUFBQyxVQUFBQyxPQUFBLFdBQ0EsSUFFQU8sRUFBQVQsRUFBQSxvQ0FBQVUsY0FDQUMsRUFBQVgsRUFBQSxvQkFBQVUsY0FHQVYsRUFBQSxrQkFBQVksSUFBQSxDQUFBQyxhQUFBSixJQUdBVCxFQUFBLHVCQUFBYyxLQVRBLG9CQVdBZCxFQUFBLGFBQUFlLE9BQUEsV0FFQWYsRUFBQSxrQkFBQWdCLFlBQUEsZUFFQWhCLEVBQUEsa0JBQUFpQixTQUFBLGVBQ0FqQixFQUFBLGtCQUFBWSxJQUFBLENBQUFDLGFBQUFGLElBRUFYLEVBQUEsa0JBQUFZLElBQUEsQ0FBQUMsYUFBQUosSUFHQVQsRUFBQSx1QkFBQWtCLFFBQUEsS0FBQSxXQUNBbEIsRUFBQSx1QkFBQWMsS0F0QkEsb0JBc0JBZCxFQUFBLHVCQUFBYyxPQXJCQSxlQURBLG9CQXNCQUssT0FBQSxjQVVBbkIsRUFBQSxhQUFBb0IsWUFBQSxDQUNBQyxNQUFBLEVBQ0FDLE9BQUEsR0FDQUMsTUFBQSxFQUNBQyxZQUFBLEVBQ0FDLGlCQUFBLEVBQ0FDLFdBQUEsQ0FDQUMsRUFBQSxDQUNBQyxNQUFBLEVBQ0FDLEtBQUEsR0FFQUMsSUFBQSxDQUNBRixNQUFBLEVBQ0FDLEtBQUEsR0FFQUUsSUFBQSxDQUNBSCxNQUFBLEVBQ0FDLEtBQUEsRUFDQVIsTUFBQSxHQUVBVyxLQUFBLENBQ0FKLE1BQUEsRUFDQUMsS0FBQSxFQUNBUixNQUFBLE1BK0JBckIsR0FBQSxlQU9BLElBQUFpQyxnQkFBQSxTQUFBQyxHQUNBLElBRUFDLEVBQ0FDLEVBRkFDLEVBREFsQyxPQUFBbUMsU0FBQUMsT0FBQUMsVUFBQSxHQUNBQyxNQUFBLEtBSUEsSUFBQUwsRUFBQSxFQUFBQSxFQUFBQyxFQUFBSyxPQUFBTixJQUdBLElBRkFELEVBQUFFLEVBQUFELEdBQUFLLE1BQUEsTUFFQSxLQUFBUCxFQUNBLFlBQUFTLElBQUFSLEVBQUEsSUFBQVMsbUJBQUFULEVBQUEsS0FPQVUsZUFBQVosZ0JBQUEsWUFrQkEsU0FBQWEsMEJBRUE5QyxFQUFBLDRCQUFBK0MsSUFBQSxTQUFBaEMsT0FBQSxTQUFBaUMsR0FDQWhELEVBQUEsaUNBQUFpRCxZQUFBLFFBQUEsa0JBdUNBLFNBQUFDLHNCQUNBbEQsRUFBQSxpRUFBQW1ELFVBQUFuRCxFQUFBLGtDQWlCQSxTQUFBb0QsbUJBQ0FwRCxFQUFBLDJCQUFBcUQsU0FBQXJELEVBQUEsMEJBN0VBRyxPQUFBbUQsaUJBQUEsb0JBQUEsV0FDQW5ELE9BQUFvRCxZQUFBLFdBQ0EsT0FBQVYsZ0JBQ0E3QyxFQUFBLHNDQUFBd0QsSUFBQVgsZ0JBQUFZLFdBRUEsUUFvQkF6RCxFQUFBQyxVQUFBQyxPQUFBLFdBQ0FnRCx5QkFHQWxELEVBQUEsUUFBQTBELEdBQUEscUJBQUEsNkNBQUEsV0FDQXZELE9BQUFvRCxXQUFBTCxvQkFBQSxJQUNBL0MsT0FBQW9ELFdBQUFULHdCQUFBLE9BK0JBOUMsRUFBQUMsVUFBQUMsT0FBQSxXQUNBRixFQUFBLDRCQUFBZSxPQUFBLFNBQUFpQyxHQUNBaEQsRUFBQSxpQ0FBQWlELFlBQUEsUUFBQSxxQkFnQkFqRCxFQUFBQyxVQUFBQyxPQUFBLFdBQ0FrRCIsImZpbGUiOiJtYWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cdFxuXHQkKHdpbmRvdykuc2Nyb2xsKGZ1bmN0aW9uKCkge1xuXHRcdGlmICgkKHRoaXMpLnNjcm9sbFRvcCgpID4gMSl7ICBcblx0XHRcdCQoJy5wYWdlLXRpdGxlJykuYWRkQ2xhc3MoXCJzdGlja3lcIik7XG5cdFx0fVxuXHRcdGVsc2V7XG5cdFx0XHQkKCcucGFnZS10aXRsZScpLnJlbW92ZUNsYXNzKFwic3RpY2t5XCIpO1xuXHRcdH1cbiAgICB9KTtcbiAgICBcbiAgICAkKGZ1bmN0aW9uKCkge1xuICAgICAgICAkKFwiLmRyb3Bkb3duLW1lbnVcIikuYWRkQ2xhc3MoXCJkcm9wZG93bi1tZW51LXJpZ2h0XCIpO1xuICAgICAgfSk7XG5cblxufSk7XG5cblxuLy8gRmlsdGVyIGJ1dHRvblxuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICB2YXIgb3BlblN0cmluZyA9ICdTaG93IGFsbCBGaWx0ZXJzJztcbiAgICB2YXIgY2xvc2VTdHJpbmcgPSAnSGlkZSBmaWx0ZXJzJztcbiAgICB2YXIgdmlzaWJsZUZpbHRlckhlaWdodCA9ICQoJy5zZi1maWVsZC1wb3N0LW1ldGEtc3VpdGFibGVfZm9yJykub3V0ZXJIZWlnaHQoKTtcbiAgICB2YXIgdG90YWxIaWRkZW5IZWlnaHQgPSAkKCcuc2VhcmNoYW5kZmlsdGVyJykub3V0ZXJIZWlnaHQoKTtcblxuICAgIC8vIENhbGN1bGF0ZSB0aGUgaGVpZ2h0IG9mIHRoZSBmaXJzdCBhbmQgdmlzaWJsZSBmaWx0ZXJcbiAgICAkKCcuaGlkZGVuLWhlaWdodCcpLmNzcyh7J21heC1oZWlnaHQnOiB2aXNpYmxlRmlsdGVySGVpZ2h0fSk7XG5cbiAgICAvLyBDaGFuZ2UgdGhlIHRleHQgb24gdGhlIGZpbHRlciBidXR0b25cbiAgICAkKFwiLmZpbHRlci1idXR0b24tdGV4dFwiKS50ZXh0KG9wZW5TdHJpbmcpO1xuXG4gICAgJCgnI2hpZGVzaG93JykuY2xpY2soZnVuY3Rpb24oKSB7XG4gICAgICAgIC8vVGhpcyBDaGVja3MgdGhlIHRvdGFsIGhlaWdodCBcbiAgICAgICAgJChcIi5oaWRkZW4taGVpZ2h0XCIpLnRvZ2dsZUNsYXNzKCdvcGVuLWZpbHRlcicpO1xuXG4gICAgICAgIGlmKCQoJy5oaWRkZW4taGVpZ2h0JykuaGFzQ2xhc3MoJ29wZW4tZmlsdGVyJykpeyBcbiAgICAgICAgICAgICQoJy5oaWRkZW4taGVpZ2h0JykuY3NzKHsnbWF4LWhlaWdodCc6IHRvdGFsSGlkZGVuSGVpZ2h0fSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKCcuaGlkZGVuLWhlaWdodCcpLmNzcyh7J21heC1oZWlnaHQnOiB2aXNpYmxlRmlsdGVySGVpZ2h0fSk7XG4gICAgICAgIH0gLy8gRW5kIGlmXG5cbiAgICAgICAgJChcIi5maWx0ZXItYnV0dG9uLXRleHRcIikuZmFkZU91dCggMTUwLGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQoXCIuZmlsdGVyLWJ1dHRvbi10ZXh0XCIpLnRleHQoKCQoXCIuZmlsdGVyLWJ1dHRvbi10ZXh0XCIpLnRleHQoKSA9PSBvcGVuU3RyaW5nKSA/IGNsb3NlU3RyaW5nIDogb3BlblN0cmluZykuZmFkZUluKDE1MCk7XG4gICAgICAgIH0pXG4gICAgfSk7XG5cbn0pO1xuXG5cblxuLy8gT3dsIENhcm91c2VsXG5cbiQoJy5vd2wtcG9zdCcpLm93bENhcm91c2VsKHtcbiAgICBsb29wOnRydWUsXG5cdG1hcmdpbjoxMCxcblx0ZG90czp0cnVlLFxuXHRuYXZpZ2F0aW9uOiBmYWxzZSxcbiAgICByZXNwb25zaXZlQ2xhc3M6dHJ1ZSxcbiAgICByZXNwb25zaXZlOntcbiAgICAgICAgMDp7XG4gICAgICAgICAgICBpdGVtczoxLFxuICAgICAgICAgICAgbmF2OnRydWVcbiAgICAgICAgfSxcbiAgICAgICAgNjAwOntcbiAgICAgICAgICAgIGl0ZW1zOjIsXG4gICAgICAgICAgICBuYXY6ZmFsc2VcbiAgICAgICAgfSxcbiAgICAgICAgMTAwMDp7XG4gICAgICAgICAgICBpdGVtczoyLFxuICAgICAgICAgICAgbmF2OnRydWUsXG4gICAgICAgICAgICBsb29wOmZhbHNlXG4gICAgICAgIH0sXG4gICAgICAgIDEyMDA6e1xuICAgICAgICAgICAgaXRlbXM6MyxcbiAgICAgICAgICAgIG5hdjp0cnVlLFxuICAgICAgICAgICAgbG9vcDpmYWxzZVxuICAgICAgICB9XG4gICAgfVxufSlcblxuLypcblxuJCgnZG9jdW1lbnQnKS5yZWFkeShmdW5jdGlvbigpIHtcblxuXG4gICAgaWYoICQoJyN3cGFkbWluYmFyJykubGVuZ3RoICkgICAgICAgICAvLyBDaGVjayBpZiB0aGUgV1AgbmF2YmFyIGV4aXN0XG4gICAge1xuICAgICAgICB3cEFkbWluSGVpZ2h0PSAkKCcjd3BhZG1pbmJhcicpLm91dGVySGVpZ2h0KCk7Ly8gaXQgZXhpc3RzXG4gICAgfSBlbHNlIHtcbiAgICAgICAgd3BBZG1pbkhlaWdodD0gMDtcbiAgICB9XG5cblxuICAgIHZhciBmaWx0ZXJUb3BQb3NpdGlvbj0gJCgnLmhlcm8td3JhcHBlcicpLm91dGVySGVpZ2h0KCkgKyAkKCdoZWFkZXInKS5vdXRlckhlaWdodCgpKyB3cEFkbWluSGVpZ2h0ICsgKCQoJyNmaWx0ZXItdG9wLWNvbnRhaW5lcicpLm91dGVySGVpZ2h0KCkgLSAkKCcjZmlsdGVyLXRvcC1jb250YWluZXInKS5oZWlnaHQoKSkvMiA7XG5cblxuICAgICQoJy5zZi1maWVsZC1wb3N0LW1ldGEtc3VpdGFibGVfZm9yJykuY3NzKHsndG9wJzogZmlsdGVyVG9wUG9zaXRpb259KTtcblxuICAgIGNvbnNvbGUubG9nKGZpbHRlclRvcFBvc2l0aW9uKTtcblxufSk7XG5cbiovXG5cbi8vICogQWRkaW5nIGJvb3RzdHJhcCB0byBzZWxlY3QgaXRlbXNcblxuJChmdW5jdGlvbigpIHtcbiAgICAvLyQoJyNwbGFjZXN0b3Zpc2l0X2NhdGVnb3J5LXRheG9ub215LTInKS5hZGRDbGFzcygnc2VsZWN0cGlja2VyJyk7XG4gICAvLyQoJ3NlbGVjdCcpLnNlbGVjdHBpY2tlcigpO1xuICB9KTtcblxuLy8gKiBQbGFjZXMgdG8gVmlzaXRcblxudmFyIGdldFVybFBhcmFtZXRlciA9IGZ1bmN0aW9uIGdldFVybFBhcmFtZXRlcihzUGFyYW0pIHtcbiAgICB2YXIgc1BhZ2VVUkwgPSB3aW5kb3cubG9jYXRpb24uc2VhcmNoLnN1YnN0cmluZygxKSxcbiAgICAgICAgc1VSTFZhcmlhYmxlcyA9IHNQYWdlVVJMLnNwbGl0KCcmJyksXG4gICAgICAgIHNQYXJhbWV0ZXJOYW1lLFxuICAgICAgICBpO1xuXG4gICAgZm9yIChpID0gMDsgaSA8IHNVUkxWYXJpYWJsZXMubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgc1BhcmFtZXRlck5hbWUgPSBzVVJMVmFyaWFibGVzW2ldLnNwbGl0KCc9Jyk7XG5cbiAgICAgICAgaWYgKHNQYXJhbWV0ZXJOYW1lWzBdID09PSBzUGFyYW0pIHtcbiAgICAgICAgICAgIHJldHVybiBzUGFyYW1ldGVyTmFtZVsxXSA9PT0gdW5kZWZpbmVkID8gdHJ1ZSA6IGRlY29kZVVSSUNvbXBvbmVudChzUGFyYW1ldGVyTmFtZVsxXSk7XG4gICAgICAgIH1cbiAgICB9XG59O1xuXG4vLyBQYWxjZXMgdG8gdmlzaXQgY29tcG9uZW50IG9uIGhvbWVQYWdlOiBMaW5rcyBsZWFkcyB5b3UgdG8gYW4gdXJsIGFuZCBhY3RpdmF0ZSBmaWx0ZXJcblxudmFyIGNhdGVnb3J5UGxhY2VzID0gZ2V0VXJsUGFyYW1ldGVyKCdjYXRlZ29yeScpO1xuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uKCkge1xuICAgIHdpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XG4gICAgICAgIGlmIChjYXRlZ29yeVBsYWNlcyAhPT0gbnVsbCkgIHtcbiAgICAgICAgICAgICQoJyNwbGFjZXN0b3Zpc2l0X2NhdGVnb3J5LXRheG9ub215LTInKS52YWwoY2F0ZWdvcnlQbGFjZXMpLmNoYW5nZSgpO1xuICAgICAgICB9XG4gICAgfSwgMzAwKVxufSlcblxuLy8gKiBNb3ZlIHRoZSBzZWFyY2ggYnV0dG9uIGluc2lkZSBhbm90aGVyIGRpdlxuXG4vLyBmdW5jdGlvbiBtb3ZlRXZlbnRzU2VhcmNoQmFyKCkge1xuLy8gICAgIGlmIChwYXJzZUludCgkKHdpbmRvdykud2lkdGgoKSkgPCA3NjgpIHtcbi8vICAgICAgICAgJCgnLnRyaWJlLWV2ZW50cy1jLXNlYXJjaC50cmliZS1ldmVudHMtYy1ldmVudHMtYmFyX19zZWFyY2gtZm9ybScpLnByZXBlbmRUbygkKFwiI3RyaWJlX2V2ZW50c19maWx0ZXJzX3dyYXBwZXJcIikpO1xuLy8gICAgIH1cbi8vIH1cblxuZnVuY3Rpb24gYWRkVG9nZ2xlU2VhcmNoQmFyRXZlbnQoKSB7XG5cbiAgICAkKCcjZXZlbnQtZmlsdGVyLWNvbnRyb2xsZXInKS5vZmYoJ2NsaWNrJykuY2xpY2soZnVuY3Rpb24oZSl7ICAgIFxuICAgICAgICAkKCcjdHJpYmVfZXZlbnRzX2ZpbHRlcnNfd3JhcHBlcicpLnNsaWRlVG9nZ2xlKCdzbG93JywgZnVuY3Rpb24oKXtcblxuICAgICAgICB9KTtcbiAgICB9KTtcbn1cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cdG1vdmVFdmVudHNTZWFyY2hCYXIoKTtcbiAgICB9KTtcblxuICAgICQoXCJib2R5XCIpLm9uKCdET01TdWJ0cmVlTW9kaWZpZWQnLCBcIi50cmliZS1ldmVudHMtYy1ldmVudHMtYmFyX19zZWFyY2gtYnV0dG9uXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgICB3aW5kb3cuc2V0VGltZW91dChtb3ZlRXZlbnRzU2VhcmNoQmFyLCA1MCk7XG4gICAgICAgIHdpbmRvdy5zZXRUaW1lb3V0KGFkZFRvZ2dsZVNlYXJjaEJhckV2ZW50LCA1MCk7XG59KTtcblxuXG4vLyAqIE1vdmUgU2hvdyBhbmQgSGlkZSBGaWx0ZXIgaW5zaWRlIHRoZSBoZWFkZXJcblxuXG5cbi8vIGZ1bmN0aW9uIG1vdmVGaWx0ZXJCdXR0b24oKSB7XG4vLyAgICAgaWYgKHBhcnNlSW50KCQod2luZG93KS53aWR0aCgpKSA+IDc2Nykge1xuLy8gICAgICAgICAkKCcjZXZlbnQtZmlsdGVyLWNvbnRyb2xsZXInKS5hcHBlbmRUbygkKFwiLnRyaWJlLWV2ZW50cy1oZWFkZXJcIikpO1xuLy8gICAgIH1cbi8vIH1cblxuXG4vLyAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbi8vIFx0bW92ZUZpbHRlckJ1dHRvbigpO1xuLy8gICAgIH0pO1xuXG4vLyAgICAgJChcImJvZHlcIikub24oJ0RPTVN1YnRyZWVNb2RpZmllZCcsIFwiI2V2ZW50LWZpbHRlci1jb250cm9sbGVyXCIsIGZ1bmN0aW9uKCkge1xuLy8gICAgICAgICB3aW5kb3cuc2V0VGltZW91dChtb3ZlRmlsdGVyQnV0dG9uLCA1MCk7XG4vLyB9KTtcblxuXG5cbi8vIEhpZGUgYW5kIHNob3cgZmlsdGVyIG9uIGRlc2t0b3BcblxuZnVuY3Rpb24gbW92ZUV2ZW50c1NlYXJjaEJhcigpIHtcbiAgICAkKCcudHJpYmUtZXZlbnRzLWMtc2VhcmNoLnRyaWJlLWV2ZW50cy1jLWV2ZW50cy1iYXJfX3NlYXJjaC1mb3JtJykucHJlcGVuZFRvKCQoXCIjdHJpYmVfZXZlbnRzX2ZpbHRlcnNfd3JhcHBlclwiKSk7XG59XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgICQoJyNldmVudC1maWx0ZXItY29udHJvbGxlcicpLmNsaWNrKGZ1bmN0aW9uKGUpeyAgICBcbiAgICAgICAgJCgnI3RyaWJlX2V2ZW50c19maWx0ZXJzX3dyYXBwZXInKS5zbGlkZVRvZ2dsZSgnc2xvdycsIGZ1bmN0aW9uKCl7XG5cbiAgICAgICAgfSk7XG4gICAgfSk7XG4gICAgLy8gJCgnI2V2ZW50LWZpbHRlci1jb250cm9sbGVyJykuY2xpY2soZnVuY3Rpb24oZSl7XG4gICAgLy8gICAgICQoJy50cmliZS1qcy1maWx0ZXJzLXRvZ2dsZScpLnRyaWdnZXIoJ2NsaWNrJyk7XG4gICAgLy8gfSk7XG59KTtcblxuXG4vLyBNb3ZlIGhlIEV4cG9ydCBidXR0b24gaW4gc2luZ2xlIGNhbGVuZGFyc1xuXG5mdW5jdGlvbiBtb3ZlRXZlbnRzRXhwb3J0KCkge1xuICAgICQoJy50cmliZS1ldmVudHMtY2FsLWxpbmtzJykuYXBwZW5kVG8oJChcIi50cmliZS1ldmVudHMtY29udGVudFwiKSk7XG59XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuXHRtb3ZlRXZlbnRzRXhwb3J0KCk7XG5cbn0pOyJdfQ==
