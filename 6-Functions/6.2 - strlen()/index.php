<?php

function mijnNaamIsGroot(){
    $voorNaam = "jayden";
    $tussenvoegsel = "van der";
    $achterNaam = "bijl";
    $geheleNaam = $voorNaam . " " . $tussenvoegsel . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;

}
mijnNaamIsGroot(); 
?>s
    