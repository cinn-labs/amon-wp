<?php get_template_part( 'packages/Image/Image' ); ?>

<?php
  if( !function_exists('YoutubeThumb') ) : function YoutubeThumb($props = array()) {
    $field = array_key_exists('field', $props) ? $props['field'] : false;
    if($field) {
      $postId = array_key_exists('postId', $props) ? $props['postId'] : NULL;
      $url = get_field($field, $postId);
    } else {
      $url = array_key_exists('url', $props) ? $props['url'] : '';
    }

    $croppedUrl = explode('?v=', $url);
    $youtubeLinkId = $croppedUrl[1];
    $thumbPath = 'http://img.youtube.com/vi/' . $youtubeLinkId . '/0.jpg';

    Image(array('filePath'=>$thumbPath, 'class'=>'cnYoutubeThumb'));
  } endif;
?>
