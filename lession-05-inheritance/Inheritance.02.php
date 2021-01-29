<?php
class Person
{
  final public function showMessage() {
    echo "Xin chao";
  }
  
}


class Employee extends Person
{
  public function showMessage()
  {
    parent::showMessage();
  }
  
}

$employee = new  Employee();
$employee->showMessage();