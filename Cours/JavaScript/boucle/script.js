// =================EXO 1=====================
// let age = prompt("Entre ton âge :");
// if (age >= 18) {
//     console.log("Majeur");
// }
// else {
//     console.log("Mineur");
// }


// Corection

// function determinerAge(age){
//     if (age >= 18){
//         console.log("La personne est majeur")
//     }
//     else{
//         console.log("la personne est mineur");
//     }
// }

// determinerAge(prompt("ton age"))

// ====================EXO 2================================

// for (let p = 1; p <= 20; p++) {
//     if (p % 2 === 0) {
//         console.log(p);
//     }
// }

// /\/\  Correction   /\/\

// for (let i = 2; i < 20; i += 2) {
//     console.log(i);
    
// }

// ===================================================================

// function game() {
//   let games = prompt("Entre un chiffre entre 1 et 100 pour jouer:");

//   while (games < 1 || games > 100 || isNaN(games)) {
//     games = prompt("Perdu 🤡 ! Entre un chiffre entre 1 et 100 pour rejouer:");
//   }

//   while (games == "84") {
//     games = alert("Gagné 🏆 !");
//   }

//   if (games == "84") {
//     console.log("Gagné 🏆 !");
//   } else {
//     console.log("Perdu 🤡 !");
//   }
// }

// game();



// Correction 

// const randomNumber = Math.floor((Math.random() * 100) + 1)

// let inputUser = prompt("Veuillez entrer une valeur entre 1 et 100")

// while (isNaN(inputUser)){
//     inputUser = prompt("Veuillez entrer un nombre entre 1 et 100")
// }  

// while (inputUser != randomNumber){
//     if (inputUser > randomNumber){
//         inputUser = prompt("Le nombre est trop haut")
//     }
    
//     if (inputUser < randomNumber){
//         inputUser = prompt("le nombre est trop bas")
//     }

//     if (inputUser == randomNumber){
//         console.log("c'est gagné");
//     }

// }

// ===================================================================

// function nombreJoursDansMois(mois, annee) {
//     // Vérifier si le mois est valide
//     if (mois < 1 || mois > 12) {
//         return "Mois invalide";
//     }

//     // Si le mois est février
//     if (mois === 2) {
//         // Vérifier si l'année est bissextile
//         if ((annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0)) {
//             return 29; // Février a 29 jours dans une année bissextile
//         } else {
//             return 28; // Février a 28 jours dans une année non bissextile
//         }
//     }

//     // Si le mois n'est pas février, on utilise un tableau pour les autres mois
//     const joursParMois = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

//     // Retourner le nombre de jours pour le mois donné
//     return joursParMois[mois - 1];
// }

// // Exemple d'utilisation
// const mois = 2; // Février
// const annee = 2024; // Année bissextile
// console.log(`Il y a ${nombreJoursDansMois(mois, annee)} jours dans le mois ${mois} de l'année ${annee}.`);


function nombreDeJours(num){
    let nombreDeJours;
    let annee = new Date().getFullYear()
switch (num) {
    case 1:
        nombreDeJours = 31;
        break;
    case 2:
        if ((annee % 4 == 0 && annee % 100 != 0) || annee % 400 == 0) { 
            nombreDeJours = 29;
        } else {
            nombreDeJours = 28;
        }
        break;
    case 3:
        nombreDeJours = 31;
        break;
    case 4:
        nombreDeJours = 30;
        break;
    case 5:
        nombreDeJours = 31;
        break;
    case 6:
        nombreDeJours = 30;
        break;
    case 7:
        nombreDeJours = 31;
        break;
    case 8:
        nombreDeJours = 31;
        break;
    case 9:
        nombreDeJours = 30;
        break;
    case 10:
        nombreDeJours = 31;
        break;
    case 11:
        nombreDeJours = 30;
        break;
    case 12:
        nombreDeJours = 31;
        break;
    default:
        nombreDeJours = "mois invalide";
}

console.log(nombreDeJours +  " " +"nombre de jour " + "dans l'année" + " " + annee);
}

nombreDeJours(2);