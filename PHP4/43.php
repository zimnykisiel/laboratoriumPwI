<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
    width: 100%;
    font-family: 'Helvetica';
    font-size: 20px;
    border: 1px solid;
    border-collapse: collapse;
    }
    th {
    background-color: #34b7eb;
    border: 1px solid;
    }
    td{
        border: 1px solid;
        text-align: center;
    }
    </style>
</head>
<body>
    <table>
    <tr>
    <th>Id</th>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Email</th>
    <th>Rok</th>
    </tr>
    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'uczelnia';
    
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
              array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $sql = 'SELECT id, imie, nazwisko, email, id_rok_studiow FROM studenci';
        $stmt = $db -> query($sql) -> fetchAll();
        foreach($stmt as $row){
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["imie"] . "</td><td>"
            . $row["nazwisko"]. "</td><td>" . $row["email"] . "</td><td>" . $row["id_rok_studiow"] . "</td></tr>";
        }
        echo '</table>';
    
    } catch (PDOException $e) {
        die("Blad przy laczeniu");
    } 
    ?>
</body>
</html>
