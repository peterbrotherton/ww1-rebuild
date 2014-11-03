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
 *   - $content['title-strip']: Content in the title-strip.
 *   - $content['main']: Content in the main column.
 *   - $content['side']: Content in the side column.
 *   - $content['contact-strip']: Content in the contact-strip.
 *   - $content['footer']: Content in the footer.
 */
?>
<div class="panel-slnswww1-2col clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div id="page-canvas">
    <?php if ($content['page-menu']): ?>
    <?php print $content['page-menu']; ?> 
    <?php endif; ?>
    <?php if ($content['header']): ?>
      <header class="panel-slnswww1-2col-header">
        <?php print $content['header']; ?>
      </header>
    <?php endif; ?>
    <div class="clearing"></div>
    <?php if ($content['title-strip']): ?>
    <section class="panel-slnswww1-2col-title-strip">
      <?php print $content['title-strip']; ?>
    </section>
     <?php endif; ?>
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
    <?php if ($content['contact-strip']): ?>
      <div class="panel-slnswww1-2col-contact-strip">
       <?php print $content['contact-strip']; ?>
      </div>
    <?php endif; ?>
    <?php if ($content['footer']): ?>
      <footer class="panel-slnswww1-2col-footer">
       <?php print $content['footer']; ?>
      </footer>
    <?php endif; ?>
  </div>
</div>
