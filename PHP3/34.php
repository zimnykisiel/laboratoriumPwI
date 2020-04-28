<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "motoryzacja";

    try {
        $pdo = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = 'SELECT marka, model, pojemnosc FROM Samochody where id=1 AND id=3';
        $stmt = $pdo -> query($sql);
        foreach($stmt as $row){
            echo $row['marka']. '<br>';
            echo $row['model']. '<br>';
            echo $row['pojemnosc']. '<br>';
        }
        echo "Polaczono";
    } catch(PDOException $e) {
        die("Blad");
    } 
    ?>
</body>
</html>