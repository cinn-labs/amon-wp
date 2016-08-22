<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Anchor/Anchor' ); ?>

<?php
  if( !function_exists('FullScreenNavItem') ) : function FullScreenNavItem($props = array()) {
    $class = array_key_exists('class', $props) ? $props['class'] : '';
    $props['class'] = $class . ' cnFullScreenNavItem';
    Anchor($props);
  } endif;
?>
