<?php
//these are 2 of the variables available in any field level tpl. Listed at the top for debugging purposes (and so anyone making adjustments know these are here.
$g = $items;
$h = $label;
?>
<?php //Only output the title h2 if there is any actual content to display. If there is, loop round each entry and output accordingly. ?>
<?php if (count($items) > 0) { ?>
  <h2><?php print $label; ?></h2>
  <ul>
    <?php foreach ($items as $item) { ?>
      <li><?php print $item['#markup']; ?> </li>
    <?php
    }
    ?>
  </ul>
<?php } ?>