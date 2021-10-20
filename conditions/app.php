<?php

$age = readline("Donne moi ton âge");
echo "Ton âge: ".$age;

if($age>=16 && $age<18) {
    $withAdult = readline("Accompagné: O ou N?");
}

if($age>=18) {
    echo "Tu peux rentrer";
}
else if($age>=16 && ($withAdult==="O" || $withAdult==="o")) {
    echo "Accompagné ok";
}
else {
    echo "Dehors";
}