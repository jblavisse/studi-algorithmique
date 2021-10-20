// Variable reponse en Caractère
let reponse;

// Ecrire "Donne une réponse en O ou N"
// Lire reponse
reponse = prompt("Donne une réponse en O ou N");

// Tant que reponse est différente de O et différente de N
while(reponse !== "O" && reponse !== "N") {
    //     Ecrire "Mais non, O ou N. Zut."
    //     Lire reponse
    reponse = prompt("Mais non, O ou N. Zut.")
    console.log(reponse);
}

// Si reponse vaut O
if(reponse === "O") {
    alert("Tu peux rentrer");
}
else if(reponse === "N") {
    alert("Bon vent!");
}