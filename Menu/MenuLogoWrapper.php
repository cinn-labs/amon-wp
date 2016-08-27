<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('MenuLogoWrapper_BEGIN') ) : function MenuLogoWrapper_BEGIN($props = array()) {

    $props['class'] = array_key_exists('class', $props) ? $props['class'] : '';
    $props['class'] .= ' cnMenuLogoWrapper';

    Anchor_BEGIN($props);

  } endif;

  if( !function_exists('MenuLogoWrapper_END') ) : function MenuLogoWrapper_END($props = array()) {

    Anchor_END($props);

  } endif;
?>
