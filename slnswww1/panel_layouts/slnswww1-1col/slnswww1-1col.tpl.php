<?php
/**
 * @file
 * Template for a slnswww1 1col layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['page-menu']: Content in the page-menu.
 *   - $content['header']: Content in the header.
 *   - $content['main']: Content in the main column.
 *   - $content['footer']: Content in the footer.
 */
?>
<div class="panel-slnswww1-1col clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div id="page-canvas">
    <?php if ($content['page-menu']): ?>
      <?php print $content['page-menu']; ?> 
    <?php endif; ?>
    <?php if ($content['header']): ?>
      <header class="panel-slnswww1-1col-header">
        <?php print $content['header']; ?>
      </header>
    <?php endif; ?>
    <div class="clearing"></div>
     <?php if ($content['title-strip']): ?>
    <section class="panel-slnswww1-1col-title-strip">
      <?php print $content['title-strip']; ?>
    </section>
     <?php endif; ?>
     <div class="clearing"></div>
    <div class="panel-slnswww1-1col-main-wrapper">
      <?php if ($content['main']): ?>
        <section class="panel-slnswww1-1col-main">
          <?php print $content['main']; ?>
        </section>
      <?php endif; ?>
    </div>
    <div class="panel-slnswww1-1col-contact-strip">
      <?php if ($content['contact-strip-col-1']): ?>
        <div class="panel-slnswww1-1col-contact-strip-col-1">
         <?php print $content['contact-strip-col-1']; ?>
        </div>
      <?php endif; ?>
       <?php if ($content['contact-strip-col-2']): ?>
        <div class="panel-slnswww1-1col-contact-strip-col-2">
         <?php print $content['contact-strip-col-2']; ?>
        </div>
      <?php endif; ?>
      <div class="clearing"></div>
     </div>
    <?php if ($content['footer']): ?>
      <footer class="panel-slnswww1-1col-footer">
       <?php print $content['footer']; ?>
      </footer>
    <?php endif; ?>
  </div>
</div>
