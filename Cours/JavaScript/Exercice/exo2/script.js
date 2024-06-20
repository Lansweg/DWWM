// document.addEventListener("keyup", (event) => {
//     console.log(event.keyCode);
// });

// const rect1 = document.querySelector(".rect1")
// const rect2 = document.querySelector(".rect2")
// const rect3 = document.querySelector(".rect3")
// const rect4 = document.querySelector(".rect4")

// rect1.addEventListener("click", (event) => {
//     const style1 = event.target.style;
//     style1.backgroundColor = "purple";
//     console.log(event.target.id)
// })
// rect2.addEventListener("click", (event) => {
//     const style2 = event.target.style;
//     style2.backgroundColor = "purple";
//     console.log(event.target.id)
// })
// rect3.addEventListener("click", (event) => {
//     const style3 = event.target.style;
//     style3.backgroundColor = "purple";
//     console.log(event.target.id)
// })
// rect4.addEventListener("click", (event) => {
//     const style4 = event.target.style;
//     style4.backgroundColor = "purple";
//     console.log(event.target.id)
// })




// const rectangles = document.querySelectorAll('.rectangle')
// rectangles.forEach(element => {
//     element.addEventListener('click', (event) => {
//         rectangles.forEach(element2 => {
//             element2.style.backgroundColor = "red"
//         })
//         event.target.style.backgroundColor = "yellow"
//     })
// });



// const possition = document.querySelector('.possition')
// possition.addEventListener('mousemove', (event) => {
//     let mouseX = event.clientX;
//     let mouseY = event.clientY; 
//     // console.log('X ' + mouseX + ' Y ' + mouseY);

//     createParticle(mouseX, mouseY);
// });

// function createParticle(x, y) {
//     let particle = document.createElement('div');
//     particle.classList.add('particle');
//     particle.style.left = x + 'px';
//     particle.style.top = y + 'px';
//     document.body.appendChild(particle);

//     // Supprimer la particule après un certain délai
//     setTimeout(function() {
//         particle.remove();
//     }, 4500); // Délai en millisecondes
// }


const divbtn = document.querySelector(".divbtn");
const btn = document.getElementById("btn");
const recbtn = document.querySelector(".recbtn");
const cercle = document.getElementById("cercle");
const recbtnRect = recbtn.getBoundingClientRect();

btn.addEventListener("click", function () {
  cercle.style.display = "block";
});

recbtn.addEventListener("mousemove", function (event) {
  let mouseX = event.clientX;
  let mouseY = event.clientY;
  cercle.style.left = mouseX - recbtnRect.left - cercle.offsetWidth + "px";
  cercle.style.top = mouseY - recbtnRect.top - cercle.offsetHeight + "px";
});


