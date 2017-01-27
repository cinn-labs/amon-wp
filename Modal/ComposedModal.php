<?php get_template_part( 'node_modules/amon-wp/Modal/Modal' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Modal/ModalContent' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Modal/ModalClose' ); ?>

<?php
  if( !function_exists('ComposedModal_BEGIN') ) : function ComposedModal_BEGIN($props = array()) {
    $contentClass = 'modalContent';
    $contentClass .= array_key_exists('noPadding', $props) ? ' noPadding' : '';

    $props['class'] = array_key_exists('class', $props) ? $props['class'] : '';
    $props['id'] .= array_key_exists('key', $props) ? $props['key'] : $props['id'];

    Modal_BEGIN($props);
      ModalContent_BEGIN(array('maxWidth'=>'largeBreakpoint'));
  } endif;

  if( !function_exists('ComposedModal_END') ) : function ComposedModal_END($props = array()) {
        ModalClose(array('content'=>'X'));
      ModalContent_END();
    Modal_END();
  } endif;
?>
