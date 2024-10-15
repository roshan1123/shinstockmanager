ALTER TABLE `sma_transfer_items` ADD `base_unit_cost` decimal(25,4) NULL;
UPDATE `sma_settings` SET `version` = '3.5.5' WHERE `setting_id` = 1;
