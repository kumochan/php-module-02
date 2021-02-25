<?php
ob_start();

use App\Controller\BillController;
use App\Controller\ProductController;
use App\Controller\DashboardController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$billController = new BillController();
$productController = new ProductController();
$dashboardControll = new DashboardController();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <meta http-equiv="refresh" content="0"> -->

    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
    <a href="index.php?page=list-bill">Danh sach hoa don</a>
    <br />
    <a href="index.php?page=product-list">Danh sach san pham</a>
    <br />
    <a href="index.php?page=dashboard">Show profits</a>
    <?php
    switch ($page) {
            // bill
        case 'list-bill':
            $billController->index();
            break;
        case 'show-bill':
            $id = $_REQUEST['id'];
            $billController->show($id);
            break;

            // Neu o trang index co bien page va gia tri bang product-list thi goi vao product controller, ham index
        case 'product-list':
            $productController->index();
            break;
        case 'product-create':
            $productController->create();
            break;
        case 'product-details':
            $productController->details();
            break;

        case 'dashboard':
            $dashboardControll->showProfit();
            break;

        case 'search-bill':
            $product_name = isset($_REQUEST['product_name']) ? $_REQUEST['product_name'] : "";
            $oder_code = isset($_REQUEST['order_code']) ? $_REQUEST['order_code'] : "";
            $price = isset($_REQUEST['price']) ? $_REQUEST['price'] : "";
            $billController->search($product_name, $oder_code, $price);
            break;
    }
    ob_end_flush();
    ?>
</body>

</html>