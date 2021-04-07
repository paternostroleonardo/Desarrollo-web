
const getPeople = (id) => {
URL= `https://swapi.dev/api/people/${id}`;
fetch(URL)
  .then((response) => response.json())
  .then(function(json){
    console.log("data", json)

    if (!json.name){
      return;
    }
    const name = json.name;
    const height = json.height;
    const hair_color = json.hair_color;
    const html = `
    <div class="character">
      <div class="name">
        <a href="${json.url}">${name}</a>
      </div>
      <div class="year">${hair_color}</div>
      <div class="year">${height}</div>
    </div>
`
      document.querySelector("#characters").insertAdjacentHTML('afterbegin', html)
      
})
}

function obtenerDato(){
    let numero = parseFloat(document.getElementById('number').value);
    for (var i = 1; i <= numero; i++) {
        getPeople(i)
}
}
