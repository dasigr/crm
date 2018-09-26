(function($){ // Create local scope.

Drupal.behaviors.formula = {
  attach: function (context, settings) {
    
    $('#block-commerce-cart-cart').hover(function() {
      $('#block-commerce-cart-cart .cart-contents').show();
      $('#block-commerce-cart-cart .cart-empty-block').show();
    }, function() {
      $('#block-commerce-cart-cart .cart-contents').hide();
      $('#block-commerce-cart-cart .cart-empty-block').hide();
    });
    
  }
};

})(jQuery);
