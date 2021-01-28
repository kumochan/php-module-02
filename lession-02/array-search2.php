<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="computer" size="30"  placeholder="computer" />
        <input type="submit" value="Tìm kiếm"/>
    </div>
</form>
<?php
	include('list.php');
?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $computer = $_POST["computer"];
	    //filterComputer($computer, $cars, $carsSearch);
	    // $computer =checkComputer($computer, $computer);
	    displayCar($computers);
	    // echo "<h2>Dữ liệu bạn tìm kiếm có tồn tại trong hệ thống <span style='color:red'>" .$computer. "</span></h2>";
	} else {
		// echo "<h2>Dữ liệu bạn tìm kiếm có tồn tại trong hệ thống <span style='color:red'>" .$computer. "</span></h2>";
	}
?>