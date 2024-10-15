<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-04 10:15:57 --> Query error: Unknown column 'sma_products.cod' in 'field list' - Invalid query: SELECT sma_products.cod, sma_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, sma_products.id as id
FROM `sma_products`
LEFT JOIN ( SELECT si.product_id, s.date as date, s.created_by as created_by, SUM( si.quantity ) soldQty, SUM( si.quantity * si.sale_unit_price ) totalSale from sma_costing si JOIN sma_sales s on s.id = si.sale_id  GROUP BY si.product_id ) PSales ON `sma_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, p.date as date, p.created_by as created_by, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from sma_purchase_items pi LEFT JOIN sma_purchases p on p.id = pi.purchase_id WHERE pi.status = 'received'  GROUP BY pi.product_id ) PCosts ON `sma_products`.`id` = `PCosts`.`product_id`
WHERE `sma_products`.`type` != 'combo'
GROUP BY `sma_products`.`code`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2022-07-04 10:16:04 --> Query error: Unknown column 'sma_products.cod' in 'field list' - Invalid query: SELECT sma_products.cod, sma_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, sma_products.id as id
FROM `sma_products`
LEFT JOIN ( SELECT si.product_id, s.date as date, s.created_by as created_by, SUM( si.quantity ) soldQty, SUM( si.quantity * si.sale_unit_price ) totalSale from sma_costing si JOIN sma_sales s on s.id = si.sale_id  GROUP BY si.product_id ) PSales ON `sma_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, p.date as date, p.created_by as created_by, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from sma_purchase_items pi LEFT JOIN sma_purchases p on p.id = pi.purchase_id WHERE pi.status = 'received'  GROUP BY pi.product_id ) PCosts ON `sma_products`.`id` = `PCosts`.`product_id`
WHERE `sma_products`.`type` != 'combo'
GROUP BY `sma_products`.`code`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2022-07-04 10:20:31 --> Query error: Unknown column 'sma_brands.d' in 'field list' - Invalid query: SELECT sma_brands.d as id, sma_brands.name, SUM( COALESCE( PCosts.purchasedQty, 0 ) ) as PurchasedQty, SUM( COALESCE( PSales.soldQty, 0 ) ) as SoldQty, SUM( COALESCE( PCosts.totalPurchase, 0 ) ) as TotalPurchase, SUM( COALESCE( PSales.totalSale, 0 ) ) as TotalSales, (SUM( COALESCE( PSales.totalSale, 0 ) )- SUM( COALESCE( PCosts.totalPurchase, 0 ) ) ) as Profit
FROM `sma_brands`
LEFT JOIN ( SELECT sp.brand as brand, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from sma_products sp
                left JOIN sma_sale_items si ON sp.id = si.product_id
                left join sma_sales s ON s.id = si.sale_id  GROUP BY sp.brand ) PSales ON `sma_brands`.`id` = `PSales`.`brand`
LEFT JOIN ( SELECT pp.brand as brand, SUM( pi.quantity ) purchasedQty, SUM( pi.subtotal ) totalPurchase from sma_products pp
                left JOIN sma_purchase_items pi ON pp.id = pi.product_id
                left join sma_purchases p ON p.id = pi.purchase_id  GROUP BY pp.brand ) PCosts ON `sma_brands`.`id` = `PCosts`.`brand`
GROUP BY `sma_brands`.`id`, `sma_brands`.`name`, `PSales`.`SoldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`
ORDER BY `sma_brands`.`name` ASC
 LIMIT 10
ERROR - 2022-07-04 10:24:01 --> Could not find the language line "pole_display"
ERROR - 2022-07-04 10:24:18 --> Could not find the language line "pole_display"
