<?php get_template_part( 'packages/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('Blank') ) : function Blank($props = array()) {
    echo '&nbsp;';
  } endif;
?>
