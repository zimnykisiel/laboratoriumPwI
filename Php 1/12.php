<?php
     if(!empty($_GET["liczba1"]) && !empty($_GET["liczba2"])){
        echo "Pierwsza liczba: ". $_GET['liczba1']. "<br />";
        echo "Druga liczba: ". $_GET['liczba2'];
     }
     else if(empty($_GET["liczba1"])){
         echo "Nie podano pierwszej liczby";
     }
     else{
         echo "Nie podano drugiej liczby";
     }

?>