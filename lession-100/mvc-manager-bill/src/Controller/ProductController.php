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

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/product/product-show-create.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_code = $_REQUEST['product_code'];
            $product_name = $_REQUEST['product_name'];
            $list_price = $_REQUEST['list_price'];
            $discontinued = $_REQUEST['discontinued'];
            $standard_cost = $_REQUEST['standard_cost'];
            $category = $_REQUEST['category'];
            $supplier_ids = $_REQUEST['supplier_ids'];

            $result = $this->productModel->create_product(
                $product_code,
                $product_name,
                $list_price,
                $discontinued,
                $standard_cost,
                $category,
                $supplier_ids
            );
            $this->redirectToList();
        }
    }

    public function details()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $isNumberic = is_numeric( (int)isset($_REQUEST['id']));
            $product_id = isset($_REQUEST['id']);
            if ( $product_id && $isNumberic) {
                $product = $this->productModel->findById($product_id);
                $supplier_names = $this->productModel->getDistinceSupplier();
                include "src/View/product/product-details.php";
            } else {
                $this->redirectToList();
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update status

            // Update gia

            // Update so luong san pham

            // Update abc...

            //header("location:index.php?page=product-list");
        }
    }

    private function redirectToList()
    {
        $products = $this->productModel->getAll();
        header("location:index.php?page=product-list");
    }
}
