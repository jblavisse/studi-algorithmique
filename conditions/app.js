let age;
let withAdult;

// Lire age
age = prompt("Donne moi ton âge");
console.log("Ton âge: " + age);

// Si age >= 16 ET age <18
if(age>=16 && age<18) {
    withAdult = prompt("Avec Adulte? O pour oui, N pour non");
}

if(age >= 18) {
    alert("Vous pouvez rentrer");
}
else if(age >= 16 && (withAdult === "O" || withAdult === "o")) {
    alert("T'es accompagné de papa et maman? Ca va alors.");
}
// Sinon
else {
    alert("Dehors sale mioche!");
}
