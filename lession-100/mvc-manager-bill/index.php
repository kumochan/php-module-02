<?php
ob_start();

use App\Controller\BillController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$billController = new BillController();
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