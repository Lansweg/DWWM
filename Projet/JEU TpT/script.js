const Char1J1 = document.querySelector(".char1j1");
const Char2J1 = document.querySelector(".char2j1");
const Char3J1 = document.querySelector(".char3j1");
const Char4J1 = document.querySelector(".char4j1");
const Char5J1 = document.querySelector(".char5j1");
const Char6J1 = document.querySelector(".char6j1");
const Char7J1 = document.querySelector(".char7j1");
const Char8J1 = document.querySelector(".char8j1");

const Char1J2 = document.querySelector(".char1j2");
const Char2J2 = document.querySelector(".char2j2");
const Char3J2 = document.querySelector(".char3j2");
const Char4J2 = document.querySelector(".char4j2");
const Char5J2 = document.querySelector(".char5j2");
const Char6J2 = document.querySelector(".char6j2");
const Char7J2 = document.querySelector(".char7j2");
const Char8J2 = document.querySelector(".char8j2");

const allCharJ1 = document.querySelectorAll(
  ".char1j1",
  ".char2j1",
  ".char3j1",
  ".char4j1",
  ".char5j1",
  ".char6j1",
  ".char7j1",
  ".char8j1"
);
const allCharJ2 = document.querySelectorAll(
  ".char1j2",
  ".char2j2",
  ".char3j2",
  ".char4j2",
  ".char5j2",
  ".char6j2",
  ".char7j2",
  ".char8j2"
);

let player1;
let player2;

let personnages = [
  {
    nom: "AngeMaudie",
    pdv: 100,
    pvmax: 100,
    atk: 20,
    img: "./image/personnages/Rectangle-1.png",
  },
  {
    nom: "Maîtresse de L'eau",
    pdv: 80,
    pvmax: 80,
    atk: 25,
    img: "./image/personnages/Rectangle-2.png",
  },
  {
    nom: "Piesor",
    pdv: 90,
    pvmax: 90,
    atk: 25,
    img: "./image/personnages/Rectangle-3.png",
  },
  {
    nom: "Faboulius",
    pdv: 70,
    pvmax: 70,
    atk: 30,
    img: "./image/personnages/Rectangle-4.png",
  },
  {
    nom: "Rêne-Rousse",
    pdv: 170,
    pvmax: 170,
    atk: 10,
    img: "./image/personnages/Rectangle-5.png",
  },
  {
    nom: "Blue",
    pdv: 90,
    pvmax: 90,
    atk: 15,
    img: "./image/personnages/Rectangle-6.png",
  },
  {
    nom: "Ange-Guerrier",
    pdv: 70,
    pvmax: 70,
    atk: 30,
    img: "./image/personnages/Rectangle-7.png",
  },
  {
    nom: "Diobulous",
    pdv: 70,
    pvmax: 70,
    atk: 30,
    img: "./image/personnages/Rectangle-8.png",
  },
];
// Affichage des caractéristiques des personnages
personnages.forEach(function (personnage, index) {
  console.log("Personnage " + (index + 1) + " : ", personnage);
});
const startButton = document.getElementById("start");
const accueil = document.getElementById("accueil");
const selectChar = document.getElementById("selectChar");
// Ajout d'un gestionnaire d'événements au clic sur le bouton
startButton.addEventListener("click", function () {
  // Masquer l'élément accueil
  accueil.style.display = "none";
  selectChar.style.display = "flex";
});
// Fonction pour ouvrir le modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}
// Fonction pour fermer le modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
// Fermer le modal lorsque l'utilisateur clique en dehors du contenu
window.onload = function (event) {
  let modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "flex";
  }
};

Char1J1.addEventListener("click", () => {
  Char1J1.style.border = "5px solid Red";
  Char2J1.style.border = "none";
  Char3J1.style.border = "none";
  Char4J1.style.border = "none";
  Char5J1.style.border = "none";
  Char6J1.style.border = "none";
  Char7J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "grayscale(100%)";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "none";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "auto";

  Char1J1.setAttribute("id", "Player1");
  Char2J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[0]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char2J1.addEventListener("click", () => {
  Char2J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char3J1.style.border = "none";
  Char4J1.style.border = "none";
  Char5J1.style.border = "none";
  Char6J1.style.border = "none";
  Char7J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "grayscale(100%)";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "none";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "auto";

  Char2J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[1]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char3J1.addEventListener("click", () => {
  Char3J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char2J1.style.border = "none";
  Char4J1.style.border = "none";
  Char5J1.style.border = "none";
  Char6J1.style.border = "none";
  Char7J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "grayscale(100%)";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "none";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "auto";

  Char3J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char2J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[2]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char4J1.addEventListener("click", () => {
  Char4J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char2J1.style.border = "none";
  Char3J1.style.border = "none";
  Char5J1.style.border = "none";
  Char6J1.style.border = "none";
  Char7J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "grayscale(100%)";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "none";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "auto";

  Char4J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char2J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[3]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char5J1.addEventListener("click", () => {
  Char5J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char2J1.style.border = "none";
  Char3J1.style.border = "none";
  Char4J1.style.border = "none";
  Char6J1.style.border = "none";
  Char7J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "grayscale(100%)";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "none";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "auto";

  Char5J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char2J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[4]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char6J1.addEventListener("click", () => {
  Char6J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char2J1.style.border = "none";
  Char3J1.style.border = "none";
  Char4J1.style.border = "none";
  Char5J1.style.border = "none";
  Char7J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "grayscale(100%)";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "none";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "auto";

  Char6J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char2J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[5]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char7J1.addEventListener("click", () => {
  Char7J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char2J1.style.border = "none";
  Char3J1.style.border = "none";
  Char4J1.style.border = "none";
  Char5J1.style.border = "none";
  Char6J1.style.border = "none";
  Char8J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "grayscale(100%)";
  Char8J2.style.filter = "none";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "none";
  Char8J2.style.pointerEvents = "auto";

  Char7J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char2J1.removeAttribute("id");
  Char8J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[6]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char8J1.addEventListener("click", () => {
  Char8J1.style.border = "5px solid Red";
  Char1J1.style.border = "none";
  Char2J1.style.border = "none";
  Char3J1.style.border = "none";
  Char4J1.style.border = "none";
  Char5J1.style.border = "none";
  Char6J1.style.border = "none";
  Char7J1.style.border = "none";

  Char1J2.style.filter = "none";
  Char2J2.style.filter = "none";
  Char3J2.style.filter = "none";
  Char4J2.style.filter = "none";
  Char5J2.style.filter = "none";
  Char6J2.style.filter = "none";
  Char7J2.style.filter = "none";
  Char8J2.style.filter = "grayscale(100%)";

  Char1J2.style.pointerEvents = "auto";
  Char2J2.style.pointerEvents = "auto";
  Char3J2.style.pointerEvents = "auto";
  Char4J2.style.pointerEvents = "auto";
  Char5J2.style.pointerEvents = "auto";
  Char6J2.style.pointerEvents = "auto";
  Char7J2.style.pointerEvents = "auto";
  Char8J2.style.pointerEvents = "none";

  Char8J1.setAttribute("id", "Player1");
  Char1J1.removeAttribute("id");
  Char3J1.removeAttribute("id");
  Char4J1.removeAttribute("id");
  Char5J1.removeAttribute("id");
  Char6J1.removeAttribute("id");
  Char7J1.removeAttribute("id");
  Char2J1.removeAttribute("id");

  player1 = Object.assign({}, personnages[7]);
  console.log(player1);

  console.log("Joueur 1 🆗 !");
});

Char1J2.addEventListener("click", () => {
  Char1J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char3J2.style.border = "none";
  Char4J2.style.border = "none";
  Char5J2.style.border = "none";
  Char6J2.style.border = "none";
  Char7J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "grayscale(100%)";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "none";
  Char4J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "none";

  Char2J1.style.pointerEvents = "auto";
  Char1J1.style.pointerEvents = "none";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "auto";

  Char1J2.setAttribute("id", "Player2");
  Char2J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[0]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});
Char2J2.addEventListener("click", () => {
  Char2J2.style.border = "5px solid green";
  Char1J2.style.border = "none";
  Char3J2.style.border = "none";
  Char4J2.style.border = "none";
  Char5J2.style.border = "none";
  Char6J2.style.border = "none";
  Char7J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "grayscale(100%)";
  Char3J1.style.filter = "none";
  Char4J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "none";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "none";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "auto";

  Char2J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[1]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

Char3J2.addEventListener("click", () => {
  Char3J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char1J2.style.border = "none";
  Char4J2.style.border = "none";
  Char5J2.style.border = "none";
  Char6J2.style.border = "none";
  Char7J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "grayscale(100%)";
  Char4J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "none";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "auto";
  Char3J1.style.pointerEvents = "none";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "auto";

  Char3J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char2J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[2]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

Char4J2.addEventListener("click", () => {
  Char4J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char3J2.style.border = "none";
  Char1J2.style.border = "none";
  Char5J2.style.border = "none";
  Char6J2.style.border = "none";
  Char7J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "none";
  Char4J1.style.filter = "grayscale(100%)";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "none";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "auto";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "none";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "auto";

  Char4J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char2J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[3]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

Char5J2.addEventListener("click", () => {
  Char5J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char3J2.style.border = "none";
  Char4J2.style.border = "none";
  Char1J2.style.border = "none";
  Char6J2.style.border = "none";
  Char7J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "none";
  Char4J1.style.filter = "none";
  Char5J1.style.filter = "grayscale(100%)";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "none";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "auto";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "none";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "auto";

  Char5J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char2J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[4]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

Char6J2.addEventListener("click", () => {
  Char6J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char3J2.style.border = "none";
  Char4J2.style.border = "none";
  Char5J2.style.border = "none";
  Char1J2.style.border = "none";
  Char7J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "none";
  Char4J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "grayscale(100%)";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "none";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "auto";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "none";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "auto";

  Char6J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char2J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[5]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

Char7J2.addEventListener("click", () => {
  Char7J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char3J2.style.border = "none";
  Char4J2.style.border = "none";
  Char5J2.style.border = "none";
  Char6J2.style.border = "none";
  Char1J2.style.border = "none";
  Char8J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "grayscale(100%)";
  Char8J1.style.filter = "none";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "auto";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "none";
  Char8J1.style.pointerEvents = "auto";

  Char7J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char2J2.removeAttribute("id");
  Char8J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[6]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

Char8J2.addEventListener("click", () => {
  Char8J2.style.border = "5px solid green";
  Char2J2.style.border = "none";
  Char3J2.style.border = "none";
  Char4J2.style.border = "none";
  Char5J2.style.border = "none";
  Char6J2.style.border = "none";
  Char7J2.style.border = "none";
  Char1J2.style.border = "none";

  Char1J1.style.filter = "none";
  Char2J1.style.filter = "none";
  Char3J1.style.filter = "none";
  Char4J1.style.filter = "none";
  Char5J1.style.filter = "none";
  Char6J1.style.filter = "none";
  Char7J1.style.filter = "none";
  Char8J1.style.filter = "grayscale(100%)";

  Char1J1.style.pointerEvents = "auto";
  Char2J1.style.pointerEvents = "auto";
  Char3J1.style.pointerEvents = "auto";
  Char4J1.style.pointerEvents = "auto";
  Char5J1.style.pointerEvents = "auto";
  Char6J1.style.pointerEvents = "auto";
  Char7J1.style.pointerEvents = "auto";
  Char8J1.style.pointerEvents = "none";

  Char8J2.setAttribute("id", "Player2");
  Char1J2.removeAttribute("id");
  Char3J2.removeAttribute("id");
  Char4J2.removeAttribute("id");
  Char5J2.removeAttribute("id");
  Char6J2.removeAttribute("id");
  Char7J2.removeAttribute("id");
  Char2J2.removeAttribute("id");

  player2 = Object.assign({}, personnages[7]);
  console.log(player2);

  console.log("Joueur 2 🆗 !");
});

const StartGame = document.getElementById("play");
// const Player1 = document.getElementById("Player1");
// const Player2 = document.getElementById("Player2");
const StartBattle = document.querySelector("#battle");
const p1 = document.querySelector(".player1combat");
StartGame.addEventListener("click", () => {
  const ennemi1 = player2;
  const ennemi2 = player1;
  console.log("L'un des deux joueurs n'a selectioné aucun personnage !");
  if (player1 == undefined) {
    play.textContent = "Personnage non selectionné";
    play.style.backgroundColor = "red";
    setTimeout(function () {
      play.removeAttribute("style");
      play.textContent = "Lancer la partie !";
    }, 2000);
    return;
  }
  if (player2 == undefined) {
    play.textContent = "Personnage non selectionné";
    play.style.backgroundColor = "red";
    setTimeout(function () {
      play.removeAttribute("style");
      play.textContent = "Lancer la partie !";
    }, 2000);
    return;
  }
  selectChar.style.display = "none";
  StartBattle.style.display = "flex";
  vieAdversaire.textContent = `${ennemi2.nom} : ${ennemi2.pdv} PV`;
  vieAdversaire2.textContent = `${ennemi1.nom} : ${ennemi1.pdv} PV`;
  console.log("Joueur 1 :", player1, " ", "Joueur 2 :", player2);
  console.log("Tous les joueurs sont prêt ! La partie peut commencer !");
});

// Récupération de l'élément du bouton et de l'affichage de la vie de l'adversaire
const boutonSort = document.getElementById("boutonSort");
const vieAdversaire = document.getElementById("vieAdversaire");
const boutonSort2 = document.getElementById("boutonSort2");
const vieAdversaire2 = document.getElementById("vieAdversaire2");

let imgperso1 = document.querySelector(".imgperso1")
let imgp1 = personnages.img;
imgperso1.src = imgp1
console.log(imgperso1);



boutonSort.addEventListener("click", () => {
  const ennemi1 = player2;
  const ennemi2 = player1;
  console.log(ennemi2);

  ennemi2.pdv -= ennemi1.atk; // Réduction de la vie de l'ennemi en fonction de l'attaque
  vieAdversaire.textContent = `${ennemi2.nom} : ${ennemi2.pdv} PV`; // Mise à jour de l'affichage de la vie de l'adversaire

  let pvierestant = (ennemi2.pdv / ennemi2.pvmax) * 100;
  if (pvierestant < 0) pvierestant = 0;

  let status2 = document.querySelector("#status2");
  status2.style.width = pvierestant + "%";
  console.log(status2);

  let logCombatDiv = document.querySelector(".logcombat");

  // Créez un nouvel élément <p>
  let newParagraph = document.createElement("p");

  // Ajoutez du texte à votre nouveau paragraphe
  newParagraph.textContent = `- ${ennemi2.atk} a ${ennemi1.nom}`;

  // Ajoutez le nouveau paragraphe à la div
  logCombatDiv.appendChild(newParagraph);

  boutonSort.disabled = true;
  boutonSort2.disabled = false;

  if (ennemi2.pdv <= 0) {
    // Vérification si l'ennemi est mort
    let fincbt = document.querySelector(".End");
    battle.style.display = "none";
    fincbt.style.display = "flex";
    console.log("Joueur2 est vaincu !");
    let tfinend = document.querySelector('.tfinend')
    tfinend.textContent = `${ennemi2.nom} a gagner !`
  }
});

boutonSort2.addEventListener("click", () => {
  const ennemi1 = player2;
  const ennemi2 = player1;
  boutonSort.disabled = false;
  boutonSort2.disabled = true;
  console.log(ennemi2.pdv, "PV");
  ennemi1.pdv -= ennemi2.atk;
  vieAdversaire2.textContent = `${ennemi1.nom} : ${ennemi1.pdv} PV`;
  let pvierestant = (ennemi1.pdv / ennemi1.pvmax) * 100;
  if (pvierestant < 0) pvierestant = 0;

  let status = document.querySelector("#status");
  status.style.width = pvierestant + "%";
  console.log(status);

  let logCombatDiv = document.querySelector(".logcombat");

  // Créez un nouvel élément <p>
  let newParagraph = document.createElement("p");

  // Ajoutez du texte à votre nouveau paragraphe
  newParagraph.textContent = `- ${ennemi1.atk} a ${ennemi2.nom}`;

  // Ajoutez le nouveau paragraphe à la div
  logCombatDiv.appendChild(newParagraph);

  if (ennemi2.pdv <= 0) {
    console.log("Joueur 1 est vaincu !");
    let tfinend = document.querySelector('.tfinend')
    tfinend.textContent = `${ennemi1.nom} a gagner !`
  }
});


let btnclosemodal = document.querySelector(".btnclosemodal")
btnclosemodal.addEventListener("click", () => {
  onclick = closeModal()
})
// Fonction pour ouvrir le modal
function openEnd() {
  document.getElementById("myEnd").style.display = "block";
}
// Fonction pour fermer le modal
function closeEndModal() {
  document.getElementById("myEnd").style.display = "none";
}
// Fermer le modal lorsque l'utilisateur clique en dehors du contenu
window.onload = function (event) {
  let End = document.getElementById("myEnd");
  if (event.target == End) {
    End.style.display = "none";
  }
};

// Char2J1.style.filter = "grayscale(100%)";
// Char2J1.style.pointerEvents = "none"

// .value (a retenir pour recuperer les donner d'un input)

// element.classList.add("my-class");

// element.classList.remove("my-class");
