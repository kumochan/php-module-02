<?php

namespace App\Models;
//require ('db.json');
class DBConnection
{
    public function readDataFromJson()
    {
        $customers = $this->readFile();
        $customers_json = json_decode($customers, true);
        return $customers_json;
    }

    public function getCustomerByName($name)
    {
        return $this->readDataFromJson()[$name];
    }

    public function readFile()
    {
        $myfile = file_get_contents(__DIR__ . '/db.json');
        return $myfile;
    }
}
