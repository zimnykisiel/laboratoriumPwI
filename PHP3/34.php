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
    
        $query = 'SELECT marka, model, pojemnosc FROM samochody';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();      
    
        foreach($results as $r){
                echo "Marka: ".$r['marka'] . '<br />';
                echo "Model: ".$r['model'] . '<br />';
                echo "Pojemnosc: ".$r['pojemnosc'] . '<br />';
        }
    
    } catch (PDOException $e) {
        die("Blad przy laczeniu");
    } 
    ?>
</body>
</html>