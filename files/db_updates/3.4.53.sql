ALTER TABLE `sma_settings` ADD COLUMN `ksa_qrcode` tinyint(1) NULL;
UPDATE `sma_settings` SET `version` = '3.4.53' WHERE `setting_id` = 1;
