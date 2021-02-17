<?php

class RecursionSearch {

	public static function binarySearch(array $numbers, int $needle, int $low, int $high) { 

		if ($high < $low) { 
			return FALSE; 
		} 

		$mid = (int) (($low + $high) / 2); 

		if ($numbers[$mid] > $needle) { 
			return self::binarySearch($numbers, $needle, $low, $mid - 1); 
		} else if ($numbers[$mid] < $needle) { 
			return self::binarySearch($numbers, $needle, $mid + 1, $high); 
		} else { 
			return TRUE;
		} 
	}

}