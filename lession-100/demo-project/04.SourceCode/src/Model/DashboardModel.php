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
        //$sql = "select * from v_categories_count";
        $sql = "call proc_categories_count(:category_total);";
        $total = 3;
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":category_total", $total);
        $stmt->execute();
        return $stmt->fetchAll();

        // $stmt = $this->database->prepare($sql);
        // $stmt->execute();
        // return $stmt->fetchAll();
    }
}
