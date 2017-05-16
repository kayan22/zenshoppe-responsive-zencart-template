<?php
/**
 * Common Template - tpl_box_default_left.php
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_box_default_left.php 2975 2006-02-05 19:33:51Z birdbrain $
 */

// choose box images based on box position
  if ($title_link) {
  				if($title == BOX_HEADING_TWITTER_SIDEBOX)
				{
					$title = BOX_HEADING_TWITTER_SIDEBOX;
				}
				else{
    			$title = $title . '<a href="' . zen_href_link($title_link) . '">' . BOX_HEADING_LINKS . '</a>';
  				}
  }
//
?>
<!--// bof: <?php echo $box_id; ?> //-->
<div class="leftBoxContainer" id="<?php echo str_replace('_', '-', $box_id ); ?>" style="width: <?php echo $column_width; ?>">
<h4 class="leftBoxHeading" id="<?php echo str_replace('_', '-', $box_id) . 'Heading'; ?>"><?php echo $title; ?></h4>
<?php echo $content; ?>
</div>
<!--// eof: <?php echo $box_id; ?> //-->
