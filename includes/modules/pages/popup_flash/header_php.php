<?php
/**
 * Flash Page for product extra fields mod Delia Wilson Lusford
 * 
 * @package page
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 3230 2006-03-20 23:21:29Z drbyte $
 */

require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

$id = $_GET[id];

      $sql="select video, width, height
                              from " . TABLE_PRODUCT_EXTRA_FIELDS . " 
                              where products_id = '$id'";
      
$files = $db->Execute($sql);
$width = $files->fields['width'];
$height = $files->fields['height'];
$swf = DIR_FS_PRODUCT_EXTRA.$files->fields['video'];

function file_ext_strip($filename){
    return preg_replace('/\.[^.]*$/', '', $filename);
}
$name = file_ext_strip($files->fields['video']);


?>