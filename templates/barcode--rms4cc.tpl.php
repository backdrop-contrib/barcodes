<?php
/**
 * @file
 * Default theme implementation to present a barcode.
 *
 * Available variables:
 * - svg: The rendered barcode in svg format.
 * - type: The barcode type.
 * - value: The barcode value.
 * - width: The display width.
 * - height: The display height.
 * - color: The barcode color.
 * - padding_top: The top padding.
 * - padding_right: The right padding.
 * - padding_bottom: The bottom padding.
 * - padding_left: The left padding.
 * - show_value: Show the raw barcode value.
 *
 * @ingroup themeable
 */
?>
<div class="barcode barcode-<?php print strtolower(str_replace('+', 'plus', $type)); ?>">
  <div class="code"><?php print $svg; ?></div>
  <?php if ($show_value): ?>
    <div class="value"><?php print $value; ?></div>
  <?php endif; ?>
</div>
