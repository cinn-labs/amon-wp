
<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/_helpers/_general' ); ?>

<?php
  if( !function_exists('SliderNavLink_BEGIN') ) : function SliderNavLink_BEGIN($props = array()) {
    $previous = array_key_exists('previous', $props) ? $props['previous'] : false;

    $linkTypeClass = $previous ? 'previous' : 'next';
    $linkTypeWallopClass = $previous ? 'Previous' : 'Next';

    $id = formatId($props);
    $class = formatClasses($props, 'cnSliderNavLink ' . $linkTypeClass . ' Wallop-button' . $linkTypeWallopClass);
    $data = formatDataAttrs($props);
    $style = '';

    $attrs = formatAttrs($id, $class, $data, $style);

    echo '<a ' . $attrs . '>';
  } endif;

  if( !function_exists('SliderNavLink_END') ) : function SliderNavLink_END($props = array()) {
    echo '</a>';
  } endif;
?>
