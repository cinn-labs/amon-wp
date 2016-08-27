<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('MenuLink') ) : function MenuLink($props = array()) {

    $props['class'] = array_key_exists('class', $props) ? $props['class'] : '';
    $props['class'] .= ' cnMenuLink';

    Anchor($props);

  } endif;
?>
