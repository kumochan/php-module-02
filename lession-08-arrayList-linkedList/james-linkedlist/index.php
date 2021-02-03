<?php 
require ('ListNote.php');
$BookTitles = new LinkedList();

$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->insert("test");
$BookTitles->display();

echo "<br /> _totalNode: "; echo $BookTitles->_totalNode;

echo "<br /> removeFirst <br />";
$BookTitles->deleteFirst();
$BookTitles->display();


echo "<br /> search <br />";
$BookTitles->search("test");
$BookTitles->display();