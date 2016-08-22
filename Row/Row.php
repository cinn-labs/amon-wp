<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php if( !function_exists('Row_BEGIN') ) : function Row_BEGIN($props = array()) { ?>
  <?php
    $id = formatId($props);
    $class = formatClasses($props, 'cnRow');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);
  ?>

  <div <?php echo $attrs ?>>
<?php } endif; ?>

<?php if( !function_exists('Row_END') ) : function Row_END($props = array()) { ?>
  </div>
<?php } endif; ?>
