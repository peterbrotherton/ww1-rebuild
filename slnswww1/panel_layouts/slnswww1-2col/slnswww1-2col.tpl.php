<?php
/**
 * @file
 * Template for a slnswww1 2col layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['header']: Content in the header.
 *   - $content['main']: Content in the main column.
 *   - $content['side']: Content in the side column.
 *   - $content['footer']: Content in the footer.
 */
?>
<div class="panel-slnswww1-2col clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['header']): ?>
    <header class="panel-slnswww1-2col-header">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>
  <div class="clearing"></div>
  <div class="panel-slnswww1-2col-main-wrapper">
    <?php if ($content['main']): ?>
      <section class="panel-slnswww1-2col-main">
        <?php print $content['main']; ?>
      </section>
    <?php endif; ?>
    <?php if ($content['side']): ?>
      <aside class="panel-slnswww1-2col-side">
       <?php print $content['side']; ?>
      </aside>
     <?php endif; ?>
     <div class="clearing"></div>
  </div>
  <?php if ($content['footer']): ?>
    <footer class="panel-slnswww1-2col-footer">
     <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>
</div>
