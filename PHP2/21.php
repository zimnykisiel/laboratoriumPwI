<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="20.php">20</a><br>
    <a href="22.php">22</a><br>
    <a href="23.php">23</a><br>
    <a href="24.php">24</a><br>
    <?php
    session_start();
    echo $_SESSION['ala'];
    ?>
</body>
</html>