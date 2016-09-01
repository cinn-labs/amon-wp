
<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/_helpers/_general' ); ?>

<?php
  if( !function_exists('Slide_BEGIN') ) : function Slide_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnSlide Wallop-item');
    $data = formatDataAttrs($props);
    $style = '';

    $attrs = formatAttrs($id, $class, $data, $style);

    echo '<div ' . $attrs . '>';
  } endif;

  if( !function_exists('Slide_END') ) : function Slide_END($props = array()) {
    echo '</div>';
  } endif;
?>
