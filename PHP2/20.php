<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="21.php">21</a><br>
    <a href="22.php">22</a><br>
    <a href="23.php">23</a><br>
    <a href="24.php">24</a><br>
    <?php
    session_start();
    $_SESSION['ala'] = "Ala ma kota";

?>
</body>
</html>