<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>
<?php get_template_part( 'node_modules/amon-wp/_helpers/_general' ); ?>

<?php
  if( !function_exists('Content_BEGIN') ) : function Content_BEGIN($props = array()) {

    $id = formatId($props);
    $class = formatClasses($props, 'cnContent');
    $data = formatDataAttrs($props);
    $style = '';

    // Bg Image
    if(array_key_exists('bgField', $props)) {
      $bgField = $props['bgField'];
      $postId = array_key_exists('postId', $props) ? $props['postId'] : '';
      $imageArrayBg = get_field($bgField, $postId);
      $imageBg = $imageArrayBg && array_key_exists('sizes', $imageArrayBg) ? $imageArrayBg['sizes']['full'] : '';
    } else {
      $imageBg = array_key_exists('bgImageName', $props) ? getAsset($props['bgImageName']) : '';
    }
    $style .= ' background-image: url(' . $imageBg . ');';

    // Bg Video
    if(array_key_exists('videoField', $props)) {
      $videoField = $props['videoField'];
      $postId = array_key_exists('postId', $props) ? $props['postId'] : '';
      $mp4 = get_field($videoField . 'Mp4', $postId);
      $webm = get_field($videoField . 'Webm', $postId);
      if($mp4 && $webm) {
        $data .= ' data-video-mp4="' . $mp4['url'] . '"';
        $data .= ' data-video-webm="' . $webm['url'] . '"';
        $data .= ' data-video-poster="' . $imageBg . '"';
        if(array_key_exists('videoFullscreen', $props) && $props['videoFullscreen']) $data .= ' data-video-fullscreen="true"';
      }
    }

    // Parallax
    if(array_key_exists('parallax', $props)) {
      $data .= ' data-parallax="scroll"';
      $data .= ' data-image-src="' . $imageBg . '"';
      $class .= ' parallax-window';
      $class .= ' transparentBgColor';
      $style = '';
    }

    $attrs = formatAttrs($id, $class, $data, $style);

    $wrapper = array_key_exists('wrapper', $props) ? $props['wrapper'] : 'div';

    echo '<' . $wrapper . ' ' . $attrs . '>';

  } endif;

  if( !function_exists('Content_END') ) : function Content_END($props = array()) {
    $wrapper = array_key_exists('wrapper', $props) ? $props['wrapper'] : 'div';

    echo '</' . $wrapper . '>';
  } endif;
?>
