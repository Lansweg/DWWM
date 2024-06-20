

// EXERCICE 1


let btn = document.querySelector("#monBouton");
let ctn = document.getElementById("container");
// Ajouter un écouteur d'événement click à l'élément
btn.addEventListener("click", function() {
    let newp = document.createElement("p");
    newp.textContent = 'Hello World';
    ctn.appendChild(newp)
    console.log("Le bouton a été cliqué !");
});


// EXERCICE 2


let btn2 = document.getElementById("btn2");

// Ajouter un écouteur d'événement click à l'élément
btn2.addEventListener("click", function() {
    document.getElementById('p2').style.color = "red";
    console.log("Le bouton a été cliqué !");
});


// EXERCICE 3


let btn3 = document.getElementById("btn3");
let ul = document.getElementById("ul1");
// Ajouter un écouteur d'événement click à l'élément
btn3.addEventListener("click", function() {
    let newli = document.createElement("li");
    newli.textContent = 'Nouvel élément';
    ul.appendChild(newli)
    console.log("Text ajouter");
});


// EXERCICE 4


// let btn4 = document.getElementById("btn4");
// let li = document.getElementById("li2")
// let del = false; // Variable pour suivre l'état de suppression

// btn4.addEventListener("click", function() {
//     if (!del) {
//         li2.remove();
//         del = true; // Met à jour l'état de suppression
//         console.log("List  1 supprimer!");
//     } else {
//         console.log("Stop tu la déja supprimer");
//     }
// });

// Correction

const btn4 = document.querySelector('#btn4')
let del = false; // Variable pour suivre l'état de suppression

btn4.addEventListener('click', () => {
    if (!del) {
        const selectUl = document.querySelector('#ul2')
        selectUl.children[0].remove()
            del = true; // Met à jour l'état de suppression
            console.log("List  1 supprimer!");
        } 
        else {
            console.log("Stop tu la déja supprimer");
        }
});


// EXERCICE 5


// function ClickOnButton(){
//     let btn5 = document.getElementById("btn5");
//     let button6 = document.getElementById('btn6');
//     let button7 = document.getElementById('btn7');


//     btn5.addEventListener("click", function() {
//         console.log("Le bouton 5 a été cliqué !");
//     });
// }


let btn5 = document.getElementById('btn5');
let btn6 = document.getElementById('btn6');
let btn7 = document.getElementById('btn7');
btn5.addEventListener('click', handleButtonClick);
btn6.addEventListener('click', handleButtonClick);
btn7.addEventListener('click', handleButtonClick);
function handleButtonClick(event) {
    let buttonId = event.target.id;
    console.log("Vous avez cliqué sur le bouton : ", buttonId);
  }
