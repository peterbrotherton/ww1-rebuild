<?php
/**
 * @file
 * Template for a slnsw_ww1 1col layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['header']: Content in the header.
 *   - $content['main']: Content in the main column.
 *   - $content['footer']: Content in the footer.
 */
?>
<div class="panel-slnsw_ww1-1col clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['header']): ?>
    <header class="panel-slnsw_ww1-1col-header">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>
  <div class="clearing"></div>
  <div class="panel-slnsw_ww1-1col-main-wrapper">
    <?php if ($content['main']): ?>
      <section class="panel-slnsw_ww1-1col-main">
        <?php print $content['main']; ?>
      </section>
    <?php endif; ?>
  </div>
  <?php if ($content['footer']): ?>
    <footer class="panel-slnsw_ww1-1col-footer">
     <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>
</div>
