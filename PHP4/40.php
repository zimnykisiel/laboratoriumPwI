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

        $id = 1;
        $fname = "Kazimierz";
        $lname = "Kowalski";
        $email = "kowalski@gmail.com";
        $id_rok_studiow = 2;

        $id1 = 2;
        $fname1 = "Jan";
        $lname1 = "Brzechwa";
        $email1 = "brzechwa@gmail.com";
        $id_rok_studiow1 = 4;

        $id2 = 3;
        $fname2 = "Andrzej";
        $lname2 = "Nowak";
        $email2 = "asd@gmail.com";
        $id_rok_studiow2 = 3;

        $rid = 1;
        $rnazwa = "UWB";
        $rkierunek = "Informatyka";
        $rstopien = 2;

        $rid1 = 2;
        $rnazwa1 = "UMB";
        $rkierunek1 = "Pielegniarstwo";
        $rstopien1 = 1;

        $sql = 'INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
             values(:id, :imie, :nazwisko, :email, :id_rok_studiow)';

        $rsql = 'INSERT INTO rok (id, nazwa, kierunek, stopien)
        values(:id, :nazwa, :kierunek, :stopien)';

        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(['id' => $id, 'imie' => $fname, 'nazwisko' => $lname, 'email' => $email, 'id_rok_studiow' => $id_rok_studiow]);
        $stmt -> execute(['id' => $id1, 'imie' => $fname1, 'nazwisko' => $lname1, 'email' => $email1, 'id_rok_studiow' => $id_rok_studiow1]);
        $stmt -> execute(['id' => $id2, 'imie' => $fname2, 'nazwisko' => $lname2, 'email' => $email2, 'id_rok_studiow' => $id_rok_studiow2]);


        $stmt = $pdo -> prepare($rsql);
        $stmt -> execute(['id' => $rid, 'nazwa' => $rnazwa, 'kierunek' => $rkierunek, 'stopien' => $rstopien]);
        $stmt -> execute(['id' => $rid1, 'nazwa' => $rnazwa1, 'kierunek' => $rkierunek1, 'stopien' => $rstopien1]);

        
        echo 'Dodano';
    ?>
</body>
</html>