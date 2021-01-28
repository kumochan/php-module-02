<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = trim($_POST["password"]);

    if ($username === "admin" && $password === "1") {
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    }
    else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
    echo 'sau khi submit';
}
?>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30"  placeholder="username" />
        <input type="password" name="password" size="30" placeholder="password" />
        <input type="submit" value="Sign in"/>
    </div>
</form>