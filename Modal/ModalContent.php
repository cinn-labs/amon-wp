<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Boxed/Boxed' ); ?>

<?php
  if( !function_exists('ModalContent_BEGIN') ) : function ModalContent_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnModalContent xxLargePaddingY');
    $data = formatDataAttrs($props);

    $boxedClass = array_key_exists('maxWidth', $props) ? $props['maxWidth'] . 'MaxWidth' : '';

    $attrs = formatAttrs($id, $class, $data);

    echo '<div ' . $attrs . '>';
      Boxed_BEGIN(array('class'=>$boxedClass, 'stopPropagation'=>1));
  } endif;

  if( !function_exists('ModalContent_END') ) : function ModalContent_END($props = array()) {
      Boxed_END();
    echo '</div>';
  } endif;
?>
