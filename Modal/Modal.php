<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('Modal_BEGIN') ) : function Modal_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnModal');
    $data = formatDataAttrs($props);

    $class .= array_key_exists('dark', $props) ? ' dark' : '';

    $data .= ' data-close-modal';
    $data .= ' data-modal';

    $attrs = formatAttrs($id, $class, $data);

    echo '<div ' . $attrs . '>';
  } endif;

  if( !function_exists('Modal_END') ) : function Modal_END($props = array()) {
    echo '</div>';
  } endif;
?>
