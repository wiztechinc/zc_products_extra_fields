<?php

/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: new_product_preview.php 3009 2006-02-11 15:41:10Z wilt $
 */


if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
// copy image only if modified
if (!isset($_GET['read']) || $_GET['read'] == 'only') {
    $products_image = new upload('products_image');
    $products_image->set_destination(DIR_FS_CATALOG_IMAGES . $_POST['img_dir']);
    if ($products_image->parse() && $products_image->save($_POST['overwrite'])) {
        $products_image_name = $_POST['img_dir'] . $products_image->filename;
    } else {
        $products_image_name = (isset($_POST['products_previous_image']) ? $_POST['products_previous_image'] : '');
    }   
}
//extra fields mod

    
if ($_POST['file_1_title'] != '') {
    $products_file_1 = new upload('file_1');
    $products_file_1->set_destination(DIR_FS_PRODUCT_EXTRA);
    if ($products_file_1->parse() && $products_file_1->save(true)) {
        $products_file_1_name = $products_file_1->filename;
    } else {
        $products_file_1_name = (isset($_POST['previous_file_1']) ? $_POST['previous_file_1'] : '');
    }
}

if ($_POST['file_2_title'] != '') {
    $products_file_2 = new upload('file_2');
    $products_file_2->set_destination(DIR_FS_PRODUCT_EXTRA);
    if ($products_file_2->parse() && $products_file_2->save(true)) {
        $products_file_2_name = $products_file_2->filename;
    } else {
        $products_file_2_name = (isset($_POST['previous_file_2']) ? $_POST['previous_file_2'] : '');
    }
}

if ($_POST['file_3_title'] != '') {
    $products_file_3 = new upload('file_3');
    $products_file_3->set_destination(DIR_FS_PRODUCT_EXTRA);
    if ($products_file_3->parse() && $products_file_3->save(true)) {
        $products_file_3_name = $products_file_3->filename;
    } else {
        $products_file_3_name = (isset($_POST['previous_file_3']) ? $_POST['previous_file_3'] : '');
    }
}

if ($_POST['file_4_title'] != '') {
    $products_file_4 = new upload('file_4');
    $products_file_4->set_destination(DIR_FS_PRODUCT_EXTRA);
    if ($products_file_4->parse() && $products_file_4->save(true)) {
        $products_file_4_name = $products_file_4->filename;
    } else {
        $products_file_4_name = (isset($_POST['previous_file_4']) ? $_POST['previous_file_4'] : '');
    }
}
if ($_POST['video_title'] != '') {
    $products_video = new upload('video');
    $products_video->set_destination(DIR_FS_PRODUCT_EXTRA);;
    if ($products_video->parse() && $products_video->save(true)) {
        $products_video_name = $products_video->filename;
    } else {
        $products_video_name = (isset($_POST['previous_video']) ? $_POST['previous_video'] : '');
    }
}
       
?>