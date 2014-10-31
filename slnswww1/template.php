<?php

/******************************************
Theme Hooks
*******************************************/

// strip out panel separator divs
function slnswww1_panels_default_style_render_region($vars) {
  $output = '';
  $output .= implode('', $vars['panes']);
  return $output;
}