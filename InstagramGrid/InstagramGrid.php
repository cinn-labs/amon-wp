<?php get_template_part( 'packages/Anchor/Anchor' ); ?>
<?php get_template_part( 'packages/Image/Image' ); ?>
<?php get_template_part( 'packages/Modal/Modal' ); ?>
<?php get_template_part( 'packages/Modal/ModalContent' ); ?>
<?php get_template_part( 'packages/ImagesSlider/ImagesSlider' ); ?>

<?php
  function fetchInstagramData($token, $count = 9){
    $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $token . '&count=' . $count;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }

  if( !function_exists('InstagramGrid') ) : function InstagramGrid($props = array()) {
    $id = formatId($props);
    $class = formatClasses($props, 'cnInstagramGrid');
    $data = formatDataAttrs($props);
    $attrs = formatAttrs($id, $class, $data);

    $token = array_key_exists('token', $props) ? $props['token'] : false;
    if(!$token) return;

    $useModal = array_key_exists('useModal', $props) ? $props['useModal'] : false;
    $images = array();

    $result = fetchInstagramData($token);
    $result = json_decode($result);

    echo '<div ' . $attrs . '>';
      if(array_key_exists('data', $result)) {
        foreach ($result->data as $index=>$post) {
          $anchorProps = array(
            'href'=>$post->link,
            'blank'=>1,
            'class'=>'instagramImg imgNum' . $index,
          );

          Anchor_BEGIN($anchorProps);
            Image(array('filePath'=>$post->images->standard_resolution->url));
          Anchor_END();
        }
      }
    echo '</div>';
  } endif;

?>
