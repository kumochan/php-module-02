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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" data-new-gr-c-s-check-loaded="14.997.0" data-gr-ext-installed="">
    <!-- <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?page=list-bill">Danh sach hoa don</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=product-list">Danh sach san pham</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=dashboard">Show profits</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header> -->

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