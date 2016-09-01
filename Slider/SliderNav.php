
<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/_helpers/_general' ); ?>

<?php
  if( !function_exists('SliderNav_BEGIN') ) : function SliderNav_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnSliderNavWrapper');
    $data = formatDataAttrs($props);
    $style = '';

    $attrs = formatAttrs($id, $class, $data, $style);

    echo '<div ' . $attrs . '>';
  } endif;

  if( !function_exists('SliderNav_END') ) : function SliderNav_END($props = array()) {
    echo '</div>';
  } endif;
?>
