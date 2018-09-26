<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php
$node = $row->_field_data['nid']['entity'];
$date_created = $node->created;
$date_closed = strtotime($node->field_date_closed['und'][0]['value']);
$cycle_time = $date_closed - $date_created;
$class = ($cycle_time > 86400) ? 'overdue' : '';
?>
<?php print '<span class="'.$class.'">' . tlustycrm_get_cycle_time($date_created, $date_closed) . '</span>'; ?>