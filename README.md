
 <!-- --------------------   run  ---------------------------------------------->
- เปิดโปรแกรม
php artisan serve

- เพิ่มตารางใหม่ 
```bash
php artisan migrate
```

- ลบตาราง รีเซตตาราง  
```bash
php artisan migrate:reset
```

- สร้าง model
```bash
php artisan make:model admin
```

- สร้างไฟล์ migration
```bash
php artisan make:migration admin
```

- create customer 
```bash
php artisan make:migration create_customer_table --create=customers
```

- create category 
```bash
php artisan make:migration create_categories_table --create=categories
```

- create contents
```bash
php artisan make:migration create_contents_table --create=contents
```

- create products
```bash
php artisan make:migration create_products_table --create=products 
```

- create manufacturings
```bash
php artisan make:migration create_manufacturings_table --create=manufacturings
```

- create orders
```bash
php artisan make:migration create_orders_table --create=orders
```

- create sellers
```bash
php artisan make:migration create_sellers_table --create=sellers
```