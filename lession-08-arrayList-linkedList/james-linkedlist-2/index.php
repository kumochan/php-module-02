<?php

include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
echo "<pre>";
var_dump($linkedList);
// $totalNodes = $linkedList->totalNodes();
// $linkData = $linkedList->readList();

// echo $totalNodes . "<br />";
// echo implode ('-' , $linkData); 