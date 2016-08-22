<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php if( !function_exists('Icon') ) : function Icon($props = array()) { ?>
  <?php
    $id = formatId($props);
    $class = formatClasses($props, 'cnIcon');
    $data = formatDataAttrs($props);

    $type = array_key_exists('type', $props) ? $props['type'] : '';
    $class .= ' cnIcon' . $type;

    $size = array_key_exists('size', $props) ? $props['size'] : '';
    $class .= ' ' . $size . 'FontSize';

    $attrs = formatAttrs($id, $class, $data);
  ?>

  <span <?php echo $attrs ?>></span>
<?php } endif; ?>
