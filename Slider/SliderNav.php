
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

  if( !function_exists('SliderNav') ) : function SliderNav($props = array()) {
    $previous = array_key_exists('previous', $props) ? $props['previous'] : false;
    $next = array_key_exists('next', $props) ? $props['next'] : false;

    SliderNav_BEGIN();
      SliderNavLink_BEGIN(array('previous'=>1));
        if($previous) echo $previous;
        else Icon(array('type'=>'AngleLeft', 'size'=>'xxLarge'));
      SliderNavLink_END();
      SliderNavLink_BEGIN();
        if($next) echo $next;
        else Icon(array('type'=>'AngleRight', 'size'=>'xxLarge'));
      SliderNavLink_END();
    SliderNav_END();
  } endif;
?>
