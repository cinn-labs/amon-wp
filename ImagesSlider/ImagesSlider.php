<?php get_template_part( 'node_modules/amon-wp/Image/Image' ); ?>
<?php get_template_part( 'node_modules/amon-wp/Text/Text' ); ?>

<?php
  if( !function_exists('ImagesSlider') ) : function ImagesSlider($props = array()) {
    $id = formatId($props);
    $class = formatClasses($props, 'cnImagesSlider');
    $data = formatDataAttrs($props);

    $class .= array_key_exists('presentation', $props) ? $props['presentation'] . 'Style' : '';
    $data .= 'data-slider';

    $attrs = formatAttrs($id, $class, $data);

    $images = array_key_exists('images', $props) ? $props['images'] : false;

    echo '<div ' . $attrs . '>';
      foreach ($images as $index => $image) {
        echo '<div class="cnImagesSliderItem' . ($index == 0 ? ' active' : '') . '" data-slide="' . $index . '">';
          Image(array('filePath'=>$image['src'], 'class'=>'cnImagesSliderItemImage'));

          echo '<div class="cnImagesSliderItemContent">';
            Text(array('content'=>$image['title'], 'wrapper'=>'h4'));
            Anchor(array('href'=>$image['href'], 'content'=>'Abrir no Instagram', 'blank'=>1));
          echo '</div>';
        echo '</div>';
      }
    echo '</div>';
  } endif;
?>
