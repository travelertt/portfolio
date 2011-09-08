<article<?php print $attributes; ?>>
  <div class="clearfix node-header-image">
    <?php if (!empty($content['field_image'])): ?>
      <?php print render($content['field_image']); ?>
    <?php endif; ?>
  </div>
  <?php if (!$page && $title): ?>
  <header>
    <?php print render($title_prefix); ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
  
  <?php print $user_picture; ?>
  
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?></footer>
  <?php endif; ?>  
</article>