<?php
  if( !function_exists('getAsset') ) : function getAsset($name) {
    return get_bloginfo('template_directory') . '/assets/' . $name;
  } endif;
?>
