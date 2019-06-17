<?php
/**
 * Plugin Name: Test Plugin
 * Author: John Doe
 * Version: 1.0.0
 */
  
function loadMyBlock() {
  wp_enqueue_script(
    'code_block',
    // plugin_dir_url(__FILE__) . 'test-block.js',
    get_stylesheet_directory_uri() .'/assets/src/functions/block_config.js',
    array('wp-blocks','wp-editor','wp-i18n','wp-components'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'loadMyBlock');