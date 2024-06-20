//! // // // // // // // // // // // // // // // // // // // // // // // // // //
//! // // // // // // // // // // //  EXO 1   // // // // // // // // // // // //
//! // // // // // // // // // // // // // // // // // // // // // // // // // //

// const btn = document.querySelector(`.btn`);
// const body = document.querySelector('body')
// btn.addEventListener(`click`, () => {
//   createRect();
//   console.log("ça fonctionne");
// });
// function createRect() {
//   const rectBlue = document.createElement(`div`);
//   rectBlue.classList.add(`rectBlue`);
//   rectBlue.id = `rectBlue`;
//   body.appendChild(rectBlue);
//   rectBlue.addEventListener("click", () => deleterect(rectBlue));
//   setTimeout(() => {
//     const rectWhite = document.createElement(`div`);
//     rectWhite.classList.add(`rectWhite`);
//     rectWhite.id = `rectWhite`;
//     body.appendChild(rectWhite);
//     rectWhite.addEventListener("click", () => deleterect(rectWhite));
//   }, 5000);
//   setTimeout(() => {
//     const rectRed = document.createElement(`div`);
//     rectRed.classList.add(`rectRed`);
//     rectRed.id = `rectRed`;
//     body.appendChild(rectRed);
//     rectRed.addEventListener("click", () => deleterect(rectRed));
//   }, 10000);
// }
// function deleterect(element) {
//   element.remove();
//   console.log(`J'ai cliquer sur ${element.id}`);
// }*

//! // // // // // // // // // // // // // // // // // // // // // // // // // //
//! // // // // // // // // // // //  EXO 2   // // // // // // // // // // // //
//! // // // // // // // // // // // // // // // // // // // // // // // // // //
//* Affichez dans un h1, le type et nom (concaténation)
//* Affichez le prix dans un paragraphe
//* Affichez tous les types de nappages possibles dans un paragraphe
//* Faites en une card
//* Créer un formulaire avec :
//* Tous les napages possible à l'aide d'un input de type radio
//* Tous les toppings possible à l'aide d'un autre input de type radio
//* Un bouton
//* Un écouteur d'événement sur le bouton qui permettra d'afficher dans un h2 le type de
//* nappage et le type de topping

let setDisplay = "none"


let data = {
  id: "0001",
  type: "gateau",
  nom: "donuts",
  price: 0.55,
  nappages: {
    nappage: [
      { id: "1001", type: "Chocolat" },
      { id: "1002", type: "Fraise" },
      { id: "1003", type: "Framboise" },
      { id: "1004", type: "Vanille" },
    ],
  },
  topping: [
    { id: "5001", type: "Sans Topping" },
    { id: "5002", type: "Perles de sucre" },
    { id: "5003", type: "Copos de coco" },
    { id: "5004", type: "Billes de chocolat" },
    { id: "5005", type: "Vermisselles de chocolat" },
  ],
};

function article1() {
  const body = document.querySelector(`body`);
  const divcard = document.createElement(`card`);
  const h1 = document.createElement(`h1`);
  const p = document.createElement(`p`);

  body.appendChild(divcard);
  divcard.style.width = `10%`;
  divcard.style.background = `#353535`;
  divcard.style.borderRadius = `5px`;
  divcard.style.display = `flex`;
  divcard.style.justifyContent = `center`;
  divcard.style.flexDirection = `column`;
  divcard.style.color = `white`;

  divcard.appendChild(h1);
  h1.style.fontSize = `16px`;
  h1.style.fontWeight = `bold`;
  h1.style.textAlign = `center`;

  divcard.appendChild(p);
  p.style.fontSize = `12px`;
  p.style.textAlign = `center`;
  p.style.fontWeight = `lighter`;
  h1.textContent = `${data.type} ${data.nom}`;
  p.textContent = `${data.price} €`;

  const pnapage = document.createElement(`p`);
  pnapage.classList.add(`napage`);
  divcard.appendChild(pnapage);
  pnapage.textContent = `Liste des Nappages :`;
  pnapage.style.display = setDisplay;

  const nappages = data.nappages.nappage;
  console.table(nappages);

  nappages.forEach((nappage) => {
    const li = document.createElement("p");
    li.textContent = nappage.type;
    li.style.textAlign = "center";
    li.style.display = setDisplay;
    divcard.appendChild(li);
  });

  const topping = document.createElement(`p`);
  topping.type = `napage`;
  divcard.appendChild(topping);
  topping.textContent = `Liste des topping :`;
  topping.style.display = setDisplay;

  const toppings = data.topping;
  console.table(toppings);
  toppings.forEach((topping) => {
    const li = document.createElement(`p`);
    li.textContent = topping.type;
    li.style.textAlign = "center";
    li.style.display = setDisplay;
    divcard.appendChild(li);
  });
}

article1();

const dessert = document.createElement(`form`);
dessert.id = `dessertForm`;
document.body.appendChild(dessert);

const h3n = document.createElement(`h3`);
h3n.id = `nappagetitre`;
dessert.appendChild(h3n);
h3n.textContent = "Liste des Nappages :";

const radialnappage = document.createElement(`div`);
radialnappage.type = `nappageOptions`;
dessert.appendChild(radialnappage);

const h3t = document.createElement(`h3`);
h3t.id = `toppingstitre`;
dessert.appendChild(h3t);
h3t.textContent = "Liste des topping :";

const radialtopping = document.createElement(`div`);
radialtopping.type = `toppingOptions`;
dessert.appendChild(radialtopping);

const btndessert = document.createElement(`button`);
btndessert.id = `submitBtn`;
dessert.appendChild(btndessert);
btndessert.textContent = "Commander";

const h2detail = document.createElement(`h2`);
dessert.appendChild(h2detail);
h2detail.id = `h2detail`;

// Fonction pour créer les options de nappage
function creenappage() {
  data.nappages.nappage.forEach((nappage) => {
    const input = document.createElement("input");
    input.type = "radio";
    input.name = "nappage";
    input.id = nappage.type;
    input.value = nappage.type;

    const label = document.createElement("label");
    label.htmlFor = nappage.type;
    label.textContent = nappage.type;

    radialnappage.appendChild(input);
    radialnappage.appendChild(label);
    radialnappage.appendChild(document.createElement("br"));
  });
}

// Fonction pour créer les options de topping
function creetopping() {
  data.topping.forEach((topping) => {
    const input = document.createElement("input");
    input.type = "radio";
    input.name = "topping";
    input.value = topping.type;
    input.id = topping.type;

    const label = document.createElement("label");
    label.textContent = topping.type;
    label.htmlFor = topping.type;

    radialtopping.appendChild(input);
    radialtopping.appendChild(label);
    radialtopping.appendChild(document.createElement("br"));
  });
}

creenappage();
creetopping();

btndessert.addEventListener("click", (event) => {
  const nappageSelection = document.querySelector(
    'input[name="nappage"]:checked'
  );
  const toppingSelection = document.querySelector(
    `input[name="topping"]:checked`
  );

  if (nappageSelection && toppingSelection) {
    const nappageType = data.nappages.nappage.find(
      (nappage) => nappage.type === nappageSelection.value
    ).type;
    const toppingType = data.topping.find(
      (topping) => topping.type === toppingSelection.value
    ).type;
    h2detail.textContent = `Un petit nappage ${nappageType}, ${toppingType}`;
  } else {
    h2detail.textContent = "Hop! Hop ! Choisi un Nappage et un Topping";
  }
  event.preventDefault();
});
