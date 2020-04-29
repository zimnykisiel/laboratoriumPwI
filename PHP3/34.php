<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'motoryzacja';
    
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
              array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $sql = 'SELECT marka, model, pojemnosc FROM samochody where id=1 or id=3';
        $stmt = $db -> query($sql) -> fetchAll();
        foreach($stmt as $row){
            echo "Marka: ".$row['marka']."</br>";
            echo "Model: ".$row['model']."</br>";
            echo "Pojemnosc: ".$row['pojemnosc']."</br>";
        }
    
    } catch (PDOException $e) {
        die("Blad przy laczeniu");
    } 
    ?>
</body>
</html>