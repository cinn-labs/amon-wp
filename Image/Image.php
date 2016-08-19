<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>

<?php if( !function_exists('Image') ) : function Image($props = array()) { ?>
  <?php
    $id = formatId($props);
    $class = formatClasses($props, 'cnImage');
    $data = formatDataAttrs($props);
    $attrs = formatAttrs($id, $class, $data);

    // Src
    $imageName = array_key_exists('fileName', $props) ? $props['fileName'] : false;
    $filePath = array_key_exists('filePath', $props) ? $props['filePath'] : false;
    if($filePath) {
      $attrs .= 'src="' . $filePath . '" ';
    } else if($imageName) {
      $attrs .= 'src="' . getAsset($imageName) . '" ';
    } else {
      $field = array_key_exists('field', $props) ? $props['field'] : '';
      $postId = array_key_exists('postId', $props) ? $props['postId'] : NULL;
      $imageSize = array_key_exists('size', $props) ? $props['size'] : 'large';
      $image = get_field($field, $postId);
      $attrs .= 'src="' . $image['sizes'][$imageSize] . '" ';
    }
  ?>

  <img <?php echo $attrs ?> />
<?php } endif; ?>
