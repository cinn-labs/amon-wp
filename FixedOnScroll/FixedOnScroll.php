<?php get_template_part( 'node_modules/amon-wp/Content/Content' ); ?>

<?php
  if( !function_exists('FixedOnScroll_BEGIN') ) : function FixedOnScroll_BEGIN($props = array()) {
    $class = array_key_exists('class', $props) ? $props['class'] : '';
    $props['class'] = $class . ' fixedOnScroll';
    Content_BEGIN($props);
      Content_BEGIN(array('class'=>'fixedOnScrollContent'));
  } endif;


  if( !function_exists('FixedOnScroll_END') ) : function FixedOnScroll_END($props = array()) {
      Content_END();
    Content_END();
  } endif;
?>
