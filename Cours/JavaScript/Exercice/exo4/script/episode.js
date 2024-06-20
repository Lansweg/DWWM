let pages;
fetch("https://rickandmortyapi.com/api/episode?page=1")
  .then((response) => response.json())
  .then((data) => {
    console.log(data);
    pages = data.info.pages;
  });

setTimeout(() => {
  for (let index = 1; index <= pages; index++) {
    fetch("https://rickandmortyapi.com/api/episode?page=" + index)
      .then((response) => response.json())
      .then((data) => {

        data.results.forEach((element) => {
          // console.log(element);

          const numero = element.episode;
          const date = element.air_date;
          const titre = element.name;
          const table = document.querySelector(`.table`);
          const tr = document.createElement(`tr`);
          const tdn = document.createElement(`td`);
          const tdt = document.createElement(`td`);
          const tdd = document.createElement(`td`);
          tdn.id = `numero`;
          tdt.id = `titre`;
          tdd.id = `date`;
          tdn.textContent = numero;
          tdt.textContent = titre;
          tdd.textContent = date;
          table.appendChild(tr);
          tr.appendChild(tdn);
          tr.appendChild(tdt);
          tr.appendChild(tdd);
        });
      });
  }
}, 2000);

//  air_date   name    episode
