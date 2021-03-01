<?Php
//***************************************
//**************** thaotm ***************
//***************************************


?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>

<head>
	<title>Yearly Calendar</title>
	<link rel="canonical" href="#" />
	<style type="text/css">
		table.main {
			width: 300px;
			border: 1px solid black;
			background-color: #9dffff;
		}

		table.main td {
			vertical-align: top;
			font-family: verdana, arial, helvetica, sans-serif;
			font-size: 11px;
		}

		table.main th {
			border-width: 1px 1px 1px 1px;
			padding: 0px 0px 0px 0px;
			background-color: #ccb4cd;
		}

		table.main a {
			TEXT-DECORATION: none;
		}

		table,
		td {
			border: 1px solid #ffffff
		}
	</style>
</head>

<body>
	<?Php
	$year = 2021; // change this to another year 2017 or  2018 or 2019 Or ...
	if (strlen($year) != 4) {
		$year = date('Y'); // Current Year is taken if year is not set in above line. 
	}


	$row = 4;  //to set the number of rows and columns in yearly calendar ( 1 to 12 )
	///// No Edit below //////
	$row_no = 0; // 
	echo "<table class='main'>"; // Outer table 
	////// Starting of for loop/// 
	///  Creating calendars for each month by looping 12 times ///
	for ($m = 1; $m <= 12; $m++) {
		$month = date($m);  // Month 
		$dateObject = DateTime::createFromFormat('!m', $m);
		$monthName = $dateObject->format('F'); // Month name to display at top



		$d = 2; // To Finds today's date
		//$no_of_days = date('t',mktime(0,0,0,$month,1,$year)); //This is to calculate number of days in a month
		$no_of_days = cal_days_in_month(CAL_GREGORIAN, $month, $year); //calculate number of days in a month

		$j = date('w', mktime(0, 0, 0, $month, 1, $year)); // This will calculate the week day of the first day of the month
		//echo $j;// Sunday=0 , Saturday =6
		//// if starting day of the week is Monday then add following two lines ///
		$j = $j - 1;
		if ($j < 0) {
			$j = 6;
		}  // if it is Sunday //
		//// end of if starting day of the week is Monday ////


		$adj = str_repeat("<td bgcolor='#ffff00'>*&nbsp;</td>", $j);  // Blank starting cells of the calendar 
		$blank_at_end = 42 - $j - $no_of_days; // Days left after the last day of the month
		if ($blank_at_end >= 7) {
			$blank_at_end = $blank_at_end - 7;
		}
		$adj2 = str_repeat("<td bgcolor='#ffff00'>*&nbsp;</td>", $blank_at_end); // Blank ending cells of the calendar

		/// Starting of top line showing year and month to select ///////////////
		if (($row_no % $row) == 0) {
			echo "</tr><tr>";
		}

		echo "<td><table class='main' ><td colspan=6 align=center> $monthName $year


 </td><td align='center'><a href=# onClick='self.close();'>X</a></td></tr>";
		//echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>";
		echo "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr><tr>";
		////// End of the top line showing name of the days of the week//////////

		//////// Starting of the days//////////
		for ($i = 1; $i <= $no_of_days; $i++) {
			$pv = "'$month'" . "," . "'$i'" . "," . "'$year'";
			echo $adj . "<td><a href='#' onclick=\"post_value($pv);\">$i</a>"; // This will display the date inside the calendar cell
			echo " </td>";
			$adj = '';
			$j++;
			if ($j == 7) {
				echo "</tr><tr>"; // start a new row
				$j = 0;
			}
		}
		echo $adj2;   // Blank the balance cell of calendar at the end 

		echo "</tr></table></td>";

		$row_no = $row_no + 1;
	} // end of for loop for 12 months
	echo "</table>";
	?>

</body>

</html>