<?php get_template_part( 'node_modules/amon-wp/Content/Content' ); ?>

<?php
  if( !function_exists('Map') ) : function Map($props = array()) {
    $height = array_key_exists('height', $props) ? $props['height'] : '450';
    $lat = array_key_exists('lat', $props) ? $props['lat'] : FALSE;
    $lng = array_key_exists('lng', $props) ? $props['lng'] : FALSE;

    if(array_key_exists('embed', $props)) {
      ?>
        <iframe
          class="amonMap"
          src="https://www.google.com/maps/embed?<?php echo $props['embed'] ?>"
          height="<?php echo $height ?>"
          frameborder="0">
        </iframe>'
      <?php
    } else {
      // TODO: Render multiple markers
      // TODO: Create MapMarker component

      $type = array_key_exists('type', $props) ? $props['type'] : 'circle';
      $mainMarker = FALSE;
      if($lat && $lng) {
        $mainMarker = array('lat'=>$lat, 'lng'=>$lng);
      }

      Content_BEGIN(array('class'=>'amonMap'));
        if($mainMarker) {
          Content(array('class'=>$type, 'data'=>$mainMarker));
        }
      Content_END();
    }

  } endif;
?>
