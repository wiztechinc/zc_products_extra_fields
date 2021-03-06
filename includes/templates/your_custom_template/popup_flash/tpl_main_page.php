<?php
/**
 * Override Template for common/tpl_main_page.php
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_main_page.php 2993 2006-02-08 07:14:52Z birdbrain $
 * 
 * 
 * @author Delia Wilson Lunsford
 */

?>
<body id="popupFlash" class="centeredContent" onLoad="resize()">
<div>
<a href="javascript:window.close();">
Close Window</a><br /> 

<br />
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="<?PHP echo $width ?>" height="<?PHP echo $height ?>" id="FlashID" title="flash">
  <param name="movie" value="product_extra_files/<?PHP echo $name ?>.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
  <param name="expressinstall" value="expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="product_extra_files/<?PHP echo $name ?>.swf" width="<?PHP echo $width ?>" height="<?PHP echo $height ?>">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
<br />
<a href="javascript:window.close();"><br />
Close Window</a>
</div>
</body>