-- SQL for product extra fields 
-- Delia Wilson Lunsford
-- Table structure for table `product_extra_fields`
--
DROP TABLE IF EXISTS `product_extra_fields`;
CREATE TABLE `product_extra_fields` (
  `products_id` int(11) NOT NULL default '0',
  `extra_field` text default '',
  `text_1` varchar(50) default NULL,
  `text_2` varchar(50) default NULL,
  `text_3` varchar(50) default NULL,
  `text_4` varchar(50) default NULL,
  `file_1` varchar(50) default NULL,
  `file_2` varchar(50) default NULL,
  `file_3` varchar(50) default NULL,
  `file_4` varchar(50) default NULL,
  `file_1_title` varchar(100) default NULL,
  `file_2_title` varchar(100) default NULL,
  `file_3_title` varchar(100) default NULL,
  `file_4_title` varchar(100) default NULL,
  `video` varchar(150) default NULL,
  `video_title` varchar(50) default NULL,
  `height` smallint(6) default NULL,
  `width` smallint(6) default NULL,
  PRIMARY KEY  (`products_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `product_extra_fields` (`products_id`)
SELECT `products_id` FROM `products` where `products_type` = 1;