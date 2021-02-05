<?php
namespace App\Controller;

use App\Model\BillModel;

class BillController
{
    protected $billModel;

    public function __construct()
    {
        $this->billModel = new BillModel();
    }

    public function index()
    {
        // Lấy tất hoá đơn từ DB ra.
        $bills = $this->billModel->getAll();
        
        include "src/View/bill/list.php";
    }

    public function show($id)
    {
        $bill = $this->billModel->findById($id);
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
            $status = isset($_REQUEST['status']) ? $_REQUEST['status'] : '';

            if ($id != 0 && !empty($status))
            {
                $this->billModel->updateStatus($id, $status);
                header("location:index.php?page=list-bill");
            }
        }

        include "src/View/bill/detail.php";
    }

    public function search()
    {
        $product_name = "";
        $order_code = "";
        $price = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $product_name = $_REQUEST['product_name'];
            $order_code = $_REQUEST['order_code'];
            $price = $_REQUEST['price'];
        }
        $bills = $this->billModel->find($product_name, $order_code, $price);

        include "src/View/bill/search.php";
    }


}