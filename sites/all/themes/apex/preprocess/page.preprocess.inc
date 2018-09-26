<?php

/**
 * Implements hook_preprocess_page().
 */
function apex_preprocess_page(&$variables) {
  // Check if page is a product page.
  $variables['is_product'] = FALSE;
  if (isset($variables['node']) && ($variables['node']->type == 'product')) {
    $variables['is_product'] = TRUE;
  }
}
