-- SQL for product extra fields upgrade starting at version 1.8
-- Delia Wilson Lunsford
--

ALTER TABLE `product_extra_fields` ADD `text_1` TEXT default NULL AFTER `extra_field`;
ALTER TABLE `product_extra_fields` ADD `text_2` TEXT default NULL AFTER `text_1`;
ALTER TABLE `product_extra_fields` ADD `text_3` TEXT default NULL AFTER `text_2`;
ALTER TABLE `product_extra_fields` ADD `text_4` TEXT default NULL AFTER `text_3`;
