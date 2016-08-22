<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('Menu_BEGIN') ) : function Menu_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnMenu');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);

    $attrs .= array_key_exists('fixOnScroll', $props) ? ' data-fix-on-scroll="' . $props['fixOnScroll'] . '"' : '';

    echo '<div ' . $attrs . '>';
  } endif;

  if( !function_exists('Menu_END') ) : function Menu_END($props = array()) {
    echo '</div>';
  } endif;
?>
