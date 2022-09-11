<?php
require "_core.php";

$project_id = $_POST["project_id"];
$products = getproducts($project_id);
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
        <select name="product">
            <?php foreach($products as $product) { ?>
                <option value="<?= $product["id"] ?>"><?= $product["name"] ?></option>
            <?php } ?>
        </select> 
        <input type="submit" name="submit">
    </form>   
</body>
</html>