Commerce Quickorder
--------------------

-- SUMMARY --

This module creates a page for consumers who know exactly what they want to 
order by SKU. Create an order by adding all items to cart without the need to 
browse/search the entire website to add each item to the cart individually.


-- REQUIREMENTS --

Commerce Cart


-- INSTALLATION --

Install as usual, see http://drupal.org/node/70151 for further information.


-- USAGE --

Once the module is enabled, the order form is located at /quick-order.


-- CUSTOMIZATION --

You can use hook_form_commerce_quickorder_form_alter() to modify this form
and add your own validations and/or submit functionality.
