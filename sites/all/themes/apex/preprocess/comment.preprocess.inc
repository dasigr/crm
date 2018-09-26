<?php

/**
 * Implements template_preprocess_comment().
 */
function apex_preprocess_comment(&$variables) {
  $comment = isset($variables['comment']) ? $variables['comment'] : NULL;

  if ($comment) {
    $variables['submitted'] = '<i class="fa fa-user"></i> ' . $comment->name . ' &nbsp;&nbsp;<i class="fa fa-calendar"></i> ' . format_date($comment->created);
  }
}
