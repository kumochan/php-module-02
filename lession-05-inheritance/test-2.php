<?php
interface a
{
    const z = 'Interface constant';
}

// Prints: Interface constant
echo a::z;
echo "<br />";

class b implements a
{
	// const b = 'Class constant b';
	// echo b;
	// $c = b;
	//echo z;
}

// This works!!!
class c extends b
{
    const z = 'Class constant';
}

echo c::z;
