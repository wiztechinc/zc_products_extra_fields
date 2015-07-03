Contribution:  Product Extra Fields Mod
Author: Delia Wilson Lunsford, http://deliawilsondesign.com
Version:  1.8 for zc1.5.3 / 1.5.4

Released under the GPL license found in the root directory of this package.
Support thread: http://www.zen-cart.com/forum/showthread.php?p=729343

This mod is based on the work done by Mariusz Józala of http://zencart.aetas.pl. 
His mod is called extra description files and is not to be confused with this one. 
I cleaned up his code, made it more zen cart compatible and added the flash to it.

This is a replacement for the general product type only. 

This mod creates one extra text field (can be used for youtube videos as well as extra text), four smaller text fields, 
4 fields that are designed for pdf uploads and one field for a flash video with adjustable size. 


Included in this text file:
Directions
Warnings
Files list
CSS directions
-------------------------------------------------------------------
Directions:
Change the custom template directory name 
(do not upload the template directory without changing the folder name in the package.
Upload all files. 
Change permissions on new directory : product_extra_files to 777 if your server requires it. 
Apply sql patch in admin > tools > Install SQL patches. If you are upgrading, run the upgrade sql file only.
You're done! 
--------------------------------------------------------------------
Warnings:

Do not leave spaces in your flash file name. Use underscores or dashes instead. 
(this is also good practice when naming your images) 

You cannot view flash videos in the admin preview. Check your product online to view.

The flash is inserted into a popup, not embedded on the page.
 
There is no file extension check on the uploads. All fields will upload any file so 

1) be sure your flash file has the appropriate ending (swf, most likely)
2) You can only upload certain types of files (pdf, swf, mp3, epub, wav, etc)
(that may be changed in the htaccess file in the product_extra_files folder; however, 
I do not recommend adding in things like word docs, excel, etc. The files now allowed are
considered safe. If you are upgrading and you have uploaded files not allowed, you will 
not be able to view or use them and changes to the htaccess file will be required.)

Note:  
Once you delete a product or change the files for a product, the old files are not deleted.  
Uploading a file with the same name will overwrite that file, of course.



---------------------------------------------------------------------
Admin Modified Files: 
admin/includes/modules/product/collect_info.php
admin/includes/modules/product/preview_info.php
admin/includes/modules/new_product_preview.php
admin/includes/modules/update_product.php
admin/includes/modules/delete_product_confirm.php
Admin New Files:
admin/includes/extra_datafiles/product_database_names.php
admin/includes/languages/english/extra_definitions/product.php
admin/includes/functions/extra_functions/function_product_extra_fields.php

Cart Modified Files:
includes/modules/pages/product_info/main_template_vars_product_type.php
includes/templates/your_template/templates/tpl_product_info_display.php
Cart New Files:
includes/extra_datafiles/product_database_names.php
includes/modules/pages/product_info/jscript_main.js
includes/modules/popup_flash/header_php.php
includes/modules/popup_flash/jscript_AC_RunActiveContent.js
includes/modules/popup_flash/jscript_main.js
includes/templates/your_template/popup_flash/tpl_main_page.php

New upload directory:
product_extra_files/ (set permissions at 777 - where your files will be uploaded to).
-------------------------------------------------------------------
CSS style tips:
Here is the suggested minimum css for the product page layout. Just add these lines to the end of your CSS if you want.

.files {
	clear:left; float:left;
	}
.filesHead {
	font-weight: bold; margin-bottom: 5px;
}

I did create these items into a unordered list so many other things can also be done with this block as well such as:
.files ul {
margin: 0px; padding:0px; list-style-type: none; /*removes the bullets*/
}
.files li.youtube {
list-style-type: none; /*removes the bullets from text field for youtube video*/
}


------------------------------------------------------------------

Change files:

1/7/2014, updated to 1.5.4, added 4 more text fields.

7/8/2014, updated to 1.5.3, required only one change to tpl_product_info_display.php, but also changed /product_extra_files folder 
.htaccess to make it more secure. Now you are limited as to the kinds of files you can place in this folder.

12/10/2012, updated to 1.5.1

3/12/2011, fixed bug in preview_info.php that prevented the file names from being inserted into the database.

11/12/2010, updated to 1.3.9h, corrected incorrect sql query in preview_info.php

3/3/2010, fixed bugs in /admin/includes/modules/delete_product_confirm.php & admin/includes/modules/copy_to_confirm

changed sql to create the rows in the product extra fields table for each product of the general product type.

added css classes to flash & text fields so that the bullet can be removed.

included products_extra_files directory with htaccess file

changed flash to used updated javascript
includes/templates/your_template/popup_flash/tpl_main_page.php

1/14/2010, added missing text definition of to TEXT_PRODUCT_MORE_INFO
/includes/extra_datafiles/product_database_names.php

changed /admin/includes/modules/delete_product_confirm.php to delete from the product extra fields table when product is deleted

added for copying products as linked or as duplicates (no distinction and is automatic) admin/includes/functions/extra_functions/function_product_extra_fields.php

changed admin/includes/modules/copy_to_confirm to add in the new copy function

6/2/2009, returned tpl_product_info_display.php to default template.
5/28/2009, fixed extra field so that the editor is suppressed when it's turned on.

5/24/2009, changed extra product field to text and changed collect_info.php so that you can put in as much as you want.  Great for embedding youtube videos.
