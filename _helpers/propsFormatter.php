<?php

  if( !function_exists('formatId') ) {

    function formatId($props) {
      $id = array_key_exists('id', $props) ? $props['id'] : '';
      return $id;
    }

  }



  if( !function_exists('formatClasses') ) {

    function formatClasses($props, $mainClass = '', $defaultProps = array()) {
      $props = array_merge($defaultProps, $props);
      $class = $mainClass . ' ' . (array_key_exists('class', $props) ? $props['class'] : '');

      // Horizontal Align
      $horizontalCenter = array_key_exists('horizontalCenter', $props) ? $props['horizontalCenter'] : false;
      if($horizontalCenter) $class .= ' textCenter';

      // Padding
      $paddingY = array_key_exists('paddingY', $props) ? $props['paddingY'] : false;
      if($paddingY) $class .= ' ' . $paddingY . 'PaddingY';

      $paddingX = array_key_exists('paddingX', $props) ? $props['paddingX'] : false;
      if($paddingX) $class .= ' ' . $paddingX . 'PaddingX';

      $paddingTop = array_key_exists('paddingTop', $props) ? $props['paddingTop'] : false;
      if($paddingTop) $class .= ' ' . $paddingTop . 'PaddingTop';

      $paddingBottom = array_key_exists('paddingBottom', $props) ? $props['paddingBottom'] : false;
      if($paddingBottom) $class .= ' ' . $paddingBottom . 'PaddingBottom';

      // Boxed
      $boxed = array_key_exists('boxed', $props) ? $props['boxed'] : false;
      if($boxed) $class .= ' ' . $boxed . 'MaxWidth marginXAuto';

      // Font size
      $fontSize = array_key_exists('fontSize', $props) ? $props['fontSize'] : false;
      if($fontSize) $class .= ' ' . $fontSize . 'FontSize';

      // Color
      $color = array_key_exists('color', $props) ? $props['color'] : false;
      if($color) $class .= ' ' . $color . 'Color';

      // Background Color
      $bgColor = array_key_exists('bgColor', $props) ? $props['bgColor'] : false;
      $bgColor = array_key_exists('backgroundColor', $props) ? $props['backgroundColor'] : $bgColor;
      if($color) $class .= ' ' . $bgColor . 'BgColor';

      return $class;
    }

  }


  if( !function_exists('formatDataAttrs') ) {

    function formatDataAttrs($props) {
      // Data
      $data = '';

      // Window height
      $fullHeight = array_key_exists('fullHeight', $props) ? $props['fullHeight'] : false;
      if($fullHeight) $data .= ' data-window-height';

      // Vertical Align
      $verticalCenter = array_key_exists('verticalCenter', $props) ? $props['verticalCenter'] : false;
      if($verticalCenter) $data .= ' data-vertical-align';

      // Stop propagation
      $stopPropagation = array_key_exists('stopPropagation', $props) ? $props['stopPropagation'] : false;
      if($stopPropagation) $data .= ' data-stop-propagation';

      // Close modal
      $closeModal = array_key_exists('closeModal', $props) ? $props['closeModal'] : false;
      if($closeModal) $data .= ' data-close-modal';

      return $data;
    }

  }


  if( !function_exists('formatAttrs') ) {

    function formatAttrs($id = '', $class = '', $data = '', $style = '') {
      $attrs = 'id="' . $id . '" ';
      $attrs .= 'class="' . $class . '" ';
      $attrs .= 'style="' . $style . '" ';
      $attrs .= $data;

      return $attrs;
    }

  }
?>
