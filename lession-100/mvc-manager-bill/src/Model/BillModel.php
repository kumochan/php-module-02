<?php


namespace App\Model;


class BillModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM orders LIMIT 1,30";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $sql = "Select * from v_bill
                WHERE orderNumber = :id";
        //$sql = "Select * from orders where orderNumber = :orderNumber ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function find($product_name, $order_number, $price)
    {
        $sql = "select * from v_bill";

        if (!empty($product_name) || !empty($order_number) || !empty($price))
        {
            $sql = "select * from v_bill where productName = :product_name or orderNumber =:order_number or buyPrice =:price ";
        }

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":product_name", $product_name);
        $stmt->bindParam(":order_number", $order_number);
        $stmt->bindParam(":price", $price);
        $stmt->execute();
        return $stmt->fetchAll();
    }

//    public function totalPriceOrder($id)
//    {
//
//    }
//
    public function updateStatus($id, $status)
    {
        $sql = "update orders SET status =:status where orderNumber =:id ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}