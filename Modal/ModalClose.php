<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Anchor/Anchor' ); ?>

<?php
  if( !function_exists('ModalClose_BEGIN') ) : function ModalClose_BEGIN($props = array()) {
    $props['closeModal'] = 1;
    $props['class'] = 'cnModalClose';

    Anchor_BEGIN($props);
  } endif;

  if( !function_exists('ModalClose_END') ) : function ModalClose_END($props = array()) {
    Anchor_END($props);
  } endif;

  if( !function_exists('ModalClose') ) : function ModalClose($props = array()) {
    $content = array_key_exists('content', $props) ? $props['content'] : '';

    ModalClose_BEGIN($props);
      echo $content;
    ModalClose_END($props);
  } endif;
?>
