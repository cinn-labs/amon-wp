<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>

<?php if( !function_exists('Boxed_BEGIN') ) : function Boxed_BEGIN($props = array()) { ?>
  <?php
    $id = formatId($props);
    $class = formatClasses($props, 'cnBoxed');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);
  ?>

  <div <?php echo $attrs ?>>
<?php } endif; ?>

<?php if( !function_exists('Boxed_END') ) : function Boxed_END($props = array()) { ?>
  </div>
<?php } endif; ?>
