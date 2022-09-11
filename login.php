<?php
require "_core.php";

if (isset($_POST["submit"], $_POST["username"], $_POST["password"])) {
    $username = $_POST["username"];
    $password=$_POST["password"];

    $user_id = getIdByUserPass($username, $password);
    if ($user_id !== null) {
        $_SESSION["user_id"] = $user_id;
        header("Location: index.php");
        exit();
    }else {
        echo "user and password incorrect";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        username:<input type="text" name="username"><br>
        password:<input type="text" name="password"><br>
        <input type="submit" name="submit">
    </form>    
</body>
</html>