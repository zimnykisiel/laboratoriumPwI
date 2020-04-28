<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "to jest zawartość 32";
        echo $a;
        $file = '33.php';
        $curr = include '33.php';
        echo $curr;
    ?>
</body>
</html>