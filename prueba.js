
let url = "http://localhost:3000/infantiles";
let urlNumeros = "http://localhost:3000/numeros";
let urlColores = "http://localhost:3000/colores";

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
        <a href="#" class="mx-1 btn btn-primary">${i.en} </a>
       <a href="#" class="mx-1 btn " style="background-color: #712cf9; color:white;">${i.es}</a>
     </div>
   </div>`

   });

}


const color = document.querySelector('.color');

fetch(urlColores)
.then(response => response.json())
.then(dato => mostrarColor(dato))
.catch(error => console.log(error))

const mostrarColor = (dato) => {
   dato.forEach(function(c){
      color.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
      <h1 class="text-center mt-2">${c.color} </h1>
       <div class="card-footer mt-5 d-flex justify-content-center">
          <a href="#" class="mx-1 btn btn-primary">Es </a>
         <a href="#" class="mx-1 btn " style="background-color: #712cf9; color:white;">En</a>
       </div>
     </div>`
  
     });
  
}

const numero = document.querySelector('.numero');
fetch(urlNumeros)
.then(response => response.json())
.then(dato => mostrarNumeros(dato))
.catch(error => console.log(error))

const mostrarNumeros = (dato) => {
   dato.forEach(function(n){
      numero.innerHTML += `<div class="card my-2 mx-2" style="width: 12rem; height: 180px;">
      <h1 class="text-center mt-2">${n.numero} </h1>
       <div class="card-footer mt-5 d-flex justify-content-center">
          <a href="#" class="mx-1 btn btn-primary">Es </a>
         <a href="#" class="mx-1 btn " style="background-color: #712cf9; color:white;">En</a>
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

