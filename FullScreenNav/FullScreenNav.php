<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('FullScreenNav_BEGIN') ) : function FullScreenNav_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnFullScreenNav textCenter');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);

    $attrs .= ' data-close-modal';
    $attrs .= ' data-modal';
    // $attrs .= ' data-window-height';
    // $attrs .= ' data-vertical-align';

    echo '<nav ' . $attrs . '><div data-stop-propagation>';
  } endif;

  if( !function_exists('FullScreenNav_END') ) : function FullScreenNav_END($props = array()) {
    echo '</div></nav>';
  } endif;
?>
