<?php

namespace App\Model;
use PDO;
class ProductModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function findById($id)
    {
        $sql = "Select * FROM v_products_suppliers WHERE id = :id";
        //$sql = "Select * from orders where orderNumber = :orderNumber ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getDistinceSupplier()
    {
        $sql = "Select DISTINCT company FROM suppliers";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM v_products_suppliers order by id DESC";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function create_product($product_code, $product_name, 
                                    $list_price, $discontinued, $standard_cost, $category, $supplier_ids)
    {
        $sql = 'INSERT INTO products (product_code, product_name, list_price, discontinued, standard_cost, 
                                category, supplier_ids) 
                VALUES (:product_code, :product_name, :list_price, :discontinued, :standard_cost, :category, :supplier_ids)';

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":product_code", $product_code);
        $stmt->bindParam(":product_name", $product_name);
        $stmt->bindParam(":list_price", $list_price);
        $stmt->bindParam(":discontinued", $discontinued);
        $stmt->bindParam(":standard_cost", $standard_cost);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":supplier_ids", $supplier_ids);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function edit_product()
    {
        //UPDATE products set name = 'Tra Dao Cam Sa - vi dua hau' where product_id  = 9;
    }
}
