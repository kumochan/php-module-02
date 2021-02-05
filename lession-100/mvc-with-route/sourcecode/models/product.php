<?php
class Product
{
  public $productId;
  public $productName;
  public $quantityPerUnit;

  function __construct($productId, $productName, $quantityPerUnit)
  {
    $this->productId = $productId;
    $this->productName = $productName;
    $this->quantityPerUnit = $quantityPerUnit;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM products');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Product($item['ProductID'], $item['ProductName'], $item['QuantityPerUnit']);
    }

    return $list;
  }

  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM products WHERE ProductID = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['ProductID'])) {
      return new Product($item['ProductID'], $item['ProductName'], $item['QuantityPerUnit']);
    }
    return null;
  }

}