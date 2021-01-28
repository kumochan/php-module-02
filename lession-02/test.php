<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8" />
<head>
<body>
<form method="get">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="Sign in"/>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET["username"];
        $password = $_GET["password"];

        if ($username == "admin" && $password == "admin") {

          echo "<h1>welcome <span>" .$username. "</span> to website</h1>";
       } else {
           echo "<h1>Login Error</h1>";
        }
    }
    ?>
</form>
</body>
</head>
</html>