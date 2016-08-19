<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>

<?php if( !function_exists('GridItem_BEGIN') ) : function GridItem_BEGIN($props = array()) { ?>
  <?php
    $id = formatId($props);
    $class = formatClasses($props, 'cnBlockGridItem');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);
  ?>

  <li <?php echo $attrs ?>>
<?php } endif; ?>

<?php if( !function_exists('GridItem_END') ) : function GridItem_END($props = array()) { ?>
  </li>
<?php } endif; ?>
