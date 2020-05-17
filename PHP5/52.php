<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>52</title>
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'uczelnia';
        
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $sql = 'SELECT id, imie, nazwisko, email, id_rok_studiow FROM studenci';
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            $result = $stmt -> fetchAll();
        
        } catch (PDOException $e) {
            die("Blad przy laczeniu");
        } 
    ?>

    <p>Wybierz studenta:</p>
    
    <form action="53.php" method="post">
    <select name = 'id'>
        <?php
            foreach($result as $out){ 
        ?>
        <option value = "<?php echo $out["id"]; ?>"><?php echo $out["imie"]." ".$out["nazwisko"]; ?></option>
        <?php
            }
        ?>
    </select>
      <input type="submit" name = "btn" value = "Usuń">
    </form>

</body>
</html>