<?php 
/**
 * @file
 * Added additional "layers to the header to place background sprites. Got idea from Drupal Gardens."
 */
?>
<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <?php for($i = 1; $i < 4; $i++) { ?>
  <div class="layer-<?php echo $i; ?> layers">
  <?php } ?>
    <div<?php print $content_attributes; ?>>
      <?php print $content; ?>
    </div>
  <?php for($i = 1; $i < 4; $i++) { ?>
  </div>
  <?php } ?>
<?php if ($wrapper): ?></div><?php endif; ?>