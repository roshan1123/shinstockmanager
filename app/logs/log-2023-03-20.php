<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-20 12:20:44 --> Could not find the language line " note"
ERROR - 2023-03-20 12:20:44 --> Could not find the language line "hide_form"
ERROR - 2023-03-20 12:20:44 --> Could not find the language line "show_form"
ERROR - 2023-03-20 12:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '== sma_sale_items.option_id GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id == sma_sale_items.option_id GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '== sma_sale_items.option_id GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id == sma_sale_items.option_id GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:28:49 --> Query error: Column 'product_id' in field list is ambiguous - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:43:49 --> Query error: Unknown column 'sma_product_variants.name' in 'field list' - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:45:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THEN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quant' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, CASE sma_sale_items.option_id IS NOT NULL THEN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'THAN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quant' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, CASE sma_sale_items.option_id IS NOT NULL THAN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:46:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as item_nane ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sal' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, CASE WHEN sma_sale_items.option_id IS NOT NULL THEN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') as item_nane ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, (CASE WHEN sma_sale_items.option_id IS NOT NULL THEN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___')) as item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as item_nane END) from sma_sale_items LEFT JOIN sma_product_variants ON sma_pr' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, (CASE WHEN sma_sale_items.option_id IS NOT NULL THEN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___') ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___')) as item_nane END) from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 12:56:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as item_nane ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_s' at line 3 - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, sma_sale_items.product_id, serial_no, (CASE WHEN sma_sale_items.option_id IS NOT NULL THEN GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, '__', sma_product_variants.name) SEPARATOR '___')) as item_nane ELSE GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___')) as item_nane END) from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 13:02:30 --> Query error: Unknown column 'sma_purchase_items.product_id' in 'field list' - Invalid query: SELECT DATE_FORMAT(sma_purchases.date, '%Y-%m-%d %T') as date, reference_no, sma_warehouses.name as wname, supplier, (FPI.item_nane) as iname, grand_total, paid, (grand_total-paid) as balance, sma_purchases.status, sma_purchases.id as id
FROM `sma_purchases`
LEFT JOIN ( SELECT sale_id, sma_purchase_items.product_id, serial_no, GROUP_CONCAT(CONCAT(sma_purchase_items.product_name, '__', sma_purchase_items.quantity, '__', (CASE WHEN sma_purchase_items.option_id IS NOT NULL THEN sma_product_variants.name ELSE '' END)) SEPARATOR '___') AS item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_purchase_items.option_id  GROUP BY sma_purchase_items.purchase_id ) FPI ON `FPI`.`purchase_id`=`sma_purchases`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_purchases`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 13:04:20 --> Query error: Unknown column 'purchase_id' in 'field list' - Invalid query: SELECT DATE_FORMAT(sma_purchases.date, '%Y-%m-%d %T') as date, reference_no, sma_warehouses.name as wname, supplier, (FPI.item_nane) as iname, grand_total, paid, (grand_total-paid) as balance, sma_purchases.status, sma_purchases.id as id
FROM `sma_purchases`
LEFT JOIN ( SELECT purchase_id, sma_purchase_items.product_id, serial_no, GROUP_CONCAT(CONCAT(sma_purchase_items.product_name, '__', sma_purchase_items.quantity, '__', (CASE WHEN sma_purchase_items.option_id IS NOT NULL THEN sma_product_variants.name ELSE '' END)) SEPARATOR '___') AS item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_purchase_items.option_id  GROUP BY sma_purchase_items.purchase_id ) FPI ON `FPI`.`purchase_id`=`sma_purchases`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_purchases`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 13:04:42 --> Query error: Unknown column 'serial_no' in 'field list' - Invalid query: SELECT DATE_FORMAT(sma_purchases.date, '%Y-%m-%d %T') as date, reference_no, sma_warehouses.name as wname, supplier, (FPI.item_nane) as iname, grand_total, paid, (grand_total-paid) as balance, sma_purchases.status, sma_purchases.id as id
FROM `sma_purchases`
LEFT JOIN ( SELECT purchase_id, sma_purchase_items.product_id, serial_no, GROUP_CONCAT(CONCAT(sma_purchase_items.product_name, '__', sma_purchase_items.quantity, '__', (CASE WHEN sma_purchase_items.option_id IS NOT NULL THEN sma_product_variants.name ELSE '' END)) SEPARATOR '___') AS item_nane from sma_purchase_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_purchase_items.option_id  GROUP BY sma_purchase_items.purchase_id ) FPI ON `FPI`.`purchase_id`=`sma_purchases`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_purchases`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 13:13:12 --> Query error: Unknown column 'purchase_id' in 'field list' - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT purchase_id, sma_sale_items.product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity, (CASE WHEN sma_sale_items.option_id IS NOT NULL THEN CONCAT('__',sma_product_variants.name) ELSE '' END)) SEPARATOR '___') AS item_nane from sma_sale_items LEFT JOIN sma_product_variants ON sma_product_variants.id = sma_sale_items.option_id  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2023-03-20 13:17:06 --> Could not find the language line " note"
ERROR - 2023-03-20 13:17:06 --> Could not find the language line "hide_form"
ERROR - 2023-03-20 13:17:06 --> Could not find the language line "show_form"
ERROR - 2023-03-20 13:17:42 --> Could not find the language line " note"
ERROR - 2023-03-20 13:17:42 --> Could not find the language line "hide_form"
ERROR - 2023-03-20 13:17:42 --> Could not find the language line "show_form"
ERROR - 2023-03-20 13:20:30 --> Could not find the language line " note"
ERROR - 2023-03-20 13:20:30 --> Could not find the language line "hide_form"
ERROR - 2023-03-20 13:20:30 --> Could not find the language line "show_form"
ERROR - 2023-03-20 13:21:27 --> Could not find the language line " note"
ERROR - 2023-03-20 13:21:27 --> Could not find the language line "hide_form"
ERROR - 2023-03-20 13:21:27 --> Could not find the language line "show_form"
