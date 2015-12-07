   $(window).load(function() {
     "use strict";

     // Initialize Masonry

     if ($('.masonry').length) {
       var container = document.querySelector('.masonry');
       var msnry = new Masonry(container, {
         itemSelector: '.masonry-item'
       });

       msnry.on('layoutComplete', function() {

         mr_firstSectionHeight = $('.main-container section:nth-of-type(1)').outerHeight(true);

         // Fix floating project filters to bottom of projects container

         if ($('.filters.floating').length) {
           setupFloatingProjectFilters();
           updateFloatingFilters();
           window.addEventListener("scroll", updateFloatingFilters, false);
         }

         $('.masonry').addClass('fadeIn');
         $('.masonry-loader').addClass('fadeOut');
         if ($('.masonryFlyIn').length) {
           masonryFlyIn();
         }
       });

       msnry.layout();
     }
   });

   function capitaliseFirstLetter(string) {
     return string.charAt(0).toUpperCase() + string.slice(1);
   }

   function masonryFlyIn() {
     var $items = $('.masonryFlyIn .masonry-item');
     var time = 0;

     $items.each(function() {
       var item = $(this);
       setTimeout(function() {
         item.addClass('fadeIn');
       }, time);
       time += 170;
     });
   }