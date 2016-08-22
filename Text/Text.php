<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('Text_BEGIN') ) : function Text_BEGIN($props = array()) {
    $id = formatId($props);
    $class = formatClasses($props, 'cnText');
    $data = formatDataAttrs($props);

    $attrs = formatAttrs($id, $class, $data);

    $wrapper = array_key_exists('wrapper', $props) ? $props['wrapper'] : 'span';

    echo '<' . $wrapper . ' ' . $attrs . '>';
  } endif;

  if( !function_exists('Text_END') ) : function Text_END($props = array()) {
    $wrapper = array_key_exists('wrapper', $props) ? $props['wrapper'] : 'span';

    echo '</' . $wrapper . '>';
  } endif;

  if( !function_exists('Text') ) : function Text($props = array()) {
    $field = array_key_exists('field', $props) ? $props['field'] : false;
    if($field) {
      $postId = array_key_exists('postId', $props) ? $props['postId'] : NULL;
      $content = get_field($field, $postId);
    } else {
      $content = array_key_exists('content', $props) ? $props['content'] : '';
    }

    Text_BEGIN($props);
      echo $content;
    Text_END($props);
  } endif;
?>
