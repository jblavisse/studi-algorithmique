// let note;

// for(let i=1; i<6;i++) {
//     note = prompt("Entrez une note")
//     console.log(note)
// }

// console.log(note)

// Tu veux stocker une dizaine de notes
// Mais avec l'objectif de retrouver à tout moment toutes mes notes

// Tableaux

// let notes = [];
// notes[0] = "Bienvenue";
// notes[1] = "Tout le monde";
// notes[2] = "!";

let notes = ["Bienvenue","Tout le monde","!"];
// console.table(unTableau)
console.log(notes);
//console.log(notes[1]);

// On parcourt le tableau
for(let i=0;i<notes.length;i++) {
    console.log(notes[i]);
}

for(let note of notes) {
    console.log(note);
}


let multi = [ [0,1] , ["truc","muche"] ];
console.log(multi);

console.log(multi[1][0]);