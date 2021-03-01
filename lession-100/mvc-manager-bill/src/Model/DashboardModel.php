<?php

namespace App\Model;

class DashboardModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function showProfit()
    {
        $sql = "select year(orderDate) as year, sum(quantityOrdered * priceEach) as total from orders inner join orderdetails on orders.orderNumber = orderdetails.orderNumber where status = 'shipped' group by year having year > 2003";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
