<?php

// Déclaration de la fonction
// Toute variable dans la déclaration de la fonction (entre parenthèses)
// -> Des PARAMETRES
// si y a pas de return dans une fonction, on l'appelle procédure
// sinon on l'appelle fonction
function jeVerseDansMaBouteille($nbCl, $typeBouteille) {
    echo "Je verse dans ma bouteille ".$typeBouteille.": ".$nbCl." cl";
    echo "Glouglou.....";
    echo "Oh non un peu de contenu s'écoule!";

    // a la fin d'une exécution, on peut faire en sorte de retourner UNE valeur
    return $nbCl-3;
}

$contenuBouteilleCoca = 0;

// appel de la fonction
// Je transmets ici une valeur de 5 à ma fonction
// Toute donnée dans l'appel de la fonction (entre parenthèses)
// -> des arguments
$contenuBouteilleCoca = jeVerseDansMaBouteille(5, "Coca Cola");
echo $contenuBouteilleCoca;

// appel de la fonction
// Je transmets ici une valeur de 15 à ma fonction
$contenuBouteilleCoca = $contenuBouteilleCoca + jeVerseDansMaBouteille(15, "Coca Cola");
echo $contenuBouteilleCoca;

// appel de la fonction
// Je transmets ici une valeur de 25 à ma fonction
$contenuBouteilleCoca += jeVerseDansMaBouteille(25, "Coca Cola");
echo $contenuBouteilleCoca;