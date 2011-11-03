<?php
/**
 * @file
 * Display Suite 2 Layers template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 *
 * Regions:
 *
 * - $top_layer: Rendered content for the "Top Layer" region.
 * - $top_layer_classes: String of classes that can be used to style the "Top Layer" region.
 *
 * - $bottom_layer: Rendered content for the "Bottom Layer" region.
 * - $bottom_layer_classes: String of classes that can be used to style the "Bottom Layer" region.
 */
?>
<div class="<?php print $classes; ?> clearfix relative">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($top_layer): ?>
    <div class="ds-top-layer<?php print $top_layer_classes; ?>">
      <?php print $top_layer; ?>
    </div>
  <?php endif; ?>

  <?php if ($bottom_layer): ?>
    <div class="ds-bottom-layer<?php print $bottom_layer_classes; ?>">
      <?php print $bottom_layer; ?>
    </div>
  <?php endif; ?>

</div>
