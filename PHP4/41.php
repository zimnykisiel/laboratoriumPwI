<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host =  'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'uczelnia';

        $dsn = 'mysql:host='. $host .';dbname='. $dbname;
      
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $id = 3;
        $nazwisko = "Malinowski";

        $sql = 'UPDATE studenci SET nazwisko = :nazwisko where id = :id';
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(['nazwisko' => $nazwisko, 'id' => $id]);
        
        echo 'Updated';
    ?>
</body>
</html>