<?php
/**
 * @file
 * Template for slnswww1 home layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['header']: Content in the header.
 *   - $content['main']: Content in the main column.
 *   - $content['top-col-one']: Content in the top-col-one column.
 *   - $content['top-col-two']: Content in the top-col-two column.
 *   - $content['top-col-three']: Content in the top-col-three column.
 *   - $content['footer']: Content in the footer.
 */
?>
<div class="panel-slnswww1-home clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['header']): ?>
    <header class="panel-slnswww1-home-header">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>
  <div class="clearing"></div>
  <div class="panel-slnswww1-top-art">
    <div class="panel-slnswww1-top-wrapper">
      <?php if ($content['top-col-one']): ?>
        <div class="panel-slnswww1-home-top-col-one">
          <?php print $content['top-col-one']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['top-col-two']): ?>
        <div class="panel-slnswww1-home-top-col-two">
          <?php print $content['top-col-two']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['top-col-three']): ?>
        <div class="panel-slnswww1-home-top-col-three">
          <?php print $content['top-col-three']; ?>
        </div>
      <?php endif; ?>
       <div class="clearing"></div>
     </div>
   </div>
  <?php if ($content['main']): ?>
    <section class="panel-slnswww1-home-main">
      <?php print $content['main']; ?>
    </section>
  <?php endif; ?>
   <div class="clearing"></div>
  <?php if ($content['footer']): ?>
    <footer class="panel-slnswww1-home-footer">
     <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>
</div>
