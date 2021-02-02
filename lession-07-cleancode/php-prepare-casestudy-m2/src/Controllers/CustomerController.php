<?php
namespace App\Controllers;
require('../vendor/autoload.php');
use App\Models\DBConnection;

class CustomerController
{
    public function index()
    {
        $dbConnect = new DBConnection();
        $customers = $dbConnect->readDataFromJson();
//        echo "<pre>";
//        print_r($customers);
//        die();
        include  'View/list.php';
    }

    public function getByName($name)
    {
        $dbConnect = new DBConnection();
        $customer = $dbConnect->getCustomerByName($name);
        include  'View/customer.php';
    }

}