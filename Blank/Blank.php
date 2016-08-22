<?php get_template_part( 'node_modules/amon-wp/_helpers/propsFormatter' ); ?>

<?php
  if( !function_exists('Blank') ) : function Blank($props = array()) {
    echo '&nbsp;';
  } endif;
?>
