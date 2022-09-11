<?php

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
        <?php for($i=1;$i<=3;$i++) { ?>
           name: <input type="text" name="a<?= $i ?>">
        <?php } ?>    
        <input type="submit" name="submit">
    </form>
</body>
</html>