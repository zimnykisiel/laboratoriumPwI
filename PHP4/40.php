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

        $sql = 'INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
             values(1, "Kazimierz", "Kowalski", "kowalski@gmail.com", 2)';
        
        $sql1 = 'INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
             values(2, "Jan", "Brzechwa", "brzechwa@gmail.com", 4)';

        $sql2 = 'INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
            values(3, "Andrzej", "Nowak", "asd@gmail.com", 3)';

        $rsql = 'INSERT INTO rok (id, nazwa, kierunek, stopien)
        values(1, "UWB", "Informatyka", 2)';

        $rsql1 = 'INSERT INTO rok (id, nazwa, kierunek, stopien)
        values(2, "UMB", "Pielegniarstwo", 1)';

        $stmt = $pdo -> exec($sql);
        $stmt = $pdo -> exec($sql1);
        $stmt = $pdo -> exec($sql2);

        $stmt = $pdo -> exec($rsql);
        $stmt = $pdo -> exec($rsql1);

        echo 'Dodano';
    ?>
</body>
</html>