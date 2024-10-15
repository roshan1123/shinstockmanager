<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-05 10:03:34 --> Could not find the language line " note"
ERROR - 2022-09-05 10:03:34 --> Could not find the language line "hide_form"
ERROR - 2022-09-05 10:03:34 --> Could not find the language line "show_form"
ERROR - 2022-09-05 10:03:34 --> Query error: Unknown column 'sma_transfers.dat' in 'field list' - Invalid query: SELECT sma_transfers.dat, transfer_no, (CASE WHEN sma_transfers.status = 'completed' THEN  GROUP_CONCAT(CONCAT(sma_purchase_items.product_name, '__', sma_purchase_items.quantity) SEPARATOR '___') ELSE GROUP_CONCAT(CONCAT(sma_transfer_items.product_name, '__', sma_transfer_items.quantity) SEPARATOR '___') END) as iname, from_warehouse_name as fname, from_warehouse_code as fcode, to_warehouse_name as tname, to_warehouse_code as tcode, grand_total, sma_transfers.status, sma_transfers.id as id
FROM `sma_transfer_items`
LEFT JOIN `sma_transfers` ON `sma_transfer_items`.`transfer_id`=`sma_transfers`.`id`
LEFT JOIN `sma_purchase_items` ON `sma_purchase_items`.`transfer_id`=`sma_transfers`.`id`
WHERE  ((sma_purchase_items.product_id = 35) OR (sma_transfer_items.product_id = 35)) 
GROUP BY `sma_transfers`.`id`
ORDER BY `sma_transfers`.`dat` DESC
 LIMIT 10
ERROR - 2022-09-05 10:04:43 --> Could not find the language line " note"
ERROR - 2022-09-05 10:04:43 --> Could not find the language line "hide_form"
ERROR - 2022-09-05 10:04:43 --> Could not find the language line "show_form"
ERROR - 2022-09-05 10:05:34 --> Could not find the language line " note"
ERROR - 2022-09-05 10:05:34 --> Could not find the language line "hide_form"
ERROR - 2022-09-05 10:05:34 --> Could not find the language line "show_form"
ERROR - 2022-09-05 10:07:25 --> Could not find the language line " note"
ERROR - 2022-09-05 10:07:25 --> Could not find the language line "hide_form"
ERROR - 2022-09-05 10:07:25 --> Could not find the language line "show_form"
ERROR - 2022-09-05 10:07:44 --> Could not find the language line " note"
ERROR - 2022-09-05 10:07:44 --> Could not find the language line "hide_form"
ERROR - 2022-09-05 10:07:44 --> Could not find the language line "show_form"
ERROR - 2022-09-05 10:14:09 --> Could not find the language line " note"
ERROR - 2022-09-05 10:14:09 --> Could not find the language line "hide_form"
ERROR - 2022-09-05 10:14:09 --> Could not find the language line "show_form"
