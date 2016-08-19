<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('Anchor_BEGIN') ) : function Anchor_BEGIN($props = array()) {
    $id = formatId($props);
    $class = formatClasses($props, 'cnAnchor');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);

    $href = array_key_exists('href', $props) ? $props['href'] : false;
    if($href) $attrs .= ' href="' . $href . '"';
    $relatedHref = array_key_exists('relatedHref', $props) ? $props['relatedHref'] : false;
    if($relatedHref) $attrs .= ' href="' . get_home_url() . '/' . $relatedHref . '"';
    $hrefField = array_key_exists('hrefField', $props) ? $props['hrefField'] : false;
    if($hrefField) {
      $postId = array_key_exists('postId', $props) ? $props['postId'] : NULL;
      $attrs .= ' href="' . get_field($hrefField, $postId) . '"';
    }

    $openModal = array_key_exists('openModal', $props) ? $props['openModal'] : false;
    if($openModal) $attrs .= ' data-open-modal="' . $openModal . '" href="/"';

    $selectSlide = array_key_exists('selectSlide', $props) ? $props['selectSlide'] : false;
    if(is_numeric($selectSlide)) $attrs .= ' data-select-slide="' . $selectSlide . '" href="/"';
    $sliderId = array_key_exists('sliderId', $props) ? $props['sliderId'] : false;
    if($sliderId) $attrs .= ' data-slider-id="' . $sliderId . '" href="/"';

    $blank = array_key_exists('blank', $props) ? $props['blank'] : false;
    if($blank) $attrs .= ' target="_blank"';

    echo '<a ' . $attrs . '>';
  } endif;

  if( !function_exists('Anchor_END') ) : function Anchor_END($props = array()) {
    echo '</a>';
  } endif;

  if( !function_exists('Anchor') ) : function Anchor($props = array()) {
    $field = array_key_exists('field', $props) ? $props['field'] : false;
    if($field) {
      $postId = array_key_exists('postId', $props) ? $props['postId'] : NULL;
      $content = get_field($field, $postId);
    } else {
      $content = array_key_exists('content', $props) ? $props['content'] : '';
    }

    Anchor_BEGIN($props);
      echo $content;
    Anchor_END($props);
  } endif;
?>
