
CREATE PROCEDURE proc_create_product (
    IN product_code VARCHAR(25),
  IN product_name VARCHAR(50),
  IN list_price DECIMAL(19,4),
  IN discontinue TINYINT,
  IN standard_cost DECIMAL(19,4),
  IN category VARCHAR(50),
  IN supplier_ids LONGTEXT
)
    INSERT INTO products (product_code, product_name, list_price, discontinued, standard_cost, category, supplier_ids) 
                VALUES (product_code, product_name, list_price, discontinued, standard_cost, category, supplier_ids);

               CALL proc_create_product('JPN-JKUY34', 'This my test', 20, 0, 30, 'Oil', 4);

              
-- $product_code, , , , , , 

DELIMITER //
CREATE PROCEDURE CALL_PROC(Id int,Name varchar(40))
   BEGIN
   SELECT CONCAT('You have entered the Id which is=',Id);
   SELECT CONCAT('You have entered the Name which is=',Name);
   END
//
Query OK, 0 rows affected (0.21 sec)
DELIMITER ;


-- Tai sao nen dung (99%) Index
    -- Tang toc do truy xuat du lieu == Nang cao hieu suat truy xuat  du lieu
    -- NHANH
select year(orderDate) as year, sum(quantityOrdered * priceEach) as total from orders inner join orderdetails on orders.orderNumber = orderdetails.orderNumber where status = 'shipped' group by year having year > 2003

-- Tại sao cần tạo VIEW?

-- ### của mọi người
-- # Nhóm dữ liệu của nhiều bảng.
-- # Lấy thông tin cần thiết ở các bảng khác nhau.
-- # Truy vấn tìm kiếm thông tin dữ liệu của web.

-- ### của james
-- # Hạn chế truy cập dữ liệu
-- # Truy cập dữ liệu mà người dùng được phép truy cập
-- # Cập nhật dữ liệu mà đc phép.

CREATE VIEW v_products_categories  AS
Select c.name as cateogry_name, p.name as product_name, p.price_input
FROM  categories c INNER JOIN products p ON c.category_id = p.category_id;

SELECT * from v_products_categories;

Select c.name as cateogry_name, p.name as product_name, p.price_input
FROM  categories c INNER JOIN products p ON c.category_id = p.category_id;

ALTER VIEW v_categories_count AS
select categories.name, count(products.product_id) as total 
FROM products INNER JOIN categories ON products.category_id = categories.category_id 
GROUP by categories.name

SELECT * FROM v_categories_count;

-- Procedure
-- DELIMITER //
CREATE PROCEDURE proc_categories_count(category_total int)
   BEGIN
    SELECT * FROM v_categories_count where total > category_total;
   END
-- //
-- DELIMITER ;

CALL proc_categories_count (5);