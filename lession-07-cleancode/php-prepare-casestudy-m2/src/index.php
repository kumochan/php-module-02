<?php
require '../vendor/autoload.php';
use App\Controllers\CustomerController as CustomerController;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>

<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">
            Customer  C1220I1</a>
            <a class="navbar-brand" href="index.php?page=getbyname&name=Nam">
              Thanh Lãnh</a>
    </div>
    <?php
    $controller = new CustomerController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
    switch ($page){
        case 'index':
            $controller->index();
            break;
        case 'getbyname':
            $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : 0;
            $controller->getbyname($name);
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>
</body>
</html>