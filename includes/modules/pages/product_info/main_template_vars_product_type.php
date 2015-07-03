<?php
/**
 * main_template_vars_product_type.php
 * This file contains all the logic to prepare $vars for use in the product-type-specific template
 * It pulls data from all the related tables which collectively store the info related only to this product type.
 *
 * @package productTypes
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: main_template_vars_product_type.php 2326 2005-11-09 23:43:14Z drbyte $
 */
/*
 * This file contains all the logic to prepare $vars for use in the product-type-specific template
 * It pulls data from all the related tables which collectively store the info related only to this product type.
 */

  // This should be first line of the script:
  $zco_notifier->notify('NOTIFY_PRODUCT_TYPE_VARS_START_PRODUCT_EXTRA_DESCRIPTION_INFO');

/**
 * Retrieve relevant data from relational tables, for the current products_id:
 */


// Nothing special to do here for primary product_info type

    $sql = "select * from " . TABLE_PRODUCT_EXTRA_FIELDS . "
            where products_id = '" . (int)$_GET['products_id'] . "'";

    $files = $db->Execute($sql);

/*
 * extract info from queries for use as template-variables:
 */

 $extra_field  = $files->fields['extra_field'];
  $text_1  = $files->fields['text_1'];
  $text_2  = $files->fields['text_2'];
  $text_3  = $files->fields['text_3'];
  $text_4  = $files->fields['text_4'];
  $products_file_1_title = $files->fields['file_1_title'];
  $products_file_2_title = $files->fields['file_2_title'];
  $products_file_3_title = $files->fields['file_3_title'];
  $products_file_4_title = $files->fields['file_4_title'];
  $products_file_1       = $files->fields['file_1'];
  $products_file_2       = $files->fields['file_2'];
  $products_file_3       = $files->fields['file_3'];
  $products_file_4       = $files->fields['file_4'];
  $products_video       = $files->fields['video'];
  $products_video_title = $files->fields['video_title'];
if (!empty($products_video)) $products_video_link = '<a href="javascript:popupWindow(\''.zen_href_link(FILENAME_FLASH).'&id='.$_GET[products_id]. '\') ">'. $products_video_title . '</a>';
  
  if (!empty($products_file_1_title)) $products_file_1_link = '<a href="' . "product_extra_files/" . $products_file_1 . '">'. $products_file_1_title . '</a>';
  if (!empty($products_file_2_title)) $products_file_2_link = '<a href="' . "product_extra_files/" . $products_file_2 . '">'. $products_file_2_title . '</a>';
  if (!empty($products_file_3_title)) $products_file_3_link = '<a href="' . "product_extra_files/" . $products_file_3 . '">'. $products_file_3_title . '</a>';
   if (!empty($products_file_4_title)) $products_file_4_link = '<a href="' . "product_extra_files/" . $products_file_4 . '">'. $products_file_4_title . '</a>';
   


  // This should be last line of the script:
  $zco_notifier->notify('NOTIFY_PRODUCT_TYPE_VARS_END_PRODUCT_EXTRA_DESCRIPTION_INFO');
?>