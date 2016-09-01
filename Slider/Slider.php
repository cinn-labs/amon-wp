
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

    $previous = array_key_exists('previous', $props) ? $props['previous'] : false;
    $next = array_key_exists('next', $props) ? $props['next'] : false;
    $hideNav = array_key_exists('hideNav', $props) ? $props['hideNav'] : false;

    echo '<div ' . $attrs . '>';
      SliderNav_BEGIN();
        if(!$hideNav) {
          SliderNavLink_BEGIN(array('previous'=>1));
            if($previous) echo $previous;
            else Icon(array('type'=>'AngleLeft', 'size'=>'xxLarge'));
          SliderNavLink_END();
          SliderNavLink_BEGIN();
            if($next) echo $next;
            else Icon(array('type'=>'AngleRight', 'size'=>'xxLarge'));
          SliderNavLink_END();
        }
      SliderNav_END();

      echo '<div class="cnSliderContent Wallop-list">';

  } endif;

  if( !function_exists('Slider_END') ) : function Slider_END($props = array()) {
    echo '</div></div>';
  } endif;
?>
