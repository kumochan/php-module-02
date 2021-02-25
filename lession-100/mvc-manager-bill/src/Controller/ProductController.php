<?php

namespace App\Controller;

use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        // Lấy tất hoá đơn từ DB ra.
        $products = $this->productModel->getAll();

        include "src/View/product/product-list.php";
    }

    public function create_product()
    {
        //$name, $category_id, $price_input, $price_sale, $expried_date, $packed_type
        //('Cà phê Buôn Mê Thuật', 1, 50000, 180000, '2021-02-12', 'Túi');
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/product/product-show-create.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['name'];
            $category_id = $_REQUEST['category_id'];
            $price_input = $_REQUEST['price_input'];
            $price_sale = $_REQUEST['price_sale'];
            $expried_date = $_REQUEST['expried_date'];
            $packed_type = $_REQUEST['packed_type'];
            $result = $this->productModel->create_product($name, $category_id, $price_input, $price_sale, $expried_date, $packed_type);
            $products = $this->productModel->getAll();
            //var_dump($products);
            header("location:index.php?page=product-list");
        }
        

    }
}
