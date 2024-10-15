<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-16 11:42:53 --> Query error: Unknown column 'fa' in 'field list' - Invalid query: SELECT fa, SUM( COALESCE( purchase_unit_cost, 0 ) * quantity ) AS cost, SUM( COALESCE( sale_unit_price, 0 ) * quantity ) AS sales, SUM( COALESCE( purchase_net_unit_cost, 0 ) * quantity ) AS net_cost, SUM( COALESCE( sale_net_unit_price, 0 ) * quantity ) AS net_sales
FROM `sma_costing`
WHERE `sma_costing`.`date` = '2022-11-16'
