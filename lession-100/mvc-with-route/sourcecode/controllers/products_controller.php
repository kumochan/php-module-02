<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');

class ProductsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'products';
	}

	public function index()
	{
		$products = Product::all();
		$data = array('products' => $products);
		$this->render('index', $data);
	}

	public function showPost()
	{
		$product = Product::find($_GET['id']);
		$data = array('product' => $product);
		// var_dump($data);die();
		$this->render('show', $data);
	}

	public function editPost()
	{
		$product = Product::find($_GET['id']);
		$data = array('product' => $product);
		$this->render('edit', $data);
	}

}