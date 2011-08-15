<?php
/**
 * Alter the appearance of the taxonomy terms
 */

function my_custom_theme_entity_view_alter(&$build, $type) {
  if ($build['#view_mode'] == 'full' && $type == 'taxonomy') {
    dprint_r($build);
  }
}
