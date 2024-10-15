<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-22 10:50:14 --> Could not find the language line "value"
ERROR - 2022-09-22 10:50:22 --> Could not find the language line "value"
ERROR - 2022-09-22 10:50:22 --> Could not find the language line " note"
ERROR - 2022-09-22 10:50:22 --> Could not find the language line "hide_form"
ERROR - 2022-09-22 10:50:22 --> Could not find the language line "show_form"
ERROR - 2022-09-22 10:51:04 --> Could not find the language line "value"
ERROR - 2022-09-22 10:51:04 --> Could not find the language line " note"
ERROR - 2022-09-22 10:51:04 --> Could not find the language line "hide_form"
ERROR - 2022-09-22 10:51:04 --> Could not find the language line "show_form"
ERROR - 2022-09-22 10:51:16 --> Could not find the language line "value"
ERROR - 2022-09-22 10:51:16 --> Could not find the language line " note"
ERROR - 2022-09-22 10:51:16 --> Could not find the language line "hide_form"
ERROR - 2022-09-22 10:51:16 --> Could not find the language line "show_form"
ERROR - 2022-09-22 10:52:30 --> Could not find the language line "value"
ERROR - 2022-09-22 10:52:30 --> Could not find the language line " note"
ERROR - 2022-09-22 10:52:30 --> Could not find the language line "hide_form"
ERROR - 2022-09-22 10:52:30 --> Could not find the language line "show_form"
ERROR - 2022-09-22 10:52:51 --> Could not find the language line "value"
ERROR - 2022-09-22 10:52:51 --> Could not find the language line " note"
ERROR - 2022-09-22 10:52:51 --> Could not find the language line "hide_form"
ERROR - 2022-09-22 10:52:51 --> Could not find the language line "show_form"
ERROR - 2022-09-22 10:52:51 --> Query error: Unknown column 'sma_transfers.dates' in 'field list' - Invalid query: SELECT sma_transfers.dates, transfer_no, (CASE WHEN sma_transfers.status = 'completed' THEN  GROUP_CONCAT(CONCAT(sma_purchase_items.product_name, '__', sma_purchase_items.quantity) SEPARATOR '___') ELSE GROUP_CONCAT(CONCAT(sma_transfer_items.product_name, '__', sma_transfer_items.quantity) SEPARATOR '___') END) as iname, from_warehouse_name as fname, from_warehouse_code as fcode, to_warehouse_name as tname, to_warehouse_code as tcode, grand_total, sma_transfers.status, sma_transfers.id as id
FROM `sma_transfers`
LEFT JOIN `sma_transfer_items` ON `sma_transfer_items`.`transfer_id`=`sma_transfers`.`id`
LEFT JOIN `sma_purchase_items` ON `sma_purchase_items`.`transfer_id`=`sma_transfers`.`id`
WHERE  ((sma_purchase_items.product_id = 56) OR (sma_transfer_items.product_id = 56)) 
GROUP BY `sma_transfers`.`id`
ORDER BY `sma_transfers`.`dates` DESC
 LIMIT 10
ERROR - 2022-09-22 11:02:16 --> Could not find the language line "value"
ERROR - 2022-09-22 11:02:16 --> Could not find the language line " note"
ERROR - 2022-09-22 11:02:16 --> Could not find the language line "hide_form"
ERROR - 2022-09-22 11:02:16 --> Could not find the language line "show_form"
