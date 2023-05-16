<?php
include __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP - 1</title>
</head>
<body>
    <ul>
        <?php foreach($movies as $movie) { ?>
            <li>
                <?php echo $movie->title ?>
            </li>
        <?php } ?>
    </ul>
    
</body>
</html>