/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.apexBehavior = {
  attach: function(context, settings) {
    
    // Resize items.
    function resizeItems(selector, min_height = 350) {
      var portfolio_items = $(selector + ' .views-row-inner');
      
      $(portfolio_items).each(function(index) {
        var item_height = $(this).height();
        
        if (item_height > min_height) {
          min_height = item_height;
        }
      });
      
      $(selector).css('min-height', min_height);
    }

    // Toggle visibility of element.
    $('.toggle').click(function(e) {
      e.stopImmediatePropagation();
      var target_id = $(this).attr('data-id');
      $('#' + target_id).toggle();
    });
    
    // Do something when window is resized.
    $(window).resize(function () {
      
      // Resize height of each portofolio items.
      resizeItems('.view-portfolio .views-row');
      
    }).resize();

  }
};


})(jQuery, Drupal, this, this.document);
