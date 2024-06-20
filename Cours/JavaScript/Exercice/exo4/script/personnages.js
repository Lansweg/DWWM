let pages;
fetch("https://rickandmortyapi.com/api/character?page=1")
  .then((response) => response.json())
  .then((data) => {
    pages = data.info.pages;
    // console.log(data.results[0]);
  });

setTimeout(() => {
  for (let index = 1; index <= pages; index++) {
    fetch("https://rickandmortyapi.com/api/character?page=" + index)
      .then((response) => response.json())
      .then((data) => {
        data.results.forEach((element) => {
          // console.log(data.results);
          const body = document.querySelector(`body`); // Selectionne le body
          const div = document.getElementById(container)
          
          const card = document.createElement(`div`); // Créer un Element card
          const profileImage = document.createElement(`img`); // Créer un Element IMG
          const textContainer = document.createElement(`div`); // Créer une div 
          const name = document.createElement(`p`);
          const profile = document.createElement(`p`);
          profileImage.src = element.image; // Envoie les images des personnages

          card.id = `card`; // ajouter un id a l'element card
          profileImage.id = `profileImage`;
          textContainer.id = `textContainer`;
          name.id = `name`;
          profile.id =  `profile`;
          name.textContent = element.name;
          profile.textContent = "Genial !!!!"

          container.appendChild(card)
          card.appendChild(profileImage)
          card.appendChild(textContainer)
          textContainer.appendChild(name)
          textContainer.appendChild(profile)



        });
      });
  }
}, 2000);
