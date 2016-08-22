<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php if( !function_exists('Col_BEGIN') ) : function Col_BEGIN($props = array()) { ?>
  <?php
    $id = formatId($props);
    $class = formatClasses($props, 'cnCol');
    $data = formatDataAttrs($props);

    // Columns
    $columns = array_key_exists('columns', $props) ? $props['columns'] : false;
    if($columns) $class .= ' cnLarge' . $columns;
    $columnsOnMedium = array_key_exists('columnsOnMedium', $props) ? $props['columnsOnMedium'] : false;
    if($columnsOnMedium) $class .= ' cnMedium' . $columnsOnMedium;
    $columnsOnSmall = array_key_exists('columnsOnSmall', $props) ? $props['columnsOnSmall'] : false;
    if($columnsOnSmall) $class .= ' cnSmall' . $columnsOnSmall;
    $columnsOnAll = array_key_exists('columnsOnAll', $props) ? $props['columnsOnAll'] : false;
    if($columnsOnAll) $class .= ' cnAll' . $columnsOnAll;

    $attrs = formatAttrs($id, $class, $data);
  ?>

  <div <?php echo $attrs ?>>
<?php } endif; ?>

<?php if( !function_exists('Col_END') ) : function Col_END($props = array()) { ?>
  </div>
<?php } endif; ?>
