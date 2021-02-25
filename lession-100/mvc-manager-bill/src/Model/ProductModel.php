<?php

namespace App\Model;

class ProductModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function create_product($name, $category_id, $price_input, $price_sale, $expried_date, $packed_type)
    {
        $sql = 'INSERT INTO products (name, category_id, price_input, price_sale, expried_date, packed_type) 
                VALUES (:name, :category_id, :price_input, :price_sale, :expried_date, :packed_type)';

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->bindParam(":price_input", $price_input);
        $stmt->bindParam(":price_sale", $price_sale);
        $stmt->bindParam(":expried_date", $expried_date);
        $stmt->bindParam(":packed_type", $packed_type);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function edit_product()
    {
        //UPDATE products set name = 'Tra Dao Cam Sa - vi dua hau' where product_id  = 9;
    }
}
