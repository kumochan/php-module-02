CREATE DATABASE coffee_shop;

CREATE TABLE products (
	product_id INT PRIMARY KEY AUTO_INCREMENT,
	name varchar (500),
	type varchar (50),
	price_input float,
	price_sale	float,
	expried_date datetime,
	packed_type varchar (200),
	publish		varchar (200)
);

CREATE TABLE publishs (
	publish_id INT PRIMARY KEY AUTO_INCREMENT,
	name varchar (500),
	address varchar (500),
	phone varchar (11),
	email varchar (100)
);

-- quan he cua publish va product la n-n
-- can bang trung gian de noi 2 bang product va publish

CREATE TABLE publishs_products(
		publish_id INT,
		product_id INT,
		PRIMARY KEY (publish_id, product_id)
);

-- thua cot publish cua bang product
-- can xoa cot di cho dat chuan 3NF
ALTER TABLE products DROP COLUMN publish;

-- can bang luu tru phan loai san pham
CREATE TABLE categories (
	category_id INT PRIMARY KEY AUTO_INCREMENT,
	name varchar (200),
	style varchar (500), -- cafe trong 5000m, 8000m
	total_product varchar (100)
);

-- moi quan he giua products va categories la gi (1-n)
ALTER TABLE products CHANGE COLUMN type category_id INT;

ALTER TABLE products ADD FOREIGN KEY (category_id) REFERENCES categories(category_id);


-- INSERT dữ liệu
USE coffee_shop;

INSERT INTO categories (name,`style`, total_product)
	VALUES ('coffee', 'Robusta', '15kg')
INSERT INTO categories (name,`style`, total_product)
	VALUES ('coffee Abrica', 'Rang xay tổng hợp', '20kg')
-- GO;
INSERT INTO categories (name,`style`, total_product)
	VALUES ('hoa quả chanh','Chanh ĐÀO', '1 rổ')
INSERT INTO categories (name,`style`, total_product)
	VALUES ('hoa quả dưa hấu','Sinh tố', '2 quả')
-- GO; -- batch
	
INSERT INTO products (name, category_id, price_input, price_sale, expried_date, packed_type)
	VALUES ('Cà phê Buôn Mê Thuật', 1, 50000, 180000, '2021-02-12', 'Túi');
	
INSERT INTO products (name, category_id, price_input, price_sale, expried_date, packed_type) VALUES ('Cà phê Buôn Mê Thuật - Chồn', 1, 80000, 250000, '2021-02-12', 'Kg')
INSERT INTO products (name, category_id, price_input, price_sale, expried_date, packed_type) VALUES ('Cà phê ĐakLak - Chồn', 2, 70000, 250000, '2021-02-12', 'Kg')
INSERT INTO products (name, category_id, price_input, price_sale, expried_date, packed_type) VALUES ('Cà phê ĐakLak - Rang Xay', 2, 70000, 250000, '2021-02-12', 'Kg')


INSERT INTO publishs (name, address, phone, email) 
	VALUES ('Đào Phạm Co.LTD', 'Tổ 5, Ngách 19/2, Số nhà 245', '0999999999', 'daodungdinh@gmail.com'),
	 ('Thắng Cá Chép', 'Long Biên Hà Nội', '0168987654', 'cachephoarong@gmail.com')
	 
INSERT INTO publishs_products (publish_id, product_id) 
	VALUES (1, 1), (1,5)

Select * from publishs as p where publish_id = 1;
SELECT * FROM products p where p.category_id = 1;

ALTER TABLE publishs_products ADD FOREIGN KEY (product_id) REFERENCES products(product_id);
ALTER TABLE publishs_products ADD FOREIGN KEY (publish_id) REFERENCES publishs(publish_id);


