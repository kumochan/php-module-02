<?php
require('Queue.php');

$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue('aaaaaaaa');
$queue->enqueue('bbbbbbbb');
// $queue->enqueue(3);
// $queue->enqueue(4);
// $queue->enqueue("End");

echo "<pre >";
var_dump($queue);

echo "=====";
$queue->dequeue();

echo "<pre >";
var_dump($queue);


while(!$queue->isEmpty()){
  echo $queue->dequeue()."\n";
}