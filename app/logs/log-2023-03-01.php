<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-01 13:41:51 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT sma_brands.*, (SELECT quantity FROM sma_products WHERE sma_products.brand = sma_brands.id) AS product_count
FROM `sma_brands`
HAVING `product_count` > 0
ORDER BY `name`
ERROR - 2023-03-01 13:43:19 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT sma_brands.*, (SELECT quantity as product_count FROM sma_products WHERE sma_products.brand = sma_brands.id) AS product_count
FROM `sma_brands`
HAVING `product_count` > 0
ORDER BY `name`
ERROR - 2023-03-01 13:46:49 --> Severity: error --> Exception: Too few arguments to function CI_DB_query_builder::where(), 0 passed in /Users/saleem/Sites/sma/app/models/shop/Shop_model.php on line 108 and at least 1 expected /Users/saleem/Sites/sma/system/database/DB_query_builder.php 622
ERROR - 2023-03-01 13:47:00 --> Query error: Unknown column 'products.quantity' in 'field list' - Invalid query: SELECT sma_brands.*, SUM(products.quantity) AS product_count
FROM `sma_brands`
LEFT JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
HAVING `product_count` > 0
ORDER BY `name`
ERROR - 2023-03-01 13:50:19 --> Query error: Unknown column 'product_count' in 'where clause' - Invalid query: SELECT sma_brands.*, SUM(sma_products.quantity) AS product_count
FROM `sma_brands`
LEFT JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
WHERE `product_count` > 0
GROUP BY `sma_brands`.`id`
ORDER BY `name`
ERROR - 2023-03-01 14:01:20 --> Severity: Warning --> Undefined array key "return_purchase_ref" /Users/saleem/Sites/sma/app/models/admin/Purchases_model.php 66
ERROR - 2023-03-01 14:06:00 --> Query error: Unknown column 'sma_warehouses.id' in 'on clause' - Invalid query: SELECT sma_brands.*, SUM(sma_warehouses_products.quantity) AS warehouses_products_quantity
FROM `sma_brands`
LEFT JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
GROUP BY `sma_brands`.`id`
HAVING `warehouses_products_quantity` > 0
ORDER BY `name`
ERROR - 2023-03-01 14:36:46 --> Could not find the language line "logout_successful"
ERROR - 2023-03-01 14:36:46 --> Could not find the language line "logout_successful"
