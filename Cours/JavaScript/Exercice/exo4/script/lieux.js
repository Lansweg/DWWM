let pages;
fetch("https://rickandmortyapi.com/api/location?page=1")
  .then((response) => response.json())
  .then((data) => {
    pages = data.info.pages;
  });

setTimeout(() => {
  for (let index = 1; index <= pages; index++) {
    fetch("https://rickandmortyapi.com/api/location?page=" + index)
      .then((response) => response.json())
      .then((data) => {
        data.results.forEach((element) => {
          // console.log(element.name, " || ", element.dimension)
          const name = element.name 
          const type = element.type
          const table = document.querySelector(`.table`);
          const tr = document.createElement(`tr`);
          const tdn = document.createElement(`td`)
          const tdd = document.createElement(`td`)
          tdn.id = `name`;
          tdd.id = `type`;
          tdn.textContent = name
          tdd.textContent = type          
          table.appendChild(tr)          
          tr.appendChild(tdn)
          tr.appendChild(tdd)
        });
      });
  }
}, 2000);
