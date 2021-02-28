Create table

create table book (
  id int not null auto_increment,
  isbn VARCHAR(20) not null,
  b_no VARCHAR(20) not null,
  b_name VARCHAR(20) not null,
  qty INT not null,
  price decimal(8, 2) not null,
  primary key(id)
);

Create SP

DELIMITER //

CREATE PROCEDURE proc_book (
  IN isbn VARCHAR(20),
  IN no VARCHAR(20),
  IN name VARCHAR(20),
  IN qty INT,
  IN price DECIMAL(8,2)
)
BEGIN
  DECLARE i INT DEFAULT 0;
  WHILE i < qty DO
  INSERT INTO book (isbn, b_no, b_name, qty, price) VALUES (isbn, no, name, qty, price);
  SET i = i + 1;
  END WHILE;
END;

DELIMITER ;

Test SP

call proc_book('978-3-16-148410-0', '1', 'name1', 2, 10.00);
Data in table

+----+-------------------+------+--------+-----+-------+
| id | isbn              | b_no | b_name | qty | price |
+----+-------------------+------+--------+-----+-------+
|  1 | 978-3-16-148410-0 | 1    | name1  |   2 | 10.00 |
|  2 | 978-3-16-148410-0 | 1    | name1  |   2 | 10.00 |
+----+-------------------+------+--------+-----+-------+
Call SP from PHP

Use mysqli instead of mysql

<?php 
// input data should be filterd to prevent SQL injection etc.
$isbn  = $_POST["isbn"];
$bno   = $_POST["b_no"];
$bname = $_POST["b_name"];
$qty   = $_POST["qty"];
$price = $_POST["price"];

//connect to database
$connection = mysqli_connect("hostname", "user", "password", "db", "port");

//run the store proc
$sql = "CALL proc_book('" . $isbn . "', '" . $bno . "', '" . $bname . "', " . $qty . ", " . $price . ")";
$result = mysqli_query($connection, $sql) or die("Query fail: " . mysqli_error());
?>
Reference

CREATE PROCEDURE
Stored Procedures
MySQL WHILE
How to call a MySQL stored procedure from within PHP code?