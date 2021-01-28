
<?php

$computer = array("Asus","DELL","Thinkpad","HP","Macbook");

function display($computerSearch){
	echo "<ul>";
	for ($row = 0; $row < 5; $row++) {
		echo "<li>".$computerSearch[$row]."</li>";
	}
	echo "</ul>";
}

function checkComputer($search, $computer){
	var_dump($computer);
	if ($search != null) {
		return array_search($search, $computer);
	}
}

display($computer);

// $carsSearch = [];
// function filterComputer($txtSearch, $cars, $carsSearch) {
// 	foreach ($cars as $key => $value) {
// 		//var_dump($key);
		
// 		var_dump($value);
// 		$pos = strpos($value, $txtSearch);
// 		var_dump($pos);
// 		if ($pos) {
// 			$carsSearch.push($value);
// 		}
// 		var_dump("<pre>");
// 	}	
// 	if (empty($carsSearch)) {
// 		return $carsSearch;
// 	} else {
// 		return $cars;
// 	}
// }

