<?php
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(12);
$listInteger->add(23);
$listInteger->add(34);

echo $listInteger->get(1);