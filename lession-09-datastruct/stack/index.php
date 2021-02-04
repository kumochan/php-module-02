<?php
require('ReadingList.php');

$myBooks = new ReadingList();

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords'); 
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');

echo "<pre>";
print_r($myBooks);
echo "<pre>";
var_dump($myBooks);
echo "<br />";


// remove 
echo $myBooks->pop(); // outputs 'A Game of Thrones'
echo $myBooks->pop(); // outputs 'A Clash of Kings'
echo $myBooks->pop(); // outputs 'A Storm of Swords'

// see top
echo $myBooks->top(); // outputs 'A Feast for Crows'

// remove
echo $myBooks->pop(); // outputs 'A Feast for Crows'

// add new
$myBooks->push('The Armageddon Rag');
echo $myBooks->pop(); // outputs 'The Armageddon Rag'