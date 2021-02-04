<?php

require('BinaryTree.php');

$binaryTree = new BinaryTree();
$binaryTree->insert(100);
$binaryTree->insert(200);
$binaryTree->insert(50);
$binaryTree->insert(500);
$binaryTree->insert(20);
$binaryTree->insert(20);

echo "<pre >";
var_dump($binaryTree);

