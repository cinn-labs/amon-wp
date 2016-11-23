
<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/_helpers/_general' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Slider/SliderNav' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Slider/SliderNavLink' ); ?>

<?php
  if( !function_exists('Slider_BEGIN') ) : function Slider_BEGIN($props = array()) {

    $effect = array_key_exists('effect', $props) ? $props['effect'] : 'slide';

    $id = formatId($props);
    $class = formatClasses($props, 'cnSlider Wallop Wallop--' . $effect);
    $data = formatDataAttrs($props);
    $style = '';

    $attrs = formatAttrs($id, $class, $data, $style);

    $hideNav = array_key_exists('hideNav', $props) ? $props['hideNav'] : false;

    echo '<div ' . $attrs . '>';
      if(!$hideNav) {
        SliderNav($props);
      }

      echo '<div class="cnSliderContent Wallop-list">';

  } endif;

  if( !function_exists('Slider_END') ) : function Slider_END($props = array()) {
    echo '</div></div>';
  } endif;
?>
