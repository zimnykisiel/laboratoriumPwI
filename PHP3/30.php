<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = 'plik.txt';
        $hello = "Hello world";
        file_put_contents($file, $hello);
    ?>
</body>
</html>