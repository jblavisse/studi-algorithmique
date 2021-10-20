<?php

$notes = ["Truc", "Bidule", "chouette"];

for($i=0; $i<count($notes);$i++) {
    echo $notes[$i]." ";
}

foreach($notes as $note) {
    echo $note." ";
}