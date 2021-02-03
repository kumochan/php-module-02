<?php
require ('ListNote.php');
use PHPUnit\Framework\TestCase;

final class ListNodeTest extends TestCase
{
	public function testRemove()
	{
		$expected = 3;

		$bookTitles = new LinkedList();
		$bookTitles->insert("Introduction to Algorithm");
		$bookTitles->insert("Introduction to PHP and Data structures");
		$bookTitles->insert("Programming Intelligence");
		$bookTitles->insert("test");

		$bookTitles->deleteFirst();
		$total = $bookTitles->_totalNode;
		var_dump("test");
		var_dump($total);
		
		$this->assertEquals($expected, $total);
	}
}
