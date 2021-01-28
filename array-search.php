
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

	    if ($computer === "HP") {
	        echo "<h2>Welcome <span style='color:red'>" .$computer. "</span> to website</h2>";
	    }
	    else{
	        echo "<h2><span style='color:red'>Không tìm thấy dữ liệu</span></h2>";
	    }
	    echo 'sau khi submit';
	}
?>