
let url = "http://localhost:3000/infantiles";

fetch(url)
.then(response => response.json())
.then(dato => mostrarDatos(dato))
.catch(error => console.log(error))

const carta = document.querySelector('.carta');

const mostrarDatos = (dato) =>{
   dato.forEach(function(i){
    carta.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
    <h1 class="text-center mt-2">${i.letra} </h1>
     <div class="card-footer mt-5 d-flex justify-content-center">
        <a href="#" class="mx-1 btn btn-dark">${i.en} </a>
       <a href="#" class="mx-1 btn btn-danger">${i.es}</a>
     </div>
   </div>`
   });
}


// dato.forEach(function(i){
//     console.log(i.letra);
//     carta.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
//     <h1 class="text-center mt-2">${i.letra} </h1>
//      <div class="card-footer mt-5 d-flex justify-content-center">
//         <a href="#" class="mx-1 btn btn-dark">${i.en} </a>
//        <a href="#" class="mx-1 btn btn-danger">${i.es}</a>
//      </div>
//    </div>`
// } );

