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

// modify main menu, burger style menu
function slnswww1_menu_tree__main_menu($variables) {
  if (strpos($variables['tree'], 'first expanded') !== false) {
    return '<nav class="main-menu"><p class="account-links"><a href="/user">login</a> | <a href="/user/register">register</a></p><form action="/search" method="post" id="search"><input type="text" placeholder="search the whole site." name="keys"><input type="image" src="/sites/all/themes/slnswww1/images/icon-magnify.png"></form><ul>' . $variables['tree'] . '</ul><div class="social"><a href="http://www.facebook.com/statelibrarynsw"><img src="/sites/all/themes/slnswww1/images/icon-facebook.png" width="26" alt="facebook"></a><a href="http://twitter.com/statelibrarynsw"><img src="/sites/all/themes/slnswww1/images/icon-twitter.png" width="26" alt="twitter"></a><a href="http://www.vimeo.com/statelibrarynsw"><img src="/sites/all/themes/slnswww1/images/icon-vimeo.png" width="26" alt="vimeo"></a><a href="http://www.sl.nsw.gov.au/about/collections/flickr.html"><img src="/sites/all/themes/slnswww1/images/icon-flickr.png" width="26" alt="flickr"></a><a href="http://pinterest.com/statelibrarynsw/"><img src="/sites/all/themes/slnswww1/images/icon-pinterest.png" width="26" alt="pinterest"></a><a href="http://www.historypin.com/channels/view/id/11686538/"><img src="/sites/all/themes/slnswww1/images/icon-history-pin.png" width="26" alt="history pin"></a></div></nav>';
  } else {
    return '<ul>' . $variables['tree'] . '</ul>';
  }
}

// modify main menu, show arrow on links with children
function slnswww1_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  
  if ($element['#below']) {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . '<img class="sub-toggle" src="/sites/all/themes/slnswww1/images/icon-menu-down.png" alt="">' . $sub_menu . "</li>\n";
  } else {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
  }
}

// clean up body field output
function slnswww1_field__body($variables) {
  $output = '';

  // Render the items.
  foreach ($variables['items'] as $delta => $item) {
    $output .= drupal_render($item);
  }

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}