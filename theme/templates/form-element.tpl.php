<?php
/**
 * @file
 * Theme a common form element.
 */
?>
<div <?php print \Perseus\System::htmlAttributes($attributes); ?>>
  <?php if (!empty($label)) : ?>
  <label><?php print $label; ?></label>
  <?php endif; ?>
  <?php print $output; ?>
</div>
