AddSubcategoryIdToProductsTable: alter table `products` add `subcategory_id` bigint unsigned null
AddSubcategoryIdToProductsTable: alter table `products` add constraint `products_subcategory_id_foreign` foreign key (`subcategory_id`) references `subcategories` (`id`) on delete cascade
