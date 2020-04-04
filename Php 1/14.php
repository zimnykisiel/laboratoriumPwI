<?php
    $l1 = $_POST['liczba1'];
    $l2 = $_POST['liczba2'];
    $dodawanie = $l1 + $l2;
    $odejmowanie = $l1 - $l2;
    $mnozenie = $l1 * $l2;
    
    echo "Dodawanie: ".$dodawanie."<br/>";
    echo "Odejmowanie: ".$odejmowanie."<br/>";
    echo "Mnozenie: ".$mnozenie."<br/>";
    if($l2==0){
        echo "Nie można dzielic przez 0";
    }
    else{
        $dzielenie = $l1 / $l2;
        echo "Dzielenie: ".$dzielenie."<br/>";
    }

?>