require('./bootstrap');

let cards = [];

let orderLow = document.getElementById('orderLow');
  console.log(orderLow);

orderLow.addEventListener("click", () =>{
  // console.log("pass");
  const djsPrice = document.querySelectorAll(".ordering");

  djsPrice.forEach(dj => {
    let counter = 0
    cards.push({
      id:counter,
      name:dj.children[0].innerText,
      price:dj.children[1].innerText
    })
    counter++;
  });

  console.log(cards);


    djsPrice.forEach(dj => {
      let counter = "test"
      let bite = dj.children[1] = dj.children[1].innerText.replace(dj.children[1].innerText, counter)
      console.log(bite)

      dj.children[1].innerHTML = bite
    });




})
