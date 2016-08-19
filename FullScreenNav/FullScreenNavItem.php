<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'packages/Anchor/Anchor' ); ?>

<?php
  if( !function_exists('FullScreenNavItem') ) : function FullScreenNavItem($props = array()) {
    $class = array_key_exists('class', $props) ? $props['class'] : '';
    $props['class'] = $class . ' cnFullScreenNavItem';
    Anchor($props);
  } endif;
?>
