
const form = document.querySelector(`form`)



form.addEventListener(`submit`, (event) => {
    event.preventDefault();
    const valueName = document.querySelector(`#nom`).value
    const valuePrenom = document.querySelector(`#prenom`).value
    const valuePhone = document.querySelector(`#phone`).value
    const valueMessage = document.querySelector(`#message`).value

    const InformationData = {
        nom: valueName,
        prenom: valuePrenom,
        phone: valuePhone,
        message: valueMessage
    };
    console.log(InformationData);
  
    // URL de l'API MockAPI avec l'endpoint spécifique
    const url = "https://662127903bf790e070b2059b.mockapi.io/api/v1/test-formulaire";
  
    // Configuration de la requête fetch
    const requestOptions = {
      method: "POST", // Méthode HTTP à utiliser (dans ce cas, POST)
      headers: {
        "Content-Type": "application/json", // Type de contenu des données à envoyer
      },
      body: JSON.stringify(InformationData), // Conversion des données à envoyer en format JSON
    };
  
    // Envoi de la requête fetch
    fetch(url, requestOptions)
      .then((response) => {
        if (!response.ok) {
          throw new Error("Erreur lors de la requête fetch");
        }
        return response.json(); // Récupération des données JSON renvoyées par l'API
      })
      .then((data) => {
        console.log("Réponse de l'API :", data);
        // Faites quelque chose avec les données renvoyées par l'API si nécessaire
      })
      .catch((error) => {
        console.error("Erreur :", error);
      });
  });