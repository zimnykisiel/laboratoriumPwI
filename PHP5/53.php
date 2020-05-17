<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>53</title>
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


            if(isset($_POST['btn'])){
                $id = $_POST['id'];
                $sql = 'DELETE FROM studenci WHERE id = :id';
                $stmt = $db -> prepare($sql);
                $stmt -> execute(['id' => $id]);
            }          
        
        } catch (PDOException $e) {
            die("Blad przy laczeniu");
        } 
    ?>

</body>
</html>