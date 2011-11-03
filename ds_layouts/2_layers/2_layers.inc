<?php

/**
 * @file
 * Display Suite 2 Layers configuration.
 */

function ds_2_layers() {
  return array(
    'label' => t('2 Layers'),
    'regions' => array(
      'top_layer' => t('Top Layer'),
      'bottom_layer' => t('Bottom Layer'),
    ),
    // Uncomment if you want to include a CSS file for this layout (2_layers.css)
    // 'css' => TRUE,
    // Uncomment if this is a template for a node form.
    // 'form' => TRUE,
  );
}
