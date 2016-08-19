<?php
  if( !function_exists('YoutubeVideo') ) : function YoutubeVideo($props = array()) {
    $field = array_key_exists('field', $props) ? $props['field'] : false;
    if($field) {
      $postId = array_key_exists('postId', $props) ? $props['postId'] : NULL;
      $url = get_field($field, $postId);
    } else {
      $url = array_key_exists('url', $props) ? $props['url'] : '';
    }

    $croppedUrl = explode('?v=', $url);
    $youtubeLinkId = $croppedUrl[1];

    ?>
      <div class="cnYoutubeVideo">
        <iframe class="cnYoutubeVideoFrame" src="https://www.youtube.com/embed/<?php echo $youtubeLinkId ?>" frameborder="0" allowfullscreen></iframe>;
      </div>
    <?php
  } endif;
?>
