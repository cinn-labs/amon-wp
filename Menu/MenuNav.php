<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('MenuNav_BEGIN') ) : function MenuNav_BEGIN($props = array()) {

    $props['class'] = array_key_exists('class', $props) ? $props['class'] : '';
    $props['class'] .= ' cnMenuNav';
    $props['wrapper'] = 'nav';

    Content_BEGIN($props);

  } endif;

  if( !function_exists('MenuNav_END') ) : function MenuNav_END($props = array()) {

    $props['wrapper'] = 'nav';

    Content_END($props);

  } endif;
?>
