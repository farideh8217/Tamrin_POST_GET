<?php
require "_core.php";

$projects = getprojects();
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
    <form action="product.php" method="POST">
        <select name="project_id">
            <?php foreach($projects as $project) { ?>
                <option value="<?= $project["id"] ?>"><?= $project["name"] ?></option>
            <?php } ?>
        </select> 
        <input type="submit" name="submit">
    </form>   
</body>
</html>

