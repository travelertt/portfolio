<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
function my_custom_theme_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    //$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 30;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
    //$form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    //$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
  }
} 

/**
 * Alter the appearance of the taxonomy terms.
 * First set up a field to have a custom preprocess, then define the preprocess callback
 */
function my_custom_theme_preprocess_field(&$vars,$hook) {
  // Add specific sggestions that can override the default implementation.
  //array_unshift($vars['theme_hook_suggestions'], 'field__' . $vars['element']['#field_type']);
}

/*
  function my_custom_theme_field__field_tags($vars) {
  $output = '';
  $glue = variable_get('my_custom_theme_tag_glue', ' + ');
  
  //Render the label, if it's not hidden.
  if (!$vars['label_hidden']) {
    $output .= '<h2>' . $vars['label'] . '</h2>';
  }
  
  // Render the items.
  $output .= '<ul>';
  for ($i = 0, $l = count($vars['items']); $i < $l; $i++) {
    $output .= '<li>' . drupal_render($vars['items'][$i]);
    
    // Put glue between all the tags
    if($l - 1 > $i) {
      $output .= $glue;
    }
    $output .= '</li>';
  }
  $output .= '</ul>';
  
  return $output;
}
 */
