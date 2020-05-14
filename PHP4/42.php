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

        $sql = 'DELETE FROM studenci WHERE id = 2';
        $stmt = $pdo -> exec($sql);
        
        
        echo 'Deleted';
    ?>
</body>
</html>