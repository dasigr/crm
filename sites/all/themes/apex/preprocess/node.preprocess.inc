<?php

/**
 * Implements hook_preprocess_page().
 */
function apex_preprocess_node(&$variables) {
  // Set custom template for all Product Display content types.
  if (array_key_exists('field_product_variations', $variables)) {
    $variables['theme_hook_suggestions'][] = 'node__product';
    $variables['classes_array'][] = 'node--product';
    $variables['classes_array'][] = 'node--product--' . $variables['view_mode'];
  }
}
